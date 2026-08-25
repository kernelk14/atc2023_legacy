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
                                        <span class="club-name"> COMPETITION WILL RUN ACCORDINGLY TO THE LATEST UCI
                                            RULES.</span>
                                        <!--<img src="assets/images/clubs/1.png" alt="club-logo">-->
                                    </div>
                                </div>

                            </div>

                            <div class="row justify-content-center" style="margin-top: 50px; margin-bottom: 50px;">
                                <div class="col-12 text-center">
                                    <a href="https://drive.google.com/uc?export=download&id=1qrQ1PIu_OTU74-WzdG4Qz5tftuY-AYPA" class="rts-btn btn-primary" style="padding: 15px 40px; font-size: 18px; border-radius: 5px; text-transform: uppercase; letter-spacing: 1px;">
                                        <i class="fas fa-file-pdf" style="margin-right: 10px;"></i> Download Technical Handbook
                                    </a>

                                    <!-- <a href="assets/downloads/vicinity-map.pdf" target="_blank" class="rts-btn btn-primary" style="margin-left: 20px; padding: 15px 40px; font-size: 18px; border-radius: 5px; text-transform: uppercase; letter-spacing: 1px; background-color: #28a745; border-color: #28a745;">
                                        <i class="fas fa-map" style="margin-right: 10px;"></i> DOWNLOAD VICINITY MAP
                                    </a> -->

                                    <!-- <p style="color: #999; font-size: 13px; margin-top: 15px;">Official V1.2 (PDF
                                        Format)</p> -->
                                </div>
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
<?php $view->close(); ?>
