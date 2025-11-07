<?php
require 'config.php';

// set custom page title
// $pageTitle = " wldone";

// include header
include 'header.php';

$stmt = $pdo->query("SELECT * FROM uploads ORDER BY created_at DESC");
$uploads = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<style>
    /* Partner Carousel Section */
    #partners {
        background: #fff;
        padding: 80px 16px;
        font-family: "Segoe UI", Arial, sans-serif;
        text-align: center;
        overflow: hidden;
    }

    #partners h3 {
        font-size: 2rem;
        font-weight: 600;
        text-transform: uppercase;
        color: #333;
        margin-bottom: 10px;
    }

    #partners .subtitle {
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 40px;
    }

    /* Carousel wrapper */
    .partner-carousel {
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    /* Track that slides */
    .carousel-track {
        display: flex;
        align-items: center;
        gap: 50px;
        /* space between logos */
        animation: scroll-left 25s linear infinite;
    }

    /* Pause animation on hover */
    .partner-carousel:hover .carousel-track {
        animation-play-state: paused;
    }

    /* Logo styles */
    .carousel-track img {
        max-height: 80px;
        object-fit: contain;
        filter: none;
        /* remove grayscale */
        opacity: 1;
        /* fully bright */
        transition: transform 0.3s ease;
        cursor: pointer;
    }

    .carousel-track img:hover {
        transform: scale(1.05);
        /* slight zoom on hover */
    }

    /* Keyframes for infinite scroll */
    @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 1024px) {
        .carousel-track {
            gap: 40px;
        }
    }

    @media (max-width: 768px) {
        .carousel-track {
            gap: 30px;
        }

        .carousel-track img {
            max-height: 60px;
        }
    }

    @media (max-width: 480px) {
        .carousel-track {
            gap: 20px;
        }

        .carousel-track img {
            max-height: 50px;
        }
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


    /* 🔹 Slider zoom-in / zoom-out effect */
    .slider-item {
        background-size: 10%;
        /* make image slightly larger to allow zoom */
        transition: transform 5s ease-in-out;
    }

    .slider-item.active {
        transform: scale(0);
        /* zoom in */
    }

    .slider-item:not(.active) {
        transform: scale(1);
        /* zoom out / normal */
    }


    .blog-entry {
        /* background: #fff; */
        color: #212529;
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
        display: solid;
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


    /* // */


    /* body {
            padding-top: 70px;
        } */
</style>






<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(images/slide-1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <!-- <span class="subheading"></span> -->
                    <h1 class="mb-4">WORLDWAYSONE VENTURES LIMITED</h1>
                    <h4 class="mb-4 mb-md-5">Come, Explore and Connect Worldwide.</h4>
                    <p>
                        <!-- <a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> -->
                        <a href="delegation.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Learn
                            More</a>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url(images/slide-2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <!-- <span class="subheading">Welcome</span> -->
                    <!-- <h1 class="mb-4">WORLDWAYSONE VENTURES LIMITED</h1> -->
                    <h2 class="mb-4 mb-md-5">
                        Malaysia & Singapore Academic Tour, Daystar University
                    </h2>


                    <p>
                        <!-- <a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>  -->
                        <a href="delegation.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Learn
                            More</a>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url(images/slide-3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <!-- <span class="subheading">Welcome</span> -->
                    <!-- <h1 class="mb-4">WORLDWAYSONE VENTURES LIMITED</h1> -->
                    <h2 class="mb-4 mb-md-5">We Do not Promise, We Deliver.</h2>
                    <p>
                        <!-- <a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>  -->
                        <a href="youth.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Learn More</a>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="slider-item" style="background-image: url(images/bg_5.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">THE SECRET IS IN THE BEANS</h1>
                        <p class="mb-4 mb-md-5">Exceptional and rarest coffees from around the world. Sourced for the
                            season, roasted at Starbucks Reserve® Roasteries and crafted with care.</p>
                        <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#"
                                class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                    </div>

                </div>
            </div>
        </div> -->
</section><br>

<!-- <section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex align-items-xl-end">
                <div class="info">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text">
                                <h3>800-Starbuc (800-782-7282)</h3>
                                <p>Our customer service hours are Monday – Sunday, 5:00am to 8:00pm</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h3>2401 Utah Avenue</h3>
                                <p> South Seattle, Washington 98134, United States</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text">
                                <h3>Open Monday - Sunday</h3>
                                <p>5:00am to 9:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="book p-4">
                    <h3>Book a Table</h3>
                    <form action="#" class="appointment-form">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="2" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(images/about-1i.jpg);"></div>
    <div class="one-half ftco-animate">
        <div>
            <div class="heading-section ftco-animate ">
                <!-- <span class="subheading">Discover</span> -->
                <h2 class="mb-4">Our Story</h2>
            </div>
            <div>
                <p><strong><strong>WORLDWAYSONS VENTURES LIMITED </strong>prides itself of connecting people with
                        opportunities around
                        the
                        world. Since 2015, it has
                        achieved success stories in conducting conferences, offering corporate trainings, managing
                        delegations, doing legal consultancies and conducting youth Empowerment Programs and projects.It
                        operates out of Nairobi and provides a platform for connecting,
                        people, technologies and innovations to
                        leaders, decision-makers, companies and investors.</p>

            </div>
        </div>
    </div>
</section><br>
<!-- Founders -->
<section class="ftco-section ftco-services">
    <div class=" media d-block text-center block-6 services">
        <h3 class="heading">Founders</h3>
        <h2 class="mb-4">Founders</h2>
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
                        <p>We aim at challenging the status quo and finding new ways to grow our company and each
                            other while being present, connecting with transparency, dignity and respect.</p>
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
                        <p>We continue to serve customer needs through safe and convenient methods, including
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
                        <p>For us to do sound business, We pride in our values of Professionalism, integrity and being
                            accountable in all our business dealings.This has seen us grow over the years.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our values -->
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
<!-- End of values -->

<!--our partners-->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">

                <h2 class="mb-4">Our Partners</h2>

            </div>
        </div>
        <div class="partner-carousel">
            <div class="carousel-track">
                <!-- Logos duplicated for seamless scrolling -->
                <img src="images/partner 1.jpg" alt="Partner 1">
                <img src="images/partner2.jpg" alt="Partner 2">
                <img src="images/partner3.png" alt="Partner 3">
                <img src="images/partner4.jpg" alt="Partner 4">
                <img src="images/partner7.jpg" alt="Partner 5">
                <img src="images/partner8.jpg" alt="Partner 6">
                <img src="images/partner9.jpg" alt="Partner 7">
                <img src="images/partner10.jpg" alt="Partner 8">
                <img src="images/partner11.jpg" alt="Partner 9">
                <img src="images/partner12.jpg" alt="Partner 10">
                <img src="images/partner13.jpg" alt="Partner 12">
                <img src="images/partner 1.jpg" alt="Partner 1">
                <img src="images/partner2.jpg" alt="Partner 2">
                <img src="images/partner3.png" alt="Partner 3">
                <img src="images/partner4.jpg" alt="Partner 4">
                <img src="images/partner7.jpg" alt="Partner 5">
                <img src="images/partner8.jpg" alt="Partner 6">
                <img src="images/partner9.jpg" alt="Partner 6">
                <img src="images/partner10.jpg" alt="Partner 6">
                <img src="images/partner11.jpg" alt="Partner 6">
                <img src="images/partner12.jpg" alt="Partner 6">
                <img src="images/partner13.jpg" alt="Partner 6">





                <!-- Duplicate again for smooth infinite loop -->


            </div>
        </div>
</section>
<!--End of partners -->



<!-- gallery -->
<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <p class="gallery img d-flex align-items-center" style="background-image: url(images/gallery--1.jpg);">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <!-- <span class="icon-search"></span> -->
                </div>
                </p>
            </div>
            <div class="col-md-3 ftco-animate">
                <p class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">

                </div>
                </p>
            </div>
            <div class="col-md-3 ftco-animate">
                <p class="gallery img d-flex align-items-center" style="background-image: url(images/travel.jpg);">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">

                </div>
                </p>
            </div>
            <div class="col-md-3 ftco-animate">
                <p class="gallery img d-flex align-items-center" style="background-image: url(images/gallery--4.jpg);">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">

                </div>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End of gallery -->

<!--our Activities-->
<section class="ftco-menu">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <!-- <span class="subheading">Discover</span> -->
                <h2 class="mb-4"> Our Activities</h2>
                <p>Build a garden of opportunities that are accessible and sustainable.</p>
            </div>
        </div>
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                role="tab" aria-controls="v-pills-1" aria-selected="true">
                                Tours & Travel
                            </a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                aria-controls="v-pills-2" aria-selected="false">Professional Visits</a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                                aria-controls="v-pills-2" aria-selected="false">International Conferences</a>


                            <!-- <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-4" role="tab"
                                aria-controls="v-pills-3" aria-selected="false">ventures
                            </a> -->
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">

                        <div class="tab-content ftco-animate" id="v-pills-tabContent">

                            <!--v-p-roll1-->
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="v-pills-1-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/visit.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Historical Visits</a></h3>
                                                <p>Bethlehem
                                                </p>
                                                <p class="price"><span></span></p>
                                                <!-- <p><a href="#" class="btn btn-primary btn-outline-primary">
                                                        READ MORE</a></p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/del2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Academic Trips and Tours </a></h3>
                                                <p>Daystar University Trip,Malaysia</p>
                                                <!-- <p class="price"><span>$5.45</span></p> -->
                                                <!-- <p><a href="#" class="btn btn-primary btn-outline-primary">
                                                        READ MORE</a></p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/slide-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Cultural Exchange</a></h3>
                                                <p>Dayster University, Singapore</p>
                                                <!-- <p class="price"><span>$6.90</span></p> -->
                                                <!-- <p><a href="#" class="btn btn-primary btn-outline-primary">
                                                        READ MORE</a></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--v-p-roll-2-->
                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/gallery-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Trainings</a></h3>
                                                <p>Bomet County Assembly team at Jewel, Changi Airport- Singapore
                                                </p>
                                                <!-- <p class="price"><span>$3.50</span></p> -->
                                                <!-- <p><a href="delegation.php" class="btn btn-primary btn-outline-primary">
                                                        READ MORE</a></p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/conf2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Seminars</a></h3>
                                                <p>Seminars & Trainings</p>
                                                <!-- <p class="price"><span>$4.65</span></p> -->
                                                <!-- <p><a href="delegation.php" class="btn btn-primary btn-outline-primary">
                                                        Read More</a></p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/del3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#"> Projects</a></h3>
                                                <p>Project Delegations: Ghana </p>
                                                <p class="price"><span></span></p>
                                                <!-- <p><a href="delegation.php"
                                                        class="btn btn-primary btn-outline-primary">Read
                                                        More</a></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--v-p-roll-3-->
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/conf1.jpg);"></a>
                                            <div class="text">
                                                <h3>.
                                                    Tech Workshops </h3>
                                                <p>International Workshops, Telaviv

                                                </p>
                                                <!-- <p class="price"><span>$7.25</span></p> -->
                                                <!-- <p><a href="#" class="btn btn-primary btn-outline-primary">
                                                        Read more</a></p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/conf.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Tech Conferences</a></h3>
                                                <p>CyberX Africa Ghana 2022, Worldwaysone Delegates
                                                </p>
                                                <!-- <p class="price"><span>$7.50</span></p> -->
                                                <!-- <p><a href="#"
                                                        class="btn btn-primary btn-outline-primary">//////\\\\</a>
                                                </p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/Bomet.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#"> Benchmarking & Cultural Exchange
                                                        Programs</a></h3>
                                                <p>Bomet County Assembly team at Jewel, Changi
                                                    Airport- Singapore
                                                </p>
                                                <!-- <p class="price"><span>$5.00</span></p> -->
                                                <!-- <p><a href="#" class="btn btn-primary btn-outline-primary">////\\\</a>
                                                </p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End of Activities -->

<!--Blogs-->
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

<!-- End of Blogs -->

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
<!-- end of lightboxModal -->


<!--google map emmbeded-->
<section class="ftco-appointment">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-6 d-flex align-self-stretch">
                <div id="map">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99388.11343135686!2d36.704433913845236!3d-1.2813661336649769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17d0c7708537%3A0xe193a2ae3c033d42!2sJamii%20Clinic%20(Westlands)!5e1!3m2!1sen!2ske!4v1755787057746!5m2!1sen!2ske"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- appointment-form -->
            <!--<div class="col-md-6 appointment ftco-animate">
                 <h3 class="mb-3">Book Time</h3>
                <form action="#" class="appointment-form">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" class="form-control appointment_date" placeholder="Date">
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-ios-clock"></span></div>
                                <input type="text" class="form-control appointment_time" placeholder="Time">
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="2" class="form-control"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="submit" value="Appointment" class="btn btn-primary py-3 px-4">
                        </div> 
                    </div>
                </form>
            </div>-->
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>