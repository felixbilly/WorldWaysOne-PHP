<?php
require 'config.php';

// set custom page title
$pageTitle = "health";

// include header
include 'header.php';
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Healthcare Services | WorldwaysOne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: transparent;
        }

        .section-title {
            color: #2e7d32;
            font-weight: bold;
        }

        .fleet-card {
            background-color: white;
            border-left: 4px solid #2e7d32;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .fleet-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 6px;
        }

        .footer {
            background-color: #2e7d32;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        .cta {
            background-color: #e8f5e9;
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            margin-top: 2rem;
        }

        .cta .btn {
            background-color: #2e7d32;
            color: #fff;
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
        }

        .cta .btn:hover {
            background-color: #256428;
        }

        /* Truncated text style */
        .truncated-text {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 4.5em;
        }

        /* Lightbox styles */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .lightbox-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #2e7d32;
        }

        .read-more-btn {
            color: #2e7d32;
            cursor: pointer;
            font-weight: 500;
            text-decoration: underline;
        }

        .read-more-btn:hover {
            color: #256428;
        }

        /* Lightbox image style */
        .lightbox-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-4">Health Programs</h2>
            <p class="text-center mb-5">Available 24/7.</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/afya1.jpg" alt="clinic" class="fleet-img mb-3">
                        <h5 class="text-success">Clinical Services</h5>
                        <p class="truncated-text"
                            data-full-text="It operates out of Nairobi and provides a platform for connecting, people, technologies and innovations to leaders, decision-makers, companies and investors.">
                            It operates out of Nairobi and provides a platform for connecting, people, technologies...
                        </p>
                        <span class="read-more-btn">Read More</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/afya3.jpg" alt="Med Camps" class="fleet-img mb-3">
                        <h5 class="text-success">Medical Camps</h5>
                        <p class="truncated-text"
                            data-full-text="It operates out of Nairobi and provides a platform for connecting, people, technologies and innovations to leaders, decision-makers, companies and investors.">
                            It operates out of Nairobi and provides a platform for connecting, people, technologies...
                        </p>
                        <span class="read-more-btn">Read More</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/afya2.jpg" alt="Community Healthcare" class="fleet-img mb-3">
                        <h5 class="text-success">Community Healthcare</h5>
                        <p class="truncated-text"
                            data-full-text="It operates out of Nairobi and provides a platform for connecting, people, technologies and innovations to leaders, decision-makers, companies and investors.">
                            It operates out of Nairobi and provides a platform for connecting, people, technologies...
                        </p>
                        <span class="read-more-btn">Read More</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <div class="lightbox-content">
            <span class="close-btn">&times;</span>
            <img id="lightbox-img" class="lightbox-img" src="" alt="">
            <h5 class="text-success" id="lightbox-title"></h5>
            <p id="lightbox-text"></p>
        </div>
    </div>

    <!-- CTA -->
    <div class="cta mt-5">
        <h4>Want to venture with us or learn more?</h4>
        <p>Build a garden of opportunities that are accessible and sustainable</p>
        <a href="contact.html" class="btn">Contact Us</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const readMoreButtons = document.querySelectorAll('.read-more-btn');
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const lightboxTitle = document.getElementById('lightbox-title');
            const lightboxText = document.getElementById('lightbox-text');
            const closeBtn = document.querySelector('.close-btn');

            readMoreButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const card = this.closest('.fleet-card');
                    const imgSrc = card.querySelector('.fleet-img').src;
                    const imgAlt = card.querySelector('.fleet-img').alt;
                    const title = card.querySelector('h5').textContent;
                    const fullText = card.querySelector('.truncated-text').dataset.fullText;

                    lightboxImg.src = imgSrc;
                    lightboxImg.alt = imgAlt;
                    lightboxTitle.textContent = title;
                    lightboxText.textContent = fullText;
                    lightbox.style.display = 'flex';
                });
            });

            closeBtn.addEventListener('click', function () {
                lightbox.style.display = 'none';
            });

            // Close lightbox when clicking outside content
            lightbox.addEventListener('click', function (e) {
                if (e.target === lightbox) {
                    lightbox.style.display = 'none';
                }
            });
        });
    </script>

    <?php include "footer.php"; ?>
</body>