<?php
require 'config.php';

$stmt = $pdo->query("SELECT * FROM uploads ORDER BY created_at DESC LIMIT 12"); // show latest 12
$uploads = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blog Style Carousel with Lightbox</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #f8f9fa;
        }

        .ftco-section {
            padding: 60px 0;
        }

        .blog-entry {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            height: 100%;
        }

        .blog-entry:hover {
            transform: translateY(-5px);
        }

        .block-20 {
            display: block;
            height: 220px;
            background-size: cover;
            background-position: center;
        }

        .blog-entry .text {
            padding: 15px;
        }

        .blog-entry h3 {
            font-size: 18px;
            font-weight: bold;
        }

        .blog-entry p {
            font-size: 14px;
            color: #555;
        }

        .meta {
            font-size: 13px;
            color: #888;
            margin-bottom: 8px;
        }

        .meta a {
            color: #888;
            text-decoration: none;
            margin-right: 10px;
        }

        .read-more-btn {
            color: #0d6efd;
            cursor: pointer;
            font-size: 13px;
            display: inline-block;
            margin-top: 5px;
        }

        /* Lightbox */
        .lightbox-description {
            background: #222;
            color: #fff;
            padding: 5px;
            text-align: left;
            font-size: 15px;
            word-wrap: break-word;
            white-space: normal;
            max-height: 200px;
            overflow-y: auto;
            scrollbar-width: none;
        }

        .lightbox-description::-webkit-scrollbar {
            display: none;
        }

        /* Solid visible carousel buttons */
        .carousel-control-prev,
        .carousel-control-next {
            width: 60px;
            height: 60px;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.8);
            /* solid dark background */
            border-radius: 50%;
            opacity: 1 !important;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(1);
            /* makes icons white */
            width: 30px;
            height: 30px;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: #0d6efd;
            /* Bootstrap blue on hover */
        }

        /* Smaller Lightbox modal */
        #lightboxModal .modal-dialog {
            max-width: 600px;
            /* reduce modal width */
        }

        #lightboxModal img {
            max-height: 500px;
            /* limit image height */
            object-fit: contain;
        }

        #lightboxModal .lightbox-description {
            max-height: 150px;
            /* smaller scrollable text area */
            font-size: 14px;
        }
    </style>
</head>

<body>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center">
                    <h2 class="mb-4">Recent Uploads</h2>
                    <p>Explore the latest images and stories added by the community.</p>
                </div>
            </div>

            <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php if ($uploads): ?>
                        <?php
                        $chunks = array_chunk($uploads, 3); // 3 cards per slide
                        foreach ($chunks as $chunkIndex => $chunk): ?>
                            <div class="carousel-item <?php echo $chunkIndex === 0 ? 'active' : ''; ?>">
                                <div class="row">
                                    <?php foreach ($chunk as $upload): ?>
                                        <?php
                                        $uploadDate = date("M j, Y", strtotime($upload['created_at']));
                                        $desc = htmlspecialchars($upload['description']);
                                        $short = mb_substr($desc, 0, 80);
                                        ?>
                                        <div class="col-md-4 d-flex mb-4">
                                            <div class="blog-entry align-self-stretch w-100">
                                                <a href="#" class="block-20"
                                                    style="background-image: url('<?php echo htmlspecialchars($upload['image_path']); ?>');">
                                                </a>
                                                <div class="text d-block">
                                                    <div class="meta">
                                                        <div><a href="#"><?php echo $uploadDate; ?></a></div>
                                                    </div>
                                                    <h3 class="heading mt-2">
                                                        <a
                                                            href="#"><?php echo strlen($desc) > 40 ? substr($desc, 0, 40) . '...' : $desc; ?></a>
                                                    </h3>
                                                    <p>
                                                        <?php if (strlen($desc) > 80): ?>
                                                            <span><?php echo nl2br($short); ?>...</span>
                                                            <span class="read-more-btn" data-bs-toggle="modal"
                                                                data-bs-target="#lightboxModal"
                                                                data-img="<?php echo htmlspecialchars($upload['image_path']); ?>"
                                                                data-desc="<?php echo htmlspecialchars($upload['description']); ?>"
                                                                data-date="<?php echo $uploadDate; ?>">
                                                                Read more
                                                            </span>
                                                        <?php else: ?>
                                                            <?php echo nl2br($desc); ?>
                                                        <?php endif; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center align-items-center" style="height:400px;">
                                <h4>No uploads yet.</h4>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>

                <?php if ($uploads): ?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
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
        // Load Lightbox when "Read more" clicked
        const lightboxModal = document.getElementById('lightboxModal');
        lightboxModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; // Read more btn
            const img = button.getAttribute('data-img');
            const desc = button.getAttribute('data-desc');
            const date = button.getAttribute('data-date');

            document.getElementById('lightboxImage').src = img;
            document.getElementById('lightboxDesc').innerHTML = desc.replace(/\n/g, "<br>");
            document.getElementById('lightboxDate').textContent = "Uploaded on: " + date;
        });
    </script>

</body>

</html>