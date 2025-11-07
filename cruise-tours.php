<?php
require 'config.php';
$pageTitle = "School Travel";
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>School Travel — WorldWaysOne</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <style>
        :root {
            --green: #1bbd36;
            --gold: #c7a661;
            --dark: #222;
            --muted: #666;
            --bg: #f8f9fa;
            --card-shadow: 0 6px 20px rgba(17, 17, 17, 0.08);
            --radius: 10px;
            --container: 1180px;
        }

        body {
            font-family: "Poppins", sans-serif;
            color: var(--dark);
            background-color: #151111;
            background-image: url('images/bg_4.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }


        .hero {
            margin-top: 80px;
            background:

                url('images/banner-cruise.jpg') center/cover no-repeat;
            padding: 90px 20px;
            color: #fff;
            text-align: left;
            filter: brightness(1.12) contrast(1.06);
        }

        .hero h1,
        .hero p {
            text-shadow: 0 3px 12px rgba(0, 0, 0, 0.55);
        }


        .hero .content {
            max-width: 900px;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 800;
        }

        .pill {
            display: inline-block;
            background: #fff;
            color: var(--green);
            padding: 6px 14px;
            border-radius: 999px;
            font-weight: 700;
            font-size: 14px;
            margin-top: 10px;
        }

        /* MAIN LAYOUT */
        .content-section {
            max-width: var(--container);
            margin: 40px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 360px;
            gap: 34px;
        }

        article.post {
            background: #fff;
            padding: 26px;
            border-radius: var(--radius);
            box-shadow: var(--card-shadow);
        }

        aside.sidebar {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .card {
            background: #fff;
            padding: 20px;
            border-radius: var(--radius);
            box-shadow: var(--card-shadow);
        }

        /* ITINERARY */
        .itinerary h3 {
            font-weight: 700;
            margin-bottom: 16px;
        }

        .itinerary .day {
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .itinerary .day-header {
            background: #faf6ef;
            color: var(--dark);
            font-weight: 600;
            padding: 12px 16px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
        }

        .itinerary .day-content {
            display: none;
            padding: 14px 16px;
            background: #fff;
            color: var(--muted);
        }

        .itinerary .day.active .day-content {
            display: block;
        }

        .itinerary .day.active .day-header {
            background: #f2e8d8;
        }

        /* BOOKING FORM (OASIS STYLE) */
        .booking-form {
            margin-top: 40px;
            padding: 26px;
            background: #fff8f1;
            border-radius: var(--radius);
            box-shadow: var(--card-shadow);
        }

        .booking-form h3 {
            color: var(--gold);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .booking-form .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .booking-form label {
            padding: 12px 12px 12px 0;
            display: inline-block;
            font-weight: 600;
            color: var(--dark);
        }


        .booking-form input[type=text],
        .booking-form input[type=email],
        .booking-form input[type=number],
        .booking-form select,
        .booking-form textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            font-family: "Poppins", sans-serif;
            box-sizing: border-box;
            background-color: #fff;
        }

        /* Optional: remove spinner controls from number fields for cleaner design */
        .booking-form input[type=number]::-webkit-outer-spin-button,
        .booking-form input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .booking-form input[type=number] {
            -moz-appearance: textfield;
            /* Firefox */
        }


        .booking-form input[type=submit] {
            background-color: var(--green);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            font-weight: 700;
        }

        .booking-form input[type=submit]:hover {
            background-color: #15992e;
        }

        /* === Adults + Kids Side-by-Side Layout === */
        .row-group {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 10px;
        }

        .row-group .col-half {
            flex: 1 1 48%;
            display: flex;
            flex-direction: column;
        }

        .row-group label {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 6px;
        }

        .row-group input[type=number] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: "Poppins", sans-serif;
            box-sizing: border-box;
        }

        /* Mobile responsiveness */
        @media screen and (max-width: 600px) {
            .row-group {
                flex-direction: column;
            }

            .row-group .col-half {
                width: 100%;
            }
        }


        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        /* COST BOXES */
        .cost-section {
            margin-top: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .cost-box {
            background: #fff;
            padding: 20px;
            border-radius: var(--radius);
            box-shadow: var(--card-shadow);
        }

        .cost-box h4 {
            color: var(--gold);
            font-weight: 700;
            border-bottom: 2px solid #f2e8d8;
            padding-bottom: 8px;
            margin-bottom: 14px;
        }

        .cost-box ul {
            list-style: none;
            padding: 0;
            margin: 0;
            line-height: 1.8;
            color: var(--muted);
        }

        .cost-box ul li::before {
            content: "✓ ";
            color: var(--green);
            font-weight: 700;
        }

        /* DOCUMENTS / TERMS */
        .doc-terms {
            margin-top: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .doc-box {
            background: #fff;
            padding: 20px;
            border-radius: var(--radius);
            box-shadow: var(--card-shadow);
        }

        .doc-box h4 {
            color: var(--gold);
            font-weight: 700;
            margin-bottom: 14px;
        }

        @media(max-width:880px) {
            .content-section {
                grid-template-columns: 1fr;
            }

            .cost-section,
            .doc-terms {
                grid-template-columns: 1fr;
            }
        }

        #formResponse {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        #formResponse span {
            font-family: "Poppins", sans-serif;
            font-size: 15px;
        }

        /* Highlight missing fields with a red glow */
        .input-error {
            border: 2px solid #e63946 !important;
            animation: shake 0.3s ease-in-out;
            background-color: #ffe6e6;
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-4px);
            }

            50% {
                transform: translateX(4px);
            }

            75% {
                transform: translateX(-2px);
            }
        }

        /* IMAGE SCROLL GALLERY */
        .scroll-gallery {
            width: 100%;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.92);
            padding: 18px 0;
            border-top: 2px solid var(--gold);
            border-bottom: 2px solid var(--gold);
        }

        .scroll-track {
            display: flex;
            gap: 34px;
            animation: scrollImgs 38s linear infinite;
            align-items: center;
        }

        .gallery-item {
            min-width: 270px;
            max-width: 270px;
            text-align: center;
        }

        .gallery-item img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 14px;
            box-shadow: var(--card-shadow);
            display: block;
        }

        .gallery-item span {
            display: block;
            margin-top: 8px;
            font-size: 15px;
            font-weight: 600;
            color: var(--dark);
        }

        /* Scroll animation */
        @keyframes scrollImgs {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Mobile */
        @media(max-width: 600px) {
            .gallery-item {
                min-width: 180px;
                max-width: 180px;
            }

            .gallery-item img {
                height: 120px;
            }
        }

        .pilgrim-slider-section {
            width: 100%;
            padding: 28px 0;
            background: rgba(255, 255, 255, 0.92);
            border-top: 2px solid var(--gold);
            border-bottom: 2px solid var(--gold);
        }



        .related-tours .tour-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
        }

        .related-tours .tour-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 26px rgba(0, 0, 0, 0.15);
        }

        .related-tours .tour-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .related-tours .tour-body {
            padding: 16px;
            text-align: center;
        }

        .related-tours .tour-body h5 {
            font-weight: 700;
            margin-bottom: 8px;
        }

        .related-tours .tour-body p {
            font-size: 14px;
            color: var(--gray-dark);
        }
    </style>
</head>

<body>

    <section class="hero">
        <div class="content">
            <p>Home &raquo; World Travel &raquo; Cruise Tours</p>
            <h1>Cruise Tours</h1>
            <span class="pill">7–14 Days — Luxury Voyages Across the Seas</span>
        </div>
    </section><br>

    <!-- SCROLL GALLERY BANNER -->
    <section class="scroll-gallery">
        <div class="scroll-track">

            <div class="gallery-item">
                <img src="images/cruise-pool.webp" alt="Pilgrimage Group">
                <span></span>
            </div>

            <div class="gallery-item">
                <img src="images/cruise-ext.jpg" alt="Pilgrimage Group">
                <span> </span>
            </div>

            <div class="gallery-item">
                <img src="images/cruise-int.jpg" alt="Pilgrimage Group">
                <span> </span>
            </div>

            <div class="gallery-item">
                <img src="images/cruise-interio.jpg" alt="Pilgrimage Group">
                <span> </span>
            </div>
            <div class="gallery-item">
                <img src="images/cruise-pool.webp" alt="Pilgrimage Group">
                <span></span>
            </div>

            <div class="gallery-item">
                <img src="images/cruise-ext.jpg" alt="Pilgrimage Group">
                <span> </span>
            </div>



        </div>
    </section>


    <section class="content-section">
        <article class="post">
            <h2 class="mb-3">FEATURING: Mediterranean, Caribbean & Middle East Luxury Cruises
            </h2>
            <p class="lead">Experience the ultimate voyage across the seas — combining five-star hospitality,
                world-class dining,
                and breathtaking destinations. From the blue waters of the Mediterranean to the coral beauty of the
                Caribbean, every cruise is a journey of leisure and wonder.</p>
            <div class="card">
                <h2>Why Choose a Cruise Tour</h2>
                <p>
                    Cruise vacations offer an unmatched way to see multiple destinations without the hassle of constant
                    travel.
                    Wake up to new horizons every morning, enjoy gourmet dining, world-class entertainment, and onboard
                    leisure
                    while exploring beautiful ports and islands.
                </p>
            </div><br>

            <!-- Itinerary -->
            <section class="itinerary">
                <h3>Package Itinerary</h3>

                <div class="day">
                    <div class="day-header">Day 1: Departure & Embarkation <span>+</span></div>
                    <div class="day-content">
                        Arrive at port city (e.g. Rome or Dubai), check-in and board your
                        cruise ship. Enjoy a welcome dinner and evening entertainment as the ship departs.<br>
                        <strong>Meals:</strong> Dinner
                    </div>
                </div>

                <div class="day">
                    <div class="day-header">Day 2–3: At Sea <span>+</span></div>
                    <div class="day-content">
                        Relax onboard with spa treatments, swimming, and fine dining.
                        Attend captain’s welcome gala and enjoy live music shows.<br>
                        <!-- <strong>Meals:</strong> Breakfast, Lunch, Dinner -->
                    </div>
                </div>

                <div class="day">
                    <div class="day-header">Day 4: Port Excursion<span>+</span></div>
                    <div class="day-content">
                        Dock at an exotic destination such as Santorini, Mykonos, or
                        Muscat. Explore local markets, beaches, and historical sites before returning to the ship.<br>
                        <!-- <strong>Meals:</strong> Breakfast, Lunch, Dinner -->
                    </div>
                </div>

                <div class="day">
                    <div class="day-header">Day 5–6: Island Adventures<span>+</span></div>
                    <div class="day-content">
                        Sail to your next destination — optional snorkeling, shopping
                        tours, and onboard activities await you.<br>
                        <!-- <strong>Meals:</strong> Breakfast, Lunch, Dinner -->
                    </div>
                </div>

                <div class="day">
                    <div class="day-header">Day 7–8: Cultural Discovery <span>+</span></div>
                    <div class="day-content">
                        Visit UNESCO heritage cities or ancient ruins depending on your
                        route. Evening gala dinner and dance.<br>
                        <!-- <strong>Meals:</strong> Breakfast, Lunch, Dinner -->
                    </div>
                </div>

                <div class="day">
                    <div class="day-header">Day 12–13: Project Presentations <span>+</span></div>
                    <div class="day-content">
                        Students collaborate on group projects and present findings
                        before faculty and peers.<br>
                        <!-- <strong>Meals:</strong> Breakfast, Lunch, Dinner -->
                    </div>
                </div>

                <div class="day">
                    <div class="day-header">Day 9–10: Return Voyage<span>+</span></div>
                    <div class="day-content">
                        Enjoy a farewell party onboard as the ship makes its way back to
                        port. Disembark after breakfast with memories of a lifetime.<br>
                        <!-- <strong>Meals:</strong> Breakfast, Lunch, Dinner -->
                    </div>
                </div>


            </section>


            <!-- BOOKING FORM (OASIS STYLE) -->
            <section class="booking-form">
                <h3>Book Your Pilgrimage</h3>
                <div class="container">
                    <form id="bookingForm" method="POST" action="send_booking.php" novalidate>


                        <div class="row">
                            <div class="col-25"><label for="name">Full Name*</label></div>
                            <div class="col-75"><input type="text" id="name" name="name" placeholder="Your full name.."
                                    required></div>
                        </div>

                        <div class="row">
                            <div class="col-25"><label for="email">Email Address*</label></div>
                            <div class="col-75"><input type="email" id="email" name="email" placeholder="Your email.."
                                    required></div>
                        </div>

                        <div class="row">
                            <div class="col-25"><label for="phone">Phone Number</label></div>
                            <div class="col-75"><input type="number" id="phone" name="phone" placeholder="254/072344..">
                            </div>
                        </div>


                        <!--  Preferred Date -->
                        <div class="row">
                            <div class="col-25"><label for="preferred_date">Preferred Travel Date *</label></div>
                            <div class="col-75">
                                <input type="date" id="preferred_date" name="preferred_date" required>
                            </div>
                        </div>

                        <!--  Preferred Destination -->
                        <div class="row">
                            <div class="col-25"><label for="destination">Preferred Destination *</label></div>
                            <div class="col-75">
                                <select class="form-select" id="destination" name="destination" required>
                                    <option value="School">School Travel</option>
                                    <option value="cruise">Cruise Travel & Tour</option>
                                    <option value="family">family/group Tours</option>
                                    <!-- <option value="Honeymoon">Honeymoon Package</option> -->
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!--  Adults + Kids side by side -->
                        <div class="row row-group">
                            <div class="col-half">
                                <label for="adult_group_size">Number of Adults *</label>
                                <input type="number" id="adult_group_size" name="adult_group_size"
                                    placeholder="Enter number of adults.." required>
                            </div>
                            <div class="col-half">
                                <label for="kids_group_size">Number of Kids (below 12) *</label>
                                <input type="number" id="kids_group_size" name="kids_group_size"
                                    placeholder="Enter number of kids.." required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-25"><label for="message">Message / Special Requests</label></div>
                            <div class="col-75">
                                <textarea id="message" name="message" placeholder="Write something.."
                                    style="height:150px"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <input type="submit" value="Submit Booking Request">
                        </div>
                        <!-- Feedback message -->
                        <div id="formResponse" style="margin-top:15px; font-weight:600;"></div>



                    </form>


                </div>
            </section>

            <!-- COST SECTIONS -->
            <section class="cost-section">
                <div class="cost-box">
                    <h4>Cost Includes</h4>
                    <ul>
                        <li>Round-trip flights from Nairobi</li>
                        <li>4-star hotel accommodation</li>
                        <li>Breakfast & dinner daily</li>
                        <li>Entrance fees & guided tours</li>
                    </ul>
                </div>
                <div class="cost-box">
                    <h4>Cost Excludes</h4>
                    <ul>
                        <li>Visa fees and insurance</li>
                        <li>Personal expenses and tips</li>
                    </ul>
                </div>
            </section>

            <!-- DOCUMENTS + TERMS -->
            <section class="doc-terms">
                <div class="doc-box">
                    <h4>Documents Required</h4>
                    <ul>
                        <li>Valid passport (6 months minimum validity)</li>
                        <li>Passport-size photographs (2 copies)</li>
                        <li>Visa application forms (we assist you)</li>
                        <li>Copy of ID and travel insurance</li>
                    </ul>
                </div>
                <div class="doc-box">
                    <h4>Terms & Conditions</h4>
                    <ul>
                        <li>Registration fee is non-refundable.</li>
                        <li>Final balance due 30 days before departure.</li>
                        <li>All travel subject to airline and hotel terms.</li>
                        <li>Itinerary subject to change due to local conditions.</li>
                    </ul>
                </div>
            </section>
        </article>

        <aside class="sidebar">
            <div class="card">
                <h3>Tour Information</h3>
                <ul>
                    <li><strong>Duration:</strong> 7–14 Days</li>
                    <li><strong>Departure:</strong> Mombasa / Dubai / Rome</li>
                    <li><strong>Destinations:</strong> Mediterranean, Caribbean, or Middle East</li>
                    <li><strong>Includes:</strong> Cabin Accommodation, Meals, Entertainment, Shore Excursions
                    </li>
                </ul>
            </div>

            <div class="card">
                <h2>About the Pilgrimage</h2>
                <p>
                    Sail away on a memorable voyage that blends adventure, comfort, and discovery. Our Cruise
                    Tours
                    offer travelers the perfect mix of relaxation and exploration — with each port revealing a
                    new
                    world of culture, cuisine, and scenic beauty.
                </p>
            </div>
            <div class="card">
                <h4>Contact</h4>
                <p><strong>Phone:</strong> +254 723 565 739</p>
                <p><strong>Email:</strong> info@worldwaysone.co.ke</p>
            </div>
        </aside>
    </section>

    <!-- RELATED TOURS SECTION -->
    <section class="related-tours py-5 pilgrim-slider-section">
        <div class="container">
            <h2 class="text-center mb-4" style="font-weight:700; color:var(--dark);">Related Tours</h2>

            <div class="row g-4">

                <!-- Tour Card 1 -->
                <div class="col-md-4">
                    <div class="tour-card">
                        <img src="images/camp-de.webp" alt=" " class="img-fluid tour-img">
                        <div class="tour-body">
                            <h5>Safari Tours</h5>
                            <p>Experience Africa’s great wilderness up close — from the endless plains of the Serengeti
                                to the dramatic landscapes of Maasai Mara and the Okavango Delta. </p>
                            <a href="safari-tours.php" class="btn btn-success btn-sm px-3">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Tour Card 2 -->
                <div class="col-md-4">
                    <div class="tour-card">
                        <img src="images/lady.webp" alt="Mombasa" class="img-fluid tour-img">
                        <div class="tour-body">
                            <h5>Holyland Pilgrimage</h5>
                            <p>Walk in the footsteps of saints and discover sacred destinations that have inspired
                                millions for centuries.</p>
                            <a href="holiday-pilgrimage.php" class="btn btn-success btn-sm px-3">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Tour Card 3 -->
                <div class="col-md-4">
                    <div class="tour-card">
                        <img src="images/family.jpg" alt="Nairobi Excursion" class="img-fluid tour-img">
                        <div class="tour-body">
                            <h5>Private/Family Tours</h5>
                            <p>Each tour is carefully curated to balance exploration, adventure, and relaxation —
                                ensuring unforgettable moments for couples, families, and friends. </p>
                            <a href="family-tours.php" class="btn btn-success btn-sm px-3">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.day-header').forEach(header => {
            header.addEventListener('click', () => {
                header.parentElement.classList.toggle('active');
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('bookingForm');
            const responseBox = document.getElementById('formResponse');

            form.addEventListener('submit', async function (e) {
                e.preventDefault(); // Stop normal submit

                let valid = true;
                const requiredFields = form.querySelectorAll('[required]');

                // Reset all highlights first
                requiredFields.forEach(f => f.classList.remove('input-error'));

                // Check for missing fields
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.classList.add('input-error');
                        valid = false;
                    }
                });

                if (!valid) {
                    responseBox.innerHTML = "<span style='color:red;'>⚠️ Please fill in all required fields.</span>";
                    return;
                }

                responseBox.innerHTML = "<span style='color:#007bff;'>Sending your booking request...</span>";

                const formData = new FormData(form);

                try {
                    const res = await fetch('send_booking.php', {
                        method: 'POST',
                        body: formData
                    });
                    const data = await res.json();

                    if (data.status === 'success') {
                        responseBox.innerHTML = "<span style='color:green;'>✅ " + data.msg + "</span>";
                        form.reset();
                    } else {
                        responseBox.innerHTML = "<span style='color:red;'>❌ " + (data.msg || 'Something went wrong. Please try again.') + "</span>";
                    }
                } catch (err) {
                    console.error(err);
                    responseBox.innerHTML = "<span style='color:red;'>⚠️ Failed to send. Please check your connection.</span>";
                }
            });
        });
    </script>


    <?php include 'footer.php'; ?>
</body>

</html>