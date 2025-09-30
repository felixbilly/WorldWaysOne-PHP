<?php
session_start();
require 'config.php';

// 🔒 Restrict access
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$message = "";

/* -------------------
   ADD IMAGE
------------------- */
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload'])) {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = time() . "_" . basename($_FILES["image"]["name"]);
        $targetFile = $targetDir . $fileName;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $stmt = $pdo->prepare("INSERT INTO uploads (image_path, description) VALUES (?, ?)");
            $stmt->execute([$targetFile, $_POST['description']]);
            $message = "✅ Image uploaded successfully!";
        } else {
            $message = "⚠️ Error uploading image.";
        }
    } else {
        $message = "⚠️ No image selected.";
    }
}

/* -------------------
   DELETE IMAGE
------------------- */
if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    $stmt = $pdo->prepare("SELECT image_path FROM uploads WHERE id=?");
    $stmt->execute([$id]);
    $file = $stmt->fetch();

    if ($file) {
        if (file_exists($file['image_path'])) {
            unlink($file['image_path']);
        }
        $stmt = $pdo->prepare("DELETE FROM uploads WHERE id=?");
        $stmt->execute([$id]);
        $message = "🗑️ Image deleted successfully!";
    }
}

/* -------------------
   EDIT DESCRIPTION
------------------- */
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])) {
    $id = (int) $_POST['id'];
    $description = $_POST['description'];
    $stmt = $pdo->prepare("UPDATE uploads SET description=? WHERE id=?");
    $stmt->execute([$description, $id]);
    $message = "✏️ Description updated!";
}

/* -------------------
   REPLACE IMAGE FILE
------------------- */
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['replace'])) {
    $id = (int) $_POST['id'];

    if (isset($_FILES['new_image']) && $_FILES['new_image']['error'] == 0) {
        $stmt = $pdo->prepare("SELECT image_path FROM uploads WHERE id=?");
        $stmt->execute([$id]);
        $oldFile = $stmt->fetch();

        if ($oldFile && file_exists($oldFile['image_path'])) {
            unlink($oldFile['image_path']);
        }

        $targetDir = "uploads/";
        $fileName = time() . "_" . basename($_FILES["new_image"]["name"]);
        $targetFile = $targetDir . $fileName;

        if (move_uploaded_file($_FILES["new_image"]["tmp_name"], $targetFile)) {
            $stmt = $pdo->prepare("UPDATE uploads SET image_path=? WHERE id=?");
            $stmt->execute([$targetFile, $id]);
            $message = "🖼 Image replaced successfully!";
        } else {
            $message = "⚠️ Error replacing image.";
        }
    } else {
        $message = "⚠️ No new image selected.";
    }
}

/* -------------------
   FETCH ALL UPLOADS
------------------- */
$stmt = $pdo->query("SELECT * FROM uploads ORDER BY created_at DESC");
$uploads = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container mt-4">
        <h2 class="text-center mb-4">Admin Panel</h2>

        <?php if ($message): ?>
            <div class="alert alert-info text-center"><?php echo $message; ?></div>
        <?php endif; ?>

        <!-- Upload Form -->
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="mb-0">Add New Image</h3>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Select Image:</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description:</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" name="upload" class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>

        <!-- Manage Images -->
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Manage Images</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Uploaded On</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($uploads): ?>
                            <?php foreach ($uploads as $upload): ?>
                                <tr>
                                    <td><?php echo $upload['id']; ?></td>
                                    <td><img src="<?php echo htmlspecialchars($upload['image_path']); ?>" width="100"></td>
                                    <td>
                                        <form method="POST" class="d-flex">
                                            <input type="hidden" name="id" value="<?php echo $upload['id']; ?>">
                                            <textarea name="description" class="form-control me-2"
                                                rows="2"><?php echo htmlspecialchars($upload['description']); ?></textarea>
                                            <button type="submit" name="edit" class="btn btn-primary btn-sm">Save</button>
                                        </form>
                                    </td>
                                    <td><?php echo $upload['created_at']; ?></td>
                                    <td>
                                        <!-- Replace Form -->
                                        <form method="POST" enctype="multipart/form-data" class="mb-2">
                                            <input type="hidden" name="id" value="<?php echo $upload['id']; ?>">
                                            <input type="file" name="new_image" class="form-control mb-1" required>
                                            <button type="submit" name="replace" class="btn btn-warning btn-sm">Replace</button>
                                        </form>
                                        <!-- Delete -->
                                        <a href="admin.php?delete=<?php echo $upload['id']; ?>" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Delete this image?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center">No images uploaded yet.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-center mt-3">
            <a href="viewer.php" class="btn btn-outline-primary">View Gallery</a>
            <a href="logout.php" class="btn btn-outline-secondary">Logout</a>
        </div>
    </div>
</body>

</html>