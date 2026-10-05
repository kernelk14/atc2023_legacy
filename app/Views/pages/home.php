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
                <div class="swiper-slide">
                    <div class="banner-single banner-single-3 banner-bg">
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
                    <div class="banner-single banner-single-3_2 banner-bg">
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

    <!--================= Countdown Inside Hero =================-->
    <div class="hero-countdown">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5 col-md-12 text-center text-lg-start">
                    <h3>
                        OFFICIAL COUNTDOWN
                    </h3>

                    <p>
                        December 1-7, 2026 @ Tagaytay CT Velodrome
                    </p>
                </div>

                <div class="col-lg-7 col-md-12 text-center">
                    <div class="countdown-items">

                        <div class="countdown-item">
                            <span id="days">00</span>
                            <small>DAYS</small>
                        </div>

                        <div class="countdown-item">
                            <span id="hours">00</span>
                            <small>HOURS</small>
                        </div>

                        <div class="countdown-item">
                            <span id="minutes">00</span>
                            <small>MINS</small>
                        </div>

                        <div class="countdown-item">
                            <span id="seconds">00</span>
                            <small>SECS</small>
                        </div>

                    </div>
                </div>
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

        /* ================= YOUTUBE HERO BACKGROUND ================= */

        .banner.banner1 {
            position: relative;
            overflow: hidden;
        }

        .hero-video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
            pointer-events: none;
        }

        .hero-video iframe {
            position: absolute;
            top: 50%;
            left: 50%;

            width: 100vw;
            height: 56.25vw;

            min-width: 100%;
            min-height: 100%;

            transform: translate(-50%, -50%);
            border: 0;
            pointer-events: none;
        }

        .hero-video-overlay {
            position: absolute;
            inset: 0;
            z-index: 1;
            background: rgba(0, 0, 0, 0.45);
            pointer-events: none;
        }

        .bannerSlide {
            position: relative;
            z-index: 2;
        }

        /* ================= FLOATING HERO COUNTDOWN ================= */

        .hero-countdown {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 25px;
            z-index: 20;
            background: transparent !important;
            border: none !important;
            padding: 0 !important;
        }

        /* Keep countdown inside the hero */
        .hero-countdown .container {
            width: 100%;
        }

        /* Countdown title */
        .hero-countdown h3 {
            color: #fff;
            margin: 0;
            font-size: 48px;
            font-weight: 700;
            line-height: 1.15;
            text-transform: uppercase;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
        }

        /* Countdown description */
        .hero-countdown p {
            color: #fff;
            margin: 8px 0 0;
            font-size: 20px;
            line-height: 1.4;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
        }

        /* Countdown items */
        .hero-countdown .countdown-items {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 28px;
        }

        /* Each countdown item */
        .hero-countdown .countdown-item {
            text-align: center;
            min-width: 85px;
        }

        /* Countdown numbers */
        .hero-countdown .countdown-item span {
            display: block;
            color: #007bff;
            font-size: 78px;
            font-weight: 700;
            line-height: 1;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.9);
        }

        /* Countdown labels */
        .hero-countdown .countdown-item small {
            display: block;
            margin-top: 7px;
            color: #fff;
            font-size: 14px;
            line-height: 1;
            letter-spacing: 1px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
        }


        /* ================= 1200px ================= */

        @media (max-width: 1200px) {

            .hero-countdown {
                bottom: 25px;
            }

            .hero-countdown h3 {
                font-size: 40px;
            }

            .hero-countdown p {
                font-size: 17px;
            }

            .hero-countdown .countdown-items {
                gap: 20px;
            }

            .hero-countdown .countdown-item {
                min-width: 70px;
            }

            .hero-countdown .countdown-item span {
                font-size: 62px;
            }

            .hero-countdown .countdown-item small {
                font-size: 12px;
            }

        }

        /* ================= SHORT DESKTOP SCREENS ================= */

        @media (min-width: 992px) and (max-height: 1100px) {

            /* Move banner text slightly upward */
            .banner-content {
                transform: translateY(-40px);
            }

            /* Move countdown upward */
            .hero-countdown {
                bottom: 110px;
            }

            .hero-countdown h3 {
                font-size: 36px;
            }

            .hero-countdown p {
                font-size: 15px;
                margin-top: 5px;
            }

            .hero-countdown .countdown-items {
                gap: 16px;
            }

            .hero-countdown .countdown-item {
                min-width: 65px;
            }

            .hero-countdown .countdown-item span {
                font-size: 52px;
            }

            .hero-countdown .countdown-item small {
                font-size: 11px;
            }
        }
            
       /* ================= 900px ================= */

        @media (max-width: 991px) {

            .hero-countdown {
                bottom: 20px;
            }

            .hero-countdown h3,
            .hero-countdown p {
                text-align: center;
            }

            .hero-countdown h3 {
                font-size: 26px;
            }

            .hero-countdown p {
                font-size: 14px;
            }

            .hero-countdown .countdown-items {
                justify-content: center;
                gap: 16px;
                margin-top: 18px;
            }

            .hero-countdown .countdown-item {
                min-width: 60px;
            }

            .hero-countdown .countdown-item span {
                font-size: 44px;
            }

            .hero-countdown .countdown-item small {
                font-size: 10px;
            }

        }


        /* ================= 700px ================= */

        @media (max-width: 700px) {

            .hero-countdown {
                bottom: 15px;
            }

            .hero-countdown h3 {
                font-size: 22px;
            }

            .hero-countdown p {
                font-size: 12px;
            }

            .hero-countdown .countdown-items {
                gap: 10px;
                margin-top: 15px;
            }

            .hero-countdown .countdown-item {
                min-width: 52px;
            }

            .hero-countdown .countdown-item span {
                font-size: 36px;
            }

            .hero-countdown .countdown-item small {
                font-size: 9px;
            }

        }


        /* ================= SMALL MOBILE ================= */

        @media (max-width: 576px) {

            .hero-countdown h3 {
                font-size: 19px;
            }

            .hero-countdown p {
                font-size: 8px;
            }

            .hero-countdown .countdown-items {
                gap: 7px;
            }

            .hero-countdown .countdown-item {
                min-width: 48px;
            }

            .hero-countdown .countdown-item span {
                font-size: 30px;
            }

            .hero-countdown .countdown-item small {
                font-size: 8px;
            }

        }


        /* ================= SMALL MOBILE ================= */

        @media (max-width: 380px) {

            .hero-countdown h3 {
                font-size: 17px;
            }

            .hero-countdown p {
                font-size: 6px;
            }

            .hero-countdown .countdown-items {
                gap: 5px;
            }

            .hero-countdown .countdown-item {
                min-width: 44px;
            }

            .hero-countdown .countdown-item span {
                font-size: 27px;
            }

            .hero-countdown .countdown-item small {
                font-size: 8px;
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
        }

        .loc-logo {
            width: 250px;
            height: 150px;
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

        .philcycling-logo {
            width: 280px !important;
            height: auto !important;
        }

        .loc-logo:hover {
            transform: translateY(-10px);
            filter: drop-shadow(0 0 18px rgba(0, 132, 255, 0.6));
        }

       /* =========================================================
        TABLET
        ========================================================= */

        @media (max-width: 991px) {

            .loc-committee-logos {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 25px;
            }

            .loc-logo {
                max-width: 220px;
                height: 130px;
            }

            .loc-logo img {
                max-width: 90%;
                max-height: 105px;
            }

            .loc-logo img.tagaytay-logo {
                max-width: 190px;
            }

            .loc-logo img.philcycling-logo {
                max-width: 230px;
            }
        }


        /* =========================================================
        MOBILE
        ========================================================= */

        @media (max-width: 576px) {

            .loc-committee-logos {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px 8px;
                margin: 5px 0 20px;
            }

            .loc-logo {
                width: 100%;
                max-width: 170px;
                height: 105px;
            }

            .loc-logo img {
                max-width: 90%;
                max-height: 85px;
            }

            .loc-logo img.tagaytay-logo {
                max-width: 145px;
            }

            .loc-logo img.philcycling-logo {
                max-width: 175px;
            }
        }


        /* =========================================================
        VERY SMALL PHONES
        ========================================================= */

        @media (max-width: 380px) {

            .loc-committee-logos {
                gap: 5px;
            }

            .loc-logo {
                max-width: 145px;
                height: 90px;
            }

            .loc-logo img {
                max-height: 72px;
            }

            .loc-logo img.tagaytay-logo {
                max-width: 125px;
            }

            .loc-logo img.philcycling-logo {
                max-width: 150px;
            }
        }
    </style>
',
]);
?>


    <!--================= Header Section End Here =================-->

    <!--================= countdown section start here =================-->

    
    <!--================= countdown sentiom end here =================-->

    <!--================= Latest Match Start Here =================-->
    <!-- <div class="rts-latest-match">
        <div class="container">
            <div class="latest-match-inner">
                <div class="club-area">
                    <div class="club-logo"><img src="assets/images/items/clubs.png" alt=""></div>
                    <div class="content">
                        <h3 class="club-text">KESTER F.C <br>
                            CHAMPIONS DI CLUB</h3>
                        <span class="match-type">SEMI FINAL</span>
                    </div>
                </div>
                <div class="match-countdown-area">
                    <div class="countdown">
                        <div class="countdown-el days-c">
                            <span class="value" id="days"></span>
                        </div>
                        <span class="letter">D</span>
                        <div class="countdown-el hours-c">
                            <span class="value" id="hours"></span>
                        </div>
                        <span class="letter">H</span>
                        <div class="countdown-el mins-c">
                            <span class="value" id="mins"></span>
                        </div>
                        <span class="letter">M</span>
                        <div class="countdown-el seconds-c">
                            <span class="value" id="seconds"></span>
                        </div>
                        <span class="letter">S</span>
                    </div>
                </div>
                <div class="club-area">
                    <div class="content text-end ml--40 mr--0">
                        <h3 class="club-text">KINGSTER F.C <br>
                            CHAMPIONS DI CLUB</h3>
                        <span class="match-type">SEMI FINAL</span>
                    </div>
                    <div class="club-logo ml--40 mr--0"><img src="assets/images/items/clubs2.png" alt=""></div>
                </div>
            </div>
        </div>
    </div> -->
    <!--================= Latest Match End Here =================-->


    <!--================= Previous Championship Section Start Here =================-->
    <section class="previous-championship-section">
        <div class="container">

            <!-- Section Heading -->
            <div class="previous-championship-heading">
                <span>PREVIOUS CHAMPIONSHIP</span>
                <h2>TAGAYTAY WELCOMES ASIA</h2>
                <p>THE 45TH ASIAN CYCLING CONFEDERATION TRACK CHAMPIONSHIPS 2026</p>
                <div class="heading-line"></div>
            </div>

            <!-- Main Content -->
            <div class="previous-championship-wrapper">

                <!-- Video -->
                <div class="previous-championship-video">
                    <div class="previous-video-frame">

                        <!-- YouTube Video -->
                        <iframe
                            id="previous-championship-video"
                            src=""
                            title="45th Asian Cycling Confederation Track Championships 2026"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>

                        <!-- Video Preview -->
                        <div class="previous-video-preview" onclick="showATCVideo()" role="button" tabindex="0">

                            <img src="assets/images/gallery/45th-atc.jpg"
                                alt="45th Asian Cycling Confederation Track Championships 2026">

                            <div class="previous-video-preview-overlay"></div>

                            <div class="previous-video-play-button">
                                <i class="fas fa-play"></i>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Information -->
                <div class="previous-championship-info">

                    <span class="previous-date">
                        <i class="far fa-calendar-alt"></i>
                        MARCH 25–31, 2026
                    </span>

                    <h3>
                        45TH ASIAN CYCLING CONFEDERATION
                        TRACK CHAMPIONSHIPS
                    </h3>

                    <p>
                        In March 2026, the Tagaytay City Velodrome welcomed
                        Asia's elite track cyclists for the 45th Asian Cycling
                        Confederation Track Championships — marking the
                        Philippines' return as host after more than three decades.
                    </p>

                    <p>
                        The championship brought together riders from across Asia,
                        showcasing world-class competition in the country's new
                        UCI-standard indoor velodrome.
                    </p>

                    <!-- Stats -->
                    <div class="previous-championship-stats">

                        <div class="previous-stat">
                            <div class="previous-stat-icon">
                                <i class="fas fa-globe-asia"></i>
                            </div>

                            <div>
                                <strong>16</strong>
                                <span>NATIONS</span>
                            </div>
                        </div>

                        <div class="previous-stat">
                            <div class="previous-stat-icon">
                                <i class="fas fa-bicycle"></i>
                            </div>

                            <div>
                                <strong>600+</strong>
                                <span>RIDERS</span>
                            </div>
                        </div>

                        <div class="previous-stat">
                            <div class="previous-stat-icon">
                                <i class="fas fa-medal"></i>
                            </div>

                            <div>
                                <strong>44</strong>
                                <span>GOLD MEDALS</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!--================= Previous Championship Section End Here =================-->


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

            

                <?php
                // Countries that are allowed to open the country detail page
                $enabledCountries = ['PHI', '#', '#', '#'];
                ?>

                <div class="row g-3 justify-content-center">

                    <!-- ================= NATION GRID ================= -->

                    <?php foreach ($countries as $country): ?>

                        <div class="col-lg-2 col-md-3 col-4 nation-card-wrapper" data-aos="zoom-in">

                            <?php if (in_array($country['code'], $enabledCountries)): ?>

                                <!-- ENABLED / CLICKABLE NATION -->
                                <a href="country-detail.php?code=<?= urlencode($country['code']) ?>"
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

                            <?php else: ?>

                                <!-- DISABLED / HOVER ONLY -->
                                <div class="nation-card">

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

                                </div>

                            <?php endif; ?>

                        </div>

                    <?php endforeach; ?>

                </div>

               <!-- OLD NATION FLAG CARD

               OLD STATUS INDICATOR       <span class="nation-status-indicator < ?= htmlspecialchars($country['status']) ?>"></span> 
                
               <div class="col-lg-2 col-md-3 col-4 nation-card-wrapper" data-aos="zoom-in">
                    <a href="/country-detail?code=PHI" class="nation-card">
                        <img src="assets/images/flags/philippines.jpg" alt="Philippines Flag" class="nation-flag">
                        <span class="nation-status-indicator registered"></span>
                        <div class="nation-overlay">
                            <h4 class="nation-name">PHILIPPINES</h4>
                        </div>
                    </a>
                </div>-->



            </div>
        </div>
    </div>
    <!--================= Gallery Start Here =================-->
    <!-- <div class="rts-gallery-section">
        <div class="container">
            <div class="gallery-area">
                <div class="gallery-item text-center">
                    <a href="#0" class="gallery-picture"><img src="assets/images/gallery/img8.jpg" alt=""></a>
                    <a href="#0" class="gallery-picture1"><img src="assets/images/gallery/img8-small.jpg" alt=""></a>
                    <div class="contents-wrapper">
                        <div class="contents text-start">
                            <div class="d-block">
                                <p class="tag">FOOTBALL</p>
                                <a href="/blog-details" class="gallery-title">THE WORLD CUP – WHAT TO EXPECT FROM</a>
                            </div>
                            <div class="author-info">
                                <div class="content">
                                    <a href="/blog-details" class="read-more">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item text-center active mid">
                    <a href="#0" class="gallery-picture"><img src="assets/images/gallery/img9.jpg" alt=""></a>
                    <a href="#0" class="gallery-picture1"><img src="assets/images/gallery/img9-small.jpg" alt=""></a>
                    <div class="contents-wrapper">
                        <div class="contents text-start">
                            <div class="d-block">
                                <p class="tag">FOOTBALL</p>
                                <a href="/blog-details" class="gallery-title">THE WORLD CUP – WHAT TO EXPECT FROM</a>
                            </div>
                            <div class="author-info">
                                <div class="content">
                                    <a href="/blog-details" class="read-more">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item text-center">
                    <a href="#0" class="gallery-picture"><img src="assets/images/gallery/img10.jpg" alt=""></a>
                    <a href="#0" class="gallery-picture1"><img src="assets/images/gallery/img10-small.jpg" alt=""></a>
                    <div class="contents-wrapper">
                        <div class="contents text-start">
                            <div class="d-block">
                                <p class="tag">FOOTBALL</p>
                                <a href="/blog-details" class="gallery-title">THE WORLD CUP – WHAT TO EXPECT FROM</a>
                            </div>
                            <div class="author-info">
                                <div class="content">
                                    <a href="/blog-details" class="read-more">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--================= Gallery Section End Here =================-->

    <!--================= Next Match Section Start Here =================-->
    <div class="rts-next-match-section section-gap">
        <div class="container">
            <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle">RACES</span>
                <h1 class="section-title">TRACK ASIA CUP 2026 </h1>
                <!-- <p>CONTINENTAL CHAMPIONSHIPS</p> -->
            </div>
            <ul class="table-area table-full">
                <li class="table-inner">
                    <div class="team-name">
                        <p class="mode">The 2026 ACC Track Asia Cup will be hosted at the Tagaytay CT Velodrome, located at C.M. Delos Reyes Ave., Kaybagal South, Tagaytay City, Philippines.</p>

                        <!-- <p class="mode">“Our warmest welcome to the athletes, coaches and officials for the ACC BMX
                            Championships,” said Tagaytay City Mayor Abraham "Bambol" Tolentino, who is the president of
                            the Philippine Olympic Committee (POC) and national federation PhilCyling. -By Jean Malanum
                            (pna.gov.ph)</p> -->
                        <!-- <h3 class="name">Lusail Ico. Stadium, Dubai</h3>
                        <p class="time">December 25, 2022 4:00 PM</p> -->
                    </div>
                    <!--<div class="team-logo-area">
                        <a href="#" class="text-center">
                            <img src="assets/images/team/logo-01.png" alt="">
                            <p class="team">Kester F.C</p>
                        </a>
                        <span class="versus">VS</span>
                        <a href="#" class="text-center">
                            <img src="assets/images/team/logo-02.png" alt="">
                            <p class="team">Champions</p>
                        </a>
                    </div>
                    <div class="button-area">
                        <a href="#" class="btn-1">Get Tickets</a>
                        <a href="#" class="btn-2">Watch Stream</a>
                    </div>
                </li>
                <li class="table-inner">
                    <div class="team-name">
                        <p class="mode">2v2, Double Elimination</p>
                        <h3 class="name">Lusail Ico. Stadium, Dubai</h3>
                        <p class="time">December 27, 2022 4:00 PM</p>
                    </div>
                    <div class="team-logo-area">
                        <a href="#" class="text-center">
                            <img src="assets/images/team/logo-03.png" alt="">
                            <p class="team">Kester F.C</p>
                        </a>
                        <span class="versus">VS</span>
                        <a href="#" class="text-center">
                            <img src="assets/images/team/logo-04.png" alt="">
                            <p class="team">Asia Pasific</p>
                        </a>
                    </div>
                    <div class="button-area">
                        <a href="#" class="btn-1">Get Tickets</a>
                        <a href="#" class="btn-2">Watch Stream</a>
                    </div>
                </li>
                <li class="table-inner">
                    <div class="team-name">
                        <p class="mode">2v2, Double Elimination</p>
                        <h3 class="name">Lusail Ico. Stadium, Dubai</h3>
                        <p class="time">December 30, 2022 4:00 PM</p>
                    </div>
                    <div class="team-logo-area">
                        <a href="#" class="text-center">
                            <img src="assets/images/team/logo-05.png" alt="">
                            <p class="team">Kester F.C</p>
                        </a>
                        <span class="versus">VS</span>
                        <a href="#" class="text-center">
                            <img src="assets/images/team/logo-06.png" alt="">
                            <p class="team">West Ham</p>
                        </a>
                    </div>
                    <div class="button-area">
                        <a href="#" class="btn-1">Get Tickets</a>
                        <a href="#" class="btn-2">Watch Stream</a>
                    </div>-->
                </li>
            </ul>
        </div>
    </div>
    <!--================= Next Match Section End Here =================-->

    <!--================= About Section Start Here =================-->
    <!-- <div class="rts-about-section section-gap">
        <div class="shape1"><img src="assets/images/about/shape2.png" alt=""></div>
        <div class="shape2"><img src="assets/images/about/shape1.png" alt=""></div>
        <div class="container-1">
            <div class="about-inner">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <div class="about-thumb">
                            <div class="img1"><img src="assets/images/gallery/img4.jpg" alt="about-thumb"></div>
                            <div class="img2"><img src="assets/images/gallery/img5.jpg" alt="about-thumb"></div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="contents">
                            <div class="section-title-area section-title-area1 text-start">
                                <span class="pretitle">GAMES</span>
                                <h1 class="section-title"><span>ABOUT THE</span> <br> CLUB KESTER</h1>
                                <p>Nulla habitant commodo euismod feugiat aenean quisque platea ac, nisl potenti <br>
                                    fusce
                                    conubia ventis blandit iaculis, curabitur enim inceptos a odio taciti sapien. <br>
                                    Dictumst dis metus inceptos curae fermentum nvel, ridiculus a dapibus egestas <br>
                                    penatibus mus, cubilia fusce iaculis</p>
                            </div>
                            <ul>
                                <li class="player">
                                    <p class="sub">MANAGER</p>
                                    <h3 class="title">PRO 05</h3>
                                </li>
                                <li class="player">
                                    <p class="sub">PLAYERS</p>
                                    <h3 class="title">PRO 107</h3>
                                </li>
                                <li class="player">
                                    <p class="sub">COACH</p>
                                    <h3 class="title">PRO 19</h3>
                                </li>
                            </ul>
                            <a href="/team" class="more-btn">OUR TEAM <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--================= About Section End Here =================-->


    <!--================= Sponsors Section Start Here =================-->
    <div class="rts-sponsors-section section-gap">
        <div class="container">
             <!-- TAC 2026 BRANDING -->
            <div class="tac-brand-area">
                <div class="tac-brand-image"></div>
                <div class="tac-brand-content">
                    <img src="assets/images/watermarks/acc-tac-2026.png"
                        alt="ACC TAC 2026 Logo">
                </div>
            </div>
            <div class="section-title-area section-title-area1 text-center mb--50">
                <h1 class="section-title">LOCAL ORGANIZING COMMITTEE</h1>
                <!--================= Add logo of City gov't of Tagaytay and Philcycling =================-->
                <div class="loc-committee-logos">

                    <div class="loc-logo">
                        <a href="https://psc.gov.ph/" target="_blank">
                            <img src="assets/images/logos/psc.png" alt="Philippine Sports Commission">
                        </a>
                    </div>

                    <div class="loc-logo">
                        <a href="https://www.tagaytay.gov.ph//" target="_blank">
                            <img src="assets/images/logos/tagaytay.png" alt="City Government of Tagaytay">
                        </a>
                    </div>

                    <div class="loc-logo">
                        <a href="https://www.facebook.com/philcycling/" target="_blank">
                            <img class="philcycling-logo" src="assets/images/logos/philcycling.png" alt="PhilCycling">
                        </a>
                    </div>

                    <div class="loc-logo">
                        <a href="https://www.olympic.ph/" target="_blank">
                            <img src="assets/images/logos/poc.png" alt="Philippine Olympic Committee">
                        </a>
                    </div>
                </div>
            </div>
            <div class="sponsors-section-inner">
                <div class="swiper rts-brandSlider">
                    <div class="swiper-wrapper">
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
    <!-- DESIGN DOON SA BABA NG MGA LOGOS 
    <div class="acc-anniversary-section" style="background: linear-gradient(180deg, #2b2828 0%, #151515 100%); padding: 100px 0; border-top: 1px solid #222;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">

                    <div style="width: 60px; height: 4px; background: #D4AF37; margin: 0 auto 20px; border-radius: 2px;"></div>

                    <h2 style="font-size: 80px; font-weight: 900; line-height: 1; margin-bottom: 10px; color: #ffffff; text-transform: uppercase;">
                        <span style="color: #D4AF37; text-shadow: 0px 0px 20px rgba(212, 175, 55, 0.3);">33rd</span>
                        <span style="font-size: 40px; font-weight: 300; color: #cccccc;">Founding Anniversary</span>
                    </h2>

                    <h1 style="font-size: 36px; font-weight: 800; letter-spacing: 2px; text-transform: uppercase; color: #fff; margin-top: 20px;">
                        Asian Cycling Confederation <span style="color: #D4AF37;">(ACC)</span>
                    </h1>

                    <p style="font-size: 16px; color: #888; margin-top: 15px; max-width: 700px; margin-left: auto; margin-right: auto;">
                        Celebrating over three decades of excellence and unity in Asian cycling.
                    </p>

                </div>
            </div>
        </div>
    </div>-->
    <!--================= Sponsors Table Section End Here =================-->


    <!--================= Video Section Start Here =================-->
    <!-- <div class="rts-video-section">
        <div class="container">
            <div class="video-section-inner text-center">
                <div class="play-video">
                    <a class="popup-video" href="https://www.youtube.com/watch?v=G4t6TqG5LM8"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!--================= VIdeo Section End Here =================-->


    <!--================= Team Section Start Here =================-->
    <!-- <div class="rts-team-section section-gap">
        <div class="container">
            <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle">PLAYERS</span>
                <h1 class="section-title">CLUB MEMBERS</h1>
                <p>It is one of the most popular football clubs that offer training programs
                    for the youth, as well as summer camps.</p>
            </div>
            <div class="team-section-inner">
                <div class="swiper rts-teamSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="/team-details"><img src="assets/images/team/team01.png" alt=""></a>
                                    <div class="number">11</div>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <p class="position">FORWARD</p>
                                    <a href="/team-details" class="name">MAXIELS DAVID</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="/team-details"><img src="assets/images/team/team02.png" alt=""></a>
                                    <div class="number">7</div>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <p class="position">WINGER</p>
                                    <a href="/team-details" class="name">VEN DIESEL</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="/team-details"><img src="assets/images/team/team03.png" alt=""></a>
                                    <div class="number">9</div>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <p class="position">WINGER</p>
                                    <a href="/team-details" class="name">NED STARK</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="/team-details"><img src="assets/images/team/team04.png" alt=""></a>
                                    <div class="number">10</div>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <p class="position">MID-FIELDER</p>
                                    <a href="/team-details" class="name">JOHN WICK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div> -->
    <!--================= Team Section End Here =================-->


    <!--================= Newsletter Section Start Here =================-->
    <!-- <div class="rts-newsletter-section">
        <div class="container">
            <div class="newsletter-inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="newsletter-box">
                            <div class="shape">
                                <img src="assets/images/team/shape.png" alt="">
                            </div>
                            <div class="section-title-area section-title-area1 text-start mb--50">
                                <h1 class="section-title">SUBSCRIBE NEWSLETTER</h1>
                                <p>Empus justo tortor nunc ullamcorper curabitur ultrices duis cum lobortis Montes
                                    facilisi vitae litora non dis at class</p>
                            </div>
                            <form>
                                <div class="form">
                                    <input type="text" class="form-control" id="username" placeholder="Enter Your Email"
                                        required />
                                </div>
                                <div class="button">
                                    <button type="submit" class="btn">SUBSCRIBE <i
                                            class="fal fa-long-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image">
                            <img src="assets/images/team/player3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--================= Newsletter Section End Here =================-->


    <!--================= Blog Section Start Here =================-->
    <!-- <div class="rts-blog-section section-gap">
        <div class="container">
            <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle">INSIGHTS</span>
                <h1 class="section-title">OUR LATEST NEWS</h1>
                <p>It is one of the most popular football clubs that offer training programs
                    for the youth, as well as summer camps.</p>
            </div>
            <div class="blog-area">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-picture"><img src="assets/images/blog/blog1.jpg" alt=""></div>
                            <div class="contents-wrapper">
                                <div class="contents">
                                    <div class="d-block">
                                        <a href="#0" class="blog-catagory">FOOTBALL</a>
                                        <a href="/blog-details" class="blog-title">THE ENGLISH LEAGUE – WHAT TO
                                            EXPECT
                                            FROM
                                            ENGLAND FOOTBALL CLUB</a>
                                    </div>
                                    <div class="author-info">
                                        <div class="author-dp"><img src="assets/images/items/author2.png"
                                                alt="author-dp"></div>
                                        <div class="content">
                                            <a href="#0" class="author-name">CLUB DA AUTHOR</a>
                                            <div class="blog-date">
                                                <div class="date">June 21, 2022</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-picture"><img src="assets/images/blog/blog2.jpg" alt=""></div>
                            <div class="contents-wrapper">
                                <div class="contents">
                                    <div class="d-block">
                                        <a href="#0" class="blog-catagory">FOOTBALL</a>
                                        <a href="/blog-details" class="blog-title">THE LA LIGA – WHAT TO EXPECT
                                            FROM
                                            SPANISH FOOTBALL CLUB</a>
                                    </div>
                                    <div class="author-info">
                                        <div class="author-dp"><img src="assets/images/items/author2.png"
                                                alt="author-dp"></div>
                                        <div class="content">
                                            <a href="#0" class="author-name">CLUB DA AUTHOR</a>
                                            <div class="blog-date">
                                                <div class="date">June 21, 2022</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-picture"><img src="assets/images/blog/blog3.jpg" alt=""></div>
                            <div class="contents-wrapper">
                                <div class="contents">
                                    <div class="d-block">
                                        <a href="#0" class="blog-catagory">FOOTBALL</a>
                                        <a href="/blog-details" class="blog-title">THE UCL – WHAT TO EXPECT
                                            FROM
                                            ALL OVER FOOTBALL CLUB</a>
                                    </div>
                                    <div class="author-info">
                                        <div class="author-dp"><img src="assets/images/items/author3.png"
                                                alt="author-dp"></div>
                                        <div class="content">
                                            <a href="#0" class="author-name">CLUB DA AUTHOR</a>
                                            <div class="blog-date">
                                                <div class="date">June 21, 2022</div>
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
    </div> -->
    <!--================= BLog Details Section End Here =================-->


    <!--================= Product-details Section Start Here =================-->
    <div class="product-details-popup-wrapper">
        <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
            <div class="product-details-popup">
                <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
                <div class="details-product-area">
                    <div class="product-thumb-area">
                        <div class="product-thumb-filter-group">
                            <div class="thumb-filter filter-btn active" data-show=".one"><img src="assets/images/products/gloves.png" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".two"><img src="assets/images/products/product1.png" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".three"><img src="assets/images/products/product2.png" alt="product-thumb-filter"></div>
                        </div>
                        <div class="cursor"></div>
                        <div class="thumb-wrapper one filterd-items figure">
                            <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/products/prod.jpg)"><img src="assets/images/products/prod.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper two filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/products/prod.jpg)"><img src="assets/images/products/prod.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper three filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/products/prod.jpg)"><img src="assets/images/products/prod.jpg" alt="product-thumb">
                            </div>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="product-status">
                            <span class="product-catagory">Dress</span>
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                <span>10 Reviews</span>
                            </div>
                        </div>
                        <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock">In Stock</span></h2>
                        <span class="product-price"><span class="old-price">$9.35</span> $7.25</span>
                        <p>
                            Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a completely modern design and you feel comfortable to put on this hijab. Buy it at the best price.
                        </p>
                        <div class="product-bottom-action">
                            <div class="cart-edit">
                                <div class="quantity-edit action-item">
                                    <button class="button"><i class="fal fa-minus minus"></i></button>
                                    <input type="text" class="input" value="01" />
                                    <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                </div>
                            </div>
                            <a href="/cart" class="addto-cart-btn action-item"><i class="rt-basket-shopping"></i>
                                Add To
                                Cart</a>
                            <a href="/shop" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                        </div>
                        <div class="product-uniques">
                            <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                            <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops, Mens</span>
                            <span class="tags product-unipue"><span>Tags: </span> fashion, t-shirts, Men</span>
                        </div>
                        <div class="share-social">
                            <span>Share:</span>
                            <a class="platform" href="https://www.facebook.com/profile.php?id=100094321766590" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                            <a class="platform" href="#0"><i class="fab fa-twitter"></i></a>
                            <a class="platform" href="#0"><i class="fab fa-behance"></i></a>
                            <a class="platform" href="https://www.youtube.com/watch?v=G4t6TqG5LM8" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
                            <a class="platform" href="#0"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Product-details Section End Here =================-->


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

    <script>
        function showATCVideo() {
            const preview = document.querySelector(".previous-video-preview");
            const video = document.getElementById("previous-championship-video");

            video.src = "https://www.youtube.com/embed/s--scpKdw1w?autoplay=1&rel=0";

            preview.style.display = "none";
        }
    </script>
']); ?>
