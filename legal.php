<?php
require 'config.php';

// set custom page title
$pageTitle = "legal";

// include header
include 'header.php';
?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Legal Services | WorldWaysOne </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
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
    </style>
</head>

<body>



    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-4">Legal Services</h2>
            <p class="text-center mb-5">///////////////////</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/con1.jpg" alt="Sedans and Wagons" class="fleet-img mb-3">
                        <h5 class="text-success">mmmlll</h5>
                        <p>Over 50 clean, GPS-tracked vehicles available for airport transfers, corporate rides, and
                            daily hire.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/con1.jpg" alt="legal" class="fleet-img mb-3">
                        <h5 class="text-success">legal</h5>
                        <p>Build a garden of opportunities that are accessible and sustainable.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/con1.jpg" alt="legal" class="fleet-img mb-3">
                        <h5 class="text-success">legal</h5>
                        <p>Build a garden of opportunities that are accessible and sustainable.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fleet-card">
                        <img src="images/con1.jpg" alt="legal" class="fleet-img mb-3">
                        <h5 class="text-success">legal</h5>
                        <p>Build a garden of opportunities that are accessible and sustainable.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fleet-card">
                        <img src="images/con1.jpg" alt="legal" class="fleet-img mb-3">
                        <h5 class="text-success">legal</h5>
                        <p>Build a garden of opportunities that are accessible and sustainable</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <!-- CTA -->
        <div class="cta mt-5">
            <h4>Want to venture with us or learn more?</h4>
            <p>Build a garden of opportunities that are accessible and sustainable</p>
            <a href="contact.html" class="btn">Contact Us</a>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- <footer class="footer mt-5">
  <p>&copy; 2025 WorldWaysOne. All Rights Reserved.</p>
</footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php include 'footer.php' ?>