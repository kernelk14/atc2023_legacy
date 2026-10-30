<?php
$view->open([
    'title'  => 'Competition Schedule | Track Asia Cup| Tagaytay 2026',
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



        /* =========================================================
             COMPETITION SCHEDULE MODAL
        ========================================================= */

        #competitionScheduleModal .modal-content {
            background: #111;
            color: #fff;
            border: 1px solid #292929;
            border-radius: 4px;
            overflow: hidden;
        }

        /* Blue accent at top */
        #competitionScheduleModal .modal-content::before {
            content: "";
            display: block;
            height: 4px;
            background: #007bff;
        }

        /* =========================================================
        HEADER
        ========================================================= */

        #competitionScheduleModal .modal-header {
            display: block;
            position: relative;
            text-align: center;
            border-bottom: 1px solid #292929;
            padding: 28px 25px 22px;
        }

        #competitionScheduleModal .modal-title {
            color: #fff;
            font-size: 36px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 6px !important;
        }

        #competitionScheduleModal .modal-header small {
            color: #777;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        /* Close button */
        #competitionScheduleModal .btn-close {
            position: absolute;
            top: 22px;
            right: 22px;
        }


        /* =========================================================
        BODY
        ========================================================= */

        #competitionScheduleModal .modal-body {
            padding: 30px;
        }


        /* =========================================================
        TABLE
        ========================================================= */

        #competitionScheduleModal .table-responsive {
            width: 100%;
        }

        #competitionScheduleModal table {
            width: 100%;
            margin: 0;
            table-layout: fixed;
            border-collapse: collapse;
        }

        /*
            FORCE THE COLUMN STRUCTURE

            DATE      = 19%
            TIME      = 19%
            CATEGORY  = 14%
            EVENT     = 48%
        */

        #competitionScheduleModal th:nth-child(1),
        #competitionScheduleModal td:nth-child(1) {
            width: 19%;
        }

        #competitionScheduleModal th:nth-child(2),
        #competitionScheduleModal td:nth-child(2) {
            width: 19%;
        }

        #competitionScheduleModal th:nth-child(3),
        #competitionScheduleModal td:nth-child(3) {
            width: 14%;
        }

        #competitionScheduleModal th:nth-child(4),
        #competitionScheduleModal td:nth-child(4) {
            width: 36%;
        }


        /* =========================================================
        TABLE HEADER
        ========================================================= */

        #competitionScheduleModal thead th {
            background: #181818;
            color: #007bff;
            border: 0;
            border-bottom: 2px solid #007bff;
            padding: 17px 15px;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            text-align: center;
            vertical-align: middle;
        }


        /* =========================================================
        TABLE BODY
        ========================================================= */

        #competitionScheduleModal tbody td {
            background: #111;
            color: #ddd;
            border: 0;
            border-bottom: 1px solid #242424;
            padding: 18px 15px;
            font-size: 20px;
            line-height: 1.45;
            vertical-align: middle;
        }


        /* DATE / TIME / CATEGORY */
        #competitionScheduleModal tbody td:nth-child(1),
        #competitionScheduleModal tbody td:nth-child(2),
        #competitionScheduleModal tbody td:nth-child(3) {
            text-align: center;
        }


        /* DATE + TIME should stay together */
        #competitionScheduleModal tbody td:nth-child(1),
        #competitionScheduleModal tbody td:nth-child(2) {
            white-space: nowrap;
        }


        /* EVENT */
        #competitionScheduleModal tbody td:nth-child(4) {
            text-align: left;
            padding-left: 22px;
            word-wrap: break-word;
        }


        /* =========================================================
        ROW HOVER
        ========================================================= */

        #competitionScheduleModal tbody tr {
            transition: background-color 0.2s ease;
        }

        #competitionScheduleModal tbody tr:hover td {
            background: #181818;
        }


        /* =========================================================
        RACE PROPER
        ========================================================= */

        #competitionScheduleModal tbody tr.race-proper td {
            background: rgba(0, 123, 255, 0.10);
            color: #fff;

            border-top: 1px solid rgba(0, 123, 255, 0.35);
            border-bottom: 1px solid rgba(0, 123, 255, 0.35);
        }

        #competitionScheduleModal tbody tr.race-proper td:last-child {
            color: #fff;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .5px;
        }


        /* =========================================================
        CATEGORY BADGE
        ========================================================= */

        #competitionScheduleModal .category-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-width: 48px;
            height: 28px;

            padding: 0 10px;

            background: #222;
            border: 1px solid #333;

            color: #aaa;

            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;

            border-radius: 2px;
        }


        /* =========================================================
        INFORMATION NOTE
        ========================================================= */

        #competitionScheduleModal .schedule-note {
            margin-top: 24px;
            padding: 15px 20px;

            background: #181818;
            border-left: 3px solid #007bff;

            text-align: left;
        }

        #competitionScheduleModal .schedule-note small {
            color: #888;
            font-size: 13px;
        }


        /* =========================================================
        FOOTER
        ========================================================= */

        #competitionScheduleModal .modal-footer {
            justify-content: center;

            border-top: 1px solid #292929;

            padding: 18px 25px;
        }


        /* =========================================================
        MEDIUM / TABLET LANDSCAPE - 900px to 1199px
        ========================================================= */

        @media (min-width: 900px) and (max-width: 1199px) {

            #competitionScheduleModal .modal-body {
                padding: 25px;
            }

            #competitionScheduleModal tbody td {
                font-size: 15px;
                padding: 16px 12px;
            }

            #competitionScheduleModal thead th {
                font-size: 13px;
                padding: 15px 12px;
            }

            #competitionScheduleModal tbody td:nth-child(4) {
                padding-left: 18px;
            }
        }


        /* =========================================================
        TABLET - 768px to 899px
        ========================================================= */

        @media (min-width: 768px) and (max-width: 899px) {

            #competitionScheduleModal .modal-body {
                padding: 20px;
            }

            #competitionScheduleModal tbody td {
                font-size: 14px;
                padding: 15px 10px;
            }

            #competitionScheduleModal thead th {
                font-size: 12px;
                padding: 14px 10px;
            }

            #competitionScheduleModal tbody td:nth-child(4) {
                padding-left: 15px;
            }
        }


        /* =========================================================
        MOBILE - 767px and below
        ========================================================= */

        @media (max-width: 767px) {

            #competitionScheduleModal .modal-body {
                padding: 15px;
            }

            #competitionScheduleModal .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            /*
            Fixed table width keeps header + body aligned
            and allows horizontal scrolling on phones.
            */
            #competitionScheduleModal table {
                width: 760px;
                min-width: 760px;
                table-layout: fixed;
            }

            #competitionScheduleModal th:nth-child(1),
            #competitionScheduleModal td:nth-child(1) {
                width: 145px;
            }

            #competitionScheduleModal th:nth-child(2),
            #competitionScheduleModal td:nth-child(2) {
                width: 145px;
            }

            #competitionScheduleModal th:nth-child(3),
            #competitionScheduleModal td:nth-child(3) {
                width: 110px;
            }

            #competitionScheduleModal th:nth-child(4),
            #competitionScheduleModal td:nth-child(4) {
                width: 360px;
            }

            #competitionScheduleModal thead th {
                padding: 14px 10px;
                font-size: 12px;
                text-align: center;
            }

            #competitionScheduleModal tbody td {
                padding: 15px 10px;
                font-size: 13px;
            }

            #competitionScheduleModal tbody td:nth-child(4) {
                padding-left: 15px;
            }

            #competitionScheduleModal .modal-title {
                font-size: 20px;
            }

            #competitionScheduleModal .modal-header small {
                font-size: 10px;
            }
        }
    </style>
',
    'banner' => [
        'title'  => 'Competition Schedule',
        'crumbs' => [
            ['text' => 'Race info', 'href' => '/race-schedule', 'class' => 'home-page-link'],
            ['text' => 'Competition Schedule', 'href' => '/race-schedule', 'class' => 'current-page']
        ],
    ],
]);
?>  

    </header>
    <!--================= Header Section End Here =================-->



    <!-- ================= COMPETITION SCHEDULE MODAL ================= -->
    <div class="modal fade" id="competitionScheduleModal" tabindex="-1" aria-labelledby="competitionScheduleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" style="background: #111; color: #fff; border: 1px solid #333;">

                <!-- Modal Header -->
                <div class="modal-header" style="border-bottom: 1px solid #333; padding: 20px 25px;">
                    <div>
                        <h4 class="modal-title" id="competitionScheduleModalLabel" style="color: #fff; margin-bottom: 5px;">
                            Competition Schedule
                        </h4>
                        <small style="color: #999;">
                            Track Asia Cup 2026 · Tagaytay CT Velodrome
                        </small>
                    </div>

                    <button type="button"
                            class="btn-close btn-close-white"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body" style="padding: 25px;">

                    <div class="table-responsive">
                        <table class="table table-dark table-hover align-middle mb-0">

                            <thead>
                                <tr>
                                    <th style="white-space: nowrap;">DATE</th>
                                    <th style="white-space: nowrap;">TIME</th>
                                    <th style="white-space: nowrap;">CATEGORY</th>
                                    <th>EVENT</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>01-Dec-26</td>
                                    <td>0900 – 1200</td>
                                    <td>ALL</td>
                                    <td>Team Arrival</td>
                                </tr>

                                <tr>
                                    <td>02-Dec-26</td>
                                    <td>0900 – 1200</td>
                                    <td>ALL</td>
                                    <td>Team Arrival / Official Practice</td>
                                </tr>

                                <tr>
                                    <td>03-Dec-26</td>
                                    <td>1400 – 1700</td>
                                    <td>ALL</td>
                                    <td>Team Arrival / Official Practice</td>
                                </tr>

                                <tr>
                                    <td>03-Dec-26</td>
                                    <td>1000 – 1200</td>
                                    <td>ALL</td>
                                    <td>Confirmation of Starters, License &amp; Jersey Check</td>
                                </tr>

                                <tr>
                                    <td>03-Dec-26</td>
                                    <td>1630 – 1700</td>
                                    <td>ALL</td>
                                    <td>Distribution of Body Numbers</td>
                                </tr>

                                <tr>
                                    <td>03-Dec-26</td>
                                    <td>1700 – 1800</td>
                                    <td>ALL</td>
                                    <td>Team Manager's Meeting</td>
                                </tr>

                                <tr>
                                    <td>03-Dec-26</td>
                                    <td>0900 – 1100</td>
                                    <td>ALL</td>
                                    <td>Opening Ceremony</td>
                                </tr>

                                <tr>
                                    <td>04–06 Dec 26</td>
                                    <td>—</td>
                                    <td>ALL</td>
                                    <td>Race Proper</td>
                                </tr>

                                <tr>
                                    <td>07-Dec-26</td>
                                    <td>—</td>
                                    <td>ALL</td>
                                    <td>Team Departures</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>

                    <div style="margin-top: 20px; padding: 15px 20px; background: #181818; border-left: 3px solid #007bff;">
                        <small style="color: #aaa;">
                            <i class="fas fa-info-circle" style="margin-right: 6px;"></i>
                            All events will follow UCI regulations.
                        </small>
                    </div>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer" style="border-top: 1px solid #333; padding: 15px 25px;">
                    <button type="button"
                            class="rts-btn btn-primary"
                            data-bs-dismiss="modal"
                            style="padding: 10px 25px; border-radius: 5px;">
                        CLOSE
                    </button>
                </div>

            </div>
        </div>
    </div>
    <!-- ================= COMPETITION SCHEDULE MODAL ENDS HERE ================= -->
    

    <!--================= MAIN CONTENT=================-->
    <div class="rts-match-result-section rts-match-result-section2 rts-match-schedule-section inner section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="match-single">
                        <div class="match-single-content">
                            <div class="match-scores">
                                <div class="club club1">
                                    <div class="club-logo mr--20">
                                        <span class="club-name"> All events will follow UCI regulations.</span>
                                        <!--<img src="assets/images/clubs/1.png" alt="club-logo">-->
                                    </div>
                                </div>

                            </div>

                            <div class="row justify-content-center" style="margin-top: 50px; margin-bottom: 50px;">
                                <div class="col-12 text-center">
                                    <a href="#competitionScheduleModal" data-bs-toggle="modal" class="rts-btn btn-primary" style="padding: 15px 40px; font-size: 18px; border-radius: 5px; text-transform: uppercase; letter-spacing: 1px;">
                                        <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i> View Competition Schedule
                                    </a>

                                    <!-- <a href="assets/downloads/vicinity-map.pdf" target="_blank" class="rts-btn btn-primary" style="margin-left: 20px; padding: 15px 40px; font-size: 18px; border-radius: 5px; text-transform: uppercase; letter-spacing: 1px; background-color: #28a745; border-color: #28a745;">
                                        <i class="fas fa-map" style="margin-right: 10px;"></i> DOWNLOAD VICINITY MAP
                                    </a> -->

                                    <!-- <p style="color: #999; font-size: 13px; margin-top: 15px;">Official V1.2 (PDF
                                        Format)</p> -->
                                </div>
                            </div>

                            <div class="container" style="padding-bottom: 50px;">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div style="background: #111; padding: 30px; border-left: 4px solid #007bff;">
                                            <h4 style="color: #fff;">SPRINT</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div style="background: #111; padding: 30px; border-left: 4px solid #dc3545;">
                                            <h4 style="color: #fff;">KEIRIN</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div style="background: #111; padding: 30px; border-left: 4px solid #6610f2;">
                                            <h4 style="color: #fff;">PURSUIT</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div style="background: #111; padding: 30px; border-left: 4px solid #20c997;">
                                            <h4 style="color: #fff;">OMNIUM</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div style="background: #111; padding: 30px; border-left: 4px solid #e83e8c;">
                                            <h4 style="color: #fff;">POINT RACE</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div style="background: #111; padding: 30px; border-left: 4px solid #fd7e14;">
                                            <h4 style="color: #fff;">SCRATCH RACE </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div style="background: #111; padding: 30px; border-left: 4px solid #ffc107;">
                                            <h4 style="color: #fff;">1KM TIME TRIAL</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
<?php $view->close(); ?>
