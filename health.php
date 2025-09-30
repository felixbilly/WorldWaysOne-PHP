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
            /* background-color: #f5f5f5; */
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
    </style>
</head>

<body>



    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-4">Health Programs</h2>
            <p class="text-center mb-5"> Available 24/7.</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/afya1.jpg" alt="clinic" class="fleet-img mb-3">
                        <h5 class="text-success">Clinical Services</h5>
                        <p>It operates out of Nairobi and provides a platform for connecting, people, technologies and
                            innovations to
                            leaders, decision-makers, companies and investors.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/afya3.jpg" alt="Med Camps" class="fleet-img mb-3">
                        <h5 class="text-success">Medical Camps</h5>
                        <p>It operates out of Nairobi and provides a platform for connecting, people, technologies and
                            innovations to
                            leaders, decision-makers, companies and investors.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/afya2.jpg" alt="Community Healthcare" class="fleet-img mb-3">
                        <h5 class="text-success">Community Healthcare</h5>
                        <p>It operates out of Nairobi and provides a platform for connecting, people, technologies and
                            innovations to
                            leaders, decision-makers, companies and investors.</p>
                    </div>
                </div>
                <!-- <div class="col-md-6">
        <div class="fleet-card">
          <img src="images/images (2).jpg" alt="Tour Buses" class="fleet-img mb-3">
          <h5 class="text-success">Tour Buses (28-Seaters)</h5>
          <p>Ideal for large group travel, corporate events, or conferences. Clean, safe, and comfortable rides.</p>
        </div>
      </div> -->
                <!-- <div class="col-md-6">
        <div class="fleet-card">
          <img src="images/images (3).jpg" alt="Toyota Prado" class="fleet-img mb-3">
          <h5 class="text-success">Toyota Prados</h5>
          <p>Executive rides and luxury travel. Suited for VIPs, executives, or high-end travel experiences.</p>
        </div>
      </div> -->
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

    </section>

    <!-- Footer -->
    <!-- <footer class="footer mt-5">
  <p>&copy; WorldwaysOne. All Rights Reserved.</p>
</footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php include "footer.php"; ?>