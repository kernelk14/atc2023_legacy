<?php
$view->open([
    'title'  => 'Useful Information | Asian Track Championships | Tagaytay 2026',
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
        /* --- MEDALS SECTION (PREMIUM DARK STYLE) --- */
        
        .medals-section {
            padding: 80px 0;
            /* Dark Radial Gradient para lumutang ang medals */
            background: radial-gradient(circle at center, #222222 0%, #000000 100%);
            position: relative;
            overflow: hidden;
            border-top: 1px solid #333;
        }
        
        .medals-podium {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            /* Naka-align sa paa ng podium */
            gap: 20px;
            margin-top: 40px;
        }
        /* Common Card Styles */
        
        .medal-card {
            text-align: center;
            position: relative;
            z-index: 2;
            transition: transform 0.4s ease;
            width: 200px;
            /* Default width */
        }
        /* Image Styles */
        
        .medal-img {
            width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.6));
            /* Shadow para lumutang */
            transition: transform 0.3s ease;
        }
        
        .medal-card:hover .medal-img {
            transform: scale(1.05) translateY(-10px);
            /* Aangat pag hover */
        }
        /* Text Styles */
        
        .medal-info h3 {
            font-size: 1.5rem;
            font-weight: 800;
            margin-top: 15px;
            margin-bottom: 5px;
            letter-spacing: 2px;
        }
        
        .medal-info p {
            color: #888;
            font-size: 0.9rem;
            margin: 0;
        }
        /* --- PODIUM RANKS (Gold, Silver, Bronze) --- */
        /* GOLD: Gitna at Pinakamalaki */
        
        .gold-medal {
            width: 240px;
            /* Mas malaki ang container */
            margin-bottom: 30px;
            /* Mas mataas ang pwesto */
        }
        
        .gold-medal h3 {
            color: #FFD700;
            text-shadow: 0 0 15px rgba(255, 215, 0, 0.4);
        }
        /* SILVER */
        
        .silver-medal {
            margin-bottom: 0;
        }
        
        .silver-medal h3 {
            color: #C0C0C0;
            text-shadow: 0 0 15px rgba(192, 192, 192, 0.4);
        }
        /* BRONZE */
        
        .bronze-medal {
            margin-bottom: 0;
        }
        
        .bronze-medal h3 {
            color: #CD7F32;
            text-shadow: 0 0 15px rgba(205, 127, 50, 0.4);
        }
        /* Glow sa likod ng medal */
        
        .medal-glow {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.08) 0%, transparent 70%);
            z-index: -1;
            pointer-events: none;
        }
        /* --- MOBILE RESPONSIVENESS (Auto-Stack) --- */
        
        @media (max-width: 768px) {
            .medals-podium {
                flex-direction: column;
                /* Gawing patayo */
                align-items: center;
                gap: 50px;
            }
            /* REORDER: Gold sa taas, Silver sunod, Bronze huli */
            .order-1 {
                order: 1;
            }
            /* Gold */
            .order-2 {
                order: 2;
            }
            /* Silver */
            .order-3 {
                order: 3;
            }
            /* Bronze */
            .gold-medal {
                margin-bottom: 0;
                /* Reset margin */
                width: 220px;
            }
            .silver-medal,
            .bronze-medal {
                width: 180px;
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
        'title'  => 'USEFUL INFORMATION',
        'crumbs' => [
            ['text' => 'COMPETITION GUIDE', 'href' => '/about-competition', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li'],
            ['text' => 'USEFUL INFORMATION', 'href' => '/user-information', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li']
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
        /* --- MAIN THEME BACKGROUND --- */
        /* --- MAIN THEME BACKGROUND (DESKTOP VIEW) --- */
        
        .venue-theme-section {
            background-color: #050505;
            /* Fallback color */
            /* --- DITO ANG PAGBABAGO --- */
            /* Nagdagdag tayo ng maitim na gradient (0.7 opacity) sa ibabaw ng picture */
            /* Ito ang magbibigay nung dark, elegant look */
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/images/velodrome-bg.jpg');
            /* Siguraduhin tama ang path dito */
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            /* Parallax effect sa desktop */
            padding: 100px 0;
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            position: relative;
            overflow: hidden;
        }
        /* =========================================
       GRAPHICS & ANIMATION
    ========================================= */
        
        .bg-velodrome-grid {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: repeating-linear-gradient(90deg, transparent 0, transparent 50px, rgba(0, 180, 216, 0.08) 50px, rgba(0, 180, 216, 0.08) 51px), linear-gradient(to bottom, transparent 20%, rgba(0, 180, 216, 0.15) 100%);
            transform: perspective(1000px) rotateX(60deg) scale(2);
            transform-origin: top center;
            z-index: 0;
            pointer-events: none;
            filter: drop-shadow(0 0 8px rgba(0, 180, 216, 0.3));
        }
        
        .bg-cyclist-giant {
            position: absolute;
            top: -5%;
            right: -10%;
            font-size: 45vw;
            color: rgba(0, 180, 216, 0.09);
            transform: rotate(-10deg);
            z-index: 0;
            pointer-events: none;
            filter: blur(1px);
            text-shadow: 0 0 50px rgba(0, 180, 216, 0.2);
        }
        
        .bg-gear-mid {
            position: absolute;
            top: 40%;
            left: -15%;
            font-size: 30rem;
            color: rgba(0, 180, 216, 0.04);
            animation: spinSlow 80s linear infinite;
            z-index: 0;
            pointer-events: none;
            -webkit-text-stroke: 3px rgba(0, 180, 216, 0.06);
        }
        
        .bg-gear-bottom {
            position: absolute;
            bottom: -10%;
            right: 10%;
            font-size: 20rem;
            color: rgba(0, 180, 216, 0.07);
            animation: spinSlowReverse 60s linear infinite;
            z-index: 0;
            pointer-events: none;
            -webkit-text-stroke: 2px rgba(0, 180, 216, 0.08);
        }
        
        .bg-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
        }
        
        .particle {
            position: absolute;
            background: #00B4D8;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            animation: floatUp linear infinite;
            box-shadow: 0 0 15px rgba(0, 180, 216, 0.9), 0 0 5px rgba(255, 255, 255, 0.8);
        }
        
        .p1 {
            left: 15%;
            top: 80%;
            animation-duration: 10s;
        }
        
        .p2 {
            left: 35%;
            top: 95%;
            animation-duration: 18s;
            width: 6px;
            height: 6px;
        }
        
        .p3 {
            left: 75%;
            top: 60%;
            animation-duration: 14s;
        }
        
        .p4 {
            left: 85%;
            top: 90%;
            animation-duration: 22s;
        }
        
        @keyframes spinSlow {
            100% {
                transform: rotate(360deg);
            }
        }
        
        @keyframes spinSlowReverse {
            100% {
                transform: rotate(-360deg);
            }
        }
        
        @keyframes floatUp {
            0% {
                transform: translateY(0);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: translateY(-120vh);
                opacity: 0;
            }
        }
        /* =========================================
       UI STYLES
    ========================================= */
        
        .content-layer {
            position: relative;
            z-index: 2;
        }
        
        .venue-hero-title {
            font-size: 3.5rem;
            font-weight: 900;
            text-transform: uppercase;
            font-style: italic;
            text-align: center;
            margin: 0 0 10px 0;
            letter-spacing: -2px;
            color: #fff;
            text-shadow: 3px 3px 0px #00B4D8;
            line-height: 1.1;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.8), 2px 2px 0px #00B4D8;
        }
        
        .venue-subtitle {
            text-align: center;
            color: #aaa;
            font-size: 1.1rem;
            margin-bottom: 50px;
            font-weight: 300;
        }
        
        .venue-section-heading {
            font-size: 1.8rem;
            font-weight: 900;
            color: #fff;
            text-transform: uppercase;
            font-style: italic;
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
            margin-top: 50px;
            border-bottom: 1px solid rgba(0, 180, 216, 0.3);
            padding-bottom: 10px;
        }
        
        .venue-section-heading i {
            color: #00B4D8;
        }
        
        .intro-glass-box {
            /* Mas transparent na background */
            background: rgba(20, 20, 20, 0.6);
            /* Mas malakas na blur sa likod */
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            /* Manipis na puting border para classier */
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-left: 4px solid #00B4D8;
            /* Retain natin yung blue accent sa kaliwa */
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            padding: 30px;
            /* Dagdagan konti padding para di siksik */
        }
        
        .highlight-text {
            color: #00B4D8;
            font-weight: 700;
        }
        
        .white-bold {
            color: #fff;
            font-weight: 700;
        }
        /* Tables */
        
        .venue-table-container {
            background: rgba(20, 20, 20, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }
        
        .venue-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }
        
        .venue-table th {
            background: linear-gradient(90deg, #00B4D8, #007a99);
            color: #000;
            padding: 15px;
            font-style: italic;
            font-weight: 800;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            white-space: nowrap;
        }
        
        .venue-table td {
            padding: 18px;
            color: #e0e0e0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            font-size: 1rem;
            vertical-align: middle;
        }
        
        .venue-table tbody tr:hover {
            background-color: rgba(0, 180, 216, 0.15);
        }
        
        .time-badge {
            background: transparent;
            border: 1px solid #00B4D8;
            color: #00B4D8;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 700;
            display: inline-block;
            white-space: nowrap;
        }
        /* =========================================
       NEW: AIRPORT ARRIVAL CARD
    ========================================= */
        
        .arrival-card {
            background: linear-gradient(135deg, rgba(20, 20, 20, 0.9) 0%, rgba(5, 50, 60, 0.8) 100%);
            border: 1px solid #00B4D8;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 40px;
            box-shadow: 0 0 30px rgba(0, 180, 216, 0.15);
            display: grid;
            grid-template-columns: 1.2fr 1.8fr;
            /* Info left, Map right */
        }
        
        .arrival-info {
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .arrival-title {
            color: #fff;
            font-size: 1.6rem;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 5px;
            text-shadow: 0 0 10px rgba(0, 180, 216, 0.5);
        }
        
        .arrival-route {
            color: #00B4D8;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }
        
        .arrival-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .stat-box {
            background: rgba(0, 0, 0, 0.3);
            padding: 10px;
            border-radius: 6px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .stat-label {
            font-size: 0.7rem;
            color: #aaa;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .stat-val {
            font-size: 1.2rem;
            color: #fff;
            font-weight: 700;
        }
        
        .arrival-note {
            font-size: 0.85rem;
            color: #ccc;
            font-style: italic;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 15px;
        }
        /* =========================================
       HOTEL CARD & ROUTE MAP STYLES
    ========================================= */
        
        .hotel-card {
            /* Gawing semi-transparent para makita konti ang background sa likod */
            background: rgba(20, 20, 20, 0.85);
            /* Glass blur effect */
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            /* Ito ang magpapa-angat: Manipis na border */
            border: 1px solid rgba(255, 255, 255, 0.1);
            /* Optional: Kung gusto mo may konting kulay blue yung border */
            /* border: 1px solid rgba(0, 180, 216, 0.3); */
            border-radius: 12px;
            overflow: hidden;
            margin-top: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Shadow para lumutang */
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        }
        
        .hotel-card:hover {
            transform: translateY(-5px);
            border-color: rgba(0, 180, 216, 0.6);
            /* Iilaw yung border pag hover */
            box-shadow: 0 20px 40px rgba(0, 180, 216, 0.15);
        }
        
        .hotel-grid-layout {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            min-height: 350px;
        }
        /* Images */
        
        .hotel-gallery {
            display: grid;
            grid-template-columns: 2fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 5px;
            padding: 10px;
            background: rgba(0, 0, 0, 0.3);
        }
        
        .h-img-main {
            grid-row: span 2;
            position: relative;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .h-img-sub {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .hotel-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ito ang importante */
            transition: transform 0.5s ease;
        }
        
        .hotel-card:hover .hotel-img {
            transform: scale(1.05);
        }
        /* Info Side */
        
        .hotel-details {
            padding: 25px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .hotel-header h3 {
            color: #fff;
            font-weight: 800;
            font-size: 1.8rem;
            margin-bottom: 5px;
        }
        
        .hotel-sub {
            color: #00B4D8;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }
        
        .hotel-badges {
            display: flex;
            gap: 10px;
            margin: 15px 0;
            flex-wrap: wrap;
        }
        
        .h-badge {
            background: rgba(255, 255, 255, 0.1);
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.75rem;
            color: #ccc;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .h-badge i {
            color: #00B4D8;
            margin-right: 5px;
        }
        /* --- THE INTERACTIVE ROUTE MAP --- */
        
        .route-map-container {
            width: 100%;
            height: 100%;
            min-height: 250px;
            border-radius: 0;
            border: 0;
            overflow: hidden;
            position: relative;
            background: #fff;
        }
        /* Specific for hotels */
        
        .hotel-route-map {
            width: 100%;
            height: 160px;
            border-radius: 8px;
            border: 2px solid #fff;
            overflow: hidden;
            position: relative;
            background: #fff;
        }
        
        .route-map-container iframe,
        .hotel-route-map iframe {
            width: 100%;
            height: 100%;
            border: 0;
            filter: none;
        }
        /* Overlay to make it clickable to external map */
        
        .map-overlay-link {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.0);
            z-index: 10;
            cursor: pointer;
        }
        
        .map-label {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #00B4D8;
            color: #000;
            font-weight: 800;
            font-size: 0.7rem;
            padding: 5px;
            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
            pointer-events: none;
            z-index: 11;
        }
        /* Logistics & Weather (Retained) */
        
        .logistics-box {
            background: rgba(30, 30, 30, 0.6);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 12px;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .logistics-box:hover {
            transform: translateY(-7px);
            border-color: #00B4D8;
            box-shadow: 0 15px 40px rgba(0, 180, 216, 0.3);
        }
        
        .logistics-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: #00B4D8;
            transition: 0.3s;
        }
        
        .logistics-box:hover::before {
            width: 8px;
        }
        
        .logistics-title {
            color: #00B4D8;
            font-weight: 800;
            font-size: 1.1rem;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logistics-text {
            font-size: 0.95rem;
            color: #ccc;
            line-height: 1.6;
            margin-bottom: 0;
        }
        
        .currency-value {
            font-size: 2.8rem;
            font-weight: 900;
            color: #fff;
            line-height: 1;
            text-shadow: 0 0 15px rgba(0, 180, 216, 0.7);
        }
        
        .currency-label {
            color: #00B4D8;
            font-size: 0.8rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: bold;
            margin-top: 5px;
        }
        
        .weather-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            margin-top: 20px;
        }
        
        .weather-card {
            background: rgba(0, 0, 0, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 15px 5px;
            border-radius: 6px;
            text-align: center;
            transition: 0.3s;
            backdrop-filter: blur(5px);
        }
        
        .weather-card:hover {
            border-color: #00B4D8;
            transform: scale(1.1);
            background: rgba(0, 180, 216, 0.2);
            z-index: 2;
            box-shadow: 0 0 20px rgba(0, 180, 216, 0.4);
        }
        
        .w-date {
            font-size: 0.75rem;
            color: #00B4D8;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .w-icon {
            font-size: 1.5rem;
            color: #FFD700;
            margin: 5px 0;
            filter: drop-shadow(0 0 5px rgba(255, 215, 0, 0.5));
        }
        
        .w-temp {
            font-size: 1rem;
            font-weight: 700;
            color: #fff;
        }
        
        .logo-header-group {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .logo-header-img {
            height: 80px;
            filter: drop-shadow(0 0 10px rgba(0, 180, 216, 0.3));
            transition: height 0.3s ease;
        }
        /* General Location Map */
        
        .map-frame-container {
            width: 100%;
            height: 450px;
            border: 3px solid #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 30px rgba(0, 180, 216, 0.3);
            background: #fff;
        }
        
        .map-frame-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
        /* =========================================
       RESPONSIVE ADJUSTMENTS (MOBILE & TABLET)
    ========================================= */
        /* TABLET & SMALL LAPTOPS (Max-width: 991px) */
        
        @media (max-width: 991px) {
            /* I-stack ang Hotel Card: Image sa taas, Info sa baba */
            .hotel-grid-layout {
                grid-template-columns: 1fr;
                /* Gawing auto ang height para flexible */
                min-height: auto;
            }
            /* Ayusin ang Gallery height sa mobile para di masyadong matangkad */
            .hotel-gallery {
                height: 250px;
                /* Sapat na height para makita ang pics */
            }
            /* I-stack ang Airport Arrival Card */
            .arrival-card {
                grid-template-columns: 1fr;
            }
            /* Lagyan ng border sa baba ng info instead na sa kanan */
            .arrival-info {
                border-right: none;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }
        }
        
        @media (max-width: 768px) {
            /* --- 1. BACKGROUND FIX (Yung dark tint na gusto mo) --- */
            .venue-theme-section {
                background-image: none !important;
                position: relative;
                z-index: 1;
                padding: 80px 0 60px 0;
                /* Pigilan ang horizontal scroll ng buong page */
                overflow-x: hidden;
            }
            .venue-theme-section::before {
                content: "";
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                z-index: -1;
                background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/images/velodrome-bg.jpg');
                background-size: cover;
                background-position: center center;
                background-repeat: no-repeat;
            }
            /* --- 2. LOGO FIX: FIT SA SCREEN (Walang putol, walang lampas) --- */
            .logo-header-group {
                display: flex !important;
                flex-wrap: wrap !important;
                /* IMPORTANTE: Bababa sila pag di kasya sa isang linya */
                justify-content: center !important;
                /* Gitna lahat */
                align-items: center !important;
                gap: 15px;
                /* Space sa pagitan ng logo */
                width: 100% !important;
                padding: 0 10px;
                /* Padding sa gilid para di dikit sa screen */
                box-sizing: border-box;
            }
            .logo-header-img {
                /* Hahayaan nating lumiit ang logo para mag-fit, pero di ic-crop */
                max-width: 80px !important;
                /* Control sa laki. Pwede mong gawing 60px o 100px */
                height: auto !important;
                /* Maintain aspect ratio (di mapipitpit) */
                object-fit: contain;
                flex-shrink: 0;
            }
            .weather-grid-container {
                display: grid !important;
                /* Ito ang gagawa ng 2 columns na magkapareho ang laki */
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 10px !important;
                width: 100% !important;
                margin: 0 auto 20px auto;
            }
            /* Targetin ang bawat weather card */
            .weather-day-card {
                width: 100% !important;
                /* Pupunuin niya yung column */
                margin: 0 !important;
                box-sizing: border-box;
            }
            /* --- 4. HEADER TEXT FIX --- */
            .venue-hero-title,
            .section-header-title {
                text-align: center;
                font-size: 1.8rem;
                padding: 0 15px;
                /* Iwas dikit sa gilid */
                word-wrap: break-word;
                /* Iwas lampas screen */
            }
        }
        /* --- TOURIST SPOTS PREMIUM DESIGN --- */
        
        .tourist-spots-section {
            padding: 80px 0;
            /* Mas maitim na background para lumutang ang cards */
            background-color: #121212;
            position: relative;
        }
        /* Header Styling */
        
        .section-header-group {
            margin-bottom: 50px;
        }
        
        .section-title {
            color: #ffffff;
            /* WHITE TEXT NA PARA MABASA */
            font-size: 2.2rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }
        
        .section-subtitle {
            color: #a0a0a0;
            font-size: 1rem;
            margin-bottom: 20px;
        }
        
        .header-divider {
            width: 60px;
            height: 4px;
            background-color: #f1c40f;
            /* ACC Yellow Accent */
            margin: 0 auto;
            border-radius: 2px;
        }
        /* Grid Layout */
        
        .spots-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            padding: 0 15px;
        }
        /* Card Styling - PREMIUM LOOK */
        
        .spot-card {
            background: #1e1e1e;
            /* Dark Gray Card */
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            /* Thin border na halos di kita, lilitaw pag hover */
            border: 1px solid #333;
            transition: all 0.4s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        /* HOVER EFFECT: Dito ang magic! */
        
        .spot-card:hover {
            transform: translateY(-10px);
            /* Aangat yung card */
            border-color: #f1c40f;
            /* Magiging Yellow ang border */
            box-shadow: 0 15px 30px rgba(241, 196, 15, 0.15);
            /* Yellow Glow */
        }
        /* Image Box */
        
        .spot-img-box {
            width: 100%;
            height: 220px;
            position: relative;
            overflow: hidden;
        }
        
        .spot-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        /* Image Zoom pag hover */
        
        .spot-card:hover .spot-img {
            transform: scale(1.1);
        }
        /* Text Content */
        
        .spot-info {
            padding: 25px 20px;
            text-align: center;
        }
        
        .spot-info h3 {
            color: #fff;
            font-size: 1.3rem;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 10px;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }
        /* Gawing yellow ang text title pag hover din */
        
        .spot-card:hover .spot-info h3 {
            color: #f1c40f;
        }
        
        .spot-info p {
            color: #b0b0b0;
            /* Light gray text */
            font-size: 0.9rem;
            line-height: 1.6;
            margin: 0;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <div class="venue-theme-section">
        <div class="bg-velodrome-grid"></div>
        <i class="fas fa-biking bg-cyclist-giant"></i>
        <i class="fas fa-cog bg-gear-mid"></i>
        <i class="fas fa-cog bg-gear-bottom"></i>

        <div class="bg-particles">
            <div class="particle p1"></div>
            <div class="particle p2"></div>
            <div class="particle p3"></div>
            <div class="particle p4"></div>
        </div>

        <div class="container content-layer">

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="logo-header-group">
                        <img src="assets/images/acc-logo.png" alt="ACC" class="logo-header-img">
                        <div style="width: 2px; height: 40px; background: rgba(0,180,216,0.5);"></div>
                        <img src="assets/images/philcycling-logo.png" alt="PhilCycling" class="logo-header-img">
                    </div>
                    <h1 class="venue-hero-title">USEFUL INFORMATION</h1>
                    <p class="venue-subtitle">33rd Founding Anniversary of ACC & Asian Track Championships</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="venue-section-heading"><i class="fas fa-info-circle"></i> INTRODUCTION</h2>
                    <div class="intro-glass-box">
                        <p>This useful information document has been prepared to assist the <span class="white-bold">National Cycling Federations</span> and invited guests in their preparation for the <span class="highlight-text">33rd Founding Anniversary of ACC</span>.</p>
                        <p>This documentation provides logistical and organizational details to participate in the events, including dates, venue, accommodation, transportation, accreditation, arrival, and departure arrangements.</p>
                        <p class="mb-0">The National Cycling Federation and invited guests are kindly requested to <span class="white-bold">carefully take note</span> of the information contained herein to ensure smooth coordination.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="venue-section-heading"><i class="fas fa-calendar-alt"></i> Schedule of Activities</h2>
                    <p style="color: #00B4D8; margin-top: -20px; margin-bottom: 20px; font-weight: 700; letter-spacing: 2px;">JANUARY 26, 2026</p>
                    <div class="venue-table-container">
                        <div class="table-responsive">
                            <table class="venue-table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th></th>
                                        <th>DETAILS</th>
                                        <th class="text-end">TIME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">01</td>
                                        <td>Registration</td>
                                        <td>Pre-registration Online</td>
                                        <td class="text-end"><span class="time-badge">08:00 - 12:00</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">02</td>
                                        <td>Practice Date</td>
                                        <td>Arrival 5 days before race</td>
                                        <td class="text-end"><span style="color:#666;">—</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">03</td>
                                        <td>Assembly</td>
                                        <td>All Delegates</td>
                                        <td class="text-end"><span class="time-badge">09:00 - 10:00</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">04</td>
                                        <td>Opening Program</td>
                                        <td>Ceremonial Activities</td>
                                        <td class="text-end"><span class="time-badge">10:00 AM</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">05</td>
                                        <td>Declaration</td>
                                        <td>Opening PSC</td>
                                        <td class="text-end"><span class="time-badge">11:00 AM</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">06</td>
                                        <td>Race</td>
                                        <td>Commencement of Events</td>
                                        <td class="text-end"><span class="time-badge">ONWARDS</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="venue-section-heading"><i class="fas fa-plane-arrival"></i> ARRIVAL & TRANSFERS</h2>

                    <div class="arrival-card">
                        <div class="arrival-info">
                            <div class="arrival-title">NAIA AIRPORT</div>
                            <div class="arrival-route"><i class="fas fa-map-marker-alt"></i> MANILA <i class="fas fa-long-arrow-alt-right"></i> <i class="fas fa-flag-checkered"></i> TAGAYTAY</div>

                            <div class="arrival-stats">
                                <div class="stat-box">
                                    <div class="stat-label">Distance</div>
                                    <div class="stat-val">~58 KM</div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-label">Est. Time</div>
                                    <div class="stat-val">1h 45m</div>
                                </div>
                            </div>

                            <div class="arrival-note">
                                <i class="fas fa-info-circle" style="color:#00B4D8;"></i> Official shuttle services will be available at the arrival bay for all accredited delegates.
                            </div>
                        </div>

                        <div class="route-map-container">
                            <a href="https://www.google.com/maps/dir/Ninoy+Aquino+International+Airport,+Pasay,+Metro+Manila/Tagaytay+City+Velodrome" target="_blank" class="map-overlay-link" title="Open in Google Maps"></a>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d247385.234567!2d120.9!3d14.3!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3397cb0710606f7b%3A0x62913e2f47055c02!2sNinoy%20Aquino%20International%20Airport!3m2!1d14.5085816!2d121.0194432!4m5!1s0x33bd796a55555555%3A0x123456789abcdef!2sTagaytay!3m2!1d14.1153!2d120.9621!5e0!3m2!1sen!2sph!4v1600000000000"
                                allowfullscreen="" loading="lazy">
                        </iframe>
                            <div class="map-label">CLICK MAP FOR NAVIGATION</div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row justify-content-center">
    <div class="col-lg-10">
        
        <h2 class="venue-section-heading"><i class="fas fa-bed"></i> OFFICIAL HOTELS</h2>

        <div class="hotel-card">
            <div class="hotel-grid-layout">
                <div class="hotel-gallery">
                    <div class="h-img-main">
        <img src="assets/images/hotel/Grandmaster-hotel-main.jpg" class="hotel-img" alt="The Grand Master Hotel">
    </div>

    <div class="h-img-sub">
        <img src="assets/images/hotel/Grandmaster-hotel-room.jpg" class="hotel-img" alt="Room">
    </div>

    <div class="h-img-sub">
        <img src="assets/images/hotel/Grandmaster-hotel-pool.jpg" class="hotel-img" alt="Pool">
    </div>
                </div>

                <div class="hotel-details">
                    <div>
                        <div class="hotel-header">
                            <h3>GRAND MASTER HOTEL</h3>
                            <span class="hotel-sub"> </span>
                        </div>
                        <div class="hotel-badges">
                            <span class="h-badge"><i class="fas fa-user-tie"></i> Officials</span>
                            <span class="h-badge"><i class="fas fa-utensils"></i> Full Board</span>
                            <span class="h-badge"><i class="fas fa-shuttle-van"></i> 15 Mins Shuttle</span>
                        </div>
                    </div>

                    <div class="map-container">
    <a href="https://www.google.com/maps/dir/The+Grand+Master+Hotel,+Tagaytay/Tagaytay+City+Velodrome" 
       target="_blank" 
       class="map-overlay-link" 
       title="Click to View Route">
    </a>
    <iframe 
       src="https://maps.google.com/maps?q=The+Grand+Master+Hotel,+Tagaytay&z=14&output=embed" 
       loading="lazy" 
       allowfullscreen>
    </iframe>
    <div class="map-overlay-label">GM HOTEL ➝ VELODROME</div>
</div>
                </div>
            </div>
        </div>

       <!--  <div class="hotel-card">
            <div class="hotel-grid-layout">
                <div class="hotel-gallery">
                    <div class="h-img-main">
        <img src="assets/images/hotel/SummitRidge-hotel-main.jpg" class="hotel-img" alt="The Summit Ridge Hotel">
    </div>

    <div class="h-img-sub">
        <img src="assets/images/hotel/SummitRidge-hotel-room.jpg" class="hotel-img" alt="Room">
    </div>

    <div class="h-img-sub">
        <img src="assets/images/hotel/SummitRidge-hotel-restaurant.jpg" class="hotel-img" alt="Restaurant">
    </div>
                </div>

                <div class="hotel-details">
                    <div>
                        <div class="hotel-header">
                            <h3>SUMMIT RIDGE</h3>
                            <span class="hotel-sub"> </span>
                        </div>
                        <div class="hotel-badges">
                            <span class="h-badge"><i class="fas fa-running"></i> Athletes</span>
                            <span class="h-badge"><i class="fas fa-utensils"></i> Full Board</span>
                            <span class="h-badge"><i class="fas fa-shuttle-van"></i> 10 Mins Shuttle</span>
                        </div>
                    </div>

                    <div class="hotel-route-map">
                        <a href="https://www.google.com/maps/dir/Summit+Ridge+Tagaytay/Tagaytay+City+Velodrome" target="_blank" class="map-overlay-link" title="Click to View Route"></a>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d61893.99661474472!2d120.9324785!3d14.115278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x33bd776055555555%3A0x1234567890abcdef!2sSummit+Ridge!3m2!1d14.115278!2d120.96!4m5!1s0x33bd777000000001%3A0x9876543210fedcba!2sTagaytay+City+Velodrome!3m2!1d14.100000!2d120.95!5e0!3m2!1sen!2sph!4v1234567890" loading="lazy" allowfullscreen></iframe>
                        <div class="map-label"><i class="fas fa-location-arrow"></i> SUMMIT RIDGE ➝ VELODROME</div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="hotel-card">
            <div class="hotel-grid-layout">
                <div class="hotel-gallery">
                    <div class="h-img-main">
        <img src="assets/images/hotel/KnightsTemplarhotel-main.jpg" class="hotel-img" alt="The Knights Templar Hotel">
    </div>

    <div class="h-img-sub">
        <img src="assets/images/hotel/KnightsTemplarhotel-room.jpg" class="hotel-img" alt="Room">
    </div>

    <div class="h-img-sub">
        <img src="assets/images/hotel/KnightsTemplarhotel-room2.jpg" class="hotel-img" alt="Room">
    </div>
                </div>

                <div class="hotel-details">
                    <div>
                        <div class="hotel-header">
                            <h3>KNIGHTS TEMPLAR HOTEL</h3>
                            <span class="hotel-sub"> </span>
                        </div>
                        <div class="hotel-badges">
                            <span class="h-badge"><i class="fas fa-camera"></i> Media</span>
                            <span class="h-badge"><i class="fas fa-wifi"></i> High Speed</span>
                            <span class="h-badge"><i class="fas fa-shuttle-van"></i> 12 Mins Shuttle</span>
                        </div>
                    </div>

                    <div class="map-container">
    <a href="https://www.google.com/maps/dir/Knights+Templar+Ridge+Hotel,+Isaac+Tolentino+Avenue,+Tagaytay,+Cavite/Tagaytay+City+Velodrome,+Tagaytay+-+Nasugbu+Highway,+Kaybagal+South,+Tagaytay,+Cavite/@14.1085,120.935,14z" 
       target="_blank" 
       class="map-overlay-link" 
       title="Click to View Route">
    </a>

    <iframe 
       width="100%" 
       height="100%" 
       frameborder="0" 
       scrolling="no" 
       marginheight="0" 
       marginwidth="0" 
       src="https://maps.google.com/maps?q=Knights+Templar+Ridge+Hotel+Tagaytay&t=&z=15&ie=UTF8&iwloc=&output=embed">
    </iframe>

    <div class="map-overlay-label" style="font-size: 0.8rem;">
        KNIGHTS TEMPLAR ➝ VELODROME
    </div>
</div>
                </div>
            </div>
        </div>

        <div class="hotel-card">
            <div class="hotel-grid-layout">
                <div class="hotel-gallery">
                    <div class="h-img-main">
        <img src="assets/images/hotel/TaalVista-hotel-main.jpg" class="hotel-img" alt="The Taal Vista Hotel">
    </div>

    <div class="h-img-sub">
        <img src="assets/images/hotel/TaalVista-hotel-room.jpg" class="hotel-img" alt="Room">
    </div>

    <div class="h-img-sub">
        <img src="assets/images/hotel/TaalVista-hotel-restaurant.jpg" class="hotel-img" alt="Restaurant">
    </div>
                </div>

                <div class="hotel-details">
                    <div>
                        <div class="hotel-header">
                            <h3>TAAL VISTA HOTEL</h3>
                            <span class="hotel-sub"> </span>
                        </div>
                        <div class="hotel-badges">
                            <span class="h-badge"><i class="fas fa-user-shield"></i> VIP</span>
                            <span class="h-badge"><i class="fas fa-utensils"></i> Full Board</span>
                            <span class="h-badge"><i class="fas fa-shuttle-van"></i> 8 Mins Shuttle</span>
                        </div>
                    </div>

                    <div class="map-container">
    <a href="https://www.google.com/maps/dir/Taal+Vista+Hotel,+Kilometer+60+Emilio+Aguinaldo+Highway,+Tagaytay,+4120+Cavite/Tagaytay+City+Velodrome,+Tagaytay,+Cavite" 
       target="_blank" 
       class="map-overlay-link" 
       title="Click to View Route">
    </a>

    <iframe 
       width="100%" 
       height="100%" 
       frameborder="0" 
       scrolling="no" 
       marginheight="0" 
       marginwidth="0" 
       src="https://maps.google.com/maps?q=Taal+Vista+Hotel+Tagaytay&t=&z=15&ie=UTF8&iwloc=&output=embed">
    </iframe>

    <div class="map-overlay-label">TAAL VISTA ➝ VELODROME</div>
</div>
                </div>
            </div>
        </div>

        <div class="hotel-card">
            <div class="hotel-grid-layout">
                <div class="hotel-gallery">
    <div class="h-img-main">
        <img src="assets/images/hotel/lake-hotel-main.webp" class="hotel-img" alt="The Lake Hotel">
    </div>

    <div class="h-img-sub">
        <img src="assets/images/hotel/lake-hotel-room.jpg" class="hotel-img" alt="Room">
    </div>

    <div class="h-img-sub">
        <img src="assets/images/hotel/lake-hotel-restaurant.jpg" class="hotel-img" alt="Restaurant">
    </div>
</div>

                <div class="hotel-details">
                    <div>
                        <div class="hotel-header">
                            <h3> THE LAKE HOTEL </h3>
                            <span class="hotel-sub"> </span>
                        </div>
                        <div class="hotel-badges">
                            <span class="h-badge"><i class="fas fa-users"></i> Delegates</span>
                            <span class="h-badge"><i class="fas fa-utensils"></i> Full Board</span>
                            <span class="h-badge"><i class="fas fa-shuttle-van"></i> 3 Mins Shuttle</span>
                        </div>
                    </div>

                  <div class="hotel-route-map">
    <a href="https://www.google.com/maps/dir/The+Lake+Hotel,+Tagaytay-Nasugbu+Hwy,+Tagaytay,+Cavite/Tagaytay+City+Velodrome,+3WXR%2B92G,+Tagaytay,+Cavite" 
       target="_blank" 
       class="map-overlay-link" 
       title="Click to View Route">
    </a>

    <iframe 
        width="100%" 
        height="100%" 
        id="gmap_canvas" 
        src="https://maps.google.com/maps?q=Tagaytay+City+Velodrome+Cavite&t=&z=14&ie=UTF8&iwloc=&output=embed" 
        frameborder="0" 
        scrolling="no" 
        marginheight="0" 
        marginwidth="0">
    </iframe>

    <div class="map-label"><i class="fas fa-location-arrow"></i> LAKE HOTEL ➝ VELODROME</div>
</div>
                </div>
            </div>
        </div>

    </div>
</div>
           <div class="row justify-content-center weather-section-container">
    <div class="col-lg-12">
        
        <h2 class="venue-section-heading"><i class="fas fa-cloud-sun"></i> Race Week Weather</h2>
        
        <div class="weather-grid">
            
            <div class="weather-card">
                <div class="w-date">Mar 25</div>
                <i class="fas fa-sun w-icon"></i>
                <div class="w-temp">29°C</div>
                <div class="w-condition">Sunny</div>
            </div>

            <div class="weather-card">
                <div class="w-date">Mar 26</div>
                <i class="fas fa-cloud-sun w-icon"></i>
                <div class="w-temp">30°C</div>
                <div class="w-condition">Pt. Cloudy</div>
            </div>

            <div class="weather-card">
                <div class="w-date">Mar 27</div>
                <i class="fas fa-sun w-icon"></i>
                <div class="w-temp">31°C</div>
                <div class="w-condition">Clear Sky</div>
            </div>

            <div class="weather-card">
                <div class="w-date">Mar 28</div>
                <i class="fas fa-sun w-icon"></i>
                <div class="w-temp">31°C</div>
                <div class="w-condition">Hot</div>
            </div>

            <div class="weather-card">
                <div class="w-date">Mar 29</div>
                <i class="fas fa-cloud-sun w-icon"></i>
                <div class="w-temp">30°C</div>
                <div class="w-condition">Cloudy</div>
            </div>

            <div class="weather-card">
                <div class="w-date">Mar 30</div>
                <i class="fas fa-cloud w-icon"></i>
                <div class="w-temp">29°C</div>
                <div class="w-condition">Overcast</div>
            </div>

            <div class="weather-card race-day">
                <div class="w-date">Mar 31</div>
                <i class="fas fa-sun w-icon"></i>
                <div class="w-temp">30°C</div>
                <div class="w-condition">Race Day</div>
            </div>

        </div>
    </div>
</div>
                    <!-- <h2 class="venue-section-heading"><i class="fas fa-map-marked-alt"></i> Location Map</h2>
                    <div class="map-frame-container mb-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.995954316202!2d120.94191331483584!3d14.111494990117978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd77a7f4749669%3A0xc682970669747974!2sTagaytay%20Combat%20Sports%20Center!5e0!3m2!1sen!2sph!4v1689608123456!5m2!1sen!2sph"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> -->

                    <div class="row g-4">
                        <div class="col-md-4 col-sm-6">
                            <div class="logistics-box">
                                <div class="logistics-title"><i class="fas fa-handshake"></i> Meeting Hall</div>
                                <p class="logistics-text">Details regarding the official Meeting Hall location will be provided at the hotel desk.</p>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="logistics-box">
                                <div class="logistics-title"><i class="fas fa-bus"></i> Transportation</div>
                                <p class="logistics-text">
                                    Welcome team will assist from Airport to Hotel.<br>
                                    <strong style="color:#fff;">Daily shuttle: Hotel ↔ Velodrome.</strong>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="logistics-box">
                                <div class="logistics-title"><i class="fas fa-id-card"></i> Accreditation</div>
                                <p class="logistics-text">
                                    Proceed to the <span style="color:#00B4D8; font-weight:bold;">LOBBY DESK</span> upon arrival. Staff will assist with accreditation and check-in.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="logistics-box">
                                <div class="logistics-title"><i class="fas fa-crown"></i> VIP Lounge</div>
                                <p class="logistics-text">Located at the Velodrome.<br><em style="font-size:0.85rem; color:#888">Restricted to VIP Pass holders.</em></p>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="logistics-box justify-content-center align-items-center text-center">
                                <div class="logistics-title mb-0"><i class="fas fa-money-bill-wave"></i> Currency</div>
                                <div class="mt-3">
                                    <div class="currency-value">₱ 59.44</div>
                                    <div class="currency-label">1 USD TO PESO</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="logistics-box justify-content-center align-items-center text-center">
                                <div class="logistics-title mb-2 justify-content-center"><i class="fas fa-plug"></i> Power Plug</div>
                                <div style="font-size: 2.5rem; color: #fff; margin: 5px 0; filter: drop-shadow(0 0 10px rgba(0,180,216,0.5));">
                                    <i class="fas fa-charging-station"></i>
                                </div>
                                <div style="font-weight: 800; color: #00B4D8; letter-spacing: 1px; font-size: 1.2rem;">TYPE C ONLY</div>
                                <p class="logistics-text mt-2" style="font-size: 0.85rem;">
                                    Standard voltage of <strong class="white-bold">220V</strong>.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <section class="medals-section">
        <div class="container">
            <div class="section-header-group text-center">
                <h2 class="section-title">VICTORY AWAITS</h2>
                <p class="section-subtitle">The prize for the fastest cyclists in Asia.</p>
                <div class="header-divider"></div>
            </div>

            <div class="medals-podium">

                <div class="medal-card silver-medal order-2">
                    <div class="medal-glow"></div>
                    <img src="assets/images/medal-silver.png" alt="Silver Medal" class="medal-img">
                    <div class="medal-info">
                        <h3>SILVER</h3>
                        <p>2nd Place</p>
                    </div>
                </div>
                <!-- MEDAL -->
                <div class="medal-card gold-medal order-1">
                    <div class="medal-glow"></div>
                    <img src="assets/images/medal-gold.png" alt="Gold Medal" class="medal-img">
                    <div class="medal-info">
                        <h3>GOLD</h3>
                        <p>Champion</p>
                    </div>
                </div>

                <div class="medal-card bronze-medal order-3">
                    <div class="medal-glow"></div>
                    <img src="assets/images/medal-bronze.png" alt="Bronze Medal" class="medal-img">
                    <div class="medal-info">
                        <h3>BRONZE</h3>
                        <p>3rd Place</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END OF MEDAL -->


    <section class="tourist-spots-section">
        <div class="container">
            <div class="section-header-group text-center">
                <h2 class="section-title">EXPLORE TAGAYTAY</h2>
                <p class="section-subtitle">Discover the city's gems after the race.</p>
                <div class="header-divider"></div>
            </div>

            <div class="spots-grid">

                <div class="spot-card">
                    <div class="spot-img-box">
                        <img src="assets/images/taal-volcano.jpg" alt="Taal Volcano" class="spot-img">
                        <div class="spot-overlay"></div>
                    </div>
                    <div class="spot-info">
                        <h3>Taal Volcano</h3>
                        <p>Experience the breathtaking view of the world's smallest active volcano.</p>
                    </div>
                </div>

                <div class="spot-card">
                    <div class="spot-img-box">
                        <img src="assets/images/picnic-grove.jpg" alt="Picnic Grove" class="spot-img">
                        <div class="spot-overlay"></div>
                    </div>
                    <div class="spot-info">
                        <h3>Picnic Grove</h3>
                        <p>Perfect for relaxing with a view, zipline, and cable car rides.</p>
                    </div>
                </div>

                <div class="spot-card">
                    <div class="spot-img-box">
                        <img src="assets/images/peoples-park.jpg" alt="People's Park" class="spot-img">
                        <div class="spot-overlay"></div>
                    </div>
                    <div class="spot-info">
                        <h3>People's Park</h3>
                        <p>The highest point in Tagaytay offering a 360-degree view of the city.</p>
                    </div>
                </div>

                <div class="spot-card">
                    <div class="spot-img-box">
                        <img src="assets/images/sky-ranch.jpg" alt="Sky Ranch" class="spot-img">
                        <div class="spot-overlay"></div>
                    </div>
                    <div class="spot-info">
                        <h3>Sky Ranch</h3>
                        <p>Amusement park with the famous Sky Eye ferris wheel.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- optional content 1 -->
    <!-- <div class="rts-match-result-section section-gap">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h3 class="section-title">OFFICIAL RESULTS</h3>
                    <p class="section-subtitle">Download the official Start Lists and Results per day.</p>
                </div>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <div class="result-card theme-blue">

                        <div class="card-header-custom">
                            <div class="header-text">
                                <h4>DAY 1 - MARCH 28, 2026</h4>
                                <span class="badge-text">Qualifiers & Opening</span>
                            </div>
                            <i class="fas fa-calendar-day header-icon"></i>
                        </div>

                        <div class="result-row">
                            <div class="row-info">
                                <div class="icon-box"><i class="fas fa-list-ol"></i></div>
                                <div class="text-info">
                                    <h6>Official Start List (Day 1)</h6>
                                    <span>Updated: 08:00 AM</span>
                                </div>
                            </div>
                            <a href="assets/downloads/startlist.pdf" target="_blank" class="btn-custom btn-download">
                                DOWNLOAD PDF
                            </a>
                        </div>

                        <div class="result-row no-border">
                            <div class="row-info">
                                <div class="icon-box"><i class="fas fa-trophy highlight-green"></i></div>
                                <div class="text-info">
                                    <h6>Morning Session Results</h6>
                                    <span>Qualifying Rounds</span>
                                </div>
                            </div>
                            <a href="assets/downloads/result1.jpg" class="btn-custom btn-pending" onclick="return false;">PENDING</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="result-card theme-red">

                        <div class="card-header-custom">
                            <div class="header-text">
                                <h4>DAY 2 - MARCH 29, 2026</h4>
                                <span class="badge-text">Finals & Awarding</span>
                            </div>
                            <i class="fas fa-flag-checkered header-icon"></i>
                        </div>

                        <div class="result-row">
                            <div class="row-info">
                                <div class="icon-box"><i class="fas fa-list-ol"></i></div>
                                <div class="text-info">
                                    <h6>Official Start List (Day 2)</h6>
                                    <span>Updated: 07:00 AM</span>
                                </div>
                            </div>
                            <a href="assets/downloads/day2-startlist.pdf" target="_blank" class="btn-custom btn-download">
                                DOWNLOAD PDF
                            </a>
                        </div>

                        <div class="result-row no-border">
                            <div class="row-info">
                                <div class="icon-box"><i class="fas fa-medal highlight-gold"></i></div>
                                <div class="text-info">
                                    <h6>Finals Results</h6>
                                    <span>Awarding Ceremony</span>
                                </div>
                            </div>
                            <span class="btn-custom btn-pending">PENDING</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div> -->
    <!-- <div class="rts-race-center section-padding" style="background-color: #0b0b1b; min-height: 100vh; position: relative;">

        <div class="bg-glow-blob"></div>

        <div class="container" style="position: relative; z-index: 5;">

            <div class="row mb-5 text-center" data-aos="fade-up">
                <div class="col-12">
                    <span class="eyebrow-text">Asian Track Championships 2026</span>
                    <h1 class="page-main-title">RACE CENTRE</h1>
                    <p class="text-muted mt-2">Live updates, start lists, and official results.</p>
                    <div class="blue-separator"></div>
                </div>
            </div>

            <div class="row mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12 d-flex justify-content-center">
                    <div class="tab-buttons-container">
                        <button class="tab-btn active" onclick="switchTab('startlist')">
                        <i class="fas fa-list-ul me-2"></i> Start List
                    </button>
                        <button class="tab-btn" onclick="switchTab('results')">
                        <i class="fas fa-trophy me-2"></i> Match Results
                    </button>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <div class="filter-bar d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <select class="form-select custom-select">
                            <option selected>Men Elite - Sprint</option>
                            <option>Men Elite - Keirin</option>
                            <option>Women Elite - Omnium</option>
                        </select>
                            <select class="form-select custom-select">
                            <option selected>Finals</option>
                            <option>Semi-Finals</option>
                            <option>Qualifying</option>
                        </select>
                        </div>
                        <div class="search-box ms-auto">
                            <input type="text" class="form-control custom-input" placeholder="Search Rider...">
                        </div>
                    </div>
                </div>
            </div>

            <div id="view-startlist" class="race-view active-view">
                <div class="table-responsive data-container">
                    <table class="table table-hover align-middle mb-0 custom-table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Rider Name</th>
                                <th>Nation</th>
                                <th>UCI ID</th>
                                <th class="text-end">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><span class="race-number">101</span></td>
                                <td>
                                    <div class="rider-info">
                                        <div class="rider-img"><i class="fas fa-user"></i></div>
                                        <span class="fw-bold text-white">Harrie LAVREYSEN</span>
                                    </div>
                                </td>
                                <td><img src="https://flagcdn.com/w40/nl.png" width="25"> NED</td>
                                <td class="text-muted font-monospace">10009535651</td>
                                <td class="text-end"><span class="status-dot active"></span> Confirmed</td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="race-number">102</span></td>
                                <td>
                                    <div class="rider-info">
                                        <div class="rider-img"><i class="fas fa-user"></i></div>
                                        <span class="fw-bold text-white">Kaiya OTA</span>
                                    </div>
                                </td>
                                <td><img src="https://flagcdn.com/w40/jp.png" width="25"> JPN</td>
                                <td class="text-muted font-monospace">10020973211</td>
                                <td class="text-end"><span class="status-dot active"></span> Confirmed</td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="race-number">105</span></td>
                                <td>
                                    <div class="rider-info">
                                        <div class="rider-img ph-border"><i class="fas fa-user"></i></div>
                                        <span class="fw-bold text-white">Rex Luis KROG</span>
                                    </div>
                                </td>
                                <td><img src="https://flagcdn.com/w40/ph.png" width="25"> PHI</td>
                                <td class="text-muted font-monospace">10052988365</td>
                                <td class="text-end"><span class="status-dot active"></span> Confirmed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="view-results" class="race-view" style="display: none;">
                <div class="table-responsive data-container">
                    <table class="table table-hover align-middle mb-0 custom-table">
                        <thead>
                            <tr>
                                <th class="text-center">Rank</th>
                                <th>Rider Name</th>
                                <th>Nation</th>
                                <th class="text-end">Time</th>
                                <th class="text-end">Speed (km/h)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="winner-row">
                                <td class="text-center">
                                    <div class="rank-badge gold">1</div>
                                </td>
                                <td>
                                    <div class="rider-info">
                                        <div class="rider-img"><i class="fas fa-user"></i></div>
                                        <div>
                                            <span class="fw-bold text-white d-block">Harrie LAVREYSEN</span>
                                            <span class="badge bg-gold-subtle">Gold Medal</span>
                                        </div>
                                    </div>
                                </td>
                                <td><img src="https://flagcdn.com/w40/nl.png" width="25"> NED</td>
                                <td class="text-end text-white font-monospace">9.452</td>
                                <td class="text-end text-muted">76.174</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="rank-badge silver">2</div>
                                </td>
                                <td>
                                    <div class="rider-info">
                                        <div class="rider-img"><i class="fas fa-user"></i></div>
                                        <div>
                                            <span class="fw-bold text-white d-block">Azizulhasni AWANG</span>
                                            <span class="badge bg-silver-subtle">Silver Medal</span>
                                        </div>
                                    </div>
                                </td>
                                <td><img src="https://flagcdn.com/w40/my.png" width="25"> MAS</td>
                                <td class="text-end text-danger font-monospace">+0.045</td>
                                <td class="text-end text-muted">75.832</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="rank-badge bronze">3</div>
                                </td>
                                <td>
                                    <div class="rider-info">
                                        <div class="rider-img"><i class="fas fa-user"></i></div>
                                        <div>
                                            <span class="fw-bold text-white d-block">Kaiya OTA</span>
                                            <span class="badge bg-bronze-subtle">Bronze Medal</span>
                                        </div>
                                    </div>
                                </td>
                                <td><img src="https://flagcdn.com/w40/jp.png" width="25"> JPN</td>
                                <td class="text-end text-danger font-monospace">+0.112</td>
                                <td class="text-end text-muted">75.210</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-end mt-3">
                    <button class="btn btn-primary btn-sm">Download Full Result PDF</button>
                </div>
            </div>

        </div>
    </div>

    <script>
        function switchTab(viewName) {
            // 1. Hide all views
            document.getElementById('view-startlist').style.display = 'none';
            document.getElementById('view-results').style.display = 'none';

            // 2. Remove active class from buttons
            let buttons = document.querySelectorAll('.tab-btn');
            buttons.forEach(btn => btn.classList.remove('active'));

            // 3. Show selected view
            document.getElementById('view-' + viewName).style.display = 'block';

            // 4. Set active button
            // (Simple logic: if viewName is startlist, first button is active, else second)
            if (viewName === 'startlist') {
                buttons[0].classList.add('active');
            } else {
                buttons[1].classList.add('active');
            }
        }
    </script>

    <style>
        /* --- LAYOUT & BG --- */
        
        .section-padding {
            padding: 100px 0;
        }
        
        .bg-glow-blob {
            position: absolute;
            top: -20%;
            right: -10%;
            width: 70vw;
            height: 70vw;
            background: radial-gradient(circle, rgba(0, 180, 216, 0.1) 0%, transparent 60%);
            pointer-events: none;
            z-index: 0;
        }
        /* --- TYPOGRAPHY --- */
        
        .eyebrow-text {
            color: #00B4D8;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-size: 0.85rem;
            padding: 5px 15px;
            border: 1px solid rgba(0, 180, 216, 0.3);
            border-radius: 20px;
            background: rgba(0, 180, 216, 0.05);
            display: inline-block;
            margin-bottom: 15px;
        }
        
        .page-main-title {
            color: #ffffff;
            font-size: 3rem;
            font-weight: 900;
            text-transform: uppercase;
            margin: 0;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }
        
        .blue-separator {
            width: 80px;
            height: 4px;
            background: #00B4D8;
            margin: 20px auto 0;
            border-radius: 2px;
            box-shadow: 0 0 10px #00B4D8;
        }
        /* --- TABS --- */
        
        .tab-buttons-container {
            background: rgba(255, 255, 255, 0.05);
            padding: 5px;
            border-radius: 50px;
            display: inline-flex;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .tab-btn {
            background: transparent;
            border: none;
            color: #aaa;
            padding: 10px 30px;
            border-radius: 40px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            transition: 0.3s;
            cursor: pointer;
        }
        
        .tab-btn.active {
            background: #00B4D8;
            color: #fff;
            box-shadow: 0 0 15px rgba(0, 180, 216, 0.4);
        }
        
        .tab-btn:hover:not(.active) {
            color: #fff;
        }
        /* --- TABLE & CONTAINER --- */
        
        .data-container {
            background: rgba(20, 20, 45, 0.6);
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .custom-table thead {
            background: rgba(0, 180, 216, 0.1);
        }
        
        .custom-table th {
            color: #00B4D8;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 0.85rem;
            padding: 18px;
            border-bottom: 2px solid rgba(0, 180, 216, 0.2);
        }
        
        .custom-table td {
            padding: 15px 18px;
            color: #ccc;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            vertical-align: middle;
        }
        
        .custom-table tr:hover {
            background-color: rgba(255, 255, 255, 0.03);
        }
        /* --- ELEMENTS --- */
        
        .custom-select,
        .custom-input {
            background-color: #05050f;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 8px;
            padding: 8px 15px;
        }
        
        .rider-img {
            width: 35px;
            height: 35px;
            background: #222;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            border: 1px solid #444;
            float: left;
        }
        
        .rider-img.ph-border {
            border-color: #f1c40f;
        }
        
        .rider-img i {
            color: #888;
            font-size: 0.9rem;
        }
        
        .rank-badge {
            width: 30px;
            height: 30px;
            line-height: 30px;
            border-radius: 50%;
            font-weight: bold;
            color: #fff;
            margin: 0 auto;
        }
        
        .rank-badge.gold {
            background: linear-gradient(135deg, #FFD700, #FDB931);
            color: #000;
        }
        
        .rank-badge.silver {
            background: linear-gradient(135deg, #E0E0E0, #BDBDBD);
            color: #000;
        }
        
        .rank-badge.bronze {
            background: linear-gradient(135deg, #CD7F32, #A0522D);
            color: #fff;
        }
        
        .race-number {
            display: inline-block;
            width: 40px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            text-align: center;
            border-radius: 4px;
            border-left: 3px solid #00B4D8;
        }
        
        .status-dot {
            height: 8px;
            width: 8px;
            background-color: #28a745;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
            box-shadow: 0 0 5px #28a745;
        }
        
        .bg-gold-subtle {
            background: rgba(255, 215, 0, 0.15);
            color: #FFD700;
            border: 1px solid #FFD700;
            font-size: 0.65rem;
            margin-top: 2px;
        }
        
        .bg-silver-subtle {
            background: rgba(192, 192, 192, 0.15);
            color: #C0C0C0;
            border: 1px solid #C0C0C0;
            font-size: 0.65rem;
            margin-top: 2px;
        }
        
        .bg-bronze-subtle {
            background: rgba(205, 127, 50, 0.15);
            color: #CD7F32;
            border: 1px solid #CD7F32;
            font-size: 0.65rem;
            margin-top: 2px;
        }
        /* Mobile Fix */
        
        @media (max-width: 768px) {
            .page-main-title {
                font-size: 2rem;
            }
            .filter-bar {
                flex-direction: column;
                align-items: stretch;
            }
            .search-box {
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
 -->

    <!-- END OF MAIN CONTENT -->
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
                            <div class="footer-logo"><img src="assets/images/2023_ACC_BMX_Letterhead_1.png" alt="footer-logo">
                            </div>
                            <p class="footer-text">Experience the Speed: Witness the Pinnacle of Asian Track Cycling Excellence in 2026!
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
