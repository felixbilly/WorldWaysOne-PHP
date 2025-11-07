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

        /* founder  */
        .founder-img {
            width: 150px;
            /* adjust size as needed */
            height: 150px;
            object-fit: cover;
            /* crops nicely instead of stretching */
            border-radius: 10%;
            /* makes it circular like an icon */
            border: 1px solid #eee;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>



    <!-- About Us -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">About Us</h2>
            <p class="text-center mb-5">
            </p>

            <br>
            <div class="cta mt-5">
                <h4>Want to venture with us or learn more?</h4>
                <h2 class="section-title text-center">About Us</h2>
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
            <section class="ftco-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 pr-md-5">
                            <div class="heading-section text-md-right ftco-animate">
                                <!-- <span class="subheading">Discover</span> -->
                                <h2 class="mb-4">Our values</h2>
                                <h4>Professionalism</h4>
                                <p>Every job is done efficiently and professionally with the client in mind.</p>

                                <h4>Integrity</h4>
                                <p>We insist on maintaining integrity in everything we do.</p>
                                <h4>Accountability</h4>
                                <p>In order to do 'more with less for more', accountability is our pride.</p>

                                <!-- <p class="mb-4">Whether you're searching for something new to warm your mug, seeking the best
                            brew method for your favorite blend or exploring our rarest offerings, you’ve come to the
                            right place. We have all the tools you need to bring your brewing game to the next level.
                        </p> -->
                                <!-- <p><a href="about.php" class="btn btn-primary btn-outline-primary px-5 py-4">READ MORE</a></p> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="menu-entry">
                                        <p class="img" style="background-image: url(images/menu12.jpg);"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="menu-entry mt-lg-4">
                                        <p class="img" style="background-image: url(images/menu2.jpg);"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="menu-entry">
                                        <p class="img" style="background-image: url(images/menu-3i.jpg);"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="menu-entry mt-lg-4">
                                        <p class="img" style="background-image: url(images/histo.jpg);"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team Section -->
            <!-- Founders -->
            <section class="ftco-section ftco-services">
                <div class=" media d-block text-center block-6 services">
                    <h3 class="heading">Founders</h3>
                    <!-- <h2 class="mb-4">Founders</h2> -->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ftco-animate">
                            <div class="media d-block text-center block-6 services">
                                <div class="icon d-flex justify-content-center align-items-center mb-5">
                                    <img src="images/keniz.jpg" alt="Mr Keniz Agira" class="founder-img">
                                </div>
                                <div class="media-body"><br>
                                    <h3 class="heading">Mr Keniz Agira</h3>
                                    <h3>Advocate of High Court of Kenya</h3>
                                    <p>We aim at challenging the status quo and finding new ways to grow our company and
                                        each
                                        other while being present, connecting with transparency, dignity and respect.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ftco-animate">
                            <div class="media d-block text-center block-6 services">
                                <div class="icon d-flex justify-content-center align-items-center mb-5">
                                    <img src="images/john.jpg" alt="Mr Keniz Agira" class="founder-img">
                                </div>
                                <div class="media-body"><br>
                                    <h3 class="heading">Mr. John Ougo </h3>
                                    <h3>Public Heath Practitioner</h3>
                                    <p>We continue to serve customer needs through safe and convenient methods,
                                        including
                                        drive-through service, dine-in, digital ordering and contactless pay. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="media d-block text-center block-6 services">
                                <div class="icon d-flex justify-content-center align-items-center mb-5">
                                    <img src="images/suzan.jpg" alt="Mr Keniz Agira" class="founder-img">
                                </div>
                                <div class="media-body"><br>
                                    <h3 class="heading">Mrs. Susan Jason </h3>
                                    <h3> Business Development Lead</h3>
                                    <p>It's our goal for all of our coffee to be grown under the highest standards of
                                        quality,
                                        using ethical sourcing practices. More than 30 blends of coffee available.</p>
                                </div>
                            </div>
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
    <!-- <footer class="footer">
  <p>&copy; 2025 WorldWaysOne. All Rights Reserved.</p>
</footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'footer.php' ?>