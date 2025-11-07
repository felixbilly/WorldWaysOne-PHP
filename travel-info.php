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
        <h1>Travel Information</h1>
        <p>Helpful tips and essential information for your journey</p>
    </section><br>


    <!-- RELATED TOURS SECTION -->
    <section class="related-tours py-5 pilgrim-slider-section">
        <div class="container">
            <h2 class="text-center mb-4" style="font-weight:700; color:var(--dark);">Related Tours</h2>

            <h2>Passports & Visas</h2>
            <p>
                All travelers must hold a valid passport with at least six (6) months’ validity from the date of entry
                into
                the destination country.
                Ensure that your passport has adequate blank pages for visa stamps.
                Visa requirements vary by destination — our team can assist you with visa application guidance and
                documentation.
            </p>
            <div class="info-box">
                <strong>Tip:</strong> Apply for visas early to avoid last-minute delays, especially during peak travel
                seasons.
            </div>

            <h2>Health & Vaccinations</h2>
            <p>
                Some destinations may require proof of certain vaccinations such as Yellow Fever or COVID-19
                certificates.
                It’s advisable to consult your doctor or a certified travel clinic at least 4–6 weeks before travel.
            </p>
            <ul>
                <li>Carry essential medications and prescriptions in your hand luggage.</li>
                <li>Drink bottled or treated water in new destinations.</li>
                <li>Have travel insurance that covers medical emergencies abroad.</li>
            </ul>

            <h2>Travel Insurance</h2>
            <p>
                Comprehensive travel insurance is highly recommended for all tours.
                Policies should cover medical emergencies, trip cancellation, lost luggage, and personal liability.
                Africa Visa Travel can recommend trusted insurance partners upon request.
            </p>

            <h2>Currency & Payments</h2>
            <p>
                Most destinations in Africa accept both local currency and major international currencies (USD, EUR).
                ATMs are available in major cities. It’s advisable to carry small denominations for tips and minor
                purchases.
            </p>
            <div class="info-box">
                <strong>Pro Tip:</strong> Notify your bank of travel dates to avoid card transaction blocks while
                abroad.
            </div>

            <h2>Safety & Security</h2>
            <p>
                Kenya and other African destinations are generally safe for tourists.
                However, exercise common sense as you would anywhere — avoid carrying large sums of cash, keep valuables
                in
                hotel safes, and follow your guide’s instructions.
            </p>

            <h2>Climate & What to Pack</h2>
            <p>
                The climate varies depending on the destination and season:
            </p>
            <ul>
                <li><strong>Nairobi & Central Kenya:</strong> Mild climate; light jackets for evenings.</li>
                <li><strong>Coastal Region (Mombasa, Diani):</strong> Warm and humid; light cotton clothing and
                    sunscreen
                    recommended.</li>
                <li><strong>Safari Regions:</strong> Comfortable neutral-colored clothing, hat, sunglasses, and sturdy
                    shoes.</li>
            </ul>

            <h2>Cultural Etiquette</h2>
            <p>
                Kenya and other African nations are rich in diverse cultures and traditions.
                Respect local customs, dress modestly in rural or religious areas, and always ask permission before
                photographing people.
            </p>

            <h2>Emergency Contacts</h2>
            <p>
                In case of emergencies during your travel, please reach out to your tour guide or our office
                immediately.
            </p>
            <div class="info-box">
                <strong>24/7 Emergency Line:</strong> +254 723 565 739
                <br><strong>Email:</strong> <a href="mailto:info@worldwaysone.co.ke">info@worldwaysone.co.ke</a>
            </div>

            <p style="margin-top:40px;color:#1bbd36;font-weight:600;text-align:center;">
                Safe travels and unforgettable experiences — from your World Ways One Travel team!
            </p>
        </div>
    </section>


    <script>
        document.querySelectorAll('.day-header').forEach(header => {
            header.addEventListener('click', () => {
                header.parentElement.classList.toggle('active');
            });
        });
    </script>





    <?php include 'footer.php'; ?>
</body>

</html>