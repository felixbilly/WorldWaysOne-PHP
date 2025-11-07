<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <title>WorldWaysOne ventures</title>
        <link rel="icon" href="images/One.png" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <title>Viewer - Image Gallery</title>
    <style>
        .navbar-brand img.logo {
            height: 80px !important;
            width: auto !important;
            /* keeps the aspect ratio */
            margin-right: 10px;
            /* space between logo and text */
        }

        #l-ONE {
            font-size: 1.25rem;
            /* default ~1rem; try 2rem (≈32px) */
            font-weight: bold;
            color: #fff;
            /* white text in black navbar */
            margin-left: 2px;
            /* spacing so it doesn’t touch logo */
            display: flex;
            align-items: center;
            /* vertically align with logo */
        }

        */ a:hover,
        .btn:hover {
            color: #fff !important;
            background-color: #28a745 !important;
            /* green */
            border-color: #28a745 !important;
            text-decoration: none;
        }

        .dropdown-item:hover {
            background-color: #28a745 !important;
            color: #fff !important;
        }

        .dropdown-item {
            font-size: 1.0rem !important;
            /* increase each item text size */
            padding: 12px 10px;
            /* make items taller/wider */
        }

        .navbar-brand:hover {
            background-color: transparent !important;
            border-color: transparent !important;
        }

        .dropdown-menu {
            /* font-size: 2.5rem; increase text size */
            padding: 10px 0;
            /* more vertical padding */
            min-width: 300px;
            /* widen the dropdown */
        }

        .ftco-services {
            background-color: #fff !important;
        }

        .btn:hover {
            background-color: #28a745 !important;
            /* Bootstrap green */
            border-color: #28a745 !important;
            color: #fff !important;
        }

        /* 🔹 Add shadow under navbar */
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4);
        }

        .navbar {
            background-color: #000 !important;
            /* solid black */
            opacity: 1 !important;
            /* no transparency */
        }

        /* 🔹 Push slider below navbar */
        .home-slider {
            margin-top: 80px;
            /* adjust based on your navbar height */
        }

        .ftco-section {
            padding: 60px 0;
        }

        /* Mega-dropdown styles */
        .dropdown-menu.mega-menu {
            position: absolute;
            left: 0;
            right: 0;
            top: 100%;
            width: 100%;
            background: #f9f9f9;
            border: none;
            padding: 20px 30px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
            float: left;
        }

        .mega-menu .mega-col h6 {
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
            /* margin-left: 100px; */
        }

        .mega-menu .dropdown-item {
            color: #333 !important;
            padding: 6px 0;
            display: block;
        }

        /* ensure dropdown toggle arrow spacing */
        .navbar .nav-link.dropdown-toggle::after {
            margin-left: 6px;
        }

        @media (max-width: 991.98px) {
            .dropdown-menu.mega-menu {
                position: static;
                width: 100%;
            }

            .mega-menu .row {
                margin: 0;
            }
        }


        /* ———————————————————————
   MEGA DROPDOWN: Travel & Tours Delegations
   ——————————————————————— */
        #megaDropdown+.dropdown-menu.mega-menu {
            width: 100vw;
            left: 50%;
            right: auto;
            transform: translateX(-50%);
            padding: 30px 0;
            border-radius: 0;
            border: none;
            /* box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15); */
            /* background-color: #fff; */
        }

        #megaDropdown+.dropdown-menu.mega-menu .container {
            max-width: 1140px;
            padding: 0 15px;
        }

        #megaDropdown+.dropdown-menu.mega-menu .row {
            display: flex;
            margin: 0 -15px;
        }

        #megaDropdown+.dropdown-menu.mega-menu .mega-col {
            padding: 0 25px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        #megaDropdown+.dropdown-menu.mega-menu .mega-col h6 {
            font-weight: 700;
            font-size: 1.1rem;
            /* color: #222; */
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #28a745;
            padding-bottom: 8px;
            display: inline-block;
            color: #fff !important;
            /* WHITE TEXT */
        }

        #megaDropdown+.dropdown-menu.mega-menu .dropdown-item {
            color: #fff !important;
            padding: 8px 0;
            font-size: 0.95rem;
            transition: color 0.2s ease;
            white-space: nowrap;
        }

        #megaDropdown+.dropdown-menu.mega-menu .dropdown-item:hover {
            color: #28a745 !important;
            background-color: transparent !important;
            padding-left: 5px;
            /* subtle indent on hover */
        }

        /* Responsive: Stack columns on smaller screens */
        @media (max-width: 991.98px) {
            #megaDropdown+.dropdown-menu.mega-menu {
                width: 100%;
                left: 0;
                transform: none;
                padding: 20px 0;
            }

            #megaDropdown+.dropdown-menu.mega-menu .row {
                flex-direction: column;
                margin: 0;
            }

            #megaDropdown+.dropdown-menu.mega-menu .mega-col {
                padding: 15px 0;
                border-bottom: 1px solid #eee;
            }

            #megaDropdown+.dropdown-menu.mega-menu .mega-col:last-child {
                border-bottom: none;
            }

            #megaDropdown+.dropdown-menu.mega-menu .mega-col h6 {
                margin-bottom: 12px;
            }
        }

        /* === Smooth slide-up animation for mega dropdown columns === */
        @media (max-width: 991.98px) {
            .mega-menu .mega-col {
                opacity: 0;
                transform: translateY(40px);
                transition: all 0.6s ease;
            }

            .mega-menu .mega-col.visible {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <!-- <a class="navbar-brand" href="index.php"><img class="logo" src="images/One.png" alt="logo" height="65px" width="65px"></a> <h4 id="l-ONE"><span>WorldWaysOne</span></h4> -->
            <a class="navbar-brand d-flex align-items-center" href="index.php"> <img class="logo" src="images/One.png"
                    alt="logo">
                <h4 id="l-ONE"><span>WorldWaysOne</span></h4>
            </a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="oi oi-menu"></span> Menu </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="index.php" class="nav-link"><strong>Home</strong></a></li>
                    <!-- More services drop down-->
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="dropdown04"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04"> <a class="dropdown-item"
                                href="youth.php">Youth Empowerment</a>
                            <a class="dropdown-item" href="#">Trainings</a>
                            <a class="dropdown-item" href="consultation.php">Consultation</a>
                            <a class="dropdown-item" href="delegation.php">Delegations</a>
                            <!-- <a class="dropdown-item" href="health.php">Health Program</a> --> <a
                                class="dropdown-item" href="legal.php">Legal Services</a>
                            <!-- <a class="dropdown-item" href="delegation.php">Delegations Management</a> -->
                        </div>
                    </li> <!-- Mega dropdown for Travel & Tours Delegations -->
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="megaDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Travel &amp; Tours</a>
                        <div class="dropdown-menu mega-menu" aria-labelledby="megaDropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 mega-col">
                                        <h6>World Travels</h6> <a class="dropdown-item" href="academic-tours.php">School
                                            Travel</a>
                                        <a class="dropdown-item" href="family-tours.php">Private/Family
                                            Tours</a>
                                        <a class="dropdown-item" href="cruise-tours.php">Cruise Tours</a>
                                    </div>
                                    <div class="col-md-4 mega-col">
                                        <h6>Local Travels</h6> <a class="dropdown-item" href="nairobi-tours.php">Nairobi
                                            Excursions</a>
                                        <a class="dropdown-item" href="mombasa-tours.php">Mombasa Excursions</a>
                                        <a class="dropdown-item" href="safari-tours.php">Safari Tours</a>
                                        <a class="dropdown-item" href="other-destinations.php">Other-Customized
                                            Excursions</a>
                                        <!-- <a
                                            class="dropdown-item" href="#">Historical
                                            Trips</a> -->
                                    </div>
                                    <div class="col-md-4 mega-col">
                                        <h6>Religious Travel </h6>
                                        <a class="dropdown-item" href="europe-tours.php">Europe Pilgrimage</a> <a
                                            class="dropdown-item" href="holiday-pilgrimage.php">HOLYLAND Pilgrimage</a>
                                        <!-- <a class="dropdown-item" href="contacts.php">Make inqui</a> -->
                                        <!-- <a class="dropdown-item" href="travel.php">Travel Info</a> <a
                                            class="dropdown-item" href="#">Booking
                                            Terms</a> <a class="dropdown-item" href="#">FAQ</a> -->
                                    </div>
                                    <div class="col-md-4 mega-col">
                                        <h6>Requirements </h6>
                                        <a class="dropdown-item" href="travel-info.php">Travel-info</a>
                                        <a class="dropdown-item" href="faq.php">F.A Questions</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a href="blogs.php" class="nav-link">Conferences</a></li>
                    <li class="nav-item"><a href="blogs.php" class="nav-link">Recent Uploads</a></li>
                    <li class="nav-item"><a href="contacts.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav> <!-- END nav --></main>
    <main class="container">