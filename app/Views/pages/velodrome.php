<?php
$view->open([
    'title'  => 'CT Velodrome | Track Asia Cup | Tagaytay 2026',
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



        /* Para sa velodrome */
  
        .swiper-slide img {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);
            cursor: pointer;
        }
        /* FIX PARA SA NAVIGATION BAR */
        
        header,
        .rts-header-area,
        .navbar {
            position: relative;
            z-index: 9999 !important;
        }
        
        ul.submenu,
        .sub-menu,
        .dropdown-menu {
            z-index: 10000 !important;
            background-color: #0b0b1b !important;
            /* Siguradong may kulay ang likod */
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        ul.submenu li a,
        .sub-menu li a {
            color: #ffffff !important;
            /* Siguradong puti ang text */
            opacity: 1 !important;
        }

            <style>
        /* =========================================
        ONLY REUSABLE / RESPONSIVE CSS
        ========================================== */

        .velodrome-page {
            color: #fff;
            overflow: hidden;
        }

        .velodrome-page .v-eyebrow {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .velodrome-page .v-title {
            margin: 0;
            font-size: clamp(38px, 5vw, 64px);
            line-height: .98;
            font-weight: 900;
            letter-spacing: -2px;
            text-transform: uppercase;
        }

        .velodrome-page .v-copy {
            font-size: 16px;
            line-height: 1.85;
        }

        .velodrome-page .v-role {
            font-size: 13px;
            font-weight: 700;
            line-height: 1.7;
            text-transform: uppercase;
            letter-spacing: .5px;
        }


        /* Facility image behavior only */
        .facility-photo {
            position: relative;
            overflow: hidden;
            border-radius:8px;
        }

        .facility-photo::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    135deg,
                    rgba(12,109,190,.25),
                    rgba(0,0,0,.15)
                ),
                url("/assets/images/gallery/built-velo.jpg")
                center / cover;
            transform: scale(1);
            transition: transform .4s ease;
        }

        .facility-photo:hover::before {
            transform: scale(1.08);
        }

        /* Gallery image behavior only */
        .velodrome-page .v-gallery-item {
            height: 100%;
            overflow: hidden;
            border-radius: 8px;
            background: #111;
            cursor: pointer;
        }

        .velodrome-page .v-gallery-item img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: transform .5s ease, filter .5s ease;
        }

        .velodrome-page .v-gallery-item:hover img {
            transform: scale(1.04);
            filter: brightness(.82);
        }

        /* =========================================
        BAMBOL SECTION
        ========================================= */

        .bambol-section {
            background:#0b0b1b;
            padding:110px 0;
        }

        .bambol-photo-wrap {
            position:relative;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:0 30px;
            padding-bottom:30px;
        }

        .bambol-photo {
            width:100%;
            max-width:460px;
            height:auto;
            display:block;
            border-radius:8px;
        }

        .bambol-content {
            max-width:720px;
            padding:0 35px 0 45px;
        }

        .bambol-eyebrow {
            display:flex;
            align-items:center;
            gap:15px;
            margin-bottom:22px;
            color:#D4AF37;
            font-size:12px;
            font-weight:800;
            letter-spacing:3px;
            text-transform:uppercase;
        }

        .bambol-eyebrow::after {
            content:"";
            width:70px;
            height:2px;
            background:#007bff;
        }

        .bambol-name {
            margin: 0;
            color: #ffffff;
            font-size: clamp(46px, 5.2vw, 78px);
            line-height: .88;
            font-weight: 900;
            letter-spacing: -3px;
            text-transform: uppercase;
        }

        .bambol-name span {
            display: inline;
            color: #007bff;
        }

        .bambol-role {
            margin-top:25px;
            padding-left:17px;
            border-left:3px solid #007bff;
            color:#62b9f7;
            font-size:13px;
            font-weight:800;
            line-height:1.65;
            letter-spacing:1px;
            text-transform:uppercase;
        }

        .bambol-quote {
            position:relative;
            margin-top:38px;
            padding-left:55px;
            max-width:650px;
        }

        .bambol-quote-mark {
            position:absolute;
            left:0;
            top:-22px;
            color:#D4AF37;
            font-family:Georgia,serif;
            font-size:88px;
            font-weight:700;
            line-height:1;
        }

        .bambol-quote p {
            margin:0;
            color:rgba(255,255,255,.78);
            font-size:15px;
            line-height:1.85;
        }

        .bambol-secondary {
            margin-top:24px;
            color:rgba(255,255,255,.55);
            font-size:13px;
            line-height:1.8;
        }

        .bambol-statement {
            display:flex;
            align-items:center;
            gap:18px;
            margin-top:32px;
        }

        .bambol-statement-line {
            width:70px;
            height:3px;
            background:#D4AF37;
            flex-shrink:0;
        }

        .bambol-statement-text {
            color:#ffffff;
            font-size:12px;
            font-weight:800;
            line-height:1.4;
            letter-spacing:2px;
            text-transform:uppercase;
        }

        /* =========================================
        LIGHTBOX
        ========================================= */

        #lightbox-modal {
            display:none;
            position:fixed;
            z-index:99999;
            inset:0;
            width:100%;
            height:100%;
            overflow:hidden;
            background:rgba(0,0,0,.92);
            backdrop-filter:blur(10px);
            -webkit-backdrop-filter:blur(10px);
        }

        #lightbox-modal .lightbox-inner {
            width:100%;
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:60px 30px;
            box-sizing:border-box;
        }

        #lightbox-img {
            display:block;
            width:auto;
            height:auto;
            max-width:90%;
            max-height:80vh;
            object-fit:contain;
            border:3px solid #D4AF37;
            border-radius:8px;
            box-shadow:
                0 0 40px rgba(212,175,55,.45),
                0 10px 40px rgba(0,0,0,.6);
        }

        .lightbox-close {
            position:absolute;
            top:20px;
            right:30px;
            color:#D4AF37;
            font-size:50px;
            font-weight:bold;
            line-height:1;
            cursor:pointer;
            transition:.3s;
            z-index:10001;
        }

        .lightbox-close:hover {
            color:#ffffff;
        }


        /* =========================================
        LIGHTBOX RESPONSIVE
        ========================================= */

        @media (max-width:767px) {

            #lightbox-modal .lightbox-inner {
                padding:55px 15px 30px;
            }

            #lightbox-img {
                max-width:94%;
                max-height:75vh;
                border-width:2px;
                box-shadow:
                    0 0 30px rgba(212,175,55,.45),
                    0 8px 30px rgba(0,0,0,.6);
            }

            .lightbox-close {
                top:12px;
                right:18px;
                font-size:42px;
            }
        }

        /* =========================================
        RESPONSIVE
        ========================================== */

        @media (max-width: 991px) {

            .velodrome-page .v-hero {
                min-height: 540px !important;
            }

            .velodrome-page .v-person-photo img {
                height: 600px !important;
            }

            .velodrome-page .v-gallery-grid {
                display: block !important;
            }

            .velodrome-page .v-gallery-grid > div {
                margin-bottom: 15px;
            }

            .velodrome-page .v-gallery-item {
                height: 300px;
            }
        }

        @media (max-width: 767px) {

            .velodrome-page .v-hero {
                min-height: 500px !important;
            }

            .velodrome-page .v-hero-title {
                font-size: 48px !important;
                letter-spacing: -2px !important;
            }

            .velodrome-page .v-person-photo img {
                height: 500px !important;
            }

            .velodrome-page .v-gallery-item {
                height: 250px;
            }

            #lightbox-modal {
                padding: 25px 15px;
            }

            #lightbox-img {
                max-width: 96%;
                max-height: 85vh;
            }

            .lightbox-close {
                top: 12px;
                right: 18px;
            }
        }
   

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </style>
',

    'banner' => [
            'title'  => '',
            'crumbs' => [
                ['text' => ''],
                ['text' => '']
            ],
        ],
    ]);
?>

    </header>
    <!--================= Header Section End Here =================-->



<main class="velodrome-page">
    

    <!-- =========================================
         HERO
    ========================================== -->
    <section
        class="v-hero"
        style="
            min-height:580px;
            display:flex;
            align-items:flex-end;
            position:relative;
            overflow:hidden;
            background:#050814;
        "
    >

        <!-- VIDEO BACKGROUND -->
        <video
            autoplay
            muted
            loop
            playsinline
            preload="metadata"
            poster="assets/images/velodrome/velo-1.jpg"
            style="
                position:absolute;
                inset:0;
                width:100%;
                height:100%;
                object-fit:cover;
                z-index:0;
            "
        >
            <source src="assets/videos/velodrome-1.mp4" type="video/mp4">
        </video>

        <!-- DARK OVERLAY -->
        <div
            style="
                position:absolute;
                inset:0;
                background:
                    linear-gradient(
                        90deg,
                        rgba(5,8,20,.95) 0%,
                        rgba(5,8,20,.72) 45%,
                        rgba(5,8,20,.25) 100%
                    );
                z-index:1;
            "
        ></div>
        
        <div
            style="
                position:absolute;
                left:0;
                bottom:0;
                width:100%;
                height:7px;
                background:linear-gradient(
                    90deg,
                    #007bff 0%,
                    #007bff 25%,
                    #D4AF37 25%,
                    #D4AF37 50%,
                    #ed1c24 50%,
                    #ed1c24 75%,
                    #00a651 75%,
                    #00a651 100%
                );
            "
        ></div>

        <div class="container" style="position:relative; z-index:2;">
            <div class="row">
                <div class="col-lg-9">

                    <div
                        style="
                            padding:90px 0 85px;
                            max-width:720px;
                        "
                    >

                        <div
                            class="v-eyebrow"
                            style="
                                margin-bottom:18px;
                                color:#ffffff;
                            "
                        >
                            TAGAYTAY CITY • PHILIPPINES
                        </div>

                        <h1
                            class="v-hero-title"
                            style="
                                margin:0;
                                color:#ffffff;
                                font-size:clamp(48px,7vw,88px);
                                line-height:.92;
                                font-weight:900;
                                letter-spacing:-3px;
                                text-transform:uppercase;
                            "
                        >
                            THE PEOPLE<br>
                            BEHIND THE<br>
                            <span style="color:#007bff;">VELODROME</span>
                        </h1>

                        <p
                            style="
                                max-width:650px;
                                margin:28px 0 0;
                                color:rgba(255,255,255,.78);
                                font-size:17px;
                                line-height:1.8;
                            "
                        >
                            A shared vision for Philippine cycling — built around
                            athletes, competition, and the future of the sport.
                        </p>

                        <div
                            style="
                                width:80px;
                                height:4px;
                                margin-top:30px;
                                background:#D4AF37;
                            "
                        ></div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- =========================================
         FACILITY
    ========================================== -->
    <section
        style="
            padding:110px 0;
            background:#0b0b1b;
        "
    >

        <div class="container">

            <div class="row g-5 align-items-center">

                <div class="col-lg-7">

                    

                    <h2
                        class="v-title"
                        style="
                            color:#ffffff;
                        "
                    >
                        A DREAM BUILT<br>
                        FOR <span style="color:#007bff;">CYCLING</span>
                    </h2>

                    <div
                        class="v-copy"
                        style="
                            margin-top:28px;
                            color:rgba(255,255,255,.72);
                        "
                    >

                        <p>
                            The Tagaytay CT Velodrome represents an important
                            milestone for Philippine cycling — providing athletes
                            with a dedicated venue to train, compete and pursue excellence.
                        </p>

                        <p>
                            More than a sporting facility, it creates opportunities
                            for international events while helping inspire the next
                            generation of Filipino cyclists.
                        </p>

                    </div>

                    <div
                        style="
                            border-top:1px solid rgba(255,255,255,.15);
                            margin-top:35px;
                            padding-top:25px;
                        "
                    >

                        <div class="row g-4">

                            <div class="col-4">

                                <span
                                    style="
                                        display:block;
                                        color:#D4AF37;
                                        font-size:30px;
                                        line-height:1;
                                        font-weight:900;
                                    "
                                >
                                    250M
                                </span>

                                <span
                                    style="
                                        display:block;
                                        margin-top:7px;
                                        color:rgba(255,255,255,.55);
                                        font-size:10px;
                                        font-weight:700;
                                        letter-spacing:1.5px;
                                        text-transform:uppercase;
                                    "
                                >
                                    Track
                                </span>

                            </div>

                            <div class="col-4">

                                <span
                                    style="
                                        display:block;
                                        color:#D4AF37;
                                        font-size:30px;
                                        line-height:1;
                                        font-weight:900;
                                    "
                                >
                                    UCI
                                </span>

                                <span
                                    style="
                                        display:block;
                                        margin-top:7px;
                                        color:rgba(255,255,255,.55);
                                        font-size:10px;
                                        font-weight:700;
                                        letter-spacing:1.5px;
                                        text-transform:uppercase;
                                    "
                                >
                                    Standards
                                </span>

                            </div>

                            <div class="col-4">

                                <span
                                    style="
                                        display:block;
                                        color:#D4AF37;
                                        font-size:30px;
                                        line-height:1;
                                        font-weight:900;
                                    "
                                >
                                    PH
                                </span>

                                <span
                                    style="
                                        display:block;
                                        margin-top:7px;
                                        color:rgba(255,255,255,.55);
                                        font-size:10px;
                                        font-weight:700;
                                        letter-spacing:1.5px;
                                        text-transform:uppercase;
                                    "
                                >
                                    Home of Cycling
                                </span>

                            </div>

                        </div>
                    </div>

                </div>


                <div class="col-lg-5">

                    <div
                        class="facility-photo"
                        style="
                            min-height:400px;
                            background:#071525;
                        "
                    >

                        <div
                            style="
                                position:absolute;
                                inset:18px;
                                border:1px solid rgba(255,255,255,.25);
                                z-index:2;
                                pointer-events:none;
                            "
                        ></div>

                        <div
                            style="
                                position:absolute;
                                left:30px;
                                bottom:28px;
                                background:#071525;
                                border-left:4px solid #ed1c2e;
                                padding:13px 18px;
                                font-size:11px;
                                font-weight:800;
                                letter-spacing:1.5px;
                                text-transform:uppercase;
                                z-index:3;
                                color: #ffffff
                            "
                        >
                            TAGAYTAY CT VELODROME
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- =========================================
         BAMBOL TOLENTINO
    ========================================== -->

    <section class="bambol-section">

        <div class="container bambol-inner">

            <div class="row align-items-center">


                <!-- =====================================
                    PORTRAIT
                ====================================== -->

                <div class="col-lg-5">
                    <div class="bambol-photo-wrap">
                        <img
                            class="bambol-photo"
                            src="assets/images/organization/bambol-ctv.jpg"
                            alt="Abraham Bambol Tolentino"
                            loading="lazy"
                        >
                    </div>
                </div>

                <!-- =====================================
                    CONTENT
                ====================================== -->

                <div class="col-lg-7">
                    <div class="bambol-content">
                        <!-- EYEBROW -->
                        <div class="bambol-eyebrow">
                            THE MAN, THE MIND, THE HEART BEHIND TAGAYTAY CT VELODROME
                        </div>

                        <!-- NAME -->
                       <h2 class="bambol-name">
                            ABRAHAM <span>“BAMBOL”</span>
                            N. TOLENTINO
                        </h2>


                        <!-- ROLE -->
                        <div class="bambol-role">
                            PRESIDENT, PHILIPPINE OLYMPIC COMMITTEE<br>
                            PRESIDENT, PHILCYCLING
                        </div>


                        <!-- QUOTE -->
                        <div class="bambol-quote">
                            <div class="bambol-quote-mark">
                                “
                            </div>
                            <p>
                                The Tagaytay CT Velodrome is a dream
                                that has become reality. His vision for
                                the facility is rooted in creating greater
                                opportunities for Filipino cyclists,
                                providing a world-class venue where
                                athletes can train, compete and pursue
                                excellence.
                            </p>
                        </div>


                        <!-- SECONDARY COPY -->
                        <p class="bambol-secondary">
                            The project also looks toward the future —
                            developing the next generation of Filipino
                            cyclists and bringing major international
                            competitions to the Philippines.
                        </p>


                        <!-- STATEMENT -->
                        <div class="bambol-statement">
                            <span class="bambol-statement-line"></span>
                            <span class="bambol-statement-text">
                                Building a stronger future<br>
                                for Philippine cycling.
                            </span>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
        GALLERY HEADING
    ========================================== -->
    <section
        style="
            padding:110px 0 35px;
            background:#080817;
        "
    >
        <div class="container">

            <div
                class="row align-items-end"
                style="
                    margin:0;
                    row-gap:30px;
                "
            >

                <!-- LEFT SIDE -->
                <div class="col-lg-8">

                    <div
                        class="v-eyebrow"
                        style="
                            margin-bottom:10px;
                            color:#D4AF37;
                        "
                    >
                        INSIDE THE VELODROME
                    </div>

                    <h2
                        class="v-title"
                        style="
                            margin:0;
                            color:#ffffff;
                            font-size:58px;
                            line-height:.9;
                            font-weight:900;
                            letter-spacing:-2px;
                        "
                    >
                        TAGAYTAY.<br>
                        <span style="color:#007bff;">CT VELODROME.</span><br>
                        GALLERY.
                    </h2>

                </div>


                <!-- RIGHT SIDE -->
                <div class="col-lg-4">

                    <p
                        style="
                            max-width:330px;
                            margin:0 0 5px auto;
                            color:#7f8b9c;
                            font-size:12px;
                            line-height:1.7;
                        "
                    >
                        A glimpse of the people, events and moments
                        surrounding the Tagaytay CT Velodrome.
                    </p>

                </div>

            </div>

        </div>
    </section>


    <!-- =========================================
         5-PHOTO GALLERY
    ========================================== -->
    <section
        style="
            padding:35px 0 100px;
            background:#080817;
        "
    >

        <div class="container">

            <div
                class="v-gallery-grid"
                style="
                    display:grid;
                    grid-template-columns:1.5fr .8fr .8fr;
                    grid-template-rows:250px 200px;
                    gap:12px;
                "
            >

                <!-- PHOTO 1 -->
                <div
                    style="
                        grid-row:1 / 3;
                        min-width:0;
                    "
                >

                    <div
                        class="v-gallery-item"
                        style="height:100%;"
                    >
                        <img
                            src="assets/images/team/team-4.png"
                            alt="Tagaytay City CT Velodrome"
                            loading="lazy"
                            onclick="openLightbox(this)"
                        >
                    </div>

                </div>


                <!-- PHOTO 2 -->
                <div style="min-width:0;">

                    <div
                        class="v-gallery-item"
                        style="height:100%;"
                    >
                        <img
                            src="assets/images/gallery/img-track.jpg"
                            alt="Track Asia Cup 2026"
                            loading="lazy"
                            onclick="openLightbox(this)"
                        >
                    </div>

                </div>


                <!-- PHOTO 3 -->
                <div style="min-width:0;">

                    <div
                        class="v-gallery-item"
                        style="height:100%;"
                    >
                        <img
                            src="assets/images/gallery/velo-3.jpg"
                            alt="Track Cycling Competition"
                            loading="lazy"
                            onclick="openLightbox(this)"
                        >
                    </div>

                </div>


                <!-- PHOTO 4 -->
                <div style="min-width:0;">

                    <div
                        class="v-gallery-item"
                        style="height:100%;"
                    >
                        <img
                            src="assets/images/gallery/runner-ups.jpg"
                            alt="Cycling at the Velodrome"
                            loading="lazy"
                            onclick="openLightbox(this)"
                        >
                    </div>

                </div>


                <!-- PHOTO 5 -->
                <div style="min-width:0;">

                    <div
                        class="v-gallery-item"
                        style="height:100%;"
                    >
                        <img
                            src="assets/images/gallery/cw-1.jpg"
                            alt="Philippine Cycling"
                            loading="lazy"
                            onclick="openLightbox(this)"
                        >
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- =========================================
         CLOSING
    ========================================== -->
    <section
        style="
            min-height:520px;
            display:flex;
            align-items:center;
            text-align:center;
            background:
                linear-gradient(
                    rgba(5,8,20,.82),
                    rgba(5,8,20,.88)
                ),
                url('assets/images/gallery/speed.jpg') center center / cover no-repeat;
        "
    >

        <div class="container">

            <div class="row">

                <div class="col-lg-9 mx-auto">

                    <div
                        class="v-eyebrow"
                        style="
                            margin-bottom:18px;
                            color:#D4AF37;
                        "
                    >
                        ONE SHARED VISION
                    </div>

                    <h2
                        class="v-title"
                        style="
                            color:#ffffff;
                        "
                    >
                        BUILDING THE<br>
                        <span style="color:#007bff;">FUTURE OF CYCLING</span>
                    </h2>

                    <p
                        style="
                            max-width:760px;
                            margin:28px auto 0;
                            color:rgba(255,255,255,.75);
                            font-size:16px;
                            line-height:1.9;
                        "
                    >
                        From international competition to athlete development, the
                        Tagaytay CT Velodrome stands as a place where cyclists can
                        dream, train, compete and inspire the next generation.
                    </p>

                </div>

            </div>

        </div>
    </section>

</main>


<!-- =========================================
     LIGHTBOX
========================================== -->
<div
    id="lightbox-modal"
>

    <span
        class="lightbox-close"
        onclick="closeLightbox()"
    >
        &times;
    </span>

    <div class="lightbox-inner">

        <img
            id="lightbox-img"
            alt="Gallery preview"
        >

    </div>

</div>


<script>
    function openLightbox(element) {

        var modal = document.getElementById("lightbox-modal");
        var modalImg = document.getElementById("lightbox-img");

        modal.style.display = "block";
        modalImg.src = element.src;

        document.body.style.overflow = "hidden";
    }

    function closeLightbox() {

        var modal = document.getElementById("lightbox-modal");

        modal.style.display = "none";
        document.body.style.overflow = "auto";
    }

    document.getElementById("lightbox-modal").addEventListener(
        "click",
        function(e) {

            if (e.target === this) {
                closeLightbox();
            }

        }
    );
</script>




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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".venueSwiper", {
                // Settings
                loop: true, // Infinite loop
                speed: 800, // Bilis ng transition
                spaceBetween: 30, // Space between slides
                slidesPerView: 1, // Ilang image ang makikita (Mobile default)

                // Autoplay Configuration
                autoplay: {
                    delay: 3000, // Lilipat every 3 seconds
                    disableOnInteraction: false, // Tuloy pa rin kahit i-click mo
                },

                // Dots (Pagination)
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },

                // Arrows (Navigation)
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                // Responsive Breakpoints
                breakpoints: {
                    768: {
                        slidesPerView: 2, // 2 slides sa Tablet
                    },
                    1024: {
                        slidesPerView: 3, // 3 slides sa Desktop
                    },
                }
            });
        });
    </script>

']); ?>
