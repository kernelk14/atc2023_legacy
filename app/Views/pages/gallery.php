<?php
$view->open([
    'title'  => 'Gallery | Track Asia Cup | Tagaytay 2026',
    'header' => 'default',
    'active' => 'home',
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
</head>
',
    'banner' => [
        'title'  => 'OUR GALLERY',
        'crumbs' => [
            ['text' => 'Home', 'href' => '/', 'class' => 'home-page-link'],
            ['text' => 'Gallery', 'href' => '#', 'class' => 'current-page'],
        ],
    ],
]);
?>
       <!--================= Gallery Section Start Here =================-->
       <div class="rts-gallery-section">
        <div class="container">
            <div class="top-wrap">
                <div class="filter-button-group">
                    <button class="filter-btn active" data-show=".fifa20">BMX 2023</button>
                    <button class="filter-btn" data-show=".uefacup">Flatland Event</button>
                    <button class="filter-btn" data-show=".warmup">Park Event</button>
                    <!-- <button class="filter-btn" data-show=".national">NATIONAL</button>  -->
                </div>
            </div>
            <div class="filterd-items fifa20">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/bmx1.jpg"><img
                                        src="assets/images/gallery/bmx1.jpg" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                            </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/bmx7.jpg"><img
                                        src="assets/images/gallery/bmx7.jpg" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/bmx3.jpg"><img
                                        src="assets/images/gallery/bmx3.jpg" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/bmx4.jpg"><img
                                        src="assets/images/gallery/bmx4.jpg" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/bmx5.jpg" ><img
                                        src="assets/images/gallery/bmx5.jpg" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/bmx6.jpg" ><img
                                        src="assets/images/gallery/bmx6.jpg" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filterd-items uefacup hide">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-01.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-01.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-02.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-02.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-070.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-070.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-071.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-071.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-072.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-072.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-073.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-073.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-074.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-074.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-076.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-076.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-078.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-078.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-079.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-079.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-080.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-080.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-084.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-084.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-087.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-087.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-089.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-089.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-093.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-093.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-096.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-096.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-098.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-098.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-101.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-101.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-103.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-103.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-105.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-105.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-116.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-116.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-117.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-117.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-118.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-118.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-119.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-119.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-122.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-122.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-123.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-123.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-127.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-127.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-128.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-128.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-130.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-130.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-135.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-135.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-137.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-137.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-138.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-138.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-139.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-139.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-142.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-142.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-143.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-143.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-145.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-145.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-147.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-147.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-148.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-148.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-149.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-149.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-209.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-209.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-210.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-210.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-211.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-211.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-212.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-212.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-213.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-213.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-214.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-214.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-215.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-215.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-216.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-216.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-217.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-217.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-218.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-218.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-219.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-219.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-220.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-220.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-221.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-221.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-222.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-222.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-223.jpg"> <img src="assets/images/event/Flatland/20230715_AsianBMXChampionships–pre-223.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>

                        <!-- <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full2.png"><img
                                        src="assets/images/gallery/2.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div> -->
                        <!-- <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full1.png" title="Football.png"><img
                                        src="assets/images/gallery/1.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                            </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full4.png" title="Football.png"><img
                                        src="assets/images/gallery/4.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full3.png" title="Football.png"><img
                                        src="assets/images/gallery/3.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full6.png" title="Football.png"><img
                                        src="assets/images/gallery/6.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full5.png" title="Football.png"><img
                                        src="assets/images/gallery/5.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="filterd-items warmup hide">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-05.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-05.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-06.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-06.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-07.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-07.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-08.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-08.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-09.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-09.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-15.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-15.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-151.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-151.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-152.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-152.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-153.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-153.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-16.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-16.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-162.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-162.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-164.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-164.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-17.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-17.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-171.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-171.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-172.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-172.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-173.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-173.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-174.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-174.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-177.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-177.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-178.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-178.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-184.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-184.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-185.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-185.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-19.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-19.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-190.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-190.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-191.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-191.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-193.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-193.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-194.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-194.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-200.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-200.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-203.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-203.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-207.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-207.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-23.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-23.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-24.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-24.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-27.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-27.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-31.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-31.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-39.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-39.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-40.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-40.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-41.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-41.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-42.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-42.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-44.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-44.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-48.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-48.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-49.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-49.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-50.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-50.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-58.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-58.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-61.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-61.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-62.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-62.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>
<div class="col-xl-4 col-md-6"> <div class="gallery-item"> <a class="gallery-image image-popup-vertical-fit"href="assets/images/event/Park/20230715_AsianBMXChampionships–pre-69.jpg"> <img src="assets/images/event/Park/20230715_AsianBMXChampionships–pre-69.jpg" alt="gallery-image"><button class="pop-btn"><i class="fal fa-plus"></i></button></a></div></div>

                        <!-- <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full1.png" title="Football.png"><img
                                        src="assets/images/gallery/1.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                            </a>
                            </div>
                        </div> -->
                        <!-- <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full2.png" title="Football.png"><img
                                        src="assets/images/gallery/2.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full3.png" title="Football.png"><img
                                        src="assets/images/gallery/3.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full4.png" title="Football.png"><img
                                        src="assets/images/gallery/4.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full5.png" title="Football.png"><img
                                        src="assets/images/gallery/5.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full6.png" title="Football.png"><img
                                        src="assets/images/gallery/6.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
          <!-- <div class="filterd-items national hide">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full2.png" title="Football.png"><img
                                        src="assets/images/gallery/2.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full1.png" title="Football.png"><img
                                        src="assets/images/gallery/1.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                            </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full4.png" title="Football.png"><img
                                        src="assets/images/gallery/4.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full3.png" title="Football.png"><img
                                        src="assets/images/gallery/3.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full6.png" title="Football.png"><img
                                        src="assets/images/gallery/6.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full5.png" title="Football.png"><img
                                        src="assets/images/gallery/5.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!--================= Gallery Section End Here =================-->


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
