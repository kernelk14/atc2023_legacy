<?php
$view->open([
    'title'  => 'About the Organizer | Track Asia Cup | Tagaytay 2026',
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
        'title'  => 'ABOUT THE ORGANIZER',
        'crumbs' => [
            ['text' => 'about', 'href' => '/about', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li'],
            ['text' => 'About the organizer', 'href' => '/about-organizer', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li']
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
    <div class="rts-organizer-gallery pt--80 pb--100" style="background-color: #0b0b1b; position: relative; overflow: hidden;">

        <div style="position: absolute; top: -10%; left: -10%; width: 50%; height: 50%; background: radial-gradient(circle, rgba(0,90,180,0.2) 0%, transparent 70%); pointer-events: none;"></div>

        <div class="container" style="position: relative; z-index: 2;">

            <div class="row mb--60" data-aos="fade-down">
                <div class="col-lg-12 text-center">
                    <p style="color: #ffffff; font-size: 0.9rem; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 10px; font-weight: 700;">
                    </p>
                    <h2 class="metallic-title">INTEGRATED CYCLING FEDERATION OF THE PHILIPPINES (PHILCYCLING)</h2>
                    <div class="separator-line"></div>
                </div>
            </div>

            <div class="row align-items-center">

                <div class="col-lg-6 col-md-12 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="text-glass-panel">
                        <p>
                            The <strong class="text-highlight">Local Organizing Committee (LOC)</strong> for the Asian Track Championships 2026 is established to oversee the comprehensive planning, coordination, and execution of the championships, ensuring
                            a world-class sporting event that meets international standards.
                        </p>
                        <p>
                            The event is proudly hosted by the <strong class="text-highlight">City Government of Tagaytay</strong>, whose strong leadership and support underscore its commitment to sports development, excellence, and international cooperation.
                            The Tagaytay City LGU plays a central role in providing strategic direction, local coordination, and essential services to successfully stage the championships.
                        </p>
                        <p style="margin-bottom: 0;">
                            Working in close collaboration with the host city are the <strong class="text-highlight">Philippine Olympic Committee (POC)</strong>, the <strong class="text-highlight">Philippine Sports Commission (PSC)</strong>, and the
                            <strong class="text-highlight">Integrated Cycling Federation of the Philippines (PhilCycling)</strong>. These national sports institutions bring together their expertise in athlete welfare, sports governance, technical regulation,
                            and event management to ensure full compliance with <span style="color:#fff; font-weight:bold;">UCI</span> standards.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12" data-aos="fade-left">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="logo-box">
                                <img src="assets/images/logos/philcycling.png" alt="PhilCycling" class="logo-img" loading="lazy">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="logo-box">
                                <img src="assets/images/logos/tagaytay.png" alt="Tagaytay City" class="logo-img" loading="lazy">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="logo-box">
                                <img src="assets/images/logos/poc.png" alt="POC" class="logo-img" loading="lazy">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="logo-box">
                                <img src="assets/images/logos/psc.png" alt="PSC" class="logo-img" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt--80 mb--40" data-aos="fade-up">
                <div class="col-12 text-center mb--50">
                    <h3 class="metallic-subtitle">
                        Organizational Milestones & Team
                    </h3>
                    <p style="color: #888; font-size: 0.9rem; letter-spacing: 1px;">Building the road to the championships together. (Click images to view)</p>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="comp-style-card" onclick="openLightbox(this)">
                        <img src="assets/images/team/team-1.png" alt="Visionary Leadership" loading="lazy">
                        <div class="comp-overlay">
                            <span class="comp-badge">Leadership</span>
                            <h5 class="comp-title">Visionary Leadership</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="comp-style-card" onclick="openLightbox(this)">
                        <img src="assets/images/team/team-2.png" alt="Executive Committee" loading="lazy">
                        <div class="comp-overlay">
                            <span class="comp-badge">ExeCom</span>
                            <h5 class="comp-title">Executive Committee</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="comp-style-card" onclick="openLightbox(this)">
                        <img src="assets/images/team/team-3.png" alt="Strategic Partnerships" loading="lazy">
                        <div class="comp-overlay">
                            <span class="comp-badge">Partners</span>
                            <h5 class="comp-title">Strategic Partnerships</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="comp-style-card" onclick="openLightbox(this)">
                        <img src="assets/images/team/team-4.png" alt="The Working Group" loading="lazy">
                        <div class="comp-overlay">
                            <span class="comp-badge">Group</span>
                            <h5 class="comp-title">The Working Group</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="comp-style-card" onclick="openLightbox(this)">
                        <img src="assets/images/team/team-5.png" alt="Operational Readiness" loading="lazy">
                        <div class="comp-overlay">
                            <span class="comp-badge">Operations</span>
                            <h5 class="comp-title">Operational Readiness</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="comp-style-card" onclick="openLightbox(this)">
                        <img src="assets/images/team/team-6.png" alt="Technical Expertise" loading="lazy">
                        <div class="comp-overlay">
                            <span class="comp-badge">Technical</span>
                            <h5 class="comp-title">Technical Expertise</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="comp-style-card" onclick="openLightbox(this)">
                        <img src="assets/images/team/team-7.png" alt="Community Support" loading="lazy">
                        <div class="comp-overlay">
                            <span class="comp-badge">Support</span>
                            <h5 class="comp-title">Community Support</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="comp-style-card" onclick="openLightbox(this)">
                        <img src="assets/images/team/team-8.png" alt="Solidarity & Unity" loading="lazy">
                        <div class="comp-overlay">
                            <span class="comp-badge">Unity</span>
                            <h5 class="comp-title">Solidarity & Unity</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="comp-style-card" onclick="openLightbox(this)">
                        <img src="assets/images/team/team-9.png" alt="Celebrating Success" loading="lazy">
                        <div class="comp-overlay">
                            <span class="comp-badge">Success</span>
                            <h5 class="comp-title">Celebrating Success</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="lightbox-modal" style="display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: hidden; background-color: rgba(0,0,0,0.9); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);">
        <span class="close-btn" onclick="closeLightbox()" style="position: absolute; top: 20px; right: 30px; color: #ffffff; font-size: 50px; font-weight: bold; cursor: pointer; transition: 0.3s; z-index: 10001;">&times;</span>

        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%;">
            <img class="lightbox-content" id="lightbox-img" style="max-width: 90%; max-height: 80vh; border: 2px solid #00B4D8; box-shadow: 0 0 40px rgba(0, 180, 216, 0.4); border-radius: 8px;">
            <div id="caption" style="margin-top: 20px; color: #fff; font-size: 1.2rem; letter-spacing: 2px; font-weight: 600; text-transform: uppercase;"></div>
        </div>
    </div>

    <style>
        /* --- TYPOGRAPHY & LAYOUT --- */
        
        .metallic-title {
            color: #ffffff;
            font-size: 2.2rem;
            line-height: 1.3;
            font-weight: 800;
            background: linear-gradient(to bottom, #ffffff, #d0d0d0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }
        
        .metallic-subtitle {
            color: #fff;
            font-size: 1.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
            background: linear-gradient(to right, #fff, #c0c0c0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .separator-line {
            width: 150px;
            height: 3px;
            margin: 20px auto 0;
            border-radius: 50%;
            /* CHANGED: Yellow to Blue/Cyan */
            background: linear-gradient(90deg, transparent, #00B4D8, transparent);
            box-shadow: 0 0 15px rgba(0, 180, 216, 0.5);
        }
        
        .text-glass-panel {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            padding: 40px;
            color: #b0b0b0;
            line-height: 1.8;
            font-size: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        /* CHANGED: Replaced .text-gold with .text-highlight (Pure White) */
        
        .text-highlight {
            color: #ffffff;
            /* PURE WHITE */
            font-weight: 700;
        }
        /* --- LOGO BOXES --- */
        
        .logo-box {
            background: rgba(20, 20, 30, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            height: 160px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.4s ease;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }
        
        .logo-box:hover {
            /* CHANGED: Hover border to Blue */
            border-color: #00B4D8;
            transform: translateY(-5px);
            /* CHANGED: Hover shadow to Blue */
            box-shadow: 0 0 20px rgba(0, 180, 216, 0.3);
            background: rgba(255, 255, 255, 0.05);
        }
        
        .logo-img {
            max-width: 100%;
            max-height: 100px;
            width: auto;
            filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.1));
            transition: transform 0.4s ease;
        }
        
        .logo-box:hover .logo-img {
            transform: scale(1.1);
        }
        /* --- COMPETITION STYLE CARDS --- */
        
        .comp-style-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            height: 280px;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: box-shadow 0.4s ease, transform 0.4s ease;
        }
        
        .comp-style-card:hover {
            /* CHANGED: Hover glow to Blue */
            box-shadow: 0 15px 40px rgba(0, 180, 216, 0.25);
            transform: translateY(-5px);
        }
        
        .comp-style-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .comp-style-card:hover img {
            transform: scale(1.12);
        }
        
        .comp-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 25px 20px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.6) 60%, transparent 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-start;
            z-index: 2;
        }
        
        .comp-badge {
            /* CHANGED: Badge background to Blue */
            background-color: #0077B6;
            color: #ffffff;
            /* White text on blue badge */
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            padding: 4px 10px;
            border-radius: 4px;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }
        
        .comp-title {
            color: #fff;
            font-size: 1.1rem;
            font-weight: 700;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
        }
        /* --- MOBILE RESPONSIVENESS --- */
        
        @media (max-width: 768px) {
            .metallic-title {
                font-size: 1.5rem;
            }
            .text-glass-panel {
                padding: 25px;
            }
            .logo-box {
                height: 120px;
            }
            .comp-style-card {
                height: 220px;
            }
        }
    </style>

    <script>
        // Lightbox Logic
        function openLightbox(element) {
            // Handle click on DIV or IMG inside div
            let img = element.tagName === 'IMG' ? element : element.querySelector('img');

            var modal = document.getElementById("lightbox-modal");
            var modalImg = document.getElementById("lightbox-img");
            var captionText = document.getElementById("caption");

            modal.style.display = "block";
            modalImg.src = img.src;
            captionText.innerHTML = img.alt;
            document.body.style.overflow = "hidden"; // Stop scrolling
        }

        function closeLightbox() {
            var modal = document.getElementById("lightbox-modal");
            modal.style.display = "none";
            document.body.style.overflow = "auto"; // Resume scrolling
        }

        // Close on outside click
        document.getElementById("lightbox-modal").addEventListener('click', function(e) {
            if (e.target.id === 'lightbox-modal') {
                closeLightbox();
            }
        });
    </script>


    <!-- OLD CONTENT DOWNLOAD  -->

    </div>
    </div>

    </div>
    </div>
    </div>
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
