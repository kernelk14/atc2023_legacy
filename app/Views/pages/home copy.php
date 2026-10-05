<?php
require __DIR__ . '/countries.php';
?>

<?php

$view->open([
    'title'     => 'Track Asia Cup | Tagaytay 2026',
    'header'    => 'acc',
    'active'    => 'home',
    'banner'    => ['rawHtml' => '
<!--================= Banner Section Start Here =================-->
<div class="banner banner1">
    <div class="swiper bannerSlide">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner-single banner-single-1 banner-bg">
                    <div class="container">
                        <div class="banner-content">
                            <span class="pretitle">WELCOME TO TAGAYTAY CT VELODROME </span>
                            <h1 class="banner-heading">TRACK ASIA CUP 2026</h1>
                            <div class="banner-btn-area">
                                <a href="/team" class="team-btn banner-btn">Technical Handbook<i class="far fa-long-arrow-right ml--5"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-single banner-single-1_2 banner-bg">
                    <div class="container">
                        <div class="banner-content">
                            <span class="pretitle">NO BRAKES, NO LIMITS</span>
                            <h1 class="banner-heading">UNLEASH THE VELOCITY</h1>
                            <div class="banner-btn-area">
                                <a href="/team" class="team-btn banner-btn">Technical Handbook <i class="far fa-long-arrow-right ml--5"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-pagination-area">
            <div class="swiper-pagination">
                <span class="swiper-pagination-bullet one"></span>
                <span class="swiper-pagination-bullet two"></span>
            </div>
        </div>
    </div>
</div>
<!--================= Banner Section End Here =================-->
'],
    'extraHead' => '
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- NEON EFFECTS CURSOR -->
    <style>
        /* 1. Para sa Participating Nations (Flags) */
        
        .rts-team-area .col-lg-2>div {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .rts-team-area .col-lg-2>div:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 20px #007bff;
            /* Blue Glow */
            border-color: #007bff !important;
        }
        /* 2. Para sa Events Cards (Race Info) */
        
        .rts-service-area .col-lg-3>div {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .rts-service-area .col-lg-3>div:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 25px rgba(0, 132, 255, 0.6);
            /* White Glow */
            z-index: 10;
        }
        /* 3. Para sa Local Organizng Committee */

        .loc-committee-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 55px;
            margin: 10px 0 25px;

            transform: translateX(-50px);
        }

        .loc-logo {
            width: 250px;
            height: 150px;
            padding: 0;

            display: flex;
            justify-content: center;
            align-items: center;

            background: transparent;
            border: none;
            transition: all 0.3s ease;
        }

        .loc-logo img {
            display: block;
            max-width: none;
            max-height: none;
            width: auto;
            height: auto;
            object-fit: contain;
        }

        .tagaytay-logo {
            width: 220px !important;
            height: auto !important;
        }

        .philcycling-logo {
            width: 280px !important;
            height: auto !important;
        }

        .loc-logo:hover {
            transform: translateY(-10px);
            filter: drop-shadow(0 0 18px rgba(0, 132, 255, 0.6));
        }

        @media (max-width: 576px) {
            .loc-committee-logos {
                gap: 10px;
                margin: 5px 0 20px;
                transform: translateX(0);
            }

            .loc-logo {
                width: 170px;
                height: 110px;
            }

            .tagaytay-logo {
                width: 150px !important;
            }

            .philcycling-logo {
                width: 180px !important;
            }
        }
        }
    </style>
',
]);
?>


    <!--================= Header Section End Here =================-->

    <!--================= countdown section start here =================-->

    <div class="countdown-area" data-aos="fade-up" style="background: #0b0b1b; padding: 40px 0; border-bottom: 2px solid #0056b3;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 text-center text-lg-start mb-3 mb-lg-0">
                    <h3 style="color: #fff; margin: 0; text-transform: uppercase;">OFFICIAL COUNTDOWN</h3>
                    <p style="color: #bbb; margin: 0; font-size: 14px;">December 1-7, 2026 @ Tagaytay City Velodrome</p>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div style="display: flex; gap: 20px; justify-content: center; justify-content: lg-end;">
                        <div style="text-align: center;">
                            <span id="days" style="font-size: 2.5rem; font-weight: bold; color: #007bff; display: block; line-height: 1;">00</span>
                            <span style="color: #fff; font-size: 10px; letter-spacing: 1px;">DAYS</span>
                        </div>
                        <div style="text-align: center;">
                            <span id="hours" style="font-size: 2.5rem; font-weight: bold; color: #007bff; display: block; line-height: 1;">00</span>
                            <span style="color: #fff; font-size: 10px; letter-spacing: 1px;">HOURS</span>
                        </div>
                        <div style="text-align: center;">
                            <span id="minutes" style="font-size: 2.5rem; font-weight: bold; color: #007bff; display: block; line-height: 1;">00</span>
                            <span style="color: #fff; font-size: 10px; letter-spacing: 1px;">MINS</span>
                        </div>
                        <div style="text-align: center;">
                            <span id="seconds" style="font-size: 2.5rem; font-weight: bold; color: #fff; display: block; line-height: 1;">00</span>
                            <span style="color: #fff; font-size: 10px; letter-spacing: 1px;">SECS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!--================= OFFICIAL RACE EVENTS Start Here =================-->
    <div class="rts-service-area" style="background: #0b0b1b; padding: 80px 0; border-top: 1px solid #222;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p style="color: #007bff; font-weight: bold; letter-spacing: 2px;">THE COMPETITION</p>
                    <h2 class="title" style="color: #fff; margin-bottom: 50px; text-transform: uppercase;"> Events </h2>
                </div>
            </div>

            <div class="row g-3 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-left" data-aos-delay="100">
                    <div style="background: #151525; padding: 25px; border: 1px solid #333; border-left: 4px solid #007bff; height: 100%;">
                        <h5 style="color: #fff; margin: 0; text-transform: uppercase;">Sprint</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-left" data-aos-delay="200">
                    <div style="background: #151525; padding: 25px; border: 1px solid #333; border-left: 4px solid #dc3545; height: 100%;">
                        <h5 style="color: #fff; margin: 0; text-transform: uppercase;">Keirin</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-left" data-aos-delay="300">
                    <div style="background: #151525; padding: 25px; border: 1px solid #333; border-left: 4px solid #ffc107; height: 100%;">
                        <h5 style="color: #fff; margin: 0; text-transform: uppercase;">1km Time Trial</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-left" data-aos-delay="400">
                    <div style="background: #151525; padding: 25px; border: 1px solid #333; border-left: 4px solid #28a745; height: 100%;">
                        <h5 style="color: #fff; margin: 0; text-transform: uppercase;">Team Sprint</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-left" data-aos-delay="500">
                    <div style="background: #151525; padding: 25px; border: 1px solid #333; border-left: 4px solid #17a2b8; height: 100%;">
                        <h5 style="color: #fff; margin: 0; text-transform: uppercase;">Indiv. Pursuit</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-left" data-aos-delay="600">
                    <div style="background: #151525; padding: 25px; border: 1px solid #333; border-left: 4px solid #6610f2; height: 100%;">
                        <h5 style="color: #fff; margin: 0; text-transform: uppercase;">Team Pursuit</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-left" data-aos-delay="700">
                    <div style="background: #151525; padding: 25px; border: 1px solid #333; border-left: 4px solid #e83e8c; height: 100%;">
                        <h5 style="color: #fff; margin: 0; text-transform: uppercase;">Points Race</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-left" data-aos-delay="800">
                    <div style="background: #151525; padding: 25px; border: 1px solid #333; border-left: 4px solid #fd7e14; height: 100%;">
                        <h5 style="color: #fff; margin: 0; text-transform: uppercase;">Scratch Race</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="flip-left" data-aos-delay="900">
                    <div style="background: #151525; padding: 25px; border: 1px solid #333; border-left: 4px solid #20c997; height: 100%;">
                        <h5 style="color: #fff; margin: 0; text-transform: uppercase;">Omnium</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--================= START OF PARTICIPATING NATIONS=================-->

    <!-- ================= HEADER ================= -->
    <div class="rts-team-area nations-section" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p style="color: #007bff; font-weight: 200; letter-spacing: 2px; margin-bottom: 10px; font-size: 14px;">
                        WHO WILL REIGN SUPREME?</p>
                    <h2 class="title" style="color: #fff; margin-bottom: 60px; text-transform: uppercase; font-size: 56px; font-weight: 800;">
                        Participating Nations</h2>
                </div>
            </div>

            

            <div class="row g-3 justify-content-center">
                
                <!-- ================= NATION GRID ================= -->

                <?php foreach ($countries as $country): ?>

                    <div class="col-lg-2 col-md-3 col-4 nation-card-wrapper" data-aos="zoom-in">

                        <a href="/country-detail?code=<?= urlencode($country['code']) ?>"
                        class="nation-card">

                            <img
                                src="<?= htmlspecialchars($country['flag']) ?>"
                                alt="<?= htmlspecialchars($country['name']) ?> Flag"
                                class="nation-flag"
                            >
                            
                            <div class="nation-overlay">
                                <h4 class="nation-name">
                                    <?= htmlspecialchars(strtoupper($country['name'])) ?>
                                </h4>
                            </div>

                        </a>

                    </div>

                <?php endforeach; ?>



            </div>
        </div>
    </div>
    

    <!--================= Next Match Section Start Here =================-->
    <div class="rts-next-match-section section-gap">
        <div class="container">
            <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle">GAMES</span>
                <h1 class="section-title">TRACK ASIA CUP 2026 </h1>
                <!-- <p>CONTINENTAL CHAMPIONSHIPS</p> -->
            </div>
            <ul class="table-area table-full">
                <li class="table-inner">
                    <div class="team-name">
                        <p class="mode">The 2026 ACC Track Asia Cup will be hosted at the Tagaytay City Velodrome, located at C.M. Delos Reyes Ave., Kaybagal South, Tagaytay City.</p>

                       
                    </div>
                    
                </li>
            </ul>
        </div>
    </div>
    <!--================= Next Match Section End Here =================-->



    <!--================= Sponsors Section Start Here =================-->
    <div class="rts-sponsors-section section-gap">
        <div class="container">
            <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle"><img src="assets/images/watermarks/acc-tac-2026-black.png" alt="ACC TAC 2026 Logo"></span>
                <h1 class="section-title">LOCAL ORGANIZING COMMITTEE</h1>
                <!--================= Add logo of City gov't of Tagaytay and Philcycling =================-->
                <div class="loc-committee-logos">

                    <div class="loc-logo">
                        <img src="assets/images/logos/tagaytay.png"
                            alt="City Government of Tagaytay">
                    </div>

                    <div class="loc-logo">
                        <img class="philcycling-logo"
                            src="assets/images/logos/philcycling.png"
                            alt="PhilCycling">
                    </div>

                </div>

                <p>
                    The Local Organizing Committee oversees the planning and coordination of the Track Asia Cup 2026 in Tagaytay City, in collaboration with the Philippine Sports Commission.
                </p>
            </div>
            <div class="sponsors-section-inner">
                <div class="swiper rts-brandSlider">
                    <div class="swiper-wrapper">
                        <!-- <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/1.png" alt="sponsor"></div>
                            </a>
                        </div> -->
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/6.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/7.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/5.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/3.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/2.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/4.png" alt="sponsor"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



    <!--================= Footer Start Here =================-->
    <div class="footer footer1">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo"><img src="assets/images/2026_ACC_TAC_Letterhead_1.png" alt="footer-logo">
                            </div>
                            <p class="footer-text">Track Asia Cup 2026 — Experience the Speed and Excitement as Champions Race for Glory!</p>
                            <div class="social-links">
                                <!-- <a href="https://www.facebook.com/profile.php?id=100094321766590" class="platform"><i
                                        class="fab fa-facebook-f"></i></a> -->
                                <!-- <a href="#0" class="platform"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="#0" class="platform"><i
                                        class="fab fa-behance"></i></a>
                                <a href="#0" class="platform"><i
                                        class="fab fa-youtube"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title"><span class="decorator"></span> OUR PARTNERS</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item"><a href="https://www.uci.org/" target="_blank" rel="noopener noreferrer">Union Cycliste Internationale</a></li>
                                <li class="widget-list-item"><a href="https://www.accasia.org/" target="_blank" rel="noopener noreferrer">Asian Cycling Confederation</a></li>
                                <li class="widget-list-item"><a href="https://psc.gov.ph/" target="_blank" rel="noopener noreferrer">Philippine Sports Commission</a></li>
                                <li class="widget-list-item"><a href="https://www.tagaytay.gov.ph//" target="_blank" rel="noopener noreferrer">Tagaytay City Government</a></li>
                                <li class="widget-list-item"><a href="https://www.olympic.ph/" target="_blank" rel="noopener noreferrer">Philippine Olympic Committee</a></li>
                                <li class="widget-list-item"><a href="https://www.facebook.com/philcycling/" target="_blank" rel="noopener noreferrer">Philcycling</a></li>
                                <!-- <li class="widget-list-item"><a href="/about">ABOUT US</a></li>-->
                                <!--   <li class="widget-list-item"><a href="/match-schedule">SCHEDULE</a></li> -->
                                <!-- <li class="widget-list-item"><a href="/team">Technical Handbook</a></li>-->
                                <!--  <li class="widget-list-item"><a href="/league-standings">AWARDING</a></li>
                                <li class="widget-list-item"><a href="/gallery">GALLERY</a></li>
                                <li class="widget-list-item"><a href="/contact">CONTACT</a></li> -->
                                <!-- <li class="widget-list-item"><a href="/team">OUR PLAYERS</a></li> -->
                                <!-- <li class="widget-list-item"><a href="/venue">ARENA</a></li> -->
                                <!-- <li class="widget-list-item"><a href="/team-details">TEAM DETAILS</a></li> -->
                                <!-- <li class="widget-list-item"><a href="/history">OUR HISTORY</a></li> -->
                                <!-- <li class="widget-list-item"><a href="/gallery">TROPHY ROOM</a></li> -->
                                <!-- <li class="widget-list-item"><a href="/awards">SHORT CODE</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
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
                    <!-- <div class="col-xl-3 col-md-6">
                        <div class="footer-widget news-widget">
                            <h3 class="footer-widget-title"><span class="decorator"></span> POST GALLERY</h3>
                            <div class="recent-post">
                                <div class="picture">
                                    <a href="/blog-details">
                                        <img src="assets/images/footer/news1.png" alt="side-post-image">
                                    </a>
                                </div>
                                <div class="picture">
                                    <a href="/blog-details">
                                        <img src="assets/images/footer/news2.png" alt="side-post-image">
                                    </a>
                                </div>
                                <div class="picture">
                                    <a href="/blog-details">
                                        <img src="assets/images/footer/news3.png" alt="side-post-image">
                                    </a>
                                </div>
                            </div>
                            <div class="recent-post post2">
                                <div class="picture">
                                    <a href="/blog-details">
                                        <img src="assets/images/footer/news4.png" alt="side-post-image">
                                    </a>
                                </div>
                                <div class="picture">
                                    <a href="/blog-details">
                                        <img src="assets/images/footer/news5.png" alt="side-post-image">
                                    </a>
                                </div>
                                <div class="picture">
                                    <a href="/blog-details">
                                        <img src="assets/images/footer/news6.png" alt="side-post-image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="bottom-area-inner">
                    <span class="copyright">COPYRIGHT - 2026</span>
                    <!-- <div class="footer-bottom-links">
                        <a href="#">TERMS & CONDITONS</a>
                        <a href="/faq">FAQ</a>
                        <a href="#">CAREER</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!--================= Footer End Here =================-->

<?php $view->close(['extraFooter' => '
    <script>
        // Set the date: December 1, 2026
        var countDownDate = new Date("December 1, 2026 08:00:00").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
        }, 1000);
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // 1 second animation speed
            once: true, // Isang beses lang gagalaw
        });
    </script>
']); ?>
