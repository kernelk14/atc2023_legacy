<?php
$view->open([
    'title'  => 'Competition Schedule | Track Asia Cup | Tagaytay 2026',
    'header' => 'default',
    'extraHead' => '    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <style>
        :root {
	--hue: 223;
	--bg: hsl(var(--hue),90%,90%);
	--fg: hsl(var(--hue),90%,10%);
	--primary: hsl(var(--hue),90%,50%);
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
		--bg: hsl(var(--hue),90%,10%);
		--fg: hsl(var(--hue),90%,90%);
	}
}

/* Animations */
@keyframes bikeBody {
	from { stroke-dashoffset: 79; }
	33%,
	67% { stroke-dashoffset: 0; }
	to { stroke-dashoffset: -79; }
}
@keyframes bikeFront {
	from { stroke-dashoffset: 19; }
	33%,
	67% { stroke-dashoffset: 0; }
	to { stroke-dashoffset: -19; }
}
@keyframes bikeHandlebars {
	from { stroke-dashoffset: 10; }
	33%,
	67% { stroke-dashoffset: 0; }
	to { stroke-dashoffset: -10; }
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
	from { transform: rotate(0.1875turn); }
	to { transform: rotate(3.1875turn); }
}
@keyframes bikeSeat {
	from { stroke-dashoffset: 5; }
	33%,
	67% { stroke-dashoffset: 0; }
	to { stroke-dashoffset: -5; }
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
	from { transform: rotate(0); }
	to { transform: rotate(3turn); }
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
        'title'  => 'COMPETITION SCHEDULE',
        'crumbs' => [
            ['text' => 'Home', 'href' => '/', 'class' => 'home-page-link'],
            ['text' => 'SCHEDULE', 'href' => '/match-schedule', 'class' => 'current-page'],
        ],
    ],
]);
?>
        <!--================= Competition Result Section Start Here =================-->
        <div class="rts-match-result-section rts-match-result-section2 rts-match-schedule-section inner section-gap">
            <div class="container">
                <div class="row justify-content-center">
                    <!--<div class="col-12">
                        <div class="match-single">
                            <!--<div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">REAL SOCCER</span>
                                            <img src="assets/images/clubs/1.png" alt="club-logo">
                                        </div>
                                    </div>
                                    <div class="colon">VS</div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <img src="assets/images/clubs/6.png" alt="club-logo">
                                            <span class="club-name">HEMILTON FC</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">JULY 21, 2023</span>
                                    <span class="stadium-name">MC ARMY STADIUM</span>
                                </div>
                            </div>
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name"> QUALIFICATION SCHEDULE</span>
                                            <!--<img src="assets/images/clubs/1.png" alt="club-logo">
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
                            </div>
                        </div>
                    </div>-->
    
                    <div class="col-12">
                        <div class="match-single">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name"> QUALIFICATION SCHEDULE <br> JULY 14, 2023 <br> (Friday)</span>
                                            <!--<img src="assets/images/clubs/1.png" alt="club-logo">-->
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
    
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">0900H - 1100H</span>
                                            <!--<img src="assets/images/clubs/3.png" alt="club-logo">-->
                                        </div>
                                    </div>
                                    <div class="colon">  </div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <!--<img src="assets/images/clubs/4.png" alt="club-logo">-->
                                            <span class="club-name">Park Women Open</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">Tagaytay BMX and Skate Park </span>
                                    <!--<span class="stadium-name">ASIAN BMX CHAMP.</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">1000H - 1100H</span>
                                            <!--<img src="assets/images/clubs/4.png" alt="club-logo">-->
                                        </div>
                                    </div>
                                    <div class="colon"> </div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <!--<img src="assets/images/clubs/5.png" alt="club-logo">-->
                                            <span class="club-name">Park Men Open </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">Tagaytay BMX and Skate Park</span>
                                    <!--<span class="stadium-name">ASIAN BMX CHAMP.</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">1300H - 1500H </span>
                                            <!--<img src="assets/images/clubs/4.png" alt="club-logo">-->
                                        </div>
                                    </div>
                                    <div class="colon"> </div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <!--<img src="assets/images/clubs/5.png" alt="club-logo">-->
                                            <span class="club-name"> Flatland Women Open </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">Tagaytay Combat Gym</span>
                                    <!--<span class="stadium-name">ASIAN BMX CHAMP.</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">1500H - 1700H </span>
                                            <!--<img src="assets/images/clubs/4.png" alt="club-logo">-->
                                        </div>
                                    </div>
                                    <div class="colon"> </div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <!--<img src="assets/images/clubs/5.png" alt="club-logo">-->
                                            <span class="club-name"> Flatland Men Open </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">Tagaytay Combat Gymn</span>
                                    <!--<span class="stadium-name">ASIAN BMX CHAMP.</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SATURDAY JULY 15, 2023-->
                    <div class="col-12">
                        <div class="match-single">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name"> FINALS COMPETITION <br> JULY 15, 2023 <br> (Saturday)</span>
                                            <!--<img src="assets/images/clubs/1.png" alt="club-logo">-->
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
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">0900H - 1100H</span>
                                            <!--<img src="assets/images/clubs/3.png" alt="club-logo">-->
                                        </div>
                                    </div>
                                    <div class="colon">  </div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <!--<img src="assets/images/clubs/4.png" alt="club-logo">-->
                                            <span class="club-name">Park Women Open</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">Tagaytay BMX and Skate Park</span>
                                    <!--<span class="stadium-name">ASIAN BMX CHAMP.</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">1000H - 1100H</span>
                                            <!--<img src="assets/images/clubs/4.png" alt="club-logo">-->
                                        </div>
                                    </div>
                                    <div class="colon"> </div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <!--<img src="assets/images/clubs/5.png" alt="club-logo">-->
                                            <span class="club-name">Park Men Open </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">Tagaytay BMX and Skate Park</span>
                                    <!--<span class="stadium-name">ASIAN BMX CHAMP.</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">1300H - 1500H </span>
                                            <!--<img src="assets/images/clubs/4.png" alt="club-logo">-->
                                        </div>
                                    </div>
                                    <div class="colon"> </div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <!--<img src="assets/images/clubs/5.png" alt="club-logo">-->
                                            <span class="club-name"> Flatland Women Open </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">Tagaytay Combat Gym</span>
                                    <!--<span class="stadium-name">ASIAN BMX CHAMP.</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">1500H - 1700H </span>
                                            <!--<img src="assets/images/clubs/4.png" alt="club-logo">-->
                                        </div>
                                    </div>
                                    <div class="colon"> </div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <!--<img src="assets/images/clubs/5.png" alt="club-logo">-->
                                            <span class="club-name"> Flatland Men Open </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">Tagaytay Combat Gym</span>
                                    <!--<span class="stadium-name">ASIAN BMX CHAMP.</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sunday JULY 16, 2023-->
                    <div class="col-12">
                        <div class="match-single">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name"> ASIAN BMX RACING CHAMPIONSHIPS
                                                <br> JULY 16, 2023 <br> (Sunday)</span>
                                            <!--<img src="assets/images/clubs/1.png" alt="club-logo">-->
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
                     <!-- Monday JULY 17, 2023-->
                     <div class="col-12">
                        <div class="match-single">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name"> DEPARTURE OF TEAMS
                                                <br> JULY 17, 2023 <br> (Monday)</span>
                                            <!--<img src="assets/images/clubs/1.png" alt="club-logo">-->
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
                
            
                    <!--<div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">Meeting with Organizers and Judges</span>
                                            <img src="assets/images/clubs/6.png" alt="club-logo">
                                        </div>
                                    </div>
                                    <div class="colon">VS</div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <img src="assets/images/clubs/7.png" alt="club-logo">
                                            <span class="club-name">MAN UTD.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">JULY 21, 2023</span>
                                    <span class="stadium-name">MC ARMY STADIUM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">LIVERPOOL</span>
                                            <img src="assets/images/clubs/8.png" alt="club-logo">
                                        </div>
                                    </div>
                                    <div class="colon">VS</div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <img src="assets/images/clubs/9.png" alt="club-logo">
                                            <span class="club-name">MAN CITY</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">JULY 21, 2023</span>
                                    <span class="stadium-name">MC ARMY STADIUM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">DORTMUND</span>
                                            <img src="assets/images/clubs/10.png" alt="club-logo">
                                        </div>
                                    </div>
                                    <div class="colon">VS</div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <img src="assets/images/clubs/11.png" alt="club-logo">
                                            <span class="club-name">AC MILAN</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">JULY 21, 2023</span>
                                    <span class="stadium-name">MC ARMY STADIUM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">INTER MILAN</span>
                                            <img src="assets/images/clubs/12.png" alt="club-logo">
                                        </div>
                                    </div>
                                    <div class="colon">VS</div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <img src="assets/images/clubs/13.png" alt="club-logo">
                                            <span class="club-name">BENFICA</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">JULY 21, 2023</span>
                                    <span class="stadium-name">MC ARMY STADIUM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">BOCA JUNIORS</span>
                                            <img src="assets/images/clubs/14.png" alt="club-logo">
                                        </div>
                                    </div>
                                    <div class="colon">VS</div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <img src="assets/images/clubs/15.png" alt="club-logo">
                                            <span class="club-name">ATHELETIC VILVAO</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">JULY 21, 2023</span>
                                    <span class="stadium-name">MC ARMY STADIUM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="match-single sm">
                            <div class="match-single-content">
                                <div class="match-scores">
                                    <div class="club club1">
                                        <div class="club-logo mr--20">
                                            <span class="club-name">GRANDA</span>
                                            <img src="assets/images/clubs/16.png" alt="club-logo">
                                        </div>
                                    </div>
                                    <div class="colon">Vs</div>
                                    <div class="club club2">
                                        <div class="club-logo ml--20">
                                            <img src="assets/images/clubs/17.png" alt="club-logo">
                                            <span class="club-name">ARSENAL</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wrap">
                                    <span class="match-date">JULY 21, 2023</span>
                                    <span class="stadium-name">MC ARMY STADIUM</span>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!--================= Competition Result Section End Here =================-->
    


    <!--================= Footer Start Here =================-->
    <div class="footer footer1">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo"><img src="assets/images/2023_ACC_BMX_Letterhead_1.png" alt="footer-logo">
                            </div>
                            <p class="footer-text">Unleash the Thrill: Riding the Wave of Asian BMX Excellence in 2023!</p>
                            <div class="social-links">
                                <a href="https://www.facebook.com/profile.php?id=100094321766590" class="platform"><i
                                        class="fab fa-facebook-f"></i></a>
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
                                <li class="widget-list-item"><a href="/match-schedule">SCHEDULE</a></li>
                                <li class="widget-list-item"><a href="/team">COMPETITION FORMAT</a></li>
                                <li class="widget-list-item"><a href="/league-standings">AWARDING</a></li>
                                <li class="widget-list-item"><a href="/gallery">GALLERY</a></li>
                                <li class="widget-list-item"><a href="/contact">CONTACT</a></li>
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
                                <li class="widget-list-item"><i class="fas fa-envelope-open"></i><a
                                        href="mailto:philcycling.offroad@gmail.com">philcycling.offroad@gmail.com</a></li>
                                <!-- <li class="widget-list-item"><i class="fas fa-phone"></i><a href="tel:09877788890">098
                                        777
                                        888 90</a></li> -->
                                <li class="widget-list-item"><i class="fas fa-map-marker-alt"></i> <span>TAGAYTAY BMX TRACK, CITY
                                    SPORTS FACILITIES <br>
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
                    <span class="copyright">COPYRIGHT - 2023</span>
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
