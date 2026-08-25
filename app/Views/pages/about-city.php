<?php
$view->open([
    'title'  => 'About the City | Track Asia Cup | Tagaytay 2026',
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <style>
        /* Custom style para maging mas dramatic at dark-theme friendly */
        
        .swiper-slide img {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);
            cursor: pointer;
            /* Para alam ng user na pwedeng i-click */
        }
    </style>
',
    'banner' => [
        'title'  => 'ABOUT CITY',
        'crumbs' => [
            ['text' => 'About', 'href' => '/about', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li'],
            ['text' => 'About the City', 'href' => '/about-city', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li']
        ],
    ],
]);
?>
    </header>
    <!--================= Header Section End Here =================-->


    <!--================= Team Section Start Here =================-->

    <!--================= Team Section End Here =================-->

    <!--================= Additional 1 Section Start Here =================-->

    <!-- MAIN CONTENT -->
    <style>
        /* --- SECTION CONTAINER --- */
        
        .premium-history-section {
            position: relative;
            background: radial-gradient(circle at top right, #141414 0%, #050505 80%);
            padding: 80px 5% 100px 5%;
            /* Tinaasan padding-bottom para sa watermark */
            color: #FFFFFF;
            font-family: 'Manrope', sans-serif;
            overflow: hidden;
        }
        /* --- ANIMATIONS --- */
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes expandLine {
            from {
                width: 0;
                opacity: 0;
            }
            to {
                width: 100px;
                opacity: 1;
            }
        }
        /* --- 1. TOP BANNER (Yung gusto mong Readable) --- */
        
        .location-banner {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-bottom: 60px;
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
            position: relative;
            z-index: 2;
        }
        
        .location-text {
            font-family: 'Cinzel', serif;
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 5px;
            color: #C5A059;
            text-transform: uppercase;
            text-align: center;
        }
        
        .location-line {
            height: 2px;
            width: 100px;
            background: linear-gradient(90deg, transparent, #C5A059, transparent);
            animation: expandLine 1s ease-out 0.5s forwards;
            opacity: 0;
        }
        /* --- 2. BOTTOM WATERMARK (Yung Aesthetic lang) --- */
        
        .aesthetic-watermark {
            position: absolute;
            bottom: -40px;
            /* Nakalubog konti sa baba */
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            text-align: center;
            font-family: 'Cinzel', serif;
            font-weight: 900;
            font-size: 18vw;
            /* Sobrang laki */
            line-height: 0.8;
            letter-spacing: 10px;
            /* Sobrang labo na puti (Texture style) */
            color: rgba(255, 255, 255, 0.03);
            z-index: 0;
            /* Nasa likod */
            pointer-events: none;
            user-select: none;
        }
        /* --- GRID LAYOUT --- */
        
        .history-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 60px;
            max-width: 1400px;
            margin: 0 auto;
            align-items: center;
            position: relative;
            z-index: 2;
            /* Nasa ibabaw ng watermark */
        }
        /* --- LEFT SIDE: TEXT --- */
        
        .history-text {
            padding-right: 20px;
            opacity: 0;
            animation: fadeInUp 1.2s ease-out 0.3s forwards;
        }
        
        .gold-eyebrow {
            font-family: 'Cinzel', serif;
            font-size: 13px;
            letter-spacing: 4px;
            color: #888;
            margin-bottom: 20px;
            display: block;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .history-headline {
            font-family: 'Cinzel', serif;
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 30px;
            /* Metallic Text Effect */
            background: linear-gradient(120deg, #C5A059 0%, #F4E2BB 50%, #C5A059 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 0 20px rgba(197, 160, 89, 0.15));
        }
        
        .history-quote {
            font-family: 'Playfair Display', serif;
            font-style: italic;
            font-size: 1.2rem;
            line-height: 1.8;
            color: #D0D0D0;
            margin-bottom: 40px;
            border-left: 2px solid #C5A059;
            padding-left: 20px;
        }
        
        .history-list {
            list-style: none;
            padding: 0;
        }
        
        .history-list li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: #B0B0B0;
            font-size: 0.95rem;
            letter-spacing: 1px;
        }
        
        .history-list li::before {
            content: '◆';
            color: #C5A059;
            margin-right: 15px;
            font-size: 0.8rem;
        }
        /* --- RIGHT SIDE: VIDEO COLUMN --- */
        
        .video-column {
            display: flex;
            flex-direction: column;
            position: relative;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
            opacity: 0;
            animation: fadeInUp 1.2s ease-out 0.6s forwards;
        }
        
        .video-frame {
            position: relative;
            border: 1px solid rgba(197, 160, 89, 0.3);
            border-bottom: none;
            background: #000;
            width: 100%;
            line-height: 0;
        }
        
        .video-responsive-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        
        .video-responsive-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        /* Info Bar */
        
        .info-bar {
            background-color: #0A0A0A;
            border: 1px solid rgba(197, 160, 89, 0.3);
            border-top: 2px solid #C5A059;
            padding: 25px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .info-item h4 {
            font-family: 'Cinzel', serif;
            color: #FFF;
            font-size: 1.2rem;
            margin: 0 0 5px 0;
            letter-spacing: 1px;
        }
        
        .info-item span {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: #C5A059;
            font-weight: 700;
        }
        
        .divider-line {
            width: 1px;
            height: 35px;
            background: #333;
        }
        /* --- RESPONSIVE --- */
        
        @media (max-width: 900px) {
            .history-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .history-headline {
                font-size: 2.5rem;
            }
            .location-text {
                font-size: 1.2rem;
                letter-spacing: 3px;
            }
            .location-line {
                width: 40px;
            }
        }
    </style>

    <section class="premium-history-section">

        <div class="location-banner">
            <div class="location-line"></div>
            <div class="location-text">Tagaytay City, Philippines</div>
            <div class="location-line"></div>
        </div>

        <div class="aesthetic-watermark">TAGAYTAY</div>

        <div class="history-grid">

            <div class="history-text">
                <span class="gold-eyebrow">The Highland Heritage</span>

                <h1 class="history-headline">THE ECHO OF<br>THE RIDGE</h1>

                <blockquote class="history-quote">
                    "Born from the echoes of an ancient legend—a son's urgent cry of 'Taga, Itay!' amidst the hunt—this ridge has transcended folklore to become the crown jewel of the highlands."
                </blockquote>

                <ul class="history-list">
                    <li>Originates from 19th Century Folklore</li>
                    <li>Officially Chartered in 1938</li>
                    <li>A Timeless Sanctuary Above the Clouds</li>
                </ul>
            </div>

            <div class="video-column">
                <div class="video-frame">
                    <div class="video-responsive-wrapper">
                        <iframe src="https://www.youtube.com/embed/gh7PXWsI9B8" title="Tagaytay AVP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="info-bar">
                    <div class="info-item">
                        <h4>THE ORIGIN</h4>
                        <span>"TAGA, ITAY!"</span>
                    </div>
                    <div class="divider-line"></div>
                    <div class="info-item" style="text-align: right;">
                        <h4>SINCE</h4>
                        <span>1938</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--================= Additional 1 Section End Here =================-->

    <!--================= Additional 2 Start Here =================-->


    <!--================= Additional 2 End Here =================-->

    <!--================= Additional 3 Section Start Here =================-->


    <!--================= Additional 3 Section End Here =================-->







    <!--================= Team Details Section Start Here =================-->


    <!-- ================= Team Details Section End Here ================= -->


    <!--================= Footer Start Here =================-->
    <div class="footer footer1">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo"><img src="assets/images/2026_ACC_TAC_Letterhead_1.png" alt="footer-logo">
                            </div>
                            <p class="footer-text">Experience the Speed and Excitement of Track Asia Cup 2026, Where Champions Race for Glory!
                            </p>
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
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title"><span class="decorator"></span> ESSENTIAL LINKS</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item"><a href="/about">ABOUT US</a></li>
                                <!--  <li class="widget-list-item"><a href="/match-schedule">SCHEDULE</a></li> -->
                                <li class="widget-list-item"><a href="/team">Technical Guide</a></li>
                                <!--    <li class="widget-list-item"><a href="/league-standings">AWARDING</a></li>
                                <li class="widget-list-item"><a href="/gallery">GALLERY</a></li>
                                <li class="widget-list-item"><a href="/contact">CONTACT</a></li> -->
                                <!-- <li class="widget-list-item"><a href="/shop">PRICE TABLE</a></li> -->
                                <!-- <li class="widget-list-item"><a href="/shop">SHOP</a></li> -->
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
                                <li class="widget-list-item"><i class="fas fa-envelope-open"></i><a href="mailto:philcycling.offroad@gmail.com">philcycling@gmail.com</a>
                                </li>
                                <!-- <li class="widget-list-item"><i class="fas fa-phone"></i><a href="tel:09877788890">098
                                        777
                                        888 90</a></li> -->
                                <li class="widget-list-item"><i class="fas fa-map-marker-alt"></i> <span>TAGAYTAY CITY
                                VELODROME, <br> CITY SPORTS COMPLEX,<br>
                                TAGAYTAY CITY</span></li>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1, // Ilang slide ang kita sa isang tingin
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000, // 5 seconds bago mag-slide
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

']); ?>
