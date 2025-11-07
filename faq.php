<?php
require 'config.php';
$pageTitle = "Holyland Pilgrimage";
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Holyland Pilgrimage — Africa Visa Travel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <style>
        .hero h1 {
            font-weight: 700;
            font-size: 42px;
            margin-bottom: 8px;
        }

        .faq-section {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .accordion-item {
            border-radius: 10px;
            margin-bottom: 16px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
            background: #fff;
        }

        .accordion-button {
            background: #fff;
            color: #333;
            font-weight: 600;
            font-size: 16px;
        }

        .accordion-button:not(.collapsed) {
            color: #1bbd36;
            background-color: #f4fef6;
        }

        .accordion-body {
            background: #fff;
            color: #555;
            line-height: 1.7;
        }

        @media (max-width:768px) {
            .hero h1 {
                font-size: 32px;
            }
        }

        .hero h1 {
            font-weight: 700;
            font-size: 42px;
            margin-bottom: 8px;
        }

        .hero p {
            opacity: 0.9;
        }

        .content {
            max-width: 1100px;
            margin: 60px auto;
            padding: 0 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
        }

        .content h2 {
            font-size: 26px;
            font-weight: 700;
            margin-top: 40px;
            color: #1bbd36;
        }

        .content p,
        .content ul {
            color: #555;
            font-size: 15px;
        }

        .content ul {
            list-style: disc;
            margin-left: 25px;
        }

        .info-box {
            background: #f9f9f9;
            border-left: 5px solid #1bbd36;
            padding: 15px 20px;
            margin: 25px 0;
            border-radius: 5px;
            color: #555;
        }

        .info-box strong {
            color: #000;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 32px;
            }
        }

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

                url('images/travel-information_2.webp') center/cover no-repeat;
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
        <h1>Frequently Asked Questions</h1>
        <p>Your travel queries answered by Africa Visa Travel experts</p>
    </section><br>


    <!-- RELATED TOURS SECTION -->
    <section class="related-tours py-5 pilgrim-slider-section">
        <div class="container">
            <div class="accordion" id="faqAccordion">

                <!-- Q1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true">
                            1. How do I book a tour with World Ways One Travel?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Booking is easy! Browse through our tours, click on the trip you’re interested in, and hit
                            “Enquire / Book.”
                            You can also reach us directly by phone or email. Our team will guide you through payment,
                            documentation, and trip preparation.
                        </div>
                    </div>
                </div>

                <!-- Q2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">
                            2. Do I need a visa to travel?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Visa requirements depend on your nationality and destination.
                            WorldWaysOne Travel assists clients in obtaining visas for most African, Middle Eastern, and
                            European destinations.
                            We’ll advise on the required documents and processing times.
                        </div>
                    </div>
                </div>

                <!-- Q3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree">
                            3. What payment options are available?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We accept payments via bank transfer, mobile money (M-Pesa), or credit card.
                            A deposit is usually required to confirm your booking, with the balance due before
                            departure.
                        </div>
                    </div>
                </div>

                <!-- Q4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour">
                            4. Are flights included in my tour package?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Many of our packages include flights, especially for international tours.
                            Each package clearly states whether flights are included or quoted separately.
                        </div>
                    </div>
                </div>

                <!-- Q5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive">
                            5. Can you customize a trip to suit my preferences?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Absolutely! We specialize in tailor-made tours for individuals, families, and groups.
                            You can customize the destinations, activities, duration, and even budget.
                            Let us know your dream itinerary — we’ll make it happen.
                        </div>
                    </div>
                </div>

                <!-- Q6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix">
                            6. What safety measures are in place for travelers?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Your safety is our top priority.
                            We partner with trusted local guides, use reputable hotels, and monitor regional travel
                            advisories.
                            Comprehensive travel insurance is also strongly recommended for every traveler.
                        </div>
                    </div>
                </div>

                <!-- Q7 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven">
                            7. What should I pack for my trip?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Packing depends on your destination and season.
                            For safaris, bring comfortable neutral-colored clothing and sunscreen.
                            For city or beach tours, light clothes, sandals, and a hat are perfect.
                            Always pack a light jacket and personal medication.
                        </div>
                    </div>
                </div>

                <!-- Q8 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight">
                            8. What happens if I need to cancel my trip?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Cancellations are subject to our <a href="booking-terms.php">Booking Terms</a>.
                            Refunds depend on how far in advance you cancel.
                            We recommend purchasing travel insurance to cover unexpected cancellations.
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




    <?php include 'footer.php'; ?>
</body>

</html>