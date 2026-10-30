<?php
$view->open([
    'title'  => 'Contact Us | Track Asia Cup  | Tagaytay 2026',
    'header' => 'acc',
    'extraHead' => '
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <style>
         :root {
            --hue: 223;
            --bg: hsl(var(--hue), 90%, 90%);
            --fg: hsl(var(--hue), 90%, 10%);
            --primary: hsl(var(--hue), 90%, 50%);
            --trans-dur: 0.3s;
            font-size: calc(16px + (32 - 16) * (100vw - 320px) / (2560 - 320));
        }
        /* body {
	background-color: var(--bg);
	color: var(--fg);
	display: flex;
	font: 1em/1.5 sans-serif;
	height: 100vh;
	transition:
		background-color var(--trans-dur),
		color var(--trans-dur);
} */
        
        .letterhead {
            /* background: #f6f7e3; */
            /* background: rgba(255, 255, 255, 0.95); */
            /* border-bottom: 1px solid #e5e5e5; */
        }
        
        .letterhead-inner {
            display: flex;
            justify-content: center;
            /* centers horizontally */
            align-items: center;
            /* centers vertically */
            padding: 10px 20px;
        }
        
        .letterhead-logo {
            max-width: 40%;
            height: auto;
        }
        
        .letterhead-logo {
            max-width: 750px;
            width: 100%;
        }
        
        @media (max-width: 768px) {
            .letterhead-logo {
                max-width: 90%;
            }
        }
        
        .bike {
            display: block;
            margin: auto;
            width: 30em;
            height: auto;
        }
        
        .bike__body,
        .bike__front,
        .bike__handlebars,
        .bike__pedals,
        .bike__pedals-spin,
        .bike__seat,
        .bike__spokes,
        .bike__spokes-spin,
        .bike__tire {
            animation: bikeBody 3s ease-in-out infinite;
            stroke: var(--primary);
            transition: stroke var(--trans-dur);
        }
        
        .bike__front {
            animation-name: bikeFront;
        }
        
        .bike__handlebars {
            animation-name: bikeHandlebars;
        }
        
        .bike__pedals {
            animation-name: bikePedals;
        }
        
        .bike__pedals-spin {
            animation-name: bikePedalsSpin;
        }
        
        .bike__seat {
            animation-name: bikeSeat;
        }
        
        .bike__spokes,
        .bike__tire {
            stroke: currentColor;
        }
        
        .bike__spokes {
            animation-name: bikeSpokes;
        }
        
        .bike__spokes-spin {
            animation-name: bikeSpokesSpin;
        }
        
        .bike__tire {
            animation-name: bikeTire;
        }
        /* Dark theme */
        
        @media (prefers-color-scheme: dark) {
             :root {
                --bg: hsl(var(--hue), 90%, 10%);
                --fg: hsl(var(--hue), 90%, 90%);
            }
        }
        /* Animations */
        
        @keyframes bikeBody {
            from {
                stroke-dashoffset: 79;
            }
            33%,
            67% {
                stroke-dashoffset: 0;
            }
            to {
                stroke-dashoffset: -79;
            }
        }
        
        @keyframes bikeFront {
            from {
                stroke-dashoffset: 19;
            }
            33%,
            67% {
                stroke-dashoffset: 0;
            }
            to {
                stroke-dashoffset: -19;
            }
        }
        
        @keyframes bikeHandlebars {
            from {
                stroke-dashoffset: 10;
            }
            33%,
            67% {
                stroke-dashoffset: 0;
            }
            to {
                stroke-dashoffset: -10;
            }
        }
        
        @keyframes bikePedals {
            from {
                animation-timing-function: ease-in;
                stroke-dashoffset: -25.133;
            }
            33%,
            67% {
                animation-timing-function: ease-out;
                stroke-dashoffset: -21.991;
            }
            to {
                stroke-dashoffset: -25.133;
            }
        }
        
        @keyframes bikePedalsSpin {
            from {
                transform: rotate(0.1875turn);
            }
            to {
                transform: rotate(3.1875turn);
            }
        }
        
        @keyframes bikeSeat {
            from {
                stroke-dashoffset: 5;
            }
            33%,
            67% {
                stroke-dashoffset: 0;
            }
            to {
                stroke-dashoffset: -5;
            }
        }
        
        @keyframes bikeSpokes {
            from {
                animation-timing-function: ease-in;
                stroke-dashoffset: -31.416;
            }
            33%,
            67% {
                animation-timing-function: ease-out;
                stroke-dashoffset: -23.562;
            }
            to {
                stroke-dashoffset: -31.416;
            }
        }
        
        @keyframes bikeSpokesSpin {
            from {
                transform: rotate(0);
            }
            to {
                transform: rotate(3turn);
            }
        }
        
        @keyframes bikeTire {
            from {
                animation-timing-function: ease-in;
                stroke-dashoffset: 56.549;
                transform: rotate(0);
            }
            33% {
                stroke-dashoffset: 0;
                transform: rotate(0.33turn);
            }
            67% {
                animation-timing-function: ease-out;
                stroke-dashoffset: 0;
                transform: rotate(0.67turn);
            }
            to {
                stroke-dashoffset: -56.549;
                transform: rotate(1turn);
            }
        }
    </style>

    <style>
        /* =========================================================
        TRACK ASIA CUP 2026 - CONTACT PAGE
        ========================================================= */

        .contact-page {
            background: #001a38;
            color: #fff;
        }

        /* =========================================================
        CONTACT HERO
        ========================================================= */

        .contact-hero {
            position: relative;
            min-height: 250px;
            display: flex;
            align-items: center;
            overflow: hidden;

            background:
                linear-gradient(
                    90deg,
                    rgba(17, 55, 170, 0.98) 0%,
                    rgba(28, 65, 190, 0.96) 55%,
                    rgba(25, 58, 175, 0.88) 100%
                );

            border-bottom: 1px solid rgba(0, 150, 255, 0.45);
        }

        .contact-hero::after {
            content: "";
            position: absolute;
            right: -40px;
            top: 0;
            width: 230px;
            height: 100%;

            background:
                linear-gradient(
                    125deg,
                    transparent 0%,
                    transparent 42%,
                    rgba(0, 29, 90, 0.45) 43%,
                    rgba(0, 29, 90, 0.45) 58%,
                    transparent 59%
                );

            pointer-events: none;
        }

        .contact-hero-content {
            width: min(1180px, 92%);
            margin: 0 auto;
            position: relative;
            z-index: 2;
            padding: 48px 0;
        }

        .contact-breadcrumb {
            display: flex;
            align-items: center;
            gap: 12px;

            margin: 0 0 10px;
            padding: 0;

            list-style: none;

            color: #ffffff;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .contact-breadcrumb a {
            color: #55bdff;
            text-decoration: none;
        }

        .contact-breadcrumb a:hover {
            color: #fff;
        }

        .contact-breadcrumb .separator {
            color: rgba(255,255,255,0.55);
        }

        .contact-hero h1 {
            color: #fff;
            font-size: 52px;
            line-height: 1;
            font-weight: 900;
            margin: 0;
        }

        /* =========================================================
        MAIN CONTACT AREA
        ========================================================= */

        .contact-main {
            padding: 30px 0 35px;

            background:
                radial-gradient(
                    circle at 85% 15%,
                    rgba(0, 112, 255, 0.13),
                    transparent 34%
                ),
                #001a38;
        }

        .contact-container {
            width: min(1180px, 92%);
            margin: 0 auto;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 0.95fr 1.15fr;
            gap: 28px;
            align-items: stretch;
        }

        /* =========================================================
        CONTACT INFORMATION CARD
        ========================================================= */

        .contact-intro {
            padding: 30px 32px;

            border: 1px solid rgba(61, 157, 230, 0.30);
            border-radius: 7px;

            background:
                linear-gradient(
                    145deg,
                    rgba(2, 30, 65, 0.96),
                    rgba(0, 20, 47, 0.98)
                );

            box-shadow:
                0 15px 35px rgba(0, 0, 0, 0.16);

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-intro-label {
            color: #42b9ff;

            font-size: 12px;
            font-weight: 800;
            letter-spacing: 3px;

            text-transform: uppercase;

            margin-bottom: 9px;
        }

        .contact-intro h2 {
            color: #fff;

            font-size: 31px;
            line-height: 1.15;
            font-weight: 900;

            margin: 0 0 10px;
        }

        .contact-intro h2 .blue {
            color: #32aef5;
        }

        .contact-intro-text {
            color: #d6e6f7;

            font-size: 14px;
            line-height: 1.55;

            margin: 0;

            max-width: 470px;
        }

        /* separator */

        .contact-intro-divider {
            width: 100%;
            height: 1px;

            background: rgba(255,255,255,0.18);

            margin: 18px 0 18px;
        }

        /* =========================================================
        CONTACT DETAILS
        ========================================================= */

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .contact-detail {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .contact-icon {
            flex: 0 0 48px;

            width: 48px;
            height: 48px;

            border-radius: 50%;

            background:
                linear-gradient(
                    145deg,
                    #0799f4,
                    #0759bd
                );

            display: flex;
            align-items: center;
            justify-content: center;

            color: #fff;
            font-size: 18px;

            box-shadow:
                0 7px 18px rgba(0, 103, 210, 0.28);
        }

        .contact-detail-content {
            padding-top: 2px;
        }

        .contact-detail-label {
            color: #42b9ff;

            font-size: 10px;
            line-height: 1.2;

            font-weight: 800;
            letter-spacing: 2px;

            text-transform: uppercase;

            margin-bottom: 5px;
        }

        .contact-detail-content a,
        .contact-detail-content span {
            color: #fff;

            font-size: 14px;
            line-height: 1.5;

            text-decoration: none;
        }

        .contact-detail-content a:hover {
            color: #42b9ff;
        }

        /* CSS Additions */
.email-list {
    display: flex;
    flex-direction: column;
    gap: 3px;
}

        /* =========================================================
        VIEW LOCATION BUTTON
        ========================================================= */

        .maps-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;

            margin-top: 7px;

            padding: 9px 17px;

            border: 1px solid #079ff5;
            border-radius: 30px;

            color: #fff;

            font-size: 12px;
            font-weight: 700;

            text-decoration: none;

            transition:
                background 0.25s ease,
                border-color 0.25s ease,
                transform 0.25s ease;
        }

        .maps-button:hover {
            background: #087bd5;
            border-color: #087bd5;
            color: #fff;

            transform: translateX(2px);
        }

        /* =========================================================
        PROMOTIONAL IMAGE
        ========================================================= */


        .contact-promo {
            position: relative;
            min-height: 410px;
            border-radius: 7px;
            overflow: hidden;
            background:
                linear-gradient(
                    90deg,
                    rgba(0, 25, 55, 0.12),
                    rgba(0, 20, 52, 0.58)
                ),
                url("../assets/images/gallery/side-cycling.jpg")
                center center / cover no-repeat;
            box-shadow:
                0 15px 35px rgba(0, 0, 0, 0.22);
        }

        /*
        Darker right-side treatment so the
        promotional typography remains readable.
        */

        .contact-promo::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    105deg,
                    transparent 10%,
                    rgba(0, 25, 60, 0.20) 35%,
                    rgba(0, 20, 55, 0.72) 65%,
                    rgba(0, 15, 40, 0.92) 100%
                );
            pointer-events: none;
        }

        .contact-promo-content {
            position: absolute;
            z-index: 3;
            right: 42px;
            left: auto;
            top: 50%;
            transform: translateY(-50%);
            width: 310px;
            text-align: right;
        }

        .promo-small {
            color: #42baff;
            font-size: 13px;
            font-style: italic;
            font-weight: 800;
            letter-spacing: 4px;
            margin-bottom: 10px;
        }

        .promo-title {
            color: #fff;
            font-size: 43px;
            line-height: 0.98;
            font-weight: 900;
            font-style: italic;
            margin: 0;
            text-transform: uppercase;
            text-shadow:
                0 3px 15px rgba(0,0,0,0.25);
        }

        .promo-title .blue {
            color: #42baff;
        }

       .promo-line {
            width: 62px;
            height: 5px;
            background: #ed1b2f;
            margin-top: 17px;
            margin-left: auto;
        }

        /* =========================================================
        MOBILE
        ========================================================= */

        @media (max-width: 991px) {

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .contact-promo {
                min-height: 350px;
            }

        }

        @media (max-width: 768px) {

            .contact-hero {
                min-height: 210px;
            }

            .contact-hero-content {
                padding: 35px 0;
            }

            .contact-hero h1 {
                font-size: 40px;
            }

            .contact-main {
                padding: 25px 0 35px;
            }

            .contact-intro {
                padding: 27px 25px;
            }

            .contact-intro h2 {
                font-size: 28px;
            }

            .contact-promo {
                min-height: 310px;
            }

            .contact-promo-content {
                left: 30px;
                width: 260px;
            }

            .promo-title {
                font-size: 35px;
            }

        }

        @media (max-width: 480px) {

            .contact-hero h1 {
                font-size: 33px;
            }

            .contact-breadcrumb {
                font-size: 11px;
            }

            .contact-intro {
                padding: 24px 20px;
            }

            .contact-intro h2 {
                font-size: 25px;
            }

            .contact-intro-text {
                font-size: 13px;
            }

            .contact-promo {
                min-height: 270px;
            }

            .contact-promo-content {
                left: 22px;
                width: 220px;
            }

            .promo-small {
                font-size: 9px;
                letter-spacing: 3px;
            }

            .promo-title {
                font-size: 29px;
            }

            .contact-detail-content a,
            .contact-detail-content span {
                font-size: 13px;
            }

        }
    </style>
',
    'banner' => [
        'title'  => 'Contact Us',
        'crumbs' => [
            ['text' => 'Home', 'href' => '/', 'class' => 'home-page-link'],
            ['text' => 'Contact Us', 'href' => '/contact', 'class' => 'current-page']
        ],
    ],
]);
?>
    </header>
    <!--================= Header Section End Here =================-->

    

    <!--================= Contact Page Start =================-->

    <div class="contact-page">

        <!-- ================= CONTACT MAIN ================= -->

        <section class="contact-main">
            <div class="contact-container">

                <div class="contact-grid">

                    <!-- ================= CONTACT INFORMATION ================= -->

                    <div class="contact-intro">

                        <div class="contact-intro-label">
                            Get In Touch
                        </div>

                        <h2>
                            Contact <span class="blue">Track Asia Cup</span>
                        </h2>

                        <p class="contact-intro-text">
                            For event inquiries, partnership opportunities, and
                            other concerns, please reach out to the Track Asia Cup
                            organizing team.
                        </p>

                        <div class="contact-intro-divider"></div>
                        <div class="contact-details">

                            <!-- EMAIL -->

                            <div class="contact-detail">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-detail-content">
                                    <div class="contact-detail-label">
                                        Email
                                    </div>
                                    <div class="email-list">
                                        <a href="mailto:philcycling@gmail.com">
                                            philcycling@gmail.com
                                        </a>
                                        <a href="mailto:philcycling.id@gmail.com">
                                            philcycling.id@gmail.com
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <!-- VENUE -->

                            <div class="contact-detail">

                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>

                                <div class="contact-detail-content">

                                    <div class="contact-detail-label">
                                        Venue
                                    </div>

                                    <span>
                                        <strong>Tagaytay CT Velodrome</strong><br>
                                        Crisanto M. De Los Reyes Ave,<br>
                                        Tagaytay City, Cavite, 4120, Philippines
                                    </span>

                                    <br>

                                    <a
                                        href="https://maps.app.goo.gl/Uen4dspoVQCTf71d9"
                                        class="maps-button"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        <i class="fas fa-location-arrow"></i>
                                        View Location
                                        <i class="fas fa-chevron-right"></i>
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- ================= PROMOTIONAL IMAGE ================= -->

                    <div class="contact-promo">

                        <div class="contact-promo-content">

                            <div class="promo-small">
                                TRACK ASIA CUP 2026
                            </div>

                            <h2 class="promo-title">
                                FASTER<br>
                                STRONGER<br>
                                <span class="blue">TOGETHER</span>
                            </h2>

                            <div class="promo-line"></div>

                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>

    <!--================= Contact Page End =================-->


    <!--================= Footer Start Here =================-->
    <div class="footer footer1">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo"><img src="assets/images/2026_ACC_TAC_Letterhead_1.webp" alt="footer-logo">
                            </div>
                            <p class="footer-text">Track Asia Cup 2026 — Experience the Speed and Excitement as Champions Race for Glory!
                            </p>
                            <div class="social-links">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title"><span class="decorator"></span> ESSENTIAL LINKS</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item"><a href="https://www.uci.org/" target="_blank" rel="noopener noreferrer">Union Cycliste Internationale</a></li>
                                <li class="widget-list-item"><a href="https://www.accasia.org/" target="_blank" rel="noopener noreferrer">Asian Cycling Confederation</a></li>
                                <li class="widget-list-item"><a href="https://psc.gov.ph/" target="_blank" rel="noopener noreferrer">Philippine Sports Commission</a></li>
                                <li class="widget-list-item"><a href="https://www.tagaytay.gov.ph//" target="_blank" rel="noopener noreferrer">Tagaytay City Government</a></li>
                                <li class="widget-list-item"><a href="https://www.olympic.ph/" target="_blank" rel="noopener noreferrer">Philippine Olympic Committee</a></li>
                                <li class="widget-list-item"><a href="https://www.facebook.com/philcycling/" target="_blank" rel="noopener noreferrer">Philcycling</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget address-widget">
                            <h3 class="footer-widget-title"><span class="decorator"></span> GET IN TOUCH</h3>
                            <ul>
                                <li class="widget-list-item"><i class="fas fa-envelope-open"></i><a href="mailto:philcycling.offroad@gmail.com">philcycling@gmail.com</a></li>
                                <li class="widget-list-item"><i class="fab fa-facebook-f"></i><a href="https://www.facebook.com/philcycling/">Philcycling</a></li>
                                <!-- <li class="widget-list-item"><i class="fas fa-phone"></i><a href="tel:09877788890">098
                                        777
                                        888 90</a></li> -->
                                <li class="widget-list-item"><i class="fas fa-map-marker-alt"></i> <span>TAGAYTAY CT VELODROME, <br> CRISANTO M. DE LOS REYES AVE, TAGAYTAY CITY, CAVITE, 4120, PHILIPPINES <br></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="bottom-area-inner">
                    <span class="copyright">COPYRIGHT - 2026</span>
                </div>
            </div>
        </div>
    </div>
    <!--================= Footer End Here =================-->
<?php $view->close(); ?>
