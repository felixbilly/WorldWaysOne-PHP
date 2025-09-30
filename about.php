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
    <title>About Us | WorldWaysOne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .section-title {
            color: #2e7d32;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .info-card {
            border: none;
            background-color: #fff;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            text-align: center;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .info-card h5 {
            font-weight: 600;
            color: #2e7d32;
        }

        .team-card {
            border: none;
            background-color: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border-radius: 12px;
            text-align: center;
            padding: 2rem 1rem;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .team-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 1rem;
        }

        .footer {
            background-color: #2e7d32;
            color: white;
            padding: 1.5rem;
            text-align: center;
            margin-top: 3rem;
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

        .navbar-nav .nav-link.active {
            font-weight: 600;
            color: #2e7d32 !important;
        }

        p.thick {
            font-weight: bold;
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
        <li class="nav-item"><a class="nav-link active" href="about.html">About</a></li>
        <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="fleet.html">Fleet</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>
</nav> -->

    <!-- About Us -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">About Us</h2>
            <p class="text-center mb-5">
            </p>

            <br>
            <div class="cta mt-5">
                <h4>Want to venture with us or learn more?</h4>
                <p>
                    Worldwaysone Ventures Limited offers the best services in form of management and supervisory
                    Workshops
                    and Seminars;
                    Youth Empowerment Project Management; Legal Services; Travel, Tours and Delegations Management
                    around
                    the world;
                    Healthcare and HealthTech Services; Cybersecurity and Digital Forensics Services and, Diverse
                    Programs.
                    Indeed,
                    Our integrated approach allows us to serve individuals, institutions, and governments with
                    excellence,
                    innovation, and impact.
                </p>
                <p>
                    Worldwaysone Ventures Limited offers the best services in form of management and supervisory
                    Workshops
                    and Seminars; Youth Empowerment Project Management;
                    Legal Services; Travel, Tours and Delegations Management around the world; Healthcare and HealthTech
                    Services; Cybersecurity and Digital Forensics Services and, Diverse Programs.
                    In
                    deed, Our integrated approach allows us to serve individuals, institutions, and governments with
                    excellence, innovation, and impact.
                </p>
                <p>Build a garden of opportunities that are accessible and sustainable</p>

            </div>
            <!-- Mission, Vision, Core Values -->
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="info-card">
                        <h5> Mission</h5>
                        <p>
                            To provide tailor-made improvement services
                            to our clients so as to ensure maximum return on investments
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card">
                        <h5> Vision</h5>
                        <p>To offer Superior Consulting Services Worldwide.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card">
                        <h5>Core Values</h5>
                        <ul class="list-unstyled mb-0">
                            <li> <strong class="thick">✅ Professionalism:</strong> We make sure that every work is done
                                professionally to the satisfaction of our clients.</li>
                            <li><strong class="thick">✅ Integrity:</strong> We insist on Maintaining Integrity in all
                                aspects of our work.</li>
                            <li><strong class="thick">✅ Accountability:</strong> In order to ‘to do more with less for
                                more’, accountability is our pride.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <h3 class="text-center section-title">Meet Our Team</h3>
            <div class="row g-4">
                <div class="col-md-4 col-sm-6">
                    <div class="team-card">
                        <img src="images/keniz.jpg" alt="" class="team-img">
                        <h5>Mr. Keniz Agira</h5>
                        <p class="text-muted">Advocate High Court of Kenya</p>
                        <p>We continue to serve customer needs through safe and convenient methods, including
                            drive-through service, dine-in, digital ordering and contactless pay.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-card">
                        <img src="images/keniz.jpg" alt="" class="team-img">
                        <h5>Mr. John Ougo</h5>
                        <p class="text-muted">Public Heath Practitioner</p>
                        <p>We aim at challenging the status quo and finding new ways to grow our company and each other
                            while being present, connecting with transparency, dignity and respect.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mx-sm-auto">
                    <div class="team-card">
                        <img src="images/keniz.jpg" alt="" class="team-img">
                        <h5>Mrs. Susan Jason</h5>
                        <p class="text-muted">Customer Care Manager</p>
                        <p>We aim at challenging the status quo and finding new ways to grow our company and each other
                            while being present, connecting with transparency, dignity and respect.
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="cta mt-5">
                <h4>Want to venture with us or learn more?</h4>
                <p>Build a garden of opportunities that are accessible and sustainable</p>
                <a href="contacts.php" class="btn">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- <footer class="footer">
  <p>&copy; 2025 WorldWaysOne. All Rights Reserved.</p>
</footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'footer.php' ?>