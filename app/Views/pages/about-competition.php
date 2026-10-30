<?php
$view->open([
    'title'  => 'About the Competition | Track Asia Cup | Tagaytay 2026',
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

    <style>
        /* --- LIGHTBOX (POPUP) STYLE --- */
        
        .gallery-card img {
            cursor: pointer;
            transition: transform 0.4s ease, filter 0.3s ease;
        }
        
        .gallery-card:hover img {
            transform: scale(1.05);
            filter: brightness(1.1);
        }
        /* Black Background Overlay */
        
        #lightbox-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(5, 5, 5, 0.95);
            backdrop-filter: blur(5px);
        }
        /* Zoomed Image */
        
        .lightbox-content {
            margin: auto;
            display: block;
            width: auto;
            max-width: 90%;
            max-height: 85vh;
            border: 2px solid #C5A059;
            /* Gold Border */
            box-shadow: 0 0 50px rgba(197, 160, 89, 0.2);
            animation: zoomIn 0.4s;
        }
        
        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        /* Close Button */
        
        .close-btn {
            position: absolute;
            top: 20px;
            right: 40px;
            color: #C5A059;
            font-size: 50px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
            font-family: sans-serif;
        }
        
        .close-btn:hover {
            color: #fff;
            text-shadow: 0 0 10px #C5A059;
        }
        /* Caption */
        
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            font-family: "Manrope", sans-serif;
            letter-spacing: 2px;
            font-size: 1.1rem;
        }
    </style>
',
    'banner' => [
        'title'  => 'ABOUT THE COMPETITION',
        'crumbs' => [
            ['text' => 'About', 'href' => '/about', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li'],
            ['text' => 'About Competition', 'href' => '/about-competition', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li']
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
    <div class="rts-competition-section pt--80 pb--100" style="background-color: #0b0b1b; color: #ccc; overflow: hidden;">
        <div class="container">

            <div class="row justify-content-center mb--60">
                <div class="col-lg-10 text-center">
                    <span style="display: inline-block; padding: 5px 15px; background: rgba(0, 123, 255, 0.1); color: #007bff; border-radius: 20px; font-size: 14px; font-weight: 700; text-transform: uppercase; margin-bottom: 20px; letter-spacing: 1px;">
                    Official Press Release
                </span>
                    <h2 class="title" style="color: #fff; font-size: 48px; font-weight: 800; text-transform: uppercase; line-height: 1.1; margin-bottom: 30px;">
                        12 nations and counting for Track Asia Cup in Tagaytay CT Velodrome
                    </h2>

                    
                </div>
            </div>

            <div class="row g-5">

                <div class="col-lg-8">
                    <div class="article-block mb--40">
                        <style>
                            .drop-cap::first-letter {
                                font-size: 3.5em;
                                float: left;
                                line-height: 0.8;
                                margin-right: 10px;
                                color: #007bff;
                                font-weight: 800;
                            }
                        </style>
                        <p class="drop-cap" style="font-size: 19px; line-height: 1.8; color: #fff;">
                            THE Union Cycliste Internationale (UCI) lists the next leg of the ACC Track Asia Cup as taking place from December 4–6, 2026, at the Tagaytay CT Velodrome in Cavite, Philippines.
                        </p>
                    </div>

                    <div class="quote-wrapper" style="margin-bottom: 40px; position: relative; padding: 30px 0;">
                        <i class="fas fa-quote-left" style="position: absolute; top: 0; left: 0; font-size: 40px; color: rgba(255,255,255,0.1);"></i>

                        <p style="font-size: 20px; color: #fff; font-weight: 300; margin-left: 50px; margin-bottom: 25px;">
                            “It has been three decades since the country last hosted the Asian Track Championships—1995, to be exact—at the then Amoranto Velodrome in Quezon City,” said Philippine Olympic Committee (POC) President Abraham “Bambol” N. Tolentino, who also serves as president of the Integrated Cycling Federation of the Philippines (PHILCYCLING).
                        </p>

                        <!--<p style="font-size: 20px; color: #fff; font-weight: 300; margin-left: 50px; font-style: italic;">
                            “With at least 12 nations confirming their attendance and more than 200 athletes competing as of today [Thursday, January 8] at the brand-new and International Cycling Union (UCI)-standard velodrome, the POC, PhilCycling and Tagaytay City will be rolling
                            out the red carpet as we aim for an excellent hosting of the event.
                        </p>-->
                    </div>

                    <hr style="border-color: rgba(255,255,255,0.1); margin-bottom: 40px;">

                    <div class="details-block mb--40">
                        <h4 style="color: #fff; text-transform: uppercase; font-size: 20px; margin-bottom: 20px;">Race Categories & Support</h4>

                        <p style="margin-bottom: 20px;">
                            Philippine Sports Commission headed by Patrick “Patò” Gregorio and Tagaytay City Mayor Aizack Brent Tolentino guaranteed the city’s full support to the races which features competitions in men and women sprint, keirin, 1-kilometer time trial, team sprint, individual and team pursuit, points race, scratch, omnium.
                        </p>
                    </div>

                    <div style="background: #111125; padding: 30px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
                        <h5 style="color: #007bff; margin-bottom: 15px;">Historical Context</h5>

                        <p style="font-size: 16px; margin-bottom: 15px;">
                            THE 45th Asian Cycling Confederation (ACC) Track Cycling Championships and the 14th Asian Para Track Cycling Championships were held from March 25 to 31, 2026, at the Tagaytay CT Velodrome in Cavite, Philippines.
                        </p>

                        <p style="font-size: 16px; margin-bottom: 15px; margin-left: 30px;">
                            “It has been three decades since the country last hosted the Asian Track Championships—1995, to be exact—at the then Amoranto Velodrome in Quezon City,” said Philippine Olympic Committee (POC) President Abraham “Bambol” N. Tolentino, who also serves as president of the Integrated Cycling Federation of the Philippines (PHILCYCLING).
                        </p>


                        <p style="font-size: 16px; margin-bottom: 15px;">
                            ASIAN Cycling Confederation head Dato' Amarjit Singh Gill and Philippine Olympic Committee and PhilCycling president Abraham “Bambol” Tolentino lead the inauguration
                            of the Tagaytay CT Velodrome in June 2025.
                        </p>
                        <p style="font-size: 16px; margin-bottom: 15px;">
                            Only 12 countries in Asia have velodromes with Tagaytay City being recognized as the newest indoor and wood facility that vies as a track cycling epicenter for the Southeast Asian region.
                        </p>
                        <p style="font-size: 16px; margin: 0;">
                            The Amoranto track along Tomas Morato Avenue in Quezon City was demolished last year to give way to a football pitch.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div style="background: linear-gradient(180deg, #007bff 0%, #0056b3 100%); padding: 30px; border-radius: 15px; margin-bottom: 30px; color: #fff; box-shadow: 0 10px 30px rgba(0,123,255,0.2);">
                        <h5 style="color: #fff; font-weight: 800; text-transform: uppercase; border-bottom: 1px solid rgba(255,255,255,0.3); padding-bottom: 15px; margin-bottom: 20px;">
                            Confirmed Nations
                        </h5>
                        <p style="font-size: 16px; line-height: 1.6; font-weight: 500;">
                            Besides host Philippines, already confirmed for the championships are powerhouse Japan, South Korea, China, Malaysia, Thailand, Indonesia, Hong Kong, Chinese-Taipei, Kazakhstan, Uzbekistan and Iran.
                        </p>
                    </div>

                    <div style="border: 1px solid rgba(255,255,255,0.1); padding: 30px; border-radius: 15px; background: rgba(255,255,255,0.02);">
                        <h6 style="color: #007bff; text-transform: uppercase; letter-spacing: 1px;">Previous Records</h6>
                        <!--<p style="font-size: 15px; margin-bottom: 20px;">
                            Japan dominated the 2025 championships in Thailand with 16 of the 22 gold medals that were staked, followed by Malaysia with two and South Korea, China, Hong Kong and Uzbekistan with one gold each.
                        </p>-->

                        <div style="width: 100%; height: 1px; background: rgba(255,255,255,0.1); margin: 20px 0;"></div>

                        <p style="font-size: 15px; margin-bottom: 20px;">
                            From March 2026, the Philippines hosted the Asian Track Cycling Championships in Tagaytay, welcoming 16 nations to its newly built UCI-standard indoor velodrome. The event featured 44 gold-medal races across Elite and Junior categories.
                        </p>

                        <div style="width: 100%; height: 1px; background: rgba(255,255,255,0.1); margin: 20px 0;"></div>
                        
                        <h6 style="color: #007bff; text-transform: uppercase; letter-spacing: 1px;">A New Asian Record in Tagaytay</h6>
                        <p style="font-size: 15px; margin-bottom: 20px;">
                            Japan's Kaiya Ota broke his own Asian Record in the Men Elite Sprint 200m flying time trial, clocking 9.348 seconds at an average speed of 77.021 km/h. The time was officially recorded as a New Asian Record and was the fastest qualifying time of the field.
                        </p>

                        <div style="width: 100%; height: 1px; background: rgba(255,255,255,0.1); margin: 20px 0;"></div>

                        <h6 style="color: #007bff; text-transform: uppercase; letter-spacing: 1px;">Expectations</h6>
                        <p style="font-size: 15px; margin-bottom: 20px;">
                            The POC and PhilCycling president expects more countries to send their teams to the championships which already surpassed the 10 nations that took part in last year’s edition in Nilai, Malaysia.
                        </p>

                        <div style="background: rgba(255,0,0,0.1); padding: 15px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,0,0,0.3);">
                            <span style="color: #ff4d4d; font-weight: bold; text-transform: uppercase; font-size: 12px;">Important Deadline</span>
                            <h5 style="color: #fff; margin: 5px 0 0 0;">03 November 2026</h5>
                            <p style="font-size: 12px; margin: 0; opacity: 0.7;">Registration Deadline</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt--80 g-4">

                <div class="col-12 text-center mb--40">
                    <div style="height: 3px; width: 80px; background: #007bff; margin: 0 auto 20px; border-radius: 2px;"></div>
                    <h3 style="color: #fff; text-transform: uppercase; letter-spacing: 4px; font-weight: 300; font-size: 24px; opacity: 0.9;">
                        The Stage is Set
                    </h3>
                    <p style="color: #888; font-size: 14px; margin-top: 10px; font-style: italic;">
                        Click the images below to view the world-class facilities.
                    </p>
                </div>

                <div class="col-lg-6">
                    <div class="gallery-card" style="position: relative; overflow: hidden; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.5); height: 350px;">
                        <img src="assets/images/team/ph-team-action-1.png" alt="Tagaytay City CT Velodrome - Official Venue" onclick="openLightbox(this)" loading="lazy" decoding="async" style="width: 100%; height: 100%; object-fit: cover; display: block;">

                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); padding: 20px; pointer-events: none;">
                            <span style="background: #C5A059; color: #000; padding: 2px 8px; font-size: 10px; font-weight: bold; border-radius: 4px; text-transform: uppercase;">Official Venue</span>
                            <h4 style="color: #fff; margin: 5px 0 0; font-size: 18px;">Tagaytay City CT Velodrome</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="gallery-card" style="position: relative; overflow: hidden; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.5); height: 350px;">
                        <img src="assets/images/team/ph-team-action-2.png" alt="World-Class Competition - UCI Standard" onclick="openLightbox(this)" loading="lazy" decoding="async" style="width: 100%; height: 100%; object-fit: cover; display: block;">

                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); padding: 20px; pointer-events: none;">
                            <span style="background: #C5A059; color: #000; padding: 2px 8px; font-size: 10px; font-weight: bold; border-radius: 4px; text-transform: uppercase;">UCI Standard</span>
                            <h4 style="color: #fff; margin: 5px 0 0; font-size: 18px;">World-Class Competition</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="gallery-card" style="position: relative; overflow: hidden; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.5); height: 350px;">
                        <img src="assets/images/gallery/cyclist-velo.jpg" alt="World-Class Competition - UCI Standard" onclick="openLightbox(this)" loading="lazy" decoding="async" style="width: 100%; height: 100%; object-fit: cover; display: block;">

                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); padding: 20px; pointer-events: none;">
                            <span style="background: #C5A059; color: #000; padding: 2px 8px; font-size: 10px; font-weight: bold; border-radius: 4px; text-transform: uppercase;">UCI Standard<</span>
                            <h4 style="color: #fff; margin: 5px 0 0; font-size: 18px;">World-Class Competition</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="gallery-card" style="position: relative; overflow: hidden; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.5); height: 350px;">
                        <img src="assets/images/gallery/ota.jpg" alt="Kaiya Ota - New Asian Record in Tagaytay " onclick="openLightbox(this)" loading="lazy" decoding="async" style="width: 100%; height: 100%; object-fit: cover; display: block;">

                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); padding: 20px; pointer-events: none;">
                            <span style="background: #C5A059; color: #000; padding: 2px 8px; font-size: 10px; font-weight: bold; border-radius: 4px; text-transform: uppercase;">Kaiya Ota</span>
                            <h4 style="color: #fff; margin: 5px 0 0; font-size: 18px;">New Asian Record in Tagaytay</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div id="lightbox-modal">
            <span class="close-btn" onclick="closeLightbox()">&times;</span>
            <img class="lightbox-content" id="lightbox-img">
            <div id="caption"></div>
        </div>

        <script>
            function openLightbox(element) {
                var modal = document.getElementById("lightbox-modal");
                var modalImg = document.getElementById("lightbox-img");
                var captionText = document.getElementById("caption");
                modal.style.display = "block";
                modalImg.src = element.src;
                captionText.innerHTML = element.alt;
                document.body.style.overflow = "hidden";
            }

            function closeLightbox() {
                var modal = document.getElementById("lightbox-modal");
                modal.style.display = "none";
                document.body.style.overflow = "auto";
            }

            document.getElementById("lightbox-modal").addEventListener('click', function(e) {
                if (e.target !== document.getElementById("lightbox-img")) {
                    closeLightbox();
                }
            });
        </script>
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
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo"><img src="assets/images/2026_ACC_TAC_Letterhead_1.webp" alt="footer-logo">
                            </div>
                            <p class="footer-text">Track Asia Cup 2026 — Experience the Speed and Excitement as Champions Race for Glory!
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
