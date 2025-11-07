<?php
require 'config.php';
$pageTitle = "blogs";
include 'header.php';
$page = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
$perPage = 6;
$offset = ($page - 1) * $perPage;
$search = isset($_GET['search']) ? '%' . trim($_GET['search']) . '%' : '%';

try {
    $stmt = $pdo->prepare("SELECT * FROM uploads WHERE description LIKE ? ORDER BY created_at DESC LIMIT ? OFFSET ?");
    $stmt->bindValue(1, $search, PDO::PARAM_STR);
    $stmt->bindValue(2, (int) $perPage, PDO::PARAM_INT);
    $stmt->bindValue(3, (int) $offset, PDO::PARAM_INT);
    $stmt->execute();
    $uploads = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $totalStmt = $pdo->prepare("SELECT COUNT(*) FROM uploads WHERE description LIKE ?");
    $totalStmt->execute([$search]);
    $total = $totalStmt->fetchColumn();
    $totalPages = ceil($total / $perPage);

    foreach ($uploads as &$upload) {
        if (!file_exists($upload['image_path'])) {
            $upload['image_path'] = 'path/to/placeholder.jpg';
        }
    }
} catch (PDOException $e) {
    $uploads = [];
    $error = "Error loading gallery: " . htmlspecialchars($e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?> - Image Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #1a1a1a;
            color: #e9ecef;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            overflow-y: auto;
        }

        .ftco-section {
            padding: 60px 0;
            background: #1a1a1a;
            margin-bottom: 40px;
        }

        .container {
            /* Removed margin-top since pagination is no longer fixed */
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            padding: 0 15px;
        }

        .gallery-item {
            border: 1px solid #333;
            border-radius: 12px;
            padding: 15px;
            background: #222;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 12px;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-description {
            font-size: 0.95rem;
            color: #d1d4d8;
            text-align: left;
            word-wrap: break-word;
            white-space: normal;
            line-height: 1.5;
        }

        .read-more-btn {
            color: #3b82f6;
            background: none;
            border: none;
            padding: 0;
            font-size: 0.9rem;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .read-more-btn:hover {
            color: #60a5fa;
            text-decoration: underline;
        }

        .read-less-btn {
            color: #ef4444;
            background: none;
            border: none;
            padding: 0;
            font-size: 0.9rem;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .read-less-btn:hover {
            color: #f87171;
            text-decoration: underline;
        }

        /* Search Bar Styles */
        .search-container {
            margin-bottom: 20px;
            text-align: left;
            /* Align search bar to the left */
            padding: 15px;
            background: #222;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .search-container form {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-container .form-control {
            background: #333;
            border: 1px solid #444;
            color: #e9ecef;
            font-size: 1rem;
            padding: 10px;
            transition: border-color 0.2s ease;
        }

        .search-container .form-control::placeholder {
            color: #ffffff;
            /* White placeholder for visibility */
            opacity: 1;
            /* Ensure full opacity */
        }

        .search-container .form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 5px rgba(59, 130, 246, 0.5);
            outline: none;
        }

        .search-container .btn-primary {
            background: #3b82f6;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 8px;
            transition: background 0.2s ease;
        }

        .search-container .btn-primary:hover {
            background: #2563eb;
        }

        /* Pagination Styles */
        .pagination-container {
            margin-top: 15px;
            margin-bottom: 20px;
            text-align: left;
            /* Align pagination to the left */
        }

        .pagination-container .pagination {
            margin-bottom: 0;
        }

        .pagination-container .page-link {
            color: #3b82f6;
            background-color: #222;
            border: 1px solid #333;
            border-radius: 8px;
            padding: 6px 10px;
            font-size: 0.9rem;
        }

        .pagination-container .page-link:hover {
            background-color: #333;
            border-color: #3b82f6;
        }

        .pagination-container .active .page-link {
            background-color: #3b82f6;
            border-color: #3b82f6;
            color: #fff;
        }

        /* Lightbox Styles */
        .modal-content {
            background: #fff;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 1px;
            overflow: hidden;
            position: relative;
        }

        .modal-dialog {
            max-width: 60vw;
            margin: 1.75rem auto;
        }

        .modal-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        #lightboxImage {
            max-height: 70vh;
            width: auto;
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .lightbox-description {
            color: #333;
            padding: 20px;
            margin: 15px 0;
            font-size: 1rem;
            line-height: 1.6;
            max-width: 80%;
            text-align: center;
        }

        #lightboxDate {
            font-size: 0.85rem;
            color: #6b7280;
        }

        .modal-footer {
            border-top: 1px solid #dee2e6;
            justify-content: center;
            padding: 15px;
        }

        .modal-footer .btn {
            background: #3b82f6;
            border: none;
            border-radius: 8px;
            padding: 8px 20px;
            transition: background 0.2s ease;
        }

        .modal-footer .btn:hover {
            background: #2563eb;
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .lightbox-nav:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .prev-btn {
            left: 20px;
        }

        .next-btn {
            right: 20px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .gallery {
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            }

            .modal-dialog {
                max-width: 95vw;
            }

            #lightboxImage {
                max-height: 60vh;
            }

            .lightbox-description {
                max-width: 90%;
                font-size: 0.9rem;
                padding: 15px;
            }
        }

        @media (max-width: 576px) {
            .gallery {
                grid-template-columns: 1fr;
            }

            .lightbox-nav {
                padding: 10px;
            }

            .prev-btn {
                left: 10px;
            }

            .next-btn {
                right: 10px;
            }

            .pagination-container .page-link {
                padding: 4px 8px;
                font-size: 0.8rem;
            }

            .search-container {
                padding: 10px;
            }

            .search-container form {
                flex-direction: column;
                align-items: flex-start;
            }

            .search-container .btn-primary {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <main>
        <section class="ftco-section">
            <div class="container mt-4">
                <h2 class="text-center mb-4">Our Successful Events.</h2>

                <!-- Search Bar -->
                <!-- <div class="search-container">
                    <form method="GET" class="d-inline-block">
                        <input type="text" name="search" class="form-control d-inline-block w-auto"
                            placeholder="Search by description"
                            value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div> -->

                <!-- Pagination -->
                <?php if ($totalPages > 1): ?>
                    <div class="pagination-container">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <?php if ($page > 1): ?>
                                    <li class="page-item">
                                        <a class="page-link"
                                            href="?page=<?php echo $page - 1; ?>&search=<?php echo urlencode($_GET['search'] ?? ''); ?>"
                                            aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li class="page-item <?php echo $i === $page ? 'active' : ''; ?>">
                                        <a class="page-link"
                                            href="?page=<?php echo $i; ?>&search=<?php echo urlencode($_GET['search'] ?? ''); ?>">
                                            <?php echo $i; ?>
                                        </a>
                                    </li>
                                <?php endfor; ?>
                                <?php if ($page < $totalPages): ?>
                                    <li class="page-item">
                                        <a class="page-link"
                                            href="?page=<?php echo $page + 1; ?>&search=<?php echo urlencode($_GET['search'] ?? ''); ?>"
                                            aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                <?php endif; ?>

                <!-- Error Message -->
                <?php if (isset($error)): ?>
                    <p class="text-danger text-center"><?php echo $error; ?></p>
                <?php endif; ?>

                <!-- Gallery -->
                <div class="gallery">
                    <?php if ($uploads): ?>
                        <?php foreach ($uploads as $index => $upload): ?>
                            <?php $uploadDate = date("M j, Y", strtotime($upload['created_at'])); ?>
                            <figure class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal"
                                data-img="<?php echo htmlspecialchars($upload['image_path']); ?>"
                                data-desc="<?php echo htmlspecialchars($upload['description']); ?>"
                                data-date="<?php echo $uploadDate; ?>" data-index="<?php echo $index; ?>" role="button"
                                aria-label="View image: <?php echo htmlspecialchars($upload['description']); ?>">
                                <img src="<?php echo htmlspecialchars($upload['image_path']); ?>"
                                    alt="<?php echo htmlspecialchars($upload['description']); ?>" loading="lazy">
                                <figcaption class="gallery-description">
                                    <?php
                                    $desc = htmlspecialchars($upload['description']);
                                    $short = mb_substr($desc, 0, 100);
                                    $long = mb_substr($desc, 0); // Full description
                                    ?>
                                    <?php if (strlen($desc) > 100): ?>
                                        <span id="thumb-short-<?php echo $upload['id']; ?>"><?php echo nl2br($short); ?>...</span>
                                        <div class="collapse" id="thumb-desc-<?php echo $upload['id']; ?>">
                                            <span><?php echo nl2br($long); ?></span>
                                        </div>
                                        <button class="read-more-btn" data-bs-toggle="collapse"
                                            data-bs-target="#thumb-desc-<?php echo $upload['id']; ?>" aria-expanded="false"
                                            aria-controls="thumb-desc-<?php echo $upload['id']; ?>">
                                            Read more
                                        </button>
                                        <button class="read-less-btn collapse show" data-bs-toggle="collapse"
                                            data-bs-target="#thumb-desc-<?php echo $upload['id']; ?>" aria-expanded="true"
                                            aria-controls="thumb-desc-<?php echo $upload['id']; ?>" style="display: none;">
                                            Read less
                                        </button>
                                    <?php else: ?>
                                        <span><?php echo nl2br($desc); ?></span>
                                    <?php endif; ?>
                                </figcaption>
                                <small class="text-muted"><?php echo $uploadDate; ?></small>
                            </figure>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-center">No images uploaded yet.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Lightbox Modal -->
            <div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button class="lightbox-nav prev-btn" aria-label="Previous image">&#10094;</button>
                            <img id="lightboxImage" src="" class="img-fluid" alt="Enlarged Image">
                            <button class="lightbox-nav next-btn" aria-label="Next image">&#10095;</button>
                            <div id="lightboxDesc" class="lightbox-description"></div>
                            <small id="lightboxDate" class="text-muted"></small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const gallery = document.querySelector('.gallery');
            const lightboxImage = document.getElementById('lightboxImage');
            const lightboxDesc = document.getElementById('lightboxDesc');
            const lightboxDate = document.getElementById('lightboxDate');
            const lightboxModal = document.getElementById('lightboxModal');
            const prevBtn = document.querySelector('.prev-btn');
            const nextBtn = document.querySelector('.next-btn');
            let currentIndex = 0;
            const galleryItems = document.querySelectorAll('.gallery-item');

            // Update lightbox content
            function updateLightbox(index) {
                const item = galleryItems[index];
                if (!item) return;

                const img = item.getAttribute('data-img');
                const desc = item.getAttribute('data-desc');
                const date = item.getAttribute('data-date');

                lightboxImage.src = img;
                lightboxDate.textContent = `Uploaded on: ${date}`;
                currentIndex = index;

                // Display exactly 100 characters in lightbox, matching card
                const shortText = desc.substring(0, 100);
                const longText = desc.substring(0); // Full description
                if (desc.length > 100) {
                    lightboxDesc.innerHTML = `
                        <span id="lightbox-short">${shortText}...</span>
                        <div class="collapse" id="lightbox-collapse">
                            <span>${longText}</span>
                        </div>
                        <button class="read-more-btn" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#lightbox-collapse" 
                                aria-expanded="false" 
                                aria-controls="lightbox-collapse">
                            Read more
                        </button>
                        <button class="read-less-btn collapse show" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#lightbox-collapse" 
                                aria-expanded="true" 
                                aria-controls="lightbox-collapse"
                                style="display: none;">
                            Read less
                        </button>
                    `;
                } else {
                    lightboxDesc.innerHTML = `<span>${desc}</span>`;
                }

                // Update navigation button states
                prevBtn.style.display = currentIndex === 0 ? 'none' : 'block';
                nextBtn.style.display = currentIndex === galleryItems.length - 1 ? 'none' : 'block';
            }

            // Event delegation for gallery items
            gallery.addEventListener('click', (e) => {
                const item = e.target.closest('.gallery-item');
                if (!item) return;

                const index = parseInt(item.getAttribute('data-index'));
                updateLightbox(index);

                // Reset modal animation
                lightboxImage.style.transform = 'scale(0.8)';
                lightboxImage.style.opacity = '0';
                setTimeout(() => {
                    lightboxImage.style.transform = 'scale(1)';
                    lightboxImage.style.opacity = '1';
                }, 50);
            });

            // Navigation buttons
            prevBtn.addEventListener('click', () => {
                if (currentIndex > 0) {
                    updateLightbox(currentIndex - 1);
                }
            });

            nextBtn.addEventListener('click', () => {
                if (currentIndex < galleryItems.length - 1) {
                    updateLightbox(currentIndex + 1);
                }
            });

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (lightboxModal.classList.contains('show')) {
                    if (e.key === 'ArrowLeft' && currentIndex > 0) {
                        updateLightbox(currentIndex - 1);
                    } else if (e.key === 'ArrowRight' && currentIndex < galleryItems.length - 1) {
                        updateLightbox(currentIndex + 1);
                    }
                }
            });

            // Toggle "Read more / Read less" in both gallery and lightbox
            document.addEventListener('click', (e) => {
                if (e.target.classList.contains('read-more-btn')) {
                    e.target.style.display = 'none';
                    const readLessBtn = e.target.nextElementSibling;
                    if (readLessBtn) readLessBtn.style.display = 'inline';
                } else if (e.target.classList.contains('read-less-btn')) {
                    e.target.style.display = 'none';
                    const readMoreBtn = e.target.previousElementSibling;
                    if (readMoreBtn) readMoreBtn.style.display = 'inline';
                }
            });

            // Clear modal content on close
            lightboxModal.addEventListener('hidden.bs.modal', () => {
                lightboxImage.src = '';
                lightboxDesc.innerHTML = '';
                lightboxDate.textContent = '';
                currentIndex = 0;
                prevBtn.style.display = 'none';
                nextBtn.style.display = 'none';
            });
        });
    </script>
</body>

</html>