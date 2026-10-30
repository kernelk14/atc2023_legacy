<?php
$view->open([
    'title'  => 'About | Track Asia Cup | Tagaytay 2026',
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
            
        .section-title-area1 p {
            margin-top: 0 !important;
            margin-bottom: 25px !important;
        }

        .section-title-area1 p:last-child {
            margin-bottom: 0 !important;
        }





        /* =========================================================
            TRACK ASIA CUP 2026 ABOUT PAGE REDESIGN
        ========================================================= */

        :root {
            --tac-navy: #020d24;
            --tac-navy-2: #031536;
            --tac-blue: #007bff;
            --tac-blue-light: #00a8ff;
            --tac-gold: #f5b51b;
            --tac-white: #ffffff;
            --tac-muted: #b8c5d9;
        }


        /* =========================================================
        GLOBAL
        ========================================================= */

        .tac-about-intro,
        .tac-event-section,
        .tac-excellence-section {
            position: relative;
            overflow: hidden;
        }

        .tac-about-intro .container,
        .tac-event-section .container,
        .tac-excellence-section .container {
            position: relative;
            z-index: 3;
        }


        /* =========================================================
        SMALL SECTION LABEL
        ========================================================= */

        .tac-section-label {
            display: flex;
            align-items: center;
            gap: 13px;
            color: var(--tac-gold);
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .tac-section-label span {
            display: inline-block;
            width: 38px;
            height: 5px;
            background: var(--tac-blue-light);
            transform: skewX(-28deg);
        }


        .tac-title-bars {
            display: flex;
            align-items: center;
            gap: 7px;
            margin-top: 17px;
        }

        .tac-title-bars span {
            width: 48px;
            height: 5px;
            background: var(--tac-gold);
            transform: skewX(-25deg);
        }

        .tac-title-bars small {
            width: 27px;
            height: 5px;
            background: var(--tac-blue);
            transform: skewX(-25deg);
        }


        /* =========================================================
        ABOUT INTRO
        ========================================================= */

        .tac-about-intro {
            padding: 78px 0 88px;
            background:
                radial-gradient(
                    circle at 75% 40%,
                    rgba(0, 123, 255, 0.12),
                    transparent 32%
                ),
                var(--tac-navy);
        }

        .tac-about-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 75px;
            align-items: center;
        }

        /* image */

        .tac-about-visual {
            position: relative;
            min-height: 390px;
            display: flex;
            align-items: center;
        }

        .tac-image-frame {
            position: relative;
            z-index: 3;
            width: 92%;
            overflow: hidden;
            border-radius: 10px;
            border: 1px solid rgba(0, 168, 255, .55);
            box-shadow:
                0 25px 55px rgba(0, 0, 0, .45);
        }

        .tac-image-frame img {
            display: block;
            width: 100%;
            height: 390px;
            object-fit: cover;
           
        }

        /* text */

        .tac-about-content h2,
        .tac-event-copy h2,
        .tac-excellence-content h2 {
            margin: 0 0 22px;
            color: #fff;
            font-size: clamp(34px, 3.5vw, 55px);
            line-height: 1.05;
            font-weight: 900;
            letter-spacing: -.5px;
            text-transform: uppercase;
        }

        .tac-about-content h2 strong {
            color: var(--tac-blue);
        }


        .tac-about-content p,
        .tac-event-copy p,
        .tac-excellence-content p {
            color: #d0d9e8;
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 17px;
        }


        .tac-slogan {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: 25px;
            color: #fff;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 4px;
            font-style: italic;
        }


        .tac-slogan span {
            display: block;
            width: 13px;
            height: 32px;
            background: var(--tac-blue-light);
            transform: skewX(-20deg);
        }


        /* =========================================================
        EVENT SECTION
        ========================================================= */

        .tac-event-section {
            padding: 82px 0 75px;
            background:
                linear-gradient(
                    135deg,
                    #031536 0%,
                    #02102b 48%,
                    #001d4c 100%
                );
        }

        /* subtle diagonal background */

        .tac-event-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    135deg,
                    transparent 0 45%,
                    rgba(0, 123, 255, .07) 45% 55%,
                    transparent 55%
                );
            pointer-events: none;
        }

        .tac-event-grid {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 65px;
            align-items: start;
        }


        /* heading */

        .tac-event-copy h2 {
            font-size: clamp(36px, 3.6vw, 57px);
            margin-bottom: 8px;
        }

        .tac-event-copy h2 strong {
            color: var(--tac-blue);
        }

        .tac-location-title {
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 5px;
            font-style: italic;
            margin-bottom: 30px;
        }

        /* support */

        .tac-event-support {
            display: grid;
            grid-template-columns: 6px 1fr;
            gap: 25px;
            margin-top: 35px;
            padding: 25px 0 5px;
            border-top: 1px solid rgba(0, 123, 255, .25);
        }


        .tac-support-accent {
            background: var(--tac-blue-light);
            transform: skewX(-20deg);
        }

        .tac-event-support p {
            margin: 0;
            color: #bac9df;
            font-size: 13px;
            line-height: 1.75;
        }

        /* =========================================================
        ASIAN EXCELLENCE
        ========================================================= */

        .tac-excellence-section {
            padding: 90px 0;
            background: #020d24;
        }


        .tac-excellence-grid {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 55px;
            align-items: center;
        }

        .tac-excellence-image {
            order: 1;
        }

        .tac-excellence-content {
            order: 2;
        }

        .tac-excellence-content h2 strong {
            color: var(--tac-blue);
        }

        .tac-excellence-content p {
            max-width: 520px;
        }

        .tac-excellence-line {
            width: 75px;
            height: 4px;
            background: var(--tac-blue-light);
            margin-top: 30px;
            transform: skewX(-25deg);
        }

        .tac-excellence-caption {
            margin-top: 18px;
            color: #15b8ff;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 3px;
        }

        /* image */

        .tac-excellence-image {
            position: relative;
            min-height: 390px;
        }

        .tac-excellence-grid {
            grid-template-columns: 1.15fr .85fr;
        }

        .tac-excellence-image {
            order: -1;
        }

        .tac-excellence-content {
            order: 2;
        }

        .tac-excellence-image-frame {
            position: relative;
            width: 100%;
            height: 390px;
            overflow: hidden;
            border-radius: 10px;
            border: 1px solid rgba(0, 168, 255, .45);
        }


        .tac-excellence-image-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }


        .tac-excellence-image-frame::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    90deg,
                    rgba(0, 15, 40, .40),
                    transparent 60%
                );
        }




        /* =========================================================
        IMAGE HOVER EFFECT
        ========================================================= */

        .tac-image-frame,
        .tac-excellence-image-frame {
            cursor: pointer;
            transition:
                transform 0.45s ease,
                box-shadow 0.45s ease,
                border-color 0.45s ease;
        }


        /* Image itself */
        .tac-image-frame img,
        .tac-excellence-image-frame img {
            transition: transform 0.6s ease;
        }


        /* Hover */
        .tac-image-frame:hover,
        .tac-excellence-image-frame:hover {
            transform: translateY(-8px);

            border-color: rgba(0, 168, 255, 0.9);

            box-shadow:
                0 18px 45px rgba(0, 0, 0, 0.45),
                0 0 25px rgba(0, 123, 255, 0.25);
        }


        /* Zoom the photo */
        .tac-image-frame:hover img,
        .tac-excellence-image-frame:hover img {
            transform: scale(1.06);
        }



        /* =========================================================
        RESPONSIVE
        ========================================================= */

        @media (max-width: 991px) {

            .tac-about-grid,
            .tac-event-grid,
            .tac-excellence-grid {
                grid-template-columns: 1fr;
            }

            .tac-about-grid {
                gap: 45px;
            }

            .tac-about-visual {
                min-height: auto;
            }

            .tac-image-frame {
                width: 94%;
            }

            .tac-excellence-image {
                order: -1;
            }
        }

        @media (max-width: 767px) {

            .tac-about-intro,
            .tac-event-section,
            .tac-excellence-section {
                padding: 60px 0;
            }

            .tac-image-frame img {
                height: 300px;
            }

            .tac-about-content h2,
            .tac-event-copy h2,
            .tac-excellence-content h2 {
                font-size: 34px;
            }

            .tac-excellence-image,
            .tac-excellence-image-frame {
                min-height: 280px;
                height: 280px;
            }

        }

        @media (max-width: 480px) {
            .tac-about-content p,
            .tac-event-copy p,
            .tac-excellence-content p {
                font-size: 14px;
            }

            .tac-image-frame img {
                height: 250px;
            }

            .tac-event-grid {
                gap: 40px;
            }
        }
    </style>

',
    'banner' => [
        'title'  => 'ABOUT US',
        'crumbs' => [
            ['text' => 'Home', 'href' => '/', 'class' => 'home-page-link'],
            ['text' => 'About Us', 'href' => '/about', 'class' => 'current-page'],
        ],
    ],
]);
?>

    </header>
    <!--================= Header Section End Here =================-->
    
    <!-- =========================================================
     TRACK ASIA CUP 2026 - ABOUT PAGE
     ========================================================= -->

    <!-- ================= ABOUT TAC 2026 ================= -->
    <section class="tac-about-intro">
        <div class="container">
            <div class="tac-about-grid">
                <!-- IMAGE -->
                <div class="tac-about-visual">
                    <div class="tac-image-frame">
                        <img
                            src="assets/images/gallery/about-tc.jpg"
                            alt="Track Asia Cup 2026"
                        >
                    </div>
                </div>


                <!-- CONTENT -->
                <div class="tac-about-content">
                    <div class="tac-section-label">
                        <span></span>
                        ABOUT THE
                    </div>
                    <h2>
                        TRACK ASIA CUP
                        <strong>2026</strong>
                    </h2>
                    <p>
                        Get ready for speed and adrenaline—Tagaytay CT Velodrome is set to host the prestigious Track Asia Cup 2026. Bringing together the fastest cyclists from across Asia, the event will also offer crucial Olympic qualification points as athletes compete for continental glory.
                    </p>
                    <p>
                        Watch world-class competitors test their limits with power, precision, and strategy on the track. Organized by the Asian Cycling Confederation (ACC) and Integrated Cycling Federation of the Philippines, Inc. (PHILCYCLING), the championship marks a major milestone for Philippine sports, bringing the excitement of velodrome racing to the heart of Tagaytay City.
                    </p>
                    <div class="tac-slogan">
                        <span></span>
                        FASTER&nbsp;&nbsp; STRONGER&nbsp;&nbsp; TOGETHER
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ================= THE EVENT ================= -->
    <section class="tac-event-section">
        <div class="tac-event-bg"></div>
        <div class="container">
            <div class="tac-event-grid">
                <!-- LEFT CONTENT -->
                <div class="tac-event-copy">
                    <div class="tac-section-label">
                        <span></span>
                        THE EVENT
                    </div>
                    <h2>
                        TRACK ASIA CUP SET FOR
                        <br>
                        <strong>DECEMBER 1–7, 2026</strong>
                    </h2>
                    <div class="tac-location-title">
                        IN TAGAYTAY CITY
                    </div>
                    <p>
                        <b>TAGAYTAY</b> City rolls out the red carpet for athletes and officials from across the continent who are seeing action in the 2026 Track Asia Cup set from December 1–7, 2026 at the Tagaytay CT Velodrome.
                    </p>
                    <p>
                        “Our warmest welcome to the athletes, coaches and officials for the Track Asia Cup 2026,” said Philippine Olympic Committee (POC) President Abraham “Bambol” N. Tolentino, who also serves as President of the host national federation, Philcycling.
                    </p>
                    <p>
                        Riders from powerhouse countries such as Japan, South Korea, China, Hong Kong, Thailand, Malaysia, and Indonesia are set to challenge elite Filipino track cyclists in this prestigious, UCI-sanctioned event..
                    </p>
                </div>

                <!-- RIGHT INFO -->
                <div class="tac-event-info">
                    <!-- IMAGE -->
                    <div class="tac-excellence-image">
                        <div class="tac-excellence-image-frame">
                            <img
                                src="assets/images/gallery/side.jpg"
                                alt="Tagaytay CT Velodrome"
                            >
                        </div>
                    </div>
                </div>
            </div>
            <!-- SUPPORTING INFORMATION -->
            <div class="tac-event-support">
                <div class="tac-support-accent"></div>
                <p>
                    The competition highlights speed, power and precision inside the velodrome. The Championships are primarily supported by the Philippine Sports Commission, City Government of Tagaytay, Philippine Olympic Committee, 8th District of Cavite and with support from Smart/MVP Sports Foundation.
                </p>
            </div>
        </div>
    </section>


    <!-- ================= ASIAN EXCELLENCE ================= -->
    <section class="tac-excellence-section">
        <div class="container">
            <div class="tac-excellence-grid">
                <!-- TEXT -->
                <div class="tac-excellence-content">
                    <div class="tac-section-label">
                        <span></span>
                        THE TRACK ASIA CUP
                    </div>
                    <h2>
                        A STAGE FOR
                        <br>
                        <strong>ELITE COMPETITION</strong>
                    </h2>
                    <p>
                        The Track Asia Cup 2026 is the next major international competition following the Asian Track Championships held last March 2026. Organized in Tagaytay City, it is being hosted by POC President Tolentino and continues the legacy of the 30th Southeast Asian Games held in December 2019.
                    </p>
                    <p>
                        The event, scheduled by the International Cycling Union (UCI) and the Asian Cycling Confederation (ACC), will take place at the Tagaytay CT Velodrome— the country's premier venue for track cycling. The races run from December 1–7, 2026, bringing together the best Asian cyclists as they battle for continental supremacy.
                    </p>
                    <div class="tac-excellence-line"></div>
                    <div class="tac-excellence-caption" style="color: #f5b51b">
                        FASTER&nbsp;&nbsp; • &nbsp;&nbsp;STRONGER&nbsp;&nbsp; • &nbsp;&nbsp;TOGETHER
                    </div>
                </div>

                <!-- IMAGE -->
                <div class="tac-excellence-image">
                    <div class="tac-excellence-image-frame">
                        <img
                            src="assets/images/gallery/excellence.jpg"
                            alt="Tagaytay CT Velodrome"
                        >
                    </div>
                    
                </div>
            </div>
        </div>
    </section>


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
                <!-- ================= Add logo of City gov't of Tagaytay and Philcycling =================-->
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
    <!--================= Sponsors Table Section End Here =================-->


    <!--================= Newsletter Popup Start Here =================-->
    <div class="rts-newsletter-popup">
        <div class="newsletter-close-btn"><i class="fal fa-times"></i></div>
        <div class="newsletter-inner">
            <h3 class="newsletter-heading">Get Weekly Newsletter</h3>
            <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a completely modern design</p>
            <form>
                <div class="input-area">
                    <div class="input-div"><input type="text" placeholder="Your name">
                        <div class="input-icon"><i class="far fa-user"></i></div>
                    </div>
                    <div class="input-div"><input type="email" placeholder="Email address" required>
                        <div class="input-icon"><i class="far fa-envelope"></i></div>
                    </div>
                </div>
                <button type="submit" class="subscribe-btn">Subscribe Now <i
                        class="fal fa-long-arrow-right ml--5"></i></button>
            </form>
        </div>
    </div>
    <!--================= Newsletter Popup End Here =================-->


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
                            <h3 class="footer-widget-title"><span class="decorator"></span> OUR PARTNERS</h3>
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


<!-- no image TAC branding


<div class="tac-brand-area">
                <img src="assets/images/watermarks/acc-tac-2026.png"
                    alt="ACC TAC 2026 Logo">
            </div> 

            /* =========================================================
            TAC 2026 - LOCAL ORGANIZING COMMITTEE
            ========================================================= */

            .rts-sponsors-section {
                padding-top: 0;
                padding-bottom: 0;
            }

            /* TITLE */

            .rts-sponsors-section .section-title-area .section-title {
                position: relative;
                z-index: 2;
                margin: 0;
                padding-top: 20px;
            }

            /* TAC 2026 BRANDING AREA */


            .rts-sponsors-section .tac-brand-area {
                position: relative;
                width: 100vw;
                margin-left: calc((100% - 100vw) / 2);
                padding: 70px 20px;
                overflow: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                background:
                    linear-gradient(
                        135deg,
                        rgba(0, 123, 255, 0.05) 0%,
                        transparent 20%,
                        transparent 75%,
                        rgba(0, 123, 255, 0.04) 100%
                    ),
                    linear-gradient(
                        45deg,
                        transparent 0%,
                        transparent 35%,
                        rgba(0, 123, 255, 0.035) 35%,
                        rgba(0, 123, 255, 0.035) 48%,
                        transparent 48%,
                        transparent 100%
                    ),
                    linear-gradient(
                        135deg,
                        #06101f 0%,
                        #071a30 50%,
                        #06101f 100%
                    );
            }


            /* =========================================================
            FADED GEOMETRIC SHAPES
            ========================================================= */

            .rts-sponsors-section .tac-brand-area::before,
            .rts-sponsors-section .tac-brand-area::after {
                content: "";
                position: absolute;
                pointer-events: none;
                z-index: 1;
            }


            /* LEFT SHAPE */

            .rts-sponsors-section .tac-brand-area::before {
                width: 500px;
                height: 220px;
                left: -120px;
                top: -30px;
                background: rgba(0, 123, 255, 0.08);
                transform: rotate(-18deg) skewX(-25deg);
            }


            /* RIGHT SHAPE */

            .rts-sponsors-section .tac-brand-area::after {
                width: 550px;
                height: 240px;
                right: -150px;
                bottom: -50px;
                background: rgba(0, 123, 255, 0.07);
                transform: rotate(-18deg) skewX(-25deg);
            }


            /* TAC LOGO */

            .rts-sponsors-section .tac-brand-area img {
                position: relative;
                z-index: 2;
                display: block;
                width: 320px;
                max-width: 75%;
                height: auto;
                margin: 0 auto;
            }-->

