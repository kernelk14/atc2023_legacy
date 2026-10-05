<?php
$view->open([
    'title'  => 'Emergency Contact | Track Asia Cup | Tagaytay 2026',
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
                --bg: hsl(var(--hue), 90%, 50%);
                --fg: hsl(var(--hue), 90%, 90%);
            }
        }
            :root {
            --primary: rgb(0, 36, 165);
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

    <style>
        /* --- 1. GLOBAL RESET & TYPOGRAPHY --- */
        
         :root {
            --bg-dark: #0f172a;
            /* Deep Dark Blue/Black */
            --card-bg: #1e293b;
            /* Slightly Lighter Panel */
            --text-main: #ffffff;
            /* Pure White */
            --text-muted: #94a3b8;
            /* Muted Gray */
            --neon-blue: #06b6d4;
            /* Cyan/Neon Blue Highlight */
            --neon-glow: 0 0 15px rgba(6, 182, 212, 0.4);
        }
        
        .emergency-wrapper {
            font-family: "Inter", sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-main);
            width: 100%;
            min-height: 100vh;
            padding-bottom: 80px;
            box-sizing: border-box;
        }
        
        .emergency-wrapper * {
            box-sizing: border-box;
            transition: all 0.3s ease;
        }
        /* --- 2. LAYOUT GRID --- */
        
        .em-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
            display: grid;
            grid-template-columns: 260px 1fr;
            gap: 50px;
            align-items: start;
        }
        /* --- 3. SIDEBAR NAVIGATION --- */
        
        .em-sidebar {
            position: sticky;
            top: 100px;
            background: rgba(30, 41, 59, 0.5);
            backdrop-filter: blur(10px);
            padding: 15px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .em-nav-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 16px;
            margin-bottom: 5px;
            color: var(--text-muted);
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.95rem;
            border: 1px solid transparent;
        }
        /* Sidebar Hover & Active: NEON BLUE */
        
        .em-nav-item:hover,
        .em-nav-item.active {
            background: rgba(6, 182, 212, 0.1);
            color: var(--neon-blue);
            border-color: rgba(6, 182, 212, 0.3);
            box-shadow: 0 0 10px rgba(6, 182, 212, 0.1);
        }
        
        .em-nav-item.active {
            font-weight: 700;
        }
        /* --- 4. HEADER --- */
        
        .em-header h1 {
            font-size: 2rem;
            margin: 0 0 8px 0;
            font-weight: 800;
            letter-spacing: -1px;
            background: linear-gradient(90deg, #fff, #cbd5e1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .em-header p {
            color: var(--text-muted);
            margin-bottom: 40px;
            font-size: 0.95rem;
        }
        /* --- 5. AGENCY CARDS (MINIMALIST) --- */
        
        .agency-card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 25px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            position: relative;
            scroll-margin-top: 120px;
            /* Fix for sticky header overlap */
        }
        /* HOVER EFFECT: NEON GLOW ON CARD */
        
        .agency-card:hover {
            border-color: var(--neon-blue);
            box-shadow: var(--neon-glow);
            transform: translateY(-2px);
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 25px;
        }
        
        .header-info {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        
        .card-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: var(--text-muted);
        }
        /* Icon lights up on hover */
        
        .agency-card:hover .card-icon {
            background: var(--neon-blue);
            color: #000;
        }
        
        .agency-name h2 {
            font-size: 1.25rem;
            margin: 0;
            color: #fff;
            font-weight: 600;
        }
        
        .agency-name span {
            font-size: 0.85rem;
            color: var(--text-muted);
            display: block;
            margin-top: 4px;
        }
        /* Map Button */
        
        .map-link {
            font-size: 0.75rem;
            color: var(--text-muted);
            text-decoration: none;
            padding: 6px 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50px;
        }
        
        .map-link:hover {
            background: #fff;
            color: #000;
            border-color: #fff;
        }
        /* --- 6. CONTACT GRID & BUTTONS --- */
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        
        .contact-box {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            display: flex;
            overflow: hidden;
        }
        /* Button Styling */
        
        .call-btn {
            flex: 1;
            text-decoration: none;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .label-sm {
            font-size: 0.65rem;
            text-transform: uppercase;
            color: var(--text-muted);
            margin-bottom: 3px;
            letter-spacing: 1px;
        }
        
        .number-xl {
            font-size: .8rem;
            font-weight: 700;
            color: #fff;
            letter-spacing: 0.5px;
        }
        
        .copy-btn {
            width: 50px;
            background: transparent;
            border: none;
            border-left: 1px solid rgba(255, 255, 255, 0.05);
            color: var(--text-muted);
            cursor: pointer;
            font-size: 1rem;
        }
        /* NEON HOVER ON BUTTONS */
        
        .contact-box:hover {
            border-color: var(--neon-blue);
            box-shadow: inset 0 0 10px rgba(6, 182, 212, 0.1);
        }
        
        .contact-box:hover .label-sm {
            color: var(--neon-blue);
        }
        
        .contact-box:hover .copy-btn {
            color: #fff;
        }
        /* --- 7. MOBILE OPTIMIZATION --- */
        
        @media (max-width: 900px) {
            .em-container {
                grid-template-columns: 1fr;
                gap: 30px;
                padding-top: 20px;
            }
            /* Mobile Horizontal Scroll Sidebar */
            .em-sidebar {
                position: sticky;
                top: 0;
                z-index: 50;
                display: flex;
                overflow-x: auto;
                padding: 10px;
                margin: 0 -20px 20px -20px;
                background: rgba(15, 23, 42, 0.95);
                border-radius: 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                -webkit-overflow-scrolling: touch;
                /* Smooth scroll on iOS */
            }
            /* Hide scrollbar */
            .em-sidebar::-webkit-scrollbar {
                display: none;
            }
            .em-nav-item {
                white-space: nowrap;
                margin-right: 8px;
                background: #1e293b;
                padding: 10px 18px;
            }
            .card-header {
                flex-direction: column;
                gap: 15px;
            }
            .map-link {
                width: 100%;
                text-align: center;
                background: rgba(255, 255, 255, 0.05);
            }
            .contact-grid {
                grid-template-columns: 1fr;
            }
            /* Full width buttons on mobile */
        }
        /* --- 8. TOAST NOTIFICATION --- */
        
        #toast {
            visibility: hidden;
            min-width: 200px;
            background-color: var(--neon-blue);
            color: #000;
            text-align: center;
            border-radius: 50px;
            padding: 12px;
            position: fixed;
            z-index: 100;
            left: 50%;
            bottom: 30px;
            transform: translateX(-50%);
            font-weight: 700;
            font-size: 0.9rem;
            box-shadow: 0 5px 20px rgba(6, 182, 212, 0.4);
            opacity: 0;
            transition: opacity 0.3s, bottom 0.3s;
        }
        
        #toast.show {
            visibility: visible;
            opacity: 1;
            bottom: 50px;
        }
    </style>


',
    'banner' => [
        'title'  => 'EMERGENCY CONTACT',
        'crumbs' => [
            ['text' => 'CONTACT US', 'href' => '/contact', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li'],
            ['text' => 'EMERGENCY CONTACT', 'href' => '/emergency-contact', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li']
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    

    <div class="emergency-wrapper">
        <div class="em-container">

            <aside class="em-sidebar">
                <a href="#police" class="em-nav-item active"><i class="fas fa-shield-alt"></i> Police</a>
                <a href="#fire" class="em-nav-item"><i class="fas fa-fire-extinguisher"></i> Fire Dept</a>
                <a href="#drrmo" class="em-nav-item"><i class="fas fa-ambulance"></i> CDRRMO</a>
                <a href="#hospital" class="em-nav-item"><i class="fas fa-heartbeat"></i> Hospital</a>
                <a href="#dfa" class="em-nav-item"><i class="fa-solid fa-passport"></i>DFA</a>
                
            </aside>

            <main>
                <div class="em-header">
                    <h1>Emergency Directory</h1>
                    <p>Official Tagaytay City Hotlines • Tap to Call</p>
                </div>

                <section id="police" class="agency-card">
                    <div class="card-header">
                        <div class="header-info">
                            <div class="card-icon"><i class="fas fa-shield-alt"></i></div>
                            <div class="agency-name">
                                <h2>Police</h2>
                                <span>Crisanto M. De Los Reyes Ave.</span>
                            </div>
                        </div>
                        <a href="https://maps.app.goo.gl/e4UPv3LsWsjS2gic8" target="_blank" rel="noopener noreferrer" class="map-link">
                            <i class="fas fa-map-marker-alt"></i> Directions
                        </a>
                    </div>
                    <div class="contact-grid">
                        <div class="contact-box">
                            <a href="tel:09159137693" class="call-btn">
                                <span class="label-sm">Globe Mobile</span>
                                <span class="number-xl">+63 915 913 7693</span>
                            </a>
                            <button class="copy-btn" onclick="copyText('09159137693')"><i class="far fa-copy"></i></button>
                        </div>
                        <div class="contact-box">
                            <a href="tel:09985985603" class="call-btn">
                                <span class="label-sm">Smart Mobile</span>
                                <span class="number-xl">+63 998 598 5603</span>
                            </a>
                            <button class="copy-btn" onclick="copyText('09985985603')"><i class="far fa-copy"></i></button>
                        </div>
                    </div>
                </section>

                <section id="fire" class="agency-card">
                    <div class="card-header">
                        <div class="header-info">
                            <div class="card-icon"><i class="fas fa-fire"></i></div>
                            <div class="agency-name">
                                <h2>Bureau of Fire (BFP)</h2>
                                <span>Foggy Heights Subdivision</span>
                            </div>
                        </div>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Foggy+Heights+Subdivision,+Tagaytay+City,+Cavite,+Philippines" target="_blank" rel="noopener noreferrer" class="map-link">
                            <i class="fas fa-map-marker-alt"></i> Directions
                        </a>
                    </div>
                    <div class="contact-grid">
                        <div class="contact-box">
                            <a href="tel:09429898495" class="call-btn">
                                <span class="label-sm">Mobile Hotline</span>
                                <span class="number-xl">+63 942 989 8495</span>
                            </a>
                            <button class="copy-btn" onclick="copyText('09429898495')"><i class="far fa-copy"></i></button>
                        </div>
                        <div class="contact-box">
                            <a href="tel:0464831193" class="call-btn">
                                <span class="label-sm">Landline</span>
                                <span class="number-xl">(+6346) 483 1193</span>
                            </a>
                            <button class="copy-btn" onclick="copyText('0464831193')"><i class="far fa-copy"></i></button>
                        </div>
                    </div>
                </section>

                <section id="drrmo" class="agency-card">
                    <div class="card-header">
                        <div class="header-info">
                            <div class="card-icon"><i class="fas fa-hard-hat"></i></div>
                            <div class="agency-name">
                                <h2>Tagaytay CDRRMO</h2>
                                <span>Calamba Road, Sungay West</span>
                            </div>
                        </div>
                        <a href="https://maps.app.goo.gl/o4UbTiq2ThVXXAm88" target="_blank" rel="noopener noreferrer" class="map-link">
                            <i class="fas fa-map-marker-alt"></i> Directions
                        </a>
                    </div>
                    <div class="contact-grid">
                        <div class="contact-box">
                            <a href="tel:09167698367" class="call-btn">
                                <span class="label-sm">Emergency Mobile</span>
                                <span class="number-xl">+63 916 769 8367</span>
                            </a>
                            <button class="copy-btn" onclick="copyText('09167698367')"><i class="far fa-copy"></i></button>
                        </div>
                        <div class="contact-box">
                            <a href="tel:0464830446" class="call-btn">
                                <span class="label-sm">Landline</span>
                                <span class="number-xl">(+6346) 483 0446</span>
                            </a>
                            <button class="copy-btn" onclick="copyText('0464830446')"><i class="far fa-copy"></i></button>
                        </div>
                    </div>
                </section>

                <section id="hospital" class="agency-card">
                    <div class="card-header">
                        <div class="header-info">
                            <div class="card-icon"><i class="fas fa-hospital-symbol"></i></div>
                            <div class="agency-name">
                                <h2>Ospital ng Tagaytay</h2>
                                <span>1315 E. Aguinaldo Highway</span>
                            </div>
                        </div>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Ospital+ng+Tagaytay,+1315+E.+Aguinaldo+Highway,+Tagaytay+City,+Cavite,+Philippines" target="_blank" rel="noopener noreferrer" class="map-link">
                            <i class="fas fa-map-marker-alt"></i> Directions
                        </a>
                    </div>
                    <div class="contact-grid">
                        <div class="contact-box">
                            <a href="tel:0468889510" class="call-btn">
                                <span class="label-sm">Mobile Support</span>
                                <span class="number-xl">(+6346) 888 9510</span>
                            </a>
                            <button class="copy-btn" onclick="copyText('09560526290')"><i class="far fa-copy"></i></button>
                        </div>
                    </div>
                </section>

                <section id="dfa" class="agency-card">
                    <div class="card-header">
                        <div class="header-info">
                            <div class="card-icon"><i class="fa-solid fa-passport"></i></div>
                            <div class="agency-name">
                                <h2 style="font-size: 25px;">Department of Foreign Affairs</h2>
                                <span>Pasay City, Metro Manila 1300s</span>
                            </div>
                        </div>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Department+of+Foreign+Affairs,+2330+Roxas+Boulevard,+Pasay+City,+Metro+Manila,+Philippines" target="_blank" rel="noopener noreferrer" class="map-link">
                            <i class="fas fa-map-marker-alt"></i> Directions
                        </a>
                    </div>
                    <div class="contact-grid">
                        <div class="contact-box">
                            <a href="tel:0468889510" class="call-btn">
                                <span class="label-sm">DFA Line</span>
                                <span class="number-xl">+63 956 0526 290</span>
                            </a>
                            <button class="copy-btn" onclick="copyText('0468889510')"><i class="far fa-copy"></i></button>
                        </div>
                        <div class="contact-box">
                            <a href="tel:0464830446" class="call-btn">
                                <span class="label-sm">Passport Client Concerns</span>
                                <span class="number-xl">(+6302) 8834 4000</span>
                            </a>
                            <button class="copy-btn" onclick="copyText('00288344000')"><i class="far fa-copy"></i></button>
                        </div>
                    </div>
                </section>

                

                

            </main>
        </div>
    </div>

    <div id="toast"><i class="fas fa-check"></i> Copied to Clipboard!</div>

    <script>
        // Copy Function
        function copyText(text) {
            navigator.clipboard.writeText(text).then(() => {
                const toast = document.getElementById("toast");
                toast.className = "show";
                setTimeout(() => {
                    toast.className = toast.className.replace("show", "");
                }, 3000);
            });
        }

        document.addEventListener("DOMContentLoaded", () => {
            const navLinks = document.querySelectorAll('.em-nav-item');
            const sections = document.querySelectorAll('section');

            // Smooth Scroll
            navLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const target = document.querySelector(link.getAttribute('href'));
                    if (target) {
                        const offset = 140;
                        const bodyRect = document.body.getBoundingClientRect().top;
                        const elementRect = target.getBoundingClientRect().top;
                        const elementPosition = elementRect - bodyRect;
                        const offsetPosition = elementPosition - offset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });
                    }
                });
            });

            // Scroll Spy (IntersectionObserver)
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        navLinks.forEach(link => link.classList.remove('active'));
                        const id = entry.target.getAttribute('id');
                        const activeLink = document.querySelector(`.em-nav-item[href="#${id}"]`);
                        if (activeLink) activeLink.classList.add('active');
                    }
                });
            }, {
                rootMargin: '-20% 0px -60% 0px'
            });

            sections.forEach(section => observer.observe(section));
        });
    </script>
    <!-- END OF MAIN CONTENT -->
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
