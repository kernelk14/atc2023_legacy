<?php
$view->open([
    'title'  => 'Awarding | Track Asia Cup| Tagaytay 2026',
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
        'title'  => 'AWARDING',
        'crumbs' => [
            ['text' => 'Home', 'href' => '/', 'class' => 'home-page-link'],
            ['text' => 'Awarding', 'href' => '/league-standings', 'class' => 'current-page'],
        ],
    ],
]);
?>
    <!--================= Latest Competition Start Here =================
    <div class="rts-latest-match">
        <div class="container">
            <div class="latest-match-inner">
                <div class="club-area">
                    <div class="club-logo"><img src="assets/images/items/clubs.png" alt=""></div>
                    <div class="content">
                        <h3 class="club-text">KESTER F.C <br>
                            CHAMPIONS DI CLUB</h3>
                        <span class="match-type">SEMI FINAL</span>
                    </div>
                </div>
                <div class="match-countdown-area">
                    <div class="countdown">
                        <div class="countdown-el days-c">
                            <span class="value" id="days"></span>
                        </div>
                        <span class="letter">D</span>
                        <div class="countdown-el hours-c">
                            <span class="value" id="hours"></span>
                        </div>
                        <span class="letter">H</span>
                        <div class="countdown-el mins-c">
                            <span class="value" id="mins"></span>
                        </div>
                        <span class="letter">M</span>
                        <div class="countdown-el seconds-c">
                            <span class="value" id="seconds"></span>
                        </div>
                        <span class="letter">S</span>
                    </div>
                </div>
                <div class="club-area">
                    <div class="content text-end ml--40 mr--0">
                        <h3 class="club-text">KINGSTER F.C <br>
                            CHAMPIONS DI CLUB</h3>
                            <span class="match-type">SEMI FINAL</span>
                    </div>
                    <div class="club-logo ml--40 mr--0"><img src="assets/images/items/clubs2.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    ================= Latest Competition End Here =================-->


    <!--================= Point Table Section Start Here =================-->
    <div class="rts-point-table-section section-gap">
        <!--WOMEN JUNIOR-->
		<div class="container">
            <div class="title-area">
                <h2 class="title text-center">WOMEN JUNIOR</h2>
            </div>
            <div class="table-area table-full">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    </thead>
                    <tbody>
                        <tr class="head-tr">
                            <th scope="col">RANK</th>
                            <th scope="col">BIB No.</th>
                            <th scope="col">LAST NAME, First Name</th>
                            <th scope="col">UCI ID No.</th>
                            <th scope="col">NATION</th>
                            <th scope="col">MEDAL</th>
                        <tr>
                            <td><span class="position-number">01</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">850</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>NADA Shifa Maulidina Qotrun*</h4></span></td>
                            <td><span class="win-count"><h4>100 634 040 32</h4></span></td>
                            <td><span class="draw-count"><h4>INDONESIA</h4></span></td>
                            <td><span class="lose-count"><h4>Gold</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">02</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">851</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>RITTHIDET Kanokrat*</h4></span></td>
                            <td><span class="win-count"><h4>101 254 343 20</h4></span></td>
                            <td><span class="draw-count"><h4>THAILAND</h4></span></td>
                            <td><span class="lose-count"><h4>Silver</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">03</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">852</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>KAODEE Thitichaya*</h4></span></td>
                            <td><span class="win-count"><h4>101 381 656 69</h4></span></td>
                            <td><span class="draw-count"><h4>THAILAND</h4></span></td>
                            <td><span class="lose-count"><h4>Bronze</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">04</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">849</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>PARK Ayeon*</h4></span></td>
                            <td><span class="win-count"><h4>100 684 377 26</h4></span></td>
                            <td><span class="draw-count"><h4>KOREA</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
                    </tbody>
                </table>
			</div>
        </div>
		
		<!--MEN JUNIOR-->
		<div class="container">
            <div class="title-area">
                <h2 class="title text-center">MEN JUNIOR</h2>
            </div>
            <div class="table-area table-full">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    </thead>
                    <tbody>
                        <tr class="head-tr">
                            <th scope="col">RANK</th>
                            <th scope="col">BIB No.</th>
                            <th scope="col">LAST NAME, First Name</th>
                            <th scope="col">UCI ID No.</th>
                            <th scope="col">NATION</th>
                            <th scope="col">MEDAL</th>
                        <tr>
                            <td><span class="position-number">01</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">825</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>KIUCHI Hyoga</h4></span></td>
                            <td><span class="win-count"><h4>100 208 959 05</h4></span></td>
                            <td><span class="draw-count"><h4>JAPAN</h4></span></td>
                            <td><span class="lose-count"><h4>Gold</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">02</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">828</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>JEON Wooseong </h4></span></td>
                            <td><span class="win-count"><h4>100 822 835 65</h4></span></td>
                            <td><span class="draw-count"><h4>KOREA</h4></span></td>
                            <td><span class="lose-count"><h4>Silver</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">03</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">831</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>SAKAMOTO Yuwa</h4></span></td>
                            <td><span class="win-count"><h4>100 213 647 37</h4></span></td>
                            <td><span class="draw-count"><h4>JAPAN</h4></span></td>
                            <td><span class="lose-count"><h4>Bronze</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">04</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">829</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>HONG Juho</h4></span></td>
                            <td><span class="win-count"><h4>100 509 519 59</h4></span></td>
                            <td><span class="draw-count"><h4>KOREA</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">05</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">826</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>RASSAMEE Saranvit</h4></span></td>
                            <td><span class="win-count"><h4>101 254 338 15</h4></span></td>
                            <td><span class="draw-count"><h4>THAILAND</h4></span></td>
                            <td><span class="lose-count"><h4></h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">06</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">832</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>KIM Eojin</h4></span></td>
                            <td><span class="win-count"><h4>100 824 054 23</h4></span></td>
                            <td><span class="draw-count"><h4>KOREA</h4></span></td>
                            <td><span class="lose-count"><h4></h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">07</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">827</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>PHIMPHA Likkasit</h4></span></td>
                            <td><span class="win-count"><h4>101 381 664 77</h4></span></td>
                            <td><span class="draw-count"><h4>THAILAND</h4></span></td>
                            <td><span class="lose-count"><h4></h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">08</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">830</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>TAI Cheuk On</h4></span></td>
                            <td><span class="win-count"><h4>101 369 696 40</h4></span></td>
                            <td><span class="draw-count"><h4>HONG KONG, CHINA</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
                    </tbody>
                </table>
			</div>
        </div>
		
		<!--WOMEN UNDER 23-->
		<div class="container">
            <div class="title-area">
                <h2 class="title text-center">WOMEN UNDER 23</h2>
            </div>
            <div class="table-area table-full">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    </thead>
                    <tbody>
                        <tr class="head-tr">
                            <th scope="col">RANK</th>
                            <th scope="col">BIB No.</th>
                            <th scope="col">LAST NAME, First Name</th>
                            <th scope="col">UCI ID No.</th>
                            <th scope="col">NATION</th>
                            <th scope="col">MEDAL</th>
                        <tr>
                            <td><span class="position-number">01</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">548</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>NISHIMURA Neneka</h4></span></td>
                            <td><span class="win-count"><h4>100 214 765 88</h4></span></td>
                            <td><span class="draw-count"><h4>JAPAN</h4></span></td>
                            <td><span class="lose-count"><h4>Gold</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">02</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">545</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>SRISOPHA Khemika</h4></span></td>
                            <td><span class="win-count"><h4>101 093 946 61</h4></span></td>
                            <td><span class="draw-count"><h4>THAILAND</h4></span></td>
                            <td><span class="lose-count"><h4>Silver</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">03</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">546</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>JAISAWANG Hathaipech</h4></span></td>
                            <td><span class="win-count"><h4>101 136 775 16</h4></span></td>
                            <td><span class="draw-count"><h4>THAILAND</h4></span></td>
                            <td><span class="lose-count"><h4>Bronze</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">04</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">547</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>KWOK Noel Vanessa</h4></span></td>
                            <td><span class="win-count"><h4>100 798 798 84</h4></span></td>
                            <td><span class="draw-count"><h4>HONG KONG, CHINA</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
                    </tbody>
                </table>
			</div>
        </div>
		<!--MEN UNDER 23-->
		<div class="container">
            <div class="title-area">
                <h2 class="title text-center">MEN UNDER 23</h2>
            </div>
            <div class="table-area table-full">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    </thead>
                    <tbody>
                        <tr class="head-tr">
                            <th scope="col">RANK</th>
                            <th scope="col">BIB No.</th>
                            <th scope="col">LAST NAME, First Name</th>
                            <th scope="col">UCI ID No.</th>
                            <th scope="col">NATION</th>
                            <th scope="col">MEDAL</th>
                        <tr>
                            <td><span class="position-number">01</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">523</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>ADITYA FAJAR PUTU Soekarno</h4></span></td>
                            <td><span class="win-count"><h4>100 599 979 18</h4></span></td>
                            <td><span class="draw-count"><h4>INDONESIA</h4></span></td>
                            <td><span class="lose-count"><h4>Gold</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">02</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">522</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>SHOJI Yoshimasa </h4></span></td>
                            <td><span class="win-count"><h4>100 208 049 65</h4></span></td>
                            <td><span class="draw-count"><h4>JAPAN </h4></span></td>
                            <td><span class="lose-count"><h4>Silver</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">03</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">517</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>JAIYOO Apisit</h4></span></td>
                            <td><span class="win-count"><h4>101 136 778 19</h4></span></td>
                            <td><span class="draw-count"><h4>THAILAND</h4></span></td>
                            <td><span class="lose-count"><h4>Bronze</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">04</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">521</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>BIN MOHAMAD ALI Mas Ridzwan </h4></span></td>
                            <td><span class="win-count"><h4>100 364 496 51</h4></span></td>
                            <td><span class="draw-count"><h4>SINGAPORE</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">05</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">524</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>HAQ NURSALAM Muhammad Fattahilla</h4></span></td>
                            <td><span class="win-count"><h4>100 923 374 15</h4></span></td>
                            <td><span class="draw-count"><h4>INDONESIA</h4></span></td>
                            <td><span class="lose-count"><h4></h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">06</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">519</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>NILSONTHI Bawornpith </h4></span></td>
                            <td><span class="win-count"><h4>101 136 779 20</h4></span></td>
                            <td><span class="draw-count"><h4>THAILAND</h4></span></td>
                            <td><span class="lose-count"><h4></h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">07</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">520</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>CHEUNG Yu Hon</h4></span></td>
                            <td><span class="win-count"><h4>100 798 799 85</h4></span></td>
                            <td><span class="draw-count"><h4>HONG KONG, CHINA</h4></span></td>
                            <td><span class="lose-count"><h4></h4></span></td>
                        </tr>
					</tbody>
                </table>
			</div>
        </div>
		
		<!--WOMEN ELITE-->
		<div class="container">
            <div class="title-area">
                <h2 class="title text-center">WOMEN ELITE</h2>
            </div>
            <div class="table-area table-full">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    </thead>
                    <tbody>
                        <tr class="head-tr">
                            <th scope="col">RANK</th>
                            <th scope="col">BIB No.</th>
                            <th scope="col">LAST NAME, First Name</th>
                            <th scope="col">UCI ID No.</th>
                            <th scope="col">NATION</th>
                            <th scope="col">MEDAL</th>
                        <tr>
                            <td><span class="position-number">01</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">85</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>HATAKEYAMA Sae</h4></span></td>
                            <td><span class="win-count"><h4>100 111 009 25</h4></span></td>
                            <td><span class="draw-count"><h4>JAPAN</h4></span></td>
                            <td><span class="lose-count"><h4>Gold</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">02</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">240</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>LIAO Wany</h4></span></td>
                            <td><span class="win-count"><h4>100 847 145 28</h4></span></td>
                            <td><span class="draw-count"><h4>CHINA</h4></span></td>
                            <td><span class="lose-count"><h4>Silver</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">03</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">233</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>TANNO Kanami</h4></span></td>
                            <td><span class="win-count"><h4>100 207 800 10</h4></span></td>
                            <td><span class="draw-count"><h4>JAPAN</h4></span></td>
                            <td><span class="lose-count"><h4>Bronze</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">04</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">243</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>YABUTA Jui</h4></span></td>
                            <td><span class="win-count"><h4>100 214 746 69</h4></span></td>
                            <td><span class="draw-count"><h4>JAPAN</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">05</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">237</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>SETYOBUDI Jasmine Az-Zahra</h4></span></td>
                            <td><span class="win-count"><h4>100 799 672 85</h4></span></td>
                            <td><span class="draw-count"><h4>INDONESIA</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">06</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">239</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>WANG Mengyao</h4></span></td>
                            <td><span class="win-count"><h4>100 610 189 43</h4></span></td>
                            <td><span class="draw-count"><h4>CHINA</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">07</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">241</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>GU Quanquan </h4></span></td>
                            <td><span class="win-count"><h4>100 847 112 92</h4></span></td>
                            <td><span class="draw-count"><h4>CHINA</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">08</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">242</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>ZHANG Yu</h4></span></td>
                            <td><span class="win-count"><h4>101 387 962 70</h4></span></td>
                            <td><span class="draw-count"><h4>CHINA</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
                    </tbody>
                </table>
			</div>
        </div>
		<!--MEN ELITE-->
		<div class="container">
            <div class="title-area">
                <h2 class="title text-center">MEN ELITE</h2>
            </div>
            <div class="table-area table-full">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    </thead>
                    <tbody>
                        <tr class="head-tr">
                            <th scope="col">RANK</th>
                            <th scope="col">BIB No.</th>
                            <th scope="col">LAST NAME, First Name</th>
                            <th scope="col">UCI ID No.</th>
                            <th scope="col">NATION</th>
                            <th scope="col">MEDAL</th>
                        <tr>
                            <td><span class="position-number">01</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">200</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>SUKPRASERT Komet</h4></span></td>
                            <td><span class="win-count"><h4>100 623 321 80</h4></span></td>
                            <td><span class="draw-count"><h4>THAILAND</h4></span></td>
                            <td><span class="lose-count"><h4>Gold</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">02</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">204</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>AKBAR Rio</h4></span></td>
                            <td><span class="win-count"><h4>100 097 191 78</h4></span></td>
                            <td><span class="draw-count"><h4>INDONESIA</h4></span></td>
                            <td><span class="lose-count"><h4>Silver</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">03</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">205</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>RIFKI Fasya Ahsana</h4></span></td>
                            <td><span class="win-count"><h4>100 586 438 57</h4></span></td>
                            <td><span class="draw-count"><h4>INDONESIA</h4></span></td>
                            <td><span class="lose-count"><h4>Bronze</h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">04</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">212</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>MASUDA Yuichi</h4></span></td>
                            <td><span class="win-count"><h4>100 216 265 36</h4></span></td>
                            <td><span class="draw-count"><h4>JAPAN</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">05</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">201</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>NAKAI Asuma</h4></span></td>
                            <td><span class="win-count"><h4>100 209 736 06</h4></span></td>
                            <td><span class="draw-count"><h4>JAPAN</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">06</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">215</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>NAKABAYASHI Ryota</h4></span></td>
                            <td><span class="win-count"><h4>100 211 429 50</h4></span></td>
                            <td><span class="draw-count"><h4>JAPAN</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">07</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">214</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>MENG Fanzhe</h4></span></td>
                            <td><span class="win-count"><h4>100 847 147 30</h4></span></td>
                            <td><span class="draw-count"><h4>CHINA</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
						<tr>
                            <td><span class="position-number">08</span></td>
                            <td>
                                <div class="product-title-area">
                                    <h4 class="player-name">206</h4>
                                </div>
                            </td>
                            <td><span class="match-count"><h4>COO Patrick Bren</h4></span></td>
                            <td><span class="win-count"><h4>100 920 675 32</h4></span></td>
                            <td><span class="draw-count"><h4>PHILIPPINES</h4></span></td>
                            <td><span class="lose-count"><h4> </h4></span></td>
                        </tr>
                    </tbody>
                </table>
			</div>
        </div>
		
		
		
		
		
		
    </div>
    <!--================= Point Table Section End Here =================-->


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
