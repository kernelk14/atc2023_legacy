<?php
$view->open([
    'title'  => 'Technical Guide | Track Asia Cup | Tagaytay 2026',
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
        TECHNICAL HANDBOOK PDF VIEWER 
        ========================================================= */

        .technical-handbook-viewer {
            position: relative;
            width: 100%;
            max-width: 1000px;
            margin: 50px auto;
            background: #111;
            color: #fff;
            border: 1px solid #292929;
            border-radius: 4px; /* Keeps the top corners neat */
            overflow: hidden;   /* Ensures content stays inside rounded border */
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
        }

        /* Blue accent bar at top */
        .technical-handbook-viewer::before {
            content: "";
            display: block;
            height: 4px;
            background: #007bff;
        }

        /* Viewer Header */
        .handbook-viewer-header {
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 18px 25px;
            background: #111;
            border-bottom: 1px solid #292929;
        }

        .handbook-viewer-header > div {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            min-width: 0;
        }

        .handbook-viewer-header i {
            color: #007bff !important;
            font-size: 18px;
            flex-shrink: 0;
        }

        .handbook-viewer-header span {
            color: #fff !important;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 1px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .handbook-download {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 18px;
            border: none;
            border-radius: 4px;
            background: #007bff;
            color: #ffffff !important;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            text-decoration: none !important;
            white-space: nowrap;
            flex-shrink: 0;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        .handbook-download i {
            color: #ffffff !important;
            font-size: 12px;
            transition: color 0.2s ease;
        }

        .handbook-download:hover {
            background: #0056b3;
            color: #ffffff !important;
        }

        .handbook-download:hover i {
            color: #ffffff !important;
        }

        /* PDF Frame Container */
        .handbook-pdf-container {
            width: 100%;
            height: 750px;
            background: #181818;
        }

        .handbook-pdf-container iframe {
            display: block;
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Mobile Responsive */
        @media (max-width: 767px) {
            .technical-handbook-viewer {
                margin: 30px auto;
            }

            .handbook-viewer-header {
                padding: 15px;
                flex-direction: column;
                align-items: stretch;
                gap: 12px;
            }

            .handbook-viewer-header span {
                font-size: 14px;
            }

            .handbook-download {
                width: 100%;
                padding: 10px;
                font-size: 11px;
            }

            .handbook-pdf-container {
                height: 550px;
            }
        }
    </style>
',
    'banner' => [
        'title'  => 'Technical Guide',
        'crumbs' => [
            ['text' => 'Competition Guide', 'href' => '/about-competition', 'class' => 'home-page-link'],
            ['text' => 'Technical Guide', 'href' => '/team', 'class' => 'current-page']
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
                                        <span class="club-name"> ALL COMPETITIONS WILL RUN ON UCI REGULATIONS
                                            RULES.</span>
                                        <!--<img src="assets/images/clubs/1.png" alt="club-logo">-->
                                    </div>
                                </div>

                            </div>

                            <!-- =========================================================
                                TECHNICAL HANDBOOK PDF VIEWER
                                ========================================================= -->
                            
                                <div class="technical-handbook-viewer">
                                <div class="handbook-viewer-header">
                                    <div>
                                        <i class="fas fa-file-pdf"></i>
                                        <span>TECHNICAL HANDBOOK</span>
                                    </div>
                                    <a
                                        href="https://drive.google.com/uc?export=download&id=19avInxgkc9mY7Lf6jh6T3z1uaZhdhe7x"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="handbook-download"
                                    >
                                        <i class="fas fa-download"></i>
                                        Download PDF
                                    </a>
                                </div>
                                <div class="handbook-pdf-container">
                                    <iframe
                                        src="https://drive.google.com/file/d/19avInxgkc9mY7Lf6jh6T3z1uaZhdhe7x/preview"
                                        width="100%"
                                        height="100%"
                                        title="Track Asia Cup 2026 Technical Handbook"
                                        allow="autoplay"
                                    >
                                        <p>
                                            Your browser does not support embedded PDFs.
                                            <a href="https://drive.google.com/uc?export=download&id=19avInxgkc9mY7Lf6jh6T3z1uaZhdhe7x">
                                                Download the Technical Handbook here.
                                            </a>
                                        </p>
                                    </iframe>
                                </div>
                            </div>

                            <!--<div class="row justify-content-center" style="margin-top: 50px; margin-bottom: 50px;">
                                <div class="col-12 text-center">
                                    <a href="https://drive.google.com/uc?export=download&id=19avInxgkc9mY7Lf6jh6T3z1uaZhdhe7x" class="rts-btn btn-primary" style="padding: 15px 40px; font-size: 18px; border-radius: 5px; text-transform: uppercase; letter-spacing: 1px;">
                                        <i class="fas fa-file-pdf" style="margin-right: 10px;"></i> View Technical Handbook
                                    </a>
                                </div>
                            </div>-->

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
                            <h3 class="footer-widget-title"><span class="decorator"></span> ESSENTIAL LINKS</h3>
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
<?php $view->close(); ?>
