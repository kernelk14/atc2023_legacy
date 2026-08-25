<?php
$view->open([
    'title'  => 'Contact Us | Track Asia Cup | Tagaytay 2026',
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
',
    'banner' => [
        'title'  => 'CONTACT US',
        'crumbs' => [
            ['text' => 'Home', 'href' => '/', 'class' => 'home-page-link'],
            ['text' => 'CONTACT', 'href' => '/contact', 'class' => 'current-page'],
        ],
    ],
]);
?>
    <!--contact-area start-->
    <div class="contact-area">
        <div class="container">
            <div class="address-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="address">
                            <div class="icon"><i class="far fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h3 class="heading">
                                    HEADQUARTERS
                                </h3>
                                <p class="desc">
                                Tagaytay BMX Track, City Sports Facilities, Tagaytay City</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="address">
                            <div class="icon"><i class="far fa-envelope-open"></i></div>
                            <div class="content">
                                <h3 class="heading">
                                    MAIL US
                                </h3>
                                <p class="desc"><br><a
                                    href="mailto:philcycling.offroad@gmail.com">philcycling.offroad@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="address">
                            <div class="icon"><i class="far fa-phone-volume"></i></div>
                            <div class="content">
                                <h3 class="heading">
                                    SPONSORS ONLY
                                </h3>
                                <p class="desc">236 Dotland Street, STKD NY
                                    Frankfurt Germany</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="contact-area-inner">
                <div class="row align-items-start">
                    <div class="col-lg-6 col-md-12">
                        <div class="map">
                            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d483.7004793742528!2d120.93978353491819!3d14.100548200058917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd7708d2d09eab%3A0x1e0216a318ce7983!2sTagaytay%20BMX%20Track!5e0!3m2!1sen!2sph!4v1687322956137!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                        </div>  
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <form class="contact-form mb-10">
                            <h3 class="post-title mb-35">GET IN TOUCH</h3>
                            <div class="info-form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input-box name mb-20">
                                            <input type="text" id="validationDefault01" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input-box email mail-input mb-20">
                                            <input type="email" id="validationDefault02" placeholder="Your E-mail"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="input-box message text-input mb-20">
                                            <textarea name="Message" id="validationDefault05" cols="30" rows="10"
                                                placeholder="Write Your Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-15">
                                        <!-- <a href="/thank-you" class="form-btn form-btn4">LEARN MORE</a> -->
                                        <button type="submit" class="form-btn form-btn4">
                                            LEARN MORE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact-area end-->


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
                                        href="philcycling.offroad@gmail.com">philcycling.offroad@gmail.com</a></li>
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
