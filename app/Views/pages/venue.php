<?php
$view->open([
    'title'  => 'Venue | Track Asia Cup | Tagaytay 2026',
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
    </style>


',
    'banner' => [
        'title'  => 'VICINITY MAP OF VELODROME',
        'crumbs' => [
            ['text' => 'COMPETITION GUIDE', 'href' => '/about-competition', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li'],
            ['text' => 'VICINITY MAP OF VELODROME', 'href' => '/venue', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li']
        ],
    ],
]);
?>
    </header>
    <!--================= Header Section End Here =================-->


    <!--================= Team Section Start Here =================-->
    <!--<div class="rts-team-section inner section-gap">
    <div class="container">
        <div class="team-section-inner inner">
            <!--<div class="row">
                <div class="col-xl-3 col-md-4 col-sm-6">
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
                            <a href="#" class="name">MAXIELS DAVID</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
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
                            <a href="#" class="name">VEN DIESEL</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
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
                            <a href="#" class="name">NED STARK</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
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
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="team-wraper">
                        <div class="player-card">
                            <a class="image" href="/team-details"><img src="assets/images/team/team05.png" alt=""></a>
                            <div class="number">9</div>
                            <ul class="social-area">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="profile">
                            <p class="position">WINGER</p>
                            <a href="/team-details" class="name">TYRION LENNISTER</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="team-wraper">
                        <div class="player-card">
                            <a class="image" href="/team-details"><img src="assets/images/team/team06.png" alt=""></a>
                            <div class="number">10</div>
                            <ul class="social-area">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="profile">
                            <p class="position">MID-FIELDER</p>
                            <a href="/team-details" class="name">SAMWELL TARLY</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="team-wraper">
                        <div class="player-card">
                            <a class="image" href="/team-details"><img src="assets/images/team/team07.png" alt=""></a>
                            <div class="number">7</div>
                            <ul class="social-area">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="profile">
                            <p class="position">WINGER</p>
                            <a href="/team-details" class="name">EURON GREYJOY</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="team-wraper">
                        <div class="player-card">
                            <a class="image" href="/team-details"><img src="assets/images/team/team08.png" alt=""></a>
                            <div class="number">11</div>
                            <ul class="social-area">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="profile">
                            <p class="position">FORWARD</p>
                            <a href="/team-details" class="name">JOHN SNOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
    <!--================= Team Section End Here =================-->

    <!--================= Additional 1 Section Start Here =================-->

    <!-- MAIN CONTENT -->
    <div class="rts-venue-page section-padding" style="background-color: #0b0b1b; position: relative; overflow: hidden;">

        <div class="bg-glow-blob"></div>

        <div class="container" style="position: relative; z-index: 2;">

            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <div class="eyebrow-text">THE VENUE</div>
                    <h1 class="venue-main-title">TAGAYTAY CT VELODROME</h1>
                    <p class="venue-subtitle">Home of the Track Asia Cup 2026</p>
                    <div class="blue-separator"></div>
                </div>
            </div>

            <div class="row mt-4 mb-5">
                <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="section-header-left">
                        <h3>Venue Gallery</h3>
                    </div>

                    <div class="swiper venueSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery-img-box">
                                    <img src="/assets/images/velodrome-1.jpg" alt="Velodrome Track View - Day" />
                                    <div class="overlay-gradient"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-img-box">
                                    <img src="assets/images/velodrome-2.jpg" alt="Spectator Seating Area" />
                                    <div class="overlay-gradient"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-img-box">
                                    <img src="assets/images/velodrome-3.jpg" alt="Velodrome Aerial View" />
                                    <div class="overlay-gradient"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>

            <div class="row g-4">

                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
                    <div class="venue-info-card h-100">
                        <div class="card-header-styled">
                            <h3>Key Specifications</h3>
                        </div>
                        <ul class="spec-list">
                            <li>
                                <div class="icon-box"><i class="fas fa-ruler-horizontal"></i></div>
                                <div>
                                    <span class="label">Track Length</span>
                                    <span class="value">250 Meters</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box"><i class="fas fa-tree"></i></div>
                                <div>
                                    <span class="label">Surface Material</span>
                                    <span class="value">Siberian Pine</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box"><i class="fas fa-angle-double-up"></i></div>
                                <div>
                                    <span class="label">Max. Banking Angle</span>
                                    <span class="value">42 Degrees</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box"><i class="fas fa-users"></i></div>
                                <div>
                                    <span class="label">Seating Capacity</span>
                                    <span class="value">Approx. 3,000</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
                    <div class="venue-info-card h-100">
                        <div class="card-header-styled">
                            <h3>Nearby Accommodation</h3>
                        </div>
                        <ul class="spec-list">
                            <li class="accommodation-note">
                                <div class="icon-box"><i class="fas fa-info"></i></div>
                                <div>
                                    <span class="label">All participants must book through the local organizing committee.</span>
                                    <!--<span class="value">5-star • <span class="highlight-blue">1 min drive</span></span>-->
                                </div>
                            </li>
                            
                            <!--<li>
                                <div class="icon-box"><i class="fas fa-bed"></i></div>
                                <div>
                                    <span class="label">Summit Ridge Tagaytay</span>
                                    <span class="value">4-star • <span class="highlight-blue">5 mins drive</span></span>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box"><i class="fas fa-building">
                                    
                                </i></div>
                                <div>
                                    <span class="label">Pico de Loro Condos</span>
                                    <span class="value">Apartelle • <span class="highlight-blue">20 min drive</span></span>
                                </div>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="section-header-left">
                        <h3>Venue Location Map</h3>
                    </div>
                </div>
                <div class="col-12" data-aos="zoom-in" data-aos-delay="600">
                    <div class="map-container-frame">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.6396783120103!2d120.93519258035997!3d14.098435251084853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd77003190ff97%3A0x9d1d2f5f47762581!2sTagaytay%20City%20Velodrome!5e0!3m2!1sen!2sph!4v1768437227320!5m2!1sen!2sph"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="map-overlay-border"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        /* --- GLOBAL LAYOUT --- */
        
        .section-padding {
            padding: 120px 0;
        }
        
        .bg-glow-blob {
            position: absolute;
            top: -20%;
            right: -10%;
            width: 60%;
            height: 60%;
            background: radial-gradient(circle, rgba(0, 180, 216, 0.15) 0%, transparent 70%);
            pointer-events: none;
            z-index: 0;
        }
        /* --- TYPOGRAPHY --- */
        
        .eyebrow-text {
            color: #00B4D8;
            font-weight: 800;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-size: 0.9rem;
            margin-bottom: 10px;
            display: inline-block;
            border: 1px solid rgba(0, 180, 216, 0.3);
            padding: 5px 15px;
            border-radius: 20px;
            background: rgba(0, 180, 216, 0.05);
        }
        
        .venue-main-title {
            color: #ffffff;
            font-size: 3.5rem;
            font-weight: 900;
            text-transform: uppercase;
            margin: 0;
            background: linear-gradient(180deg, #ffffff 0%, #b0b0b0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }
        
        .venue-subtitle {
            color: #d0d0d0;
            font-size: 1.2rem;
            margin-top: 15px;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .accommodation-note {
            justify-content: center !important;
            align-items: flex-start !important;
            min-height: 220px;
            margin-bottom: 0 !important;
        }

        .accommodation-note .icon-box {
            flex-shrink: 0;
            margin-top: 4px;
        }

        .accommodation-note > div:last-child {
            display: block;
        }

        .accommodation-note .label {
            display: block;
            max-width: 650px;
            margin: 0;
            color: #ffffff;
            font-size: 1.35rem;
            font-weight: 600;
            line-height: 1.7;
            text-transform: none;
            letter-spacing: 0;
        }
                
        .blue-separator {
            width: 100px;
            height: 4px;
            background: #00B4D8;
            margin: 25px auto 0;
            border-radius: 2px;
            box-shadow: 0 0 15px #00B4D8;
        }
        
        .section-header-left h3 {
            color: #fff;
            font-size: 1.8rem;
            font-weight: 700;
            border-left: 5px solid #00B4D8;
            padding-left: 20px;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        /* --- SWIPER GALLERY --- */
        
        .venueSwiper {
            padding-bottom: 50px !important;
        }
        
        .gallery-img-box {
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            height: 400px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .gallery-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        .gallery-img-box:hover img {
            transform: scale(1.05);
        }
        
        .swiper-button-next,
        .swiper-button-prev {
            color: #00B4D8 !important;
            background: rgba(0, 0, 0, 0.5);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 20px !important;
            font-weight: bold;
        }
        
        .swiper-pagination-bullet-active {
            background-color: #00B4D8 !important;
        }
        /* --- INFO CARDS (Glassmorphism) --- */
        
        .venue-info-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .venue-info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 180, 216, 0.15);
            border-color: rgba(0, 180, 216, 0.5);
        }
        
        .card-header-styled h3 {
            color: #fff;
            font-size: 1.5rem;
            margin-bottom: 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 15px;
            display: inline-block;
            width: 100%;
        }
        
        .spec-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .spec-list li {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .spec-list li:last-child {
            margin-bottom: 0;
        }
        
        .icon-box {
            width: 50px;
            height: 50px;
            background: rgba(0, 180, 216, 0.1);
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
            color: #00B4D8;
            font-size: 1.2rem;
            border: 1px solid rgba(0, 180, 216, 0.2);
        }
        
        .label {
            display: block;
            color: #ffffff;
            font-weight: 700;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .value {
            display: block;
            color: #a0a0a0;
            font-size: 0.95rem;
            margin-top: 4px;
        }
        
        .highlight-blue {
            color: #00B4D8;
            font-weight: 600;
        }
        /* --- MAP CONTAINER --- */
        
        .map-container-frame {
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
        }
        
        .map-overlay-border {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 2px solid transparent;
            border-radius: 20px;
            pointer-events: none;
            box-shadow: inset 0 0 30px rgba(0, 0, 0, 0.6);
            transition: 0.3s;
        }
        
        .map-container-frame:hover {
            border-color: #00B4D8;
            box-shadow: 0 0 40px rgba(0, 180, 216, 0.3);
        }
        /* --- RESPONSIVE --- */
        
        @media (max-width: 768px) {
            .venue-main-title {
                font-size: 2.2rem;
            }
            .venue-info-card {
                padding: 25px;
            }
            .gallery-img-box {
                height: 250px;
            }
        }
    </style>

    <script>
        var swiper = new Swiper(".venueSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            effect: 'fade', // Optional: Change to 'slide' if you prefer sliding
            autoplay: {
                delay: 3500,
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
            breakpoints: {
                768: {
                    slidesPerView: 2, // 2 Slides on Tablet if needed
                    effect: 'slide'
                },
                1024: {
                    slidesPerView: 3, // 3 Slides on Desktop
                    effect: 'slide'
                },
            }
        });
    </script>

    <!-- OLD CONTENT DOWNLOAD  -->
    <!-- <div class="rts-match-result-section rts-match-result-section2 rts-match-schedule-section inner section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="match-single">
                        <div class="match-single-content">
                            <div class="match-scores">
                                <div class="club club1">
                                    <div class="club-logo mr--20">
                                        <span class="club-name"> COMPETITION WILL RUN ACCORDINGLY TO THE LATEST UCI
                                            RULES.</span> -->
    <!--<img src="assets/images/clubs/1.png" alt="club-logo">-->
    <!--     </div>
                                </div>

                            </div>

                            <div class="row justify-content-center" style="margin-top: 50px; margin-bottom: 50px;">
                                <div class="col-12 text-center">
                                    <a href="assets/downloads/tech-guide.pdf" download="ACC_Track_2026_Technical_Guide" class="rts-btn btn-primary" style="padding: 15px 40px; font-size: 18px; border-radius: 5px; text-transform: uppercase; letter-spacing: 1px;">
                                        <i class="fas fa-file-pdf" style="margin-right: 10px;"></i> Download Technical Handbook
                                    </a>

                                    <a href="assets/downloads/vicinity-map.pdf" target="_blank" class="rts-btn btn-primary" style="margin-left: 20px; padding: 15px 40px; font-size: 18px; border-radius: 5px; text-transform: uppercase; letter-spacing: 1px; background-color: #28a745; border-color: #28a745;">
                                        <i class="fas fa-map" style="margin-right: 10px;"></i> DOWNLOAD VICINITY MAP
                                    </a> -->

    <!-- <p style="color: #999; font-size: 13px; margin-top: 15px;">Official V1.2 (PDF
                                        Format)</p> -->
    <!--      </div>
                            </div>

                            <div class="container" style="padding-bottom: 50px;">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div style="background: #111; padding: 30px; border-left: 4px solid #007bff;">
                                            <h4 style="color: #fff;">SPRINT & KEIRIN</h4>
                                            <p style="color: #bbb; font-size: 14px;">
                                                Explosive power meets tactics. Riders reach speeds of 70kph+ in a battle of cat and mouse.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div style="background: #111; padding: 30px; border-left: 4px solid #dc3545;">
                                            <h4 style="color: #fff;">PURSUIT & OMNIUM</h4>
                                            <p style="color: #bbb; font-size: 14px;">
                                                The ultimate test of stamina. Includes the 4-event Omnium and the precision-based Team Pursuit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> -->
    <!--<div class="match-bottom-action">
                        <a href="/shop" class="action-item first-child">GET TICKETS</a>
                        <div class="play-video">
                            <a href="https://www.youtube.com/watch?v=G4t6TqG5LM8"
                                class="action-item popup-video">WATCH STREAM</a>
                        </div>
                    </div>-->
    </div>
    </div>

    </div>
    </div>
    </div>
    <!--================= Additional 1 Section End Here =================-->

    <!--================= Additional 2 Start Here =================-->
    <!-- <div class="rts-about-section  about section-gap">
        <div class="container">
            <div class="about-inner">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <div class="about-thumb"> -->
    <!--<div class="img1"><img src="assets/images/gallery/park2.jpg" alt="about-thumb"></div>-->
    <!-- <div class="img2"><img src="assets/images/gallery/park.png" alt="about-thumb"></div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="contents">
                            <div class="section-title-area section-title-area1 text-start">
                                <h1 class="section-title"><span>BMX Park</span> </h1>
                                <p>
                                <ul>
                                    <li>

                                        &#10004; &nbsp;&nbsp;&nbsp;&nbsp;Men: 14 | Women: 7
                                        <br> &#10004; &nbsp;&nbsp;&nbsp;&nbsp;Men: 4/5/5 Athletes per group/heat (3
                                        heats)
                                        <br> &#10004; &nbsp;&nbsp;&nbsp;&nbsp;Women: 7 Athletes per group/heat (1 heat)
                                        <br> &#10004; &nbsp;&nbsp;&nbsp;&nbsp;2 runs for each rider
                                        <br> &#10004; &nbsp;&nbsp;&nbsp;&nbsp;60 seconds per run
                                        <br> &#10004; &nbsp;&nbsp;&nbsp;&nbsp;Judging on overall impression


                                        <br><br>&#10004; &nbsp;&nbsp;&nbsp;&nbsp;Qualification Run - 2 runs. Both runs
                                        count, average score for both runs.


                                        <br><br>&#10004; &nbsp;&nbsp;&nbsp;&nbsp;Final Run – 2 runs each rider. Best run
                                        will count. Judges will select which is best of 1st
                                        run from the 2nd run.
                                        <br>&#10004; &nbsp;&nbsp;&nbsp;&nbsp;<b>Men:</b> Top 12 athletes to be selected
                                        from qualifiers
                                        <br>&#10004; &nbsp;&nbsp;&nbsp;&nbsp;<b>Women:</b> Top 4 athletes to be selected
                                        from qualifiers

                                    </li>

                                </ul>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="about-inner">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <div class="about-thumb"> -->
    <!--<div class="img1"><img src="assets/images/gallery/flatland1.webp" alt="about-thumb"></div>-->
    <!-- <div class="img2"><img src="assets/images/gallery/flatland2.jpg" alt="about-thumb"></div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="contents">
                            <div class="section-title-area section-title-area1 text-start">
                                <h1 class="section-title"><span>BMX Flatland</span> </h1>
                                <p>
                                <ul>
                                    <li>

                                        &#10004; &nbsp;&nbsp;&nbsp;&nbsp;Men: 14 | Women: 7
                                        <br> &#10004; &nbsp;&nbsp;&nbsp;&nbsp;Men: 5/5 Athletes per group/heat (2 heats)
                                        <br> &#10004; &nbsp;&nbsp;&nbsp;&nbsp;Women: 7 Athletes per group/heat (1 heat)
                                        <br> &#10004; &nbsp;&nbsp;&nbsp;&nbsp;1 run for each rider
                                        <br> &#10004; &nbsp;&nbsp;&nbsp;&nbsp;180 seconds per run
                                        <br> &#10004; &nbsp;&nbsp;&nbsp;&nbsp;Judging on overall impression


                                        <br><br>&#10004; &nbsp;&nbsp;&nbsp;&nbsp;Qualification Run - 1 run each rider
                                        for 3 minutes


                                        <br><br>&#10004; &nbsp;&nbsp;&nbsp;&nbsp;Final Round –1 run. 3 minutes. (Same
                                        format)

                                        <br>&#10004; &nbsp;&nbsp;&nbsp;&nbsp;<b>Men:</b> Top 8 Athletes to be selected
                                        <br>&#10004; &nbsp;&nbsp;&nbsp;&nbsp;<b>Women:</b> Top 4 Athletes to be selected

                                    </li>

                                </ul>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
 -->

    <!--================= Additional 2 End Here =================-->

    <!--================= Additional 3 Section Start Here =================-->

    <!-- <div class="rts-match-result-section rts-match-result-section2 rts-match-schedule-section inner section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="match-single">
                        <div class="match-single-content">
                            <div class="match-scores">
                                <div class="club club1">
                                    <div class="club-logo mr--20">
                                        <span class="club-name"> CHAMPIONSHIPS CATEGORIES
                                            <br>BMX Park Men Open (open to any age)
                                            <br>BMX Park Women Open (open to any age)
                                            <br>BMX Flatland Men Open (open to any age)
                                            <br>BMX Flatland Women Open (open to any age)
                                        </span>
                                        <img src="assets/images/clubs/1.png" alt="club-logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <!--================= Additional 3 Section End Here =================-->







    <!--================= Team Details Section Start Here =================-->

    <!--<div class="rts-team-member-details">
    <div class="container">
        <div class="team-details-single">
            <h3 class="title">COACH JOSE MOURIN</h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="team-picture">
                        <img src="assets/images/team/financial.jpg" alt="playerspic">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="team-status-area">
                        <div class="status-box">
                            <div class="status-item">
                                <span class="status-name">NATIONALITY:</span>
                                <span class="status-number"><img src="assets/images/team/arg.png" alt=""> ARGENTINA</span>
                            </div>
                            <div class="status-item">
                                <span class="status-name">CURRENT TEAM:</span>
                                <a href="/" class="status-number club">KESTER</a>
                            </div>
                            <div class="status-item">
                                <span class="status-name">PAST TEAM</span>
                                <span class="status-number">INTER MILAN</span>
                            </div>
                            <div class="status-item">
                                <span class="status-name">AGE</span>
                                <span class="status-number">45</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-details-single">
            <h3 class="title">PHYSICIAN SAM FOSTER</h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="team-picture">
                        <img src="assets/images/team/physician.jpg" alt="playerspic">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="team-status-area">
                        <div class="status-box">
                            <div class="status-item">
                                <span class="status-name">NATIONALITY:</span>
                                <span class="status-number"><img src="assets/images/team/ita.png" alt=""> ITALY</span>
                            </div>
                            <div class="status-item">
                                <span class="status-name">CURRENT TEAM:</span>
                                <a href="/" class="status-number club">KESTER</a>
                            </div>
                            <div class="status-item">
                                <span class="status-name">PAST TEAM</span>
                                <span class="status-number">ASTON VILLA</span>
                            </div>
                            <div class="status-item">
                                <span class="status-name">AGE</span>
                                <span class="status-number">45</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-details-single">
            <h3 class="title">FINANCIAL ADVISOR STEPHEN CORR</h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="team-picture">
                        <img src="assets/images/team/coach.jpg" alt="playerspic">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="team-status-area">
                        <div class="status-box">
                            <div class="status-item">
                                <span class="status-name">NATIONALITY:</span>
                                <span class="status-number"><img src="assets/images/team/por.png" alt=""> PORTUGAL</span>
                            </div>
                            <div class="status-item">
                                <span class="status-name">CURRENT TEAM:</span>
                                <a href="/" class="status-number club">KESTER</a>
                            </div>
                            <div class="status-item">
                                <span class="status-name">PAST TEAM</span>
                                <span class="status-number">ATLANTA</span>
                            </div>
                            <div class="status-item">
                                <span class="status-name">AGE</span>
                                <span class="status-number">45</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
================= Team Details Section End Here =================-->


    <!--================= Footer Start Here =================-->
    <div class="footer footer1">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo"><img src="assets/images/2026_ACC_TAC_Letterhead_1.png" alt="footer-logo">
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
