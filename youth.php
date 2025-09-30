<?php
require 'config.php';

// set custom page title
$pageTitle = "about";

// include header
include 'header.php';
?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Youth Empowerment | WorldwaysOne</title>
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

    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.html">
  <img src="images/logo.png" alt="Absolute Safaris Logo" height="40">
</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
        <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="fleet.html">Fleet</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>
</nav> -->

    <!-- Fleet Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-4">Youth Empowerment</h2>
            <p class="text-center mb-5">/////////////////////////////</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/service2.png" alt="Youth Forums" class="fleet-img mb-3">
                        <h5 class="text-success">Youth Forums</h5>
                        <p>WORLDWAYSONS VENTURES LIMITED prides itself of connecting people with opportunities around
                            the world. Since 2015, it has achieved success stories in conducting conferences, offering
                            corporate trainings, managing delegations, doing legal consutacies and running youth
                            projects. It operates out of Nairobi and provides a platform for connecting, people,
                            technologies and innovations to leaders, decision-makers, companies and investors.
                            WORLDWAYSONS VENTURES LIMITED founders and partners: Mr. Keniz Agira - Advocate of High
                            Court of Kenya | Mr. John Ougo - Public Heath Practitioner| Mrs. Susan Jason - Business
                            Development Lead</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/download.jpg" alt=" Tours" class="fleet-img mb-3">
                        <h5 class="text-success">Tours</h5>
                        <p>WORLDWAYSONS VENTURES LIMITED prides itself of connecting people with opportunities around
                            the world. Since 2015, it has achieved success stories in conducting conferences, offering
                            corporate trainings, managing delegations, doing legal consutacies and running youth
                            projects. It operates out of Nairobi and provides a platform for connecting, people,
                            technologies and innovations to leaders, decision-makers, companies and investors.
                            WORLDWAYSONS VENTURES LIMITED founders and partners: Mr. Keniz Agira - Advocate of High
                            Court of Kenya | Mr. John Ougo - Public Heath Practitioner| Mrs. Susan Jason - Business
                            Development Lead</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/images (1).jpg" alt="Students" class="fleet-img mb-3">
                        <h5 class="text-success">Students Chapter</h5>
                        <p>WORLDWAYSONS VENTURES LIMITED prides itself of connecting people with opportunities around
                            the world. Since 2015, it has achieved success stories in conducting conferences, offering
                            corporate trainings, managing delegations, doing legal consutacies and running youth
                            projects. It operates out of Nairobi and provides a platform for connecting, people,
                            technologies and innovations to leaders, decision-makers, companies and investors.
                            WORLDWAYSONS VENTURES LIMITED founders and partners: Mr. Keniz Agira - Advocate of High
                            Court of Kenya | Mr. John Ougo - Public Heath Practitioner| Mrs. Susan Jason - Business
                            Development Lead</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fleet-card">
                        <img src="images/images (2).jpg" alt=" Students" class="fleet-img mb-3">
                        <h5 class="text-success">Students</h5>
                        <p>WORLDWAYSONS VENTURES LIMITED prides itself of connecting people with opportunities around
                            the world. Since 2015, it has achieved success stories in conducting conferences, offering
                            corporate trainings, managing delegations, doing legal consutacies and running youth
                            projects. It operates out of Nairobi and provides a platform for connecting, people,
                            technologies and innovations to leaders, decision-makers, companies and investors.
                            WORLDWAYSONS VENTURES LIMITED founders and partners: Mr. Keniz Agira - Advocate of High
                            Court of Kenya | Mr. John Ougo - Public Heath Practitioner| Mrs. Susan Jason - Business
                            Development Lead</p>
                    </div>
                </div>
                <!-- <div class="col-md-6">
        <div class="fleet-card">
          <img src="images/images (3).jpg" alt="Toyota Prado" class="fleet-img mb-3">
          <h5 class="text-success">Toyota Prados</h5>
          <p>Executive rides and luxury travel. Suited for VIPs, executives, or high-end travel experiences.</p>
        </div> -->
            </div>
        </div>
        </div>
    </section>

    <!-- CTA -->
    <div class="cta mt-5">
        <h4>Want to venture with us or learn more?</h4>
        <p>Build a garden of opportunities that are accessible and sustainable</p>
        <a href="contacts.php" class="btn">Contact Us</a>
    </div>
    </div>
    </section>
    <!-- Footer -->
    <!-- <footer class="footer mt-5">
  <p>&copy; 2025 WorldwaysOne. All Rights Reserved.</p>
</footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php include 'footer.php' ?>