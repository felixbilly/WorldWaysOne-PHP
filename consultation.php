<?php
require 'config.php';

// set custom page title
$pageTitle = "consultations";

// include header
include 'header.php';
?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Consultation</title>
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
            <h2 class="section-title text-center mb-4">Consultation</h2>
            <p class="text-center mb-5">////////////////////////////</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/con1.jpg" alt="CyberSecurity" class="fleet-img mb-3">
                        <h5 class="text-success">CyberSecurity</h5>
                        <p>WORLDWAYSONS VENTURES LIMITED prides itself of connecting people with opportunities around
                            the world. Since 2015, it has
                            achieved success stories in conducting conferences, offering corporate trainings, managing
                            delegations, doing legal consutacies and
                            running youth projects. It operates out of Nairobi and provides a platform for connecting,
                            people, technologies and innovations to
                            leaders, decision-makers, companies and investors.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/con1.jpg" alt="Publications" class="fleet-img mb-3">
                        <h5 class="text-success">Publications</h5>
                        <p>WORLDWAYSONS VENTURES LIMITED prides itself of connecting people with opportunities around
                            the world. Since 2015, it has
                            achieved success stories in conducting conferences, offering corporate trainings, managing
                            delegations, doing legal consutacies and
                            running youth projects. It operates out of Nairobi and provides a platform for connecting,
                            people, technologies and innovations to
                            leaders, decision-makers, companies and investors.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fleet-card">
                        <img src="images/con1.jpg" alt="Market Surveys" class="fleet-img mb-3">
                        <h5 class="text-success">Market Surveys</h5>
                        <p>WORLDWAYSONS VENTURES LIMITED prides itself of connecting people with opportunities around
                            the world. Since 2015, it has
                            achieved success stories in conducting conferences, offering corporate trainings, managing
                            delegations, doing legal consutacies and
                            running youth projects. It operates out of Nairobi and provides a platform for connecting,
                            people, technologies and innovations to
                            leaders, decision-makers, companies and investors..</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fleet-card">
                        <img src="images/con1.jpg" alt="Advocacy" class="fleet-img mb-3">
                        <h5 class="text-success">Advocacy</h5>
                        <p>WORLDWAYSONS VENTURES LIMITED prides itself of connecting people with opportunities around
                            the world. Since 2015, it has
                            achieved success stories in conducting conferences, offering corporate trainings, managing
                            delegations, doing legal consutacies and
                            running youth projects. It operates out of Nairobi and provides a platform for connecting,
                            people, technologies and innovations to
                            leaders, decision-makers, companies and investors.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fleet-card">
                        <img src="images/con1.jpg" alt="Products Solutions" class="fleet-img mb-3">
                        <h5 class="text-success">Product Solutions</h5>
                        <p>WORLDWAYSONS VENTURES LIMITED prides itself of connecting people with opportunities around
                            the world. Since 2015, it has
                            achieved success stories in conducting conferences, offering corporate trainings, managing
                            delegations, doing legal consutacies and
                            running youth projects. It operates out of Nairobi and provides a platform for connecting,
                            people, technologies and innovations to
                            leaders, decision-makers, companies and investors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section>
        <div class="cta mt-5">
            <h4>Want to venture with us or learn more?</h4>
            <p>Build a garden of opportunities that are accessible and sustainable</p>
            <a href="contacts.php" class="btn">Contact Us</a>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- <footer class="footer mt-5">
  <p>&copy; 2025 WorldWaysOne Ventures . All Rights Reserved.</p>
</footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'footer.php' ?>