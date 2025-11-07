<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Holyland Pilgrimage — Africa Visa Travel</title>

    <style>
        /* -------------------------
       Basic reset & variables
       ------------------------- */
        :root {
            --green: #1bbd36;
            --dark: #222;
            --muted: #666;
            --bg: #fafafa;
            --card-shadow: 0 8px 30px rgba(17, 17, 17, 0.08);
            --container: 1180px;
            --radius: 8px;
            --max-width: 1200px;
        }

        * {
            box-sizing: border-box
        }

        html,
        body {
            height: 100%
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: var(--dark);
            background: var(--bg);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        a {
            color: var(--green);
            text-decoration: none
        }

        a:hover {
            text-decoration: underline
        }

        /* -------------------------
       Header / Nav
       ------------------------- */
        .site-header {
            background: #fff;
            border-bottom: 1px solid #eee;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .site-header .wrap {
            max-width: var(--container);
            margin: 0 auto;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo img {
            height: 44px;
            width: auto
        }

        .site-title {
            font-weight: 700;
            font-size: 18px;
            color: var(--dark)
        }

        nav.primary {
            display: flex;
            gap: 18px;
            align-items: center
        }

        nav.primary a {
            color: var(--muted);
            font-size: 15px
        }

        .cta {
            background: var(--green);
            color: #fff;
            padding: 8px 12px;
            border-radius: 6px;
            font-weight: 600;
            box-shadow: 0 6px 18px rgba(27, 189, 54, 0.12);
        }

        /* mobile nav button */
        .menu-toggle {
            display: none;
            border: 0;
            background: transparent;
            font-size: 22px;
            cursor: pointer;
        }

        /* -------------------------
       Hero / breadcrumb
       ------------------------- */
        .hero {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.06)), url('assets/hero.jpg') center/cover no-repeat;
            padding: 48px 20px;
            color: #fff;
        }

        .hero .wrap {
            max-width: var(--container);
            margin: 0 auto;
        }

        .breadcrumb {
            font-size: 14px;
            opacity: 0.95;
            margin-bottom: 8px
        }

        .hero h1 {
            margin: 6px 0 0;
            font-size: 34px;
            line-height: 1.05;
            font-weight: 800;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.25)
        }

        /* -------------------------
       Main layout
       ------------------------- */
        .container {
            max-width: var(--container);
            margin: 28px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 360px;
            gap: 34px;
            align-items: start;
        }

        /* left article */
        article.post {
            background: #fff;
            padding: 26px;
            border-radius: 10px;
            box-shadow: var(--card-shadow);
        }

        .post .meta {
            display: flex;
            gap: 14px;
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 8px
        }

        .post h2 {
            margin: 6px 0 16px;
            font-size: 26px;
            color: var(--dark)
        }

        .post .lead {
            color: var(--muted);
            line-height: 1.7;
            margin-bottom: 18px
        }

        .post img.hero-image {
            width: 100%;
            border-radius: 8px;
            display: block;
            margin: 12px 0 18px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06)
        }

        /* itinerary accordion */
        .itinerary .day {
            border-top: 1px solid #eee;
            padding: 14px 0;
        }

        .itinerary .day:first-child {
            border-top: 0
        }

        .itinerary .day h3 {
            margin: 0;
            font-size: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer
        }

        .itinerary .day p {
            margin: 8px 0 0;
            color: var(--muted);
            display: none;
            line-height: 1.7
        }

        /* -------------------------
       Right sidebar
       ------------------------- */
        aside.sidebar {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: var(--card-shadow)
        }

        .book-now h4 {
            margin: 0 0 10px;
            font-size: 18px
        }

        .price-tag {
            font-size: 22px;
            color: var(--green);
            font-weight: 800;
            margin-bottom: 8px
        }

        .book-now button {
            display: block;
            width: 100%;
            background: var(--green);
            color: #fff;
            border: 0;
            padding: 12px;
            border-radius: 8px;
            font-weight: 700;
            cursor: pointer
        }

        .contact small {
            color: var(--muted)
        }

        .socials {
            display: flex;
            gap: 10px;
            margin-top: 8px
        }

        .socials a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 6px;
            background: #f3f3f3;
            color: var(--dark);
            text-decoration: none
        }

        /* useful links */
        .links ul {
            list-style: none;
            padding: 0;
            margin: 0
        }

        .links li {
            padding: 8px 0;
            border-bottom: 1px dashed #f0f0f0
        }

        .links a {
            color: var(--muted)
        }

        /* -------------------------
       Footer
       ------------------------- */
        footer.site-footer {
            margin-top: 36px;
            background: #fff;
            border-top: 1px solid #eee;
            padding: 26px 20px;
        }

        footer .wrap {
            max-width: var(--container);
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            gap: 20px;
            align-items: center;
            flex-wrap: wrap
        }

        footer small {
            color: var(--muted)
        }

        /* -------------------------
       Responsive
       ------------------------- */
        @media (max-width:1000px) {
            .container {
                grid-template-columns: 1fr 320px
            }
        }

        @media (max-width:880px) {
            nav.primary {
                display: none
            }

            .menu-toggle {
                display: inline-block
            }

            .container {
                grid-template-columns: 1fr;
                padding-bottom: 30px
            }

            .hero {
                padding: 28px 20px
            }

            .logo img {
                height: 38px
            }
        }

        /* mobile menu overlay */
        .mobile-nav {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            display: none;
            z-index: 200;
            padding: 60px 20px 20px;
        }

        .mobile-nav .menu {
            background: #fff;
            border-radius: 8px;
            max-width: 420px;
            margin: 0 auto;
            padding: 18px
        }

        .mobile-nav a {
            display: block;
            padding: 10px 8px;
            border-bottom: 1px solid #eee;
            color: var(--dark)
        }

        /* small helpers */
        .muted {
            color: var(--muted)
        }

        .pill {
            display: inline-block;
            background: #f3fff4;
            color: var(--green);
            padding: 6px 10px;
            border-radius: 999px;
            font-weight: 700;
            font-size: 13px
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="site-header">
        <div class="wrap"
            style="max-width:1200px;margin:0 auto;display:flex;align-items:center;justify-content:space-between">
            <div style="display:flex;align-items:center;gap:14px">
                <a class="logo" href="#">
                    <img src="images/One.png" alt="logo">
                    <div>
                        <div class="site-title">Africa Visa Travel</div>
                        <div style="font-size:12px;color:#999">Visas & Tours</div>
                    </div>
                </a>
            </div>

            <nav class="primary" aria-label="Primary navigation">
                <a href="#">Home</a>
                <a href="#">World Travel</a>
                <a href="#">Kenya</a>
                <a href="#">Contact</a>
                <a class="cta" href="#">Book Now</a>
            </nav>

            <button class="menu-toggle" id="menuToggle" aria-label="Open menu">☰</button>
        </div>
    </header>

    <!-- Mobile overlay menu -->
    <div class="mobile-nav" id="mobileNav" aria-hidden="true">
        <div class="menu">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">World Travel</a>
            <a href="#">Visa</a>
            <a href="#">Contact Us</a>
            <a href="#"
                style="display:block;margin-top:8px;background:var(--green);color:#fff;padding:10px;border-radius:6px;text-align:center">Book
                Now</a>
        </div>
    </div>

    <!-- Hero / breadcrumb -->
    <section class="hero" role="banner">
        <div class="wrap">
            <div class="breadcrumb">Home &raquo; World Travel &raquo; Holyland Pilgrimage</div>
            <h1>Holyland Pilgrimage</h1>
            <div style="margin-top:10px;">
                <span class="pill">12 Days</span>
                <span style="margin-left:12px;color:#fff;opacity:0.9">From Nairobi to Egypt & Israel</span>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <main class="container" role="main">
        <!-- Left column -->
        <article class="post">
            <div class="meta">
                <div>By <strong>Africa Visa Travel</strong></div>
                <div>•</div>
                <div class="muted">Updated: 2022</div>
                <div style="margin-left:auto" class="muted">Share: <a href="#">Facebook</a> • <a href="#">Twitter</a>
                </div>
            </div>

            <h2>...another lifetime experience!</h2>
            <p class="lead">Israel and Egypt are rich in biblical history. Join us for an immersive pilgrimage visiting
                the Pyramids, Jerusalem, Bethlehem, the Sea of Galilee and more.</p>

            <img class="hero-image" src="images/safari.jpg" alt="Pyramids and Holy Sites">

            <section>
                <h3 style="margin-top:0">Trip highlights</h3>
                <p class="muted">The Pyramids of Giza | Coptic Cairo | Mt. Sinai | The Dead Sea | Jerusalem & Bethlehem
                    | Sea of Galilee | River Jordan</p>
            </section>

            <section style="margin-top:18px">
                <h3>Why travel with Africa Visa Travel?</h3>
                <ul style="line-height:1.8;color:var(--muted)">
                    <li>Experienced guides and carefully selected partners.</li>
                    <li>Comfortable hotels and transport included.</li>
                    <li>Tailored pilgrimages for groups and churches.</li>
                </ul>
            </section>

            <section class="itinerary" style="margin-top:18px">
                <h3 style="margin-bottom:12px">Itinerary in brief</h3>

                <!-- day 1 -->
                <div class="day">
                    <h3 data-day="1">DAY ONE: NAIROBI - EGYPT <span class="muted">• Arrival & transfer</span></h3>
                    <p>Flight Nairobi – Cairo; ‘Meet & assist’ service at the airport; Arrival airport / Hotel transfer.
                        Overnight: Cairo.</p>
                </div>

                <div class="day">
                    <h3 data-day="2">DAY TWO: EGYPT <span class="muted">• Pyramids & Old Cairo</span></h3>
                    <p>Visit the Great Pyramids of Giza and the Sphinx; Visit the Pharaonic Village; Old / Coptic Cairo
                        - The Hanging Church, St. Sergius, Ben Ezra Synagogue.</p>
                </div>

                <div class="day">
                    <h3 data-day="3">DAY THREE: EGYPT <span class="muted">• Drive to St. Catherine</span></h3>
                    <p>Drive across the Suez to St. Catherine (Mt. Sinai), evening at leisure. Overnight at St.
                        Catherine.</p>
                </div>

                <div class="day">
                    <h3 data-day="4">DAY FOUR: EGYPT <span class="muted">• Mt. Sinai climb</span></h3>
                    <p>Mountain Sinai climb; visit the Burning Bush; transfer to Taba for overnight.</p>
                </div>

                <div class="day">
                    <h3 data-day="5">DAY FIVE: ISRAEL <span class="muted">• Enter Israel & Dead Sea</span></h3>
                    <p>Cross to Israel; visit Jericho, float on the Dead Sea; proceed to Jerusalem.</p>
                </div>

                <!-- more days would follow similarly -->
            </section>

            <section style="margin-top:22px">
                <h3>Included</h3>
                <ul style="line-height:1.8;color:var(--muted)">
                    <li>Meet and assist at airports, accommodation, daily sightseeing, meals as indicated, entrance
                        fees, professional English-speaking guide.</li>
                </ul>
            </section>

        </article>

        <!-- Right column (sidebar) -->
        <aside class="sidebar">
            <div class="card book-now">
                <h4>Book this pilgrimage</h4>
                <div class="price-tag">Price: <span style="font-size:18px;color:#111">On request</span></div>
                <p class="muted" style="margin:0 0 12px">Register with Kes. 20,000. Final payment at least 30 days
                    before travel.</p>
                <button id="bookBtn">Enquire / Book</button>
            </div>

            <div class="card contact">
                <h4>Contact</h4>
                <div style="margin-top:8px">
                    <small>Phone</small>
                    <div style="font-weight:700">+254 733 283632</div>
                </div>
                <div style="margin-top:10px">
                    <small>Email</small>
                    <div><a href="mailto:africa@africavisatravel.com">africa@africavisatravel.com</a></div>
                </div>
                <div class="socials">
                    <a href="#" title="Facebook">f</a>
                    <a href="#" title="Twitter">t</a>
                    <a href="#" title="LinkedIn">in</a>
                </div>
            </div>

            <div class="card links">
                <h4>Other services</h4>
                <ul>
                    <li><a href="#">Nairobi Excursions</a></li>
                    <li><a href="#">Mombasa Excursions</a></li>
                    <li><a href="#">Visa Services</a></li>
                    <li><a href="#">Travel Tips</a></li>
                </ul>
            </div>
        </aside>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="wrap">
            <div>
                <strong>Africa Visa Travel</strong><br>
                Suite 9, 3rd Flr, Standard Building, Nairobi
            </div>
            <div style="text-align:right">
                <small>© 2011 - 2024 Africa Visa Travel and Safaris. All Rights Reserved.</small>
            </div>
        </div>
    </footer>

    <!-- ----------------------------
       Minimal JS for interactions
       ---------------------------- -->
    <script>
        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileNav = document.getElementById('mobileNav');
        menuToggle.addEventListener('click', () => {
            const open = mobileNav.style.display === 'block';
            mobileNav.style.display = open ? 'none' : 'block';
            mobileNav.setAttribute('aria-hidden', open ? 'true' : 'false');
        });
        // close mobile menu when clicking outside
        mobileNav.addEventListener('click', e => {
            if (e.target === mobileNav) {
                mobileNav.style.display = 'none';
                mobileNav.setAttribute('aria-hidden', 'true');
            }
        });

        // Itinerary accordion
        document.querySelectorAll('.itinerary .day h3').forEach(h => {
            h.addEventListener('click', () => {
                const p = h.parentElement.querySelector('p');
                const isOpen = p.style.display === 'block';
                // close all
                document.querySelectorAll('.itinerary .day p').forEach(x => x.style.display = 'none');
                if (!isOpen) p.style.display = 'block';
            });
        });

        // Book button demo
        document.getElementById('bookBtn').addEventListener('click', () => {
            alert('Thank you! Please contact us at africa@africavisatravel.com or call +254 733 283632 to book.');
        });
    </script>
</body>

</html>