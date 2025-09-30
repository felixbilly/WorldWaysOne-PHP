<?php
require 'config.php';

// set custom page title
$pageTitle = "contacts";

// include header
include 'header.php';
?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us | WorldWaysOne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
        }

        .contact-section {
            background-image: url('images/bg1.jpg');
            /* Replace with your image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            padding: 80px 0;
            color: white;
        }



        .contact-card {
            background-color: white;
            color: #2e7d32;
            border-radius: 12px;
            padding: 30px;
            max-width: 700px;
            margin: auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-weight: bold;
            color: #2e7d32;
        }

        .whatsapp-btn {
            background-color: #256428;
            color: white;
            padding: 12px 30px;
            font-size: 16px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .whatsapp-btn:hover {
            background-color: #1ebe5d;
        }

        footer {
            background-color: #2e7d32;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        @media (max-width: 576px) {
            .contact-card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

 

    <!-- Contact Section with Background Image -->
    <section class="contact-section">
        <div class="overlay">
            <div class="container">
                <div class="contact-card text-center">
                    <h2 class="section-title mb-4">WorldWaysOne</h2>
                    <p><strong>📍 Office:</strong><br> Jamii Healthcare Plaza, Uthiru, Naivasha Rd, Nairobi</p>
                    <!-- <p><strong>☎️ Landline:</strong><br> +254 020 4440105/6/02</p> -->
                    <p><strong>📞 Phone No.:</strong><br> +254 723 565 739 </p>
                    <!-- <p><strong>📞 Airtel:</strong><br> +254 733 523 047, +254 735 009 952, +254 733 901 182</p> -->
                    <p><strong>📧 Email:</strong><br>
                        <a href="mailto:info@worldwaysone.co.ke">info@worldwaysone.co.ke</a>
                    </p>
                    <p><strong>🕐 Open:</strong> 24/7 Service</p>
                    <div class="mt-4">
                        <a href="https://wa.me/254723565739" target="_blank" class="whatsapp-btn">
                            Book on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- <footer>
    <div class="container">
      <p>© 2025 WorldWaysOne venture Ltd. All rights reserved.</p>
    </div>
  </footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'footer.php' ?>