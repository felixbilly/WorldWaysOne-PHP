<?php
require 'config.php';

// set custom page title
$pageTitle = "blogs";

// include header
include 'header.php';

$stmt = $pdo->query("SELECT * FROM uploads ORDER BY created_at DESC");
$uploads = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<style>
    /* Make the page a flex column */
    /* html, */
    /* body { */
    /* height: 100%; */
    /* take full screen height */
    /* margin: 0; */
    /* remove default margin */
    /* display: flex; */
    /* flex-direction: column; */
    /* } */

    /* The main content should grow & scroll */
    main {
        flex: 1;
        overflow-y: auto;
        /* allow scrolling when content is long */
    }

    /* Footer stays at bottom */
    /* footer {
        background: #000; */
    /* or your footer color */
    /* color: #fff;
        padding: 20px;
        text-align: center;
    } */



    body {
        background: #212529;
        /* color: #212529; */
    }

    /* GALLERY */
    .gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .gallery-item {
        width: 250px;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        /* background: #fff; */
        text-align: center;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        border-radius: 5px;
        transition: transform 0.3s;
        margin-bottom: 8px;
    }

    .gallery-item img:hover {
        transform: scale(1.05);
    }

    .gallery-description {
        font-size: 14px;
        text-align: left;
        word-wrap: break-word;
        white-space: normal;
    }

    /* LIGHTBOX */
    .lightbox-description {
        background: #222;
        color: #fff padding: 10px;
        text-align: left;
        font-size: 15px;
        word-wrap: break-word;
        white-space: normal;
    }

    .read-more-btn {
        color: #0d6efd;
        cursor: pointer;
        font-size: 14px;
        display: inline-block;
        margin-top: 5px;
    }

    .ftco-section {
        padding: 60px 0;
        background: #212529;
        /* matches your body bg */
        margin-bottom: 40px;
        /* creates gap before footer */
    }
</style>





<!-- ///\\\\\ -->
<main>
    <section class="ftco-section">
        <div class="container mt-4">
            <h2 class="text-center mb-4">Image Gallery</h2>
            <div class="text-center mb-3">
                <!-- <a href="admin.php" class="btn btn-outline-primary">Admin Upload Page</a> -->
            </div>

            <div class="gallery">
                <?php if ($uploads): ?>
                    <?php foreach ($uploads as $index => $upload): ?>
                        <?php $uploadDate = date("M j, Y", strtotime($upload['created_at'])); ?>
                        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal"
                            data-img="<?php echo htmlspecialchars($upload['image_path']); ?>"
                            data-desc="<?php echo htmlspecialchars($upload['description']); ?>"
                            data-date="<?php echo $uploadDate; ?>">
                            <img src="<?php echo htmlspecialchars($upload['image_path']); ?>" alt="Uploaded Image">
                            <div class="gallery-description">
                                <?php
                                $desc = htmlspecialchars($upload['description']);
                                $short = mb_substr($desc, 0, 80);
                                $long = mb_substr($desc, 80);
                                ?>
                                <?php if (strlen($desc) > 80): ?>
                                    <span><?php echo nl2br($short); ?>...</span>
                                    <div class="collapse" id="thumb-desc-<?php echo $upload['id']; ?>">
                                        <span><?php echo nl2br($long); ?></span>
                                    </div>
                                    <span class="read-more-btn" data-bs-toggle="collapse"
                                        data-bs-target="#thumb-desc-<?php echo $upload['id']; ?>">Read more</span>
                                <?php else: ?>
                                    <span><?php echo nl2br($desc); ?></span>
                                <?php endif; ?>
                            </div>
                            <small class="text-muted"> <?php echo $uploadDate; ?></small>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No images uploaded yet.</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Lightbox Modal (Single Image) -->
        <div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-dark text-white">
                    <div class="modal-body text-center">
                        <img id="lightboxImage" src="" class="img-fluid rounded mb-3" alt="Enlarged Image">
                        <div id="lightboxDesc" class="lightbox-description"></div>
                        <small id="lightboxDate" class="text-muted d-block mt-2"></small>
                    </div>
                    <div class="modal-footer bg-dark">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Lightbox: show only clicked image with collapse
            document.querySelectorAll('.gallery-item').forEach(item => {
                item.addEventListener('click', function () {
                    const img = this.getAttribute('data-img');
                    const desc = this.getAttribute('data-desc');
                    const date = this.getAttribute('data-date');

                    document.getElementById('lightboxImage').src = img;
                    document.getElementById('lightboxDate').textContent = "Uploaded on: " + date;

                    // Handle collapse inside lightbox
                    if (desc.length > 120) {
                        const shortText = desc.substring(0, 120);
                        const longText = desc.substring(120);
                        document.getElementById('lightboxDesc').innerHTML = `
                <span>${shortText}...</span>
                <div class="collapse" id="lightbox-collapse">
                    <span>${longText}</span>
                </div>
                <span class="read-more-btn" data-bs-toggle="collapse" data-bs-target="#lightbox-collapse">Read more</span>
            `;
                    } else {
                        document.getElementById('lightboxDesc').innerHTML = `<span>${desc}</span>`;
                    }
                });
            });

            // Toggle "Read more / Read less"
            document.addEventListener('click', function (e) {
                if (e.target.classList.contains('read-more-btn')) {
                    e.target.textContent = e.target.textContent === "Read more" ? "Read less" : "Read more";
                }
            });
        </script>
    </section>
</main>
<?php include 'footer.php'; ?>