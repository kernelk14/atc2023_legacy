<?php
$view->open([
    'title'  => 'Start List & Results | Track Asia Cup | Tagaytay 2026',
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
        /* --- CSS THEME FIX (Dark & Blue) --- */
        
        .results-section-dark {
            background-color: #050505;
            padding: 100px 0;
            color: #ffffff;
        }
        
        .venue-main-title {
            color: #ffffff;
            font-size: 3rem;
            /* Adjusted size */
            font-weight: 900;
            text-transform: uppercase;
            margin: 0;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }
        
        .blue-separator {
            width: 80px;
            height: 4px;
            background: #00B4D8;
            margin: 20px auto;
            box-shadow: 0 0 10px #00B4D8;
        }
        
        .venue-info-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            backdrop-filter: blur(10px);
        }
        
        .day-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 20px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .day-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
            margin: 0;
        }
        
        .day-subtitle {
            color: #00B4D8;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            margin-top: 5px;
        }
        /* Rows */
        
        .result-row {
            background: rgba(0, 0, 0, 0.3);
            padding: 20px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }
        
        .icon-box-styled {
            width: 50px;
            height: 50px;
            background: rgba(0, 180, 216, 0.15);
            border: 1px solid rgba(0, 180, 216, 0.3);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #00B4D8;
            margin-right: 20px;
        }
        
        .item-label {
            display: block;
            color: #fff;
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .item-sub {
            display: block;
            color: #888;
            font-size: 0.85rem;
            margin-top: 3px;
        }
        /* Buttons */
        
        .btn-venue-download {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 25px;
            background: transparent;
            color: #00B4D8;
            border: 1px solid #00B4D8;
            border-radius: 30px;
            font-weight: 700;
            font-size: 0.8rem;
            text-transform: uppercase;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .btn-venue-download:hover {
            background: #00B4D8;
            color: #000;
            box-shadow: 0 0 20px rgba(0, 180, 216, 0.6);
        }
        
        .btn-pending {
            padding: 10px 25px;
            background: rgba(255, 255, 255, 0.05);
            color: #666;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            cursor: not-allowed;
        }
        /* Badges */
        
        .status-badge {
            font-size: 0.75rem;
            font-weight: 800;
            padding: 5px 12px;
            border-radius: 20px;
            letter-spacing: 1px;
        }
        
        .status-completed {
            background: rgba(0, 180, 216, 0.2);
            color: #00B4D8;
            border: 1px solid rgba(0, 180, 216, 0.3);
        }
        
        .status-upcoming {
            background: rgba(255, 255, 255, 0.1);
            color: #aaa;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
',
    'banner' => [
        'title'  => 'START LIST & RESULT',
        'crumbs' => [
            ['text' => 'RACE INFO', 'href' => '/race-schedule', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li'],
            ['text' => 'START LIST & RESULT', 'href' => '/start-list', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li']
        ],
    ],
]);
?>
    </header>
    <!--================= Header Section End Here =================-->

    <!--=================  MAIN CONTENT =================-->

    <div class="results-section-dark">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <span style="color: #00B4D8; font-weight: 800; letter-spacing: 2px;">RACE SECRETARIAT</span>
                    <h2 class="venue-main-title mt-2">START LISTS AND RESULTS</h2>
                    <div class="blue-separator"></div>
                    <p class="venue-subtitle" style="color: #b0b0b0;">
                        Official documents for the Asian Track Championships 2026.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <div class="venue-info-card">

                        <div class="day-header">
                            <div>
                                <h3 class="day-title">DAY 1 — 03 DECEMBER 2026</h3>
                                <span class="day-subtitle">Confirmation of Starters</span>
                            </div>

                            <!-- para naman sa upcoming palang ang nakalagay SA DAY 1 -->
                            <span class="status-badge status-upcoming">TBA</span>
                            <!-- end ng UPCOMING -->

                            <!-- PAG TAPOS NA ANG EVENT SA DAY 2 -->
                            <!-- <span class="status-badge status-completed">COMPLETED</span> -->
                            <!-- END NG EVENT SA DAY 1 -->

                        </div>

                        <div class="result-row">
                            <div class="d-flex align-items-center">
                                <div class="icon-box-styled">
                                    <i class="fas fa-list-ul"></i>
                                </div>
                                <div>
                                    <span class="item-label">Confirmed Starters</span>
                                    <span class="item-sub">Not Ready for Download</span>
                                </div>
                            </div>
                            <a href="assets/downloads/day1-startlist.pdf" target="_blank" class="btn-venue-download">
                            DOWNLOAD PDF <i class="fas fa-download ms-2"></i>
                        </a>
                        </div>

                       <!-- <div class="result-row">
                            <div class="d-flex align-items-center">
                                <div class="icon-box-styled">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div>
                                    <span class="item-label">Race Results</span>
                                    <span class="item-sub">Will be posted after events</span>
                                </div>
                            </div>

                            pag pending pa  muna ANG RESULT
                            <button class="btn-pending" disabled>
                            PENDING <i class="fas fa-clock ms-2"></i>
                            </button>
                            END NG PENDING 

                             pag pwede na i enable ang download pdf ng day 1 result 

                              <a href="assets/downloads/day1-results.pdf" target="_blank" class="btn-venue-download">
                                        DOWNLOAD PDF <i class="fas fa-download ms-2"></i>
                                 </a> 
                        </div>-->

                    </div>
                </div>

            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="venue-info-card">

                    <div class="day-header">
                            <div>
                                <h3 class="day-title">DAY 2 — 04 DECEMBER 2026</h3>
                                <span class="day-subtitle">Race Proper</span>
                            </div>

                            <!-- para naman sa upcoming palang ang nakalagay SA DAY 1 -->
                            <span class="status-badge status-upcoming">TBA</span>
                            <!-- end ng UPCOMING -->

                            <!-- PAG TAPOS NA ANG EVENT SA DAY 2 -->
                            <!-- <span class="status-badge status-completed">COMPLETED</span> -->
                            <!-- END NG EVENT SA DAY 1 -->

                        </div>

                        <div class="result-row">
                            <div class="d-flex align-items-center">
                                <div class="icon-box-styled">
                                    <i class="fas fa-list-ul"></i>
                                </div>
                                <div>
                                    <span class="item-label">Start List</span>
                                    <span class="item-sub">Not Ready for Download</span>
                                </div>
                            </div>
                            <a href="assets/downloads/day1-startlist.pdf" target="_blank" class="btn-venue-download">
                            DOWNLOAD PDF <i class="fas fa-download ms-2"></i>
                        </a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="venue-info-card">

                    <div class="day-header">
                            <div>
                                <h3 class="day-title">DAY 3 — 05 DECEMBER 2026</h3>
                                <span class="day-subtitle">Race Proper</span>
                            </div>

                            <!-- para naman sa upcoming palang ang nakalagay SA DAY 1 -->
                            <span class="status-badge status-upcoming">TBA</span>
                            <!-- end ng UPCOMING -->

                            <!-- PAG TAPOS NA ANG EVENT SA DAY 2 -->
                            <!-- <span class="status-badge status-completed">COMPLETED</span> -->
                            <!-- END NG EVENT SA DAY 1 -->

                        </div>

                        <div class="result-row">
                            <div class="d-flex align-items-center">
                                <div class="icon-box-styled">
                                    <i class="fas fa-list-ul"></i>
                                </div>
                                <div>
                                    <span class="item-label">Start List</span>
                                    <span class="item-sub">Not Ready for Download</span>
                                </div>
                            </div>
                            <a href="assets/downloads/day1-startlist.pdf" target="_blank" class="btn-venue-download">
                            DOWNLOAD PDF <i class="fas fa-download ms-2"></i>
                        </a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="venue-info-card">

                    <div class="day-header">
                            <div>
                                <h3 class="day-title">DAY 4 — 06 DECEMBER 2026</h3>
                                <span class="day-subtitle">Race Proper</span>
                            </div>

                            <!-- para naman sa upcoming palang ang nakalagay SA DAY 1 -->
                            <span class="status-badge status-upcoming">TBA</span>
                            <!-- end ng UPCOMING -->

                            <!-- PAG TAPOS NA ANG EVENT SA DAY 2 -->
                            <!-- <span class="status-badge status-completed">COMPLETED</span> -->
                            <!-- END NG EVENT SA DAY 1 -->

                        </div>

                        <div class="result-row">
                            <div class="d-flex align-items-center">
                                <div class="icon-box-styled">
                                    <i class="fas fa-list-ul"></i>
                                </div>
                                <div>
                                    <span class="item-label">Start List</span>
                                    <span class="item-sub">Not Ready for Download</span>
                                </div>
                            </div>
                            <a href="assets/downloads/day1-startlist.pdf" target="_blank" class="btn-venue-download">
                            DOWNLOAD PDF <i class="fas fa-download ms-2"></i>
                        </a>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

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
