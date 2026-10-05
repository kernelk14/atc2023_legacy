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



    <style>
        /* --- SECTION CONTAINER --- */
        
        .premium-history-section {
            position: relative;
            background: radial-gradient(circle at top right, #141414 0%, #050505 80%);
            padding: 80px 5% 100px 5%;
            /* Tinaasan padding-bottom para sa watermark */
            color: #FFFFFF;
            font-family: "Manrope", sans-serif;
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
            /*font-family: "Cinzel", serif;*/
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
            font-family: "Cinzel", serif;
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
            /*font-family: "Cinzel", serif;*/
            font-size: 13px;
            letter-spacing: 4px;
            color: #888;
            margin-bottom: 20px;
            display: block;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .history-headline {
            /*font-family: "Cinzel", serif;*/
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
            font-family: "Playfair Display", serif;
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
            content: "◆";
            color: #C5A059;
            margin-right: 15px;
            font-size: 0.8rem;
        }

        .history-list li a {
            color: #D4AF37;
            text-decoration: none;
            font-weight: 700;
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding-bottom: 3px;

            background: linear-gradient(
                90deg,
                #B8860B,
                #D4AF37,
                #F5D76E,
                #D4AF37,
                #B8860B
            );
            background-size: 200% auto;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

            transition:
                transform 0.3s ease,
                background-position 0.5s ease;
        }

        .history-list li a::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;

            background: linear-gradient(
                90deg,
                #B8860B,
                #F5D76E,
                #D4AF37
            );

            transition: width 0.3s ease;
        }

        .history-list li a::after {
            content: "→";
            font-size: 18px;
            opacity: 0;
            transform: translateX(-6px);

            transition:
                opacity 0.3s ease,
                transform 0.3s ease;
        }

        .history-list li a:hover {
            transform: translateX(5px);
            background-position: 100% center;
        }

        .history-list li a:hover::before {
            width: 100%;
        }

        .history-list li a:hover::after {
            opacity: 1;
            transform: translateX(0);
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
            font-family: "Cinzel", serif;
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

       /* =========================================
        TAGAYTAY VIDEO PREVIEW
        ========================================= */

        /* Keep the original video frame dimensions */
        .video-frame {
            position: relative;
            overflow: hidden;
        }

        /* Keep the existing responsive video sizing */
        .video-responsive-wrapper {
            position: relative;
        }

        /* Preview sits directly over the existing video area */
        .video-preview {
            position: absolute;
            inset: 0;
            z-index: 5;
            overflow: hidden;
            cursor: pointer;
            background: #111525;
        }

        /* Preview image */
        .video-preview img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1);
            transition: transform 0.4s ease;
        }

        /* Dark overlay */
        .video-preview-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.35);
            transition: background 0.3s ease;
        }

        /* Triangle-only gold play button */
        .video-play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            height: auto;
            color: #C5A059;
            background: linear-gradient(
                135deg,
                #A77A2F 0%,
                #C5A059 35%,
                #F4E2BB 55%,
                #C5A059 75%,
                #A77A2F 100%
            );
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            border: none;
            border-radius: 0;
            font-size: 58px;
            line-height: 1;
            transform: translate(-50%, -50%);
            transition:
                transform 0.3s ease,
                filter 0.3s ease;
        }

        /* Slight spacing so the triangle looks centered */
        .video-play-button i {
            margin-left: 5px;
        }

        /* Image hover */
        .video-preview:hover img {
            transform: scale(1.05);
        }

        /* Darker overlay on hover */
        .video-preview:hover .video-preview-overlay {
            background: rgba(0, 0, 0, 0.5);
        }

        /* Gold triangle hover */
        .video-preview:hover .video-play-button {
            color: #F4E2BB;
            filter: drop-shadow(0 0 12px rgba(197, 160, 89, 0.8));
            transform: translate(-50%, -50%) scale(1.12);
        }

        /* Keyboard focus */
        .video-preview:focus {
            outline: 2px solid #C5A059;
            outline-offset: -2px;
        }

        /* Mobile */
        @media (max-width: 576px) {
            .video-play-button {
                font-size: 44px;
            }
        }
    </style>

    <style>
        /* --- PH THEME COLORS --- */
        
            :root {
            --ph-blue: #0038A8;
            --ph-red: #CE1126;
            --ph-yellow: #FCD116;
            --ph-white: #FFFFFF;
        }
        /* --- BACKGROUND ANIMATIONS --- */
        
        .bg-grid-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            opacity: 0.2;
            pointer-events: none;
            z-index: 1;
        }

        /* --- TYPOGRAPHY --- */
        
        .title-badge {
            font-weight: 800;
            letter-spacing: 3px;
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 15px;
            display: inline-block;
            background: rgba(255, 255, 255, 0.05);
            padding: 8px 20px;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
        }
        
        .main-title {
            color: #fff;
            font-size: 3.5rem;
            text-transform: uppercase;
            font-weight: 800;
            text-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            letter-spacing: -1px;
            margin-bottom: 15px;
        }
        
        .sub-text {
            color: #aaa;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .separator-line {
            width: 180px;
            height: 3px;
            margin: 30px auto 0;
            border-radius: 2px;
            /* Blue to Red Gradient na may Fade sa dulo */
            background: linear-gradient(90deg, transparent, #0038A8, #CE1126, transparent);
            opacity: 0.7;
        }
        /* --- TREE STRUCTURE --- */
        
        .org-tree {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 80px;
        }
        
        .org-row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            position: relative;
            width: 100%;
            perspective: 1000px;
        }
        /* Connecting Lines - White/Gray for neutrality */
        
        .org-row:not(:last-child)::after {
            content: "";
            position: absolute;
            bottom: -80px;
            left: 50%;
            width: 2px;
            height: 80px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.3));
            transform: translateX(-50%);
            z-index: 0;
            
        }
        
        .split-branch {
            position: relative;
            margin-top: 20px;
        }
        
        .split-branch::before {
            content: "";
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            width: 320px;
            height: 40px;
            border-top: 2px solid rgba(255, 255, 255, 0.2);
            border-left: 2px solid rgba(255, 255, 255, 0.2);
            border-right: 2px solid rgba(255, 255, 255, 0.2);
            z-index: 0;
        }
        /* --- CARD DESIGN --- */
        
        .org-card {
            position: relative;
            width: 300px;
            padding: 40px 25px;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }
        /* Shine Effect */
        
        .org-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.05), transparent);
            transform: skewX(-25deg);
            transition: 0.5s;
            pointer-events: none;
        }
        
        .org-card:hover::before {
            left: 150%;
        }
        
        .org-card:hover {
            transform: translateY(-15px);
            background: rgba(40, 40, 55, 0.6);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6);
        }
        /* Image Container */
        
        .org-img-wrap {
            width: 130px;
            height: 130px;
            margin: 0 auto 25px;
            position: relative;
            border-radius: 50%;
            padding: 5px;
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.1), transparent);
            overflow: hidden;
        }
        /* !!! THE FIX IS HERE (center top) !!! */
        
        .org-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            /* NAKA-CENTER TOP NA */
            border-radius: 50%;
            border: 3px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.5s ease;
        }
        
        .org-card:hover .org-img-wrap img {
            transform: scale(1.1);
        }
        /* Text */
        
        .name {
            font-size: 20px;
            font-weight: 800;
            color: #fff;
            text-transform: uppercase;
            margin-bottom: 8px;
            line-height: 1.2;
        }
        
        .role {
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            display: block;
        }
        /* --- RANK THEMES (Flag Colors) --- */
        /* PRESIDENT = SUN (Yellow/Gold) */
        
        .boss-card {
            border-color: rgba(252, 209, 22, 0.4);
            width: 360px;
            background: linear-gradient(180deg, rgba(30, 30, 40, 0.8), rgba(20, 20, 10, 0.9));
        }
        
        .boss-card .org-img-wrap {
            border: 2px solid var(--ph-yellow);
            box-shadow: 0 0 20px rgba(252, 209, 22, 0.2);
        }
        
        .boss-card .name {
            font-size: 26px;
            color: var(--ph-yellow);
        }
        
        .boss-card .role {
            color: #fff;
            opacity: 0.9;
        }
        
        .boss-card:hover {
            border-color: var(--ph-yellow);
            box-shadow: 0 30px 80px rgba(252, 209, 22, 0.15);
        }
        /* VPs/Congress/Mayors = BLUE (Peace/Justice) */
        
        .vip-card .org-img-wrap {
            border-color: rgba(0, 56, 168, 0.3);
        }
        
        .vip-card .role {
            color: #4dabf7;
        }
        
        .vip-card:hover {
            border-color: var(--ph-blue);
            box-shadow: 0 20px 50px rgba(0, 56, 168, 0.2);
        }
        
        .vip-card:hover .org-img-wrap {
            border-color: var(--ph-blue);
        }
        /* DIRECTORS = RED (Valor/Action) */
        
        .dir-card .org-img-wrap {
            border-color: rgba(206, 17, 38, 0.3);
        }
        
        .dir-card .role {
            color: #ff6b6b;
        }
        
        .dir-card:hover {
            border-color: var(--ph-red);
            box-shadow: 0 20px 50px rgba(206, 17, 38, 0.2);
        }
        
        .dir-card:hover .org-img-wrap {
            border-color: var(--ph-red);
        }
        /* TD Special - White/Neutral */
        
        .td-card {
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .td-card .role {
            color: var(--ph-yellow);
            font-weight: bold;
        }
        /* Mobile Fix */
        /* --- MOBILE FIX (UPDATED) --- */
        
        @media (max-width: 768px) {
            .main-title {
                font-size: 2rem;
                line-height: 1.1;
            }
            .org-tree {
                gap: 40px;
            }
            .org-row:not(:last-child)::after,
            .split-branch::before {
                display: none;
            }
            /* Force fit sa screen ang mga cards */
            .org-card,
            .boss-card,
            .td-card {
                width: 100% !important;
                max-width: 320px !important;
                margin: 0 auto;
            }
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
                    <li>
                        <a href="velodrome.php">
                            About Tagaytay CT Velodrome
                        </a>
                    </li>
                </ul>
            </div>

            <div class="video-column">
                 <div class="video-frame">
                    <div class="video-responsive-wrapper">
                        <iframe id="tagaytay-video" src="" title="Tagaytay AVP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="video-preview" id="tagaytay-video-preview" onclick="showTagaytayVideo()" role="button" tabindex="0">
                            <img src="assets/images/ct-front.jpg" alt="Tagaytay City Velodrome">
                            <div class="video-preview-overlay"></div>
                            <div class="video-play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
               <!--<div class="video-frame">
                    <div class="video-responsive-wrapper">
                        <iframe src="https://www.youtube.com/embed/gh7PXWsI9B8" title="Tagaytay AVP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>-->

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

    <div class="rts-org-section" style="position: relative; background: #0b0b15; overflow: hidden; padding-top: 120px; padding-bottom: 150px; min-height: 100vh;">

       

        <div class="bg-grid-overlay"></div>

        <div class="container" style="position: relative; z-index: 5;">

            <div class="row justify-content-center mb--80">
                <div class="col-lg-8 text-center" data-aos="fade-down" data-aos-duration="1000">
                    <!--<div class="title-badge">
                        <span style="color:#0038A8">PHIL</span><span style="color:#FCD116">CYC</span><span style="color:#CE1126">LING</span>
                    </div>-->
                    <h2 class="main-title">TAGAYTAY CITY OFFICIALS</h2>
                    <div class="separator-line"></div>
                </div>
            </div>


            <div class="org-tree">

                <div class="org-row">
                    <div class="org-card boss-card" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/aizack-tolentino.jpg" alt="HON. AIZACK BRENT D. TOLENTINO" loading="lazy">
                        </div>
                        <h3 class="name">HON. AIZACK BRENT D. TOLENTINO</h3>
                        <span class="role"><i style="color:#FCD116; margin-right:5px;"></i>Tagaytay City Mayor</span>
                    </div>
                </div>
                
                <div class="org-row">
                    <div class="org-card boss-card" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/agnes-tolentino.jpg" alt="HON. AGNES D. TOLENTINO, DMD" loading="lazy">
                        </div>
                        <h3 class="name">HON. AGNES D. TOLENTINO, DMD</h3>
                        <span class="role"><i style="color:#FCD116; margin-right:5px;"></i>Tagaytay City Vice Mayor</span>
                    </div>
                </div>

                <div class="org-row">
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/micko-tolentino.jpg" alt="HON. MICHAEL FRANCIS C. TOLENTINO" loading="lazy">
                        </div>
                        <h4 class="name">HON. MICHAEL FRANCIS "MICKO" C. TOLENTINO</h4>
                        <span class="role">Tagaytay City Councilor</span>
                    </div>
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/jojit-desingano.jpg" alt="HON. JOJIT S. DESINGAÑO" loading="lazy">
                        </div>
                        <h4 class="name">HON. JOJIT S. DESINGAÑO</h4>
                        <span class="role">Tagaytay City Councilor</span>
                    </div>
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/bianca-pello.jpg" alt="HON. BIANCA CAMILLE U. PELLO" loading="lazy">
                        </div>
                        <h4 class="name">HON. BIANCA CAMILLE U. PELLO</h4>
                        <span class="role">Tagaytay City Councilor</span>
                    </div>
                </div>

                <div class="org-row split-branch" style="justify-content: center;">
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/rey-espiritu.jpg" alt="HON. REYNOSO M. ESPIRITU" loading="lazy">
                        </div>
                        <h4 class="name">HON. REYNOSO M. ESPIRITU</h4>
                        <span class="role">Tagaytay City Councilor</span>
                    </div>
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/fatima-guadana.jpg" alt="HON. FATIMA G. GUADAÑA" loading="lazy">
                        </div>
                        <h4 class="name">HON. FATIMA G. GUADAÑA</h4>
                        <span class="role">Tagaytay City Councilor</span>
                    </div>
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/doroteo-marasigan.jpg" alt="HON. DOROTEO N. MARASIGAN" loading="lazy">
                        </div>
                        <h4 class="name">HON. DOROTEO N. MARASIGAN</h4>
                        <span class="role">Tagaytay City Councilor</span>
                    </div>
                </div>

                <div class="org-row split-branch" style="justify-content: center;">
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/leo-angelo.jpg" alt="HON. LEO ANGELO T. DE CASTRO" loading="lazy">
                        </div>
                        <h4 class="name">HON. LEO ANGELO T. DE CASTRO</h4>
                        <span class="role">Tagaytay City Councilor</span>
                    </div>
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/jennifer-manguinao.jpg" alt="HON. JENNIFER R. MANGUINAO" loading="lazy">
                        </div>
                        <h4 class="name">HON. JENNIFER R. MANGUINAO</h4>
                        <span class="role">Tagaytay City Councilor</span>
                    </div>
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/annabelle-solis.jpg" alt="HON. ANNABELLE M. SOLIS" loading="lazy">
                        </div>
                        <h4 class="name">HON. ANNABELLE M. SOLIS</h4>
                        <span class="role">Tagaytay City Councilor</span>
                    </div>
                </div>

                <div class="org-row split-branch" style="justify-content: center;">
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/gener-vergara.jpg" alt="HON. GENER M. VERGARA" loading="lazy">
                        </div>
                        <h4 class="name">HON. GENER M. VERGARA</h4>
                        <span class="role">Tagaytay City Councilor</span>
                    </div>
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/juanito-ramos.jpg" alt="HON. JUANITO N. RAMOS" loading="lazy">
                        </div>
                        <h4 class="name">HON. JUANITO N. RAMOS</h4>
                        <span class="role">ABC President</span>
                    </div>
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization-tagaytay/mark-mercado.jpg" alt="HON. MARK ERWIN D. MERCADO" loading="lazy">
                        </div>
                        <h4 class="name">HON. MARK ERWIN D. MERCADO</h4>
                        <span class="role">SK Federation President</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <script>
        function showTagaytayVideo() {
            const preview = document.getElementById("tagaytay-video-preview");
            const video = document.getElementById("tagaytay-video");

            video.src = "https://www.youtube.com/embed/gh7PXWsI9B8?autoplay=1";

            preview.style.display = "none";
        }
    </script>

']); ?>
