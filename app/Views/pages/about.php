<?php
$view->open([
    'title'  => 'About | Track Asia Cup | Tagaytay 2026',
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
        'title'  => 'ABOUT US',
        'crumbs' => [
            ['text' => 'Home', 'href' => '/', 'class' => 'home-page-link'],
            ['text' => 'About Us', 'href' => '/about', 'class' => 'current-page'],
        ],
    ],
]);
?>
    </header>
    <!--================= Header Section End Here =================-->


    <!--================= About Section Start Here =================-->
    <div class="rts-about-section  about section-gap">
        <div class="container">
            <div class="about-inner">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <div class="about-thumb">
                            <!-- <div class="img1"><img src="assets/images/gallery/bmx4.jpg" alt="about-thumb"></div> -->
                            <div class="img2"><img src="assets/images/gallery/track-cycling.webp" alt="about-thumb"></div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="contents">
                            <div class="section-title-area section-title-area1 text-start">
                                <h1 class="section-title"><span>ABOUT THE</span> <br> ASIAN TRACK CHAMPIONSHIPS 2026
                                </h1>
                                <p>Get ready for speed and adrenaline! The Tagaytay City Velodrome is set to host the prestigious Asian Track Championships from March 25 to 31, 2026. This premier event gathers the fastest cyclists from across the continent
                                    to compete for glory and Olympic qualification points.</p><br>
                                <p>Witness world-class athletes showcase their power and precision on the track. Organized by the Asian Cycling Confederation (ACC) and PhilCycling, this championship marks a significant milestone for Philippine sports, bringing
                                    the thrill of velodrome racing to the heart of Tagaytay.</p>
                            </div>
                            <!-- <ul>
                                <li class="player">
                                    <p class="sub">MANAGER</p>
                                    <h3 class="title">PRO 05</h3>
                                </li>
                                <li class="player">
                                    <p class="sub">PLAYERS</p>
                                    <h3 class="title">PRO 107</h3>
                                </li>
                                <li class="player">
                                    <p class="sub">COACH</p>
                                    <h3 class="title">PRO 19</h3>
                                </li>
                            </ul> -->
                            <!-- <a href="/team" class="more-btn">OUR TEAM <i class="fal fa-long-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= About Section End Here =================-->


    <!--================= Counter Up Section Start Here =================-->
    <!-- <section class="rts-counter-up-section">
        <div class="container">
            <div class="counter-up-inner">
                <div id="counter" class="count-up ">
                    <div class="wrapper">
                        <div class="counter" data-count="69">0</div>
                        <h3 class="counter-text">CLUB MEMBER</h3>
                    </div>
                    <div class="wrapper">
                        <div class="counter" data-count="46">0</div>
                        <h3 class="counter-text">TROPHIES</h3>
                    </div>
                    <div class="wrapper">
                        <div class="counter" data-count="63">0</div>
                        <h3 class="counter-text">COACHES</h3>
                    </div>
                    <div class="wrapper">
                        <div class="counter" data-count="58">0</div>
                        <h3 class="counter-text">CLASSES</h3>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--================= Counter Up Section End Here =================-->


    <!--================= Champions Section Start Here =================-->
    <div class="rts-champion-section">
        <!-- <div class="player-image"><img src="assets/images/about/cycling1.png" alt=""></div> -->
        <div class="container">
            <div class="top-wrap">
                <!-- <div class="filter-button-group">
                    <button class="filter-btn active" data-show=".yr23">2023</button>
                    <button class="filter-btn" data-show=".yr20">2020</button>
                    <button class="filter-btn" data-show=".yr21">2021</button>
                    <button class="filter-btn" data-show=".yr22">2022</button>
                    <button class="filter-btn" data-show=".yr23">2023</button>
                </div> -->
            </div>
            <div class="champion-details filterd-items">
                <div class="contents">
                    <h1 class="details-title">Asian Track Championships set for March 2026 in Tagaytay City</h1>
                    <p class="p0">
                        TAGAYTAY City rolls out the red carpet for athletes and officials from across the continent who are seeing action in the 2026 Asian Track Championships set from March 25 to 31 at the Tagaytay City Velodrome.
                    </p><br>
                    <p class="p4">
                        “Our warmest welcome to the athletes, coaches and officials for the Asian Track Championships,” said Tagaytay City Mayor and Philippine Olympic Committee (POC) president Rep. Abraham “Bambol” Tolentino, who also heads the host national federation PhilCycling.
                    </p><br>
                    <p class="p-0">
                        Riders from powerhouse countries like Japan, South Korea, China, Hongkong, Thailand, Malaysia, and Indonesia are poised to challenge elite Filipino track cyclists in this prestigious UCI-sanctioned event.
                    </p><br>
                    <p class="p1">The competition highlights speed, power, and precision inside the velodrome. The championships are primarily supported by the Philippine Sports Commission, POC, City Government of Tagaytay and Council, First District of Cavite, Province
                        of Cavite and with support from Smart/MVP Sports Foundation.</p>
                    <p class="p2">
                        The Asian Track Championships are another major international competition that Tolentino is hosting in Tagaytay City, continuing the legacy of the 30th Southeast Asian Games in December 2019.
                    </p><br>
                    <p class="p1">
                        The event—calendared by the International Cycling Union (UCI) and the ACC—will be held at the Tagaytay City Velodrome, the country's premier venue for track cycling.
                    </p><br>
                    <p class="p2">
                        The races are scheduled from March 25 to 31, 2026, where the best Asian cyclists will compete for supremacy and Olympic qualification points on the track.
                    </p><br>
                    <!-- <p class="p1">
                        A total of 38 athletes are entered in freestyle—14 men and seven women in park and 10 men and
                        seven women in flatland. For racing,
                        53 riders are entered in the championships and 35 in the challenge event. <span><i>
                                -(BusinessMirror)</i></span>
                    </p> --><br>
                </div>
                <!--  <div class="details-video">
                    <div class="video-thumb"><img src="assets/images/about/2023_ACC_BMX_logo_FINAL.JPEG"
                            alt="video-thumb">
                        <div class="play-btn play-video"><a class="popup-video"
                                href="https://www.youtube.com/watch?v=7A-miKrk7J4" data-effect="mfp-move-horizontal"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <div class="champion-details filterd-items yr20 hide">
                <div class="contents">
                    <h1 class="details-title">THE CHAMPIONS LEAGUE
                        TROPHY 2010</h1>
                    <p class="p1">It is one of the most popular football clubs that offer training programs
                        for the youth, as well as summer camps. Play the fastest NFT based fantasy
                        football manager earn coins, collect & trade officially.</p>

                    <p class="p2">
                        Welcome to the official Chelsea FC website. Get all the latest news, videos
                        & ticket information as well as player profiles.
                    </p>
                </div>
                <div class="details-video">
                    <div class="video-thumb"><img src="assets/images/about/2023_ACC_BMX_logo_FINAL.JPEG" alt="video-thumb">
                        <div class="play-btn play-video"><a class="popup-video"
                                href="https://www.youtube.com/watch?v=G4t6TqG5LM8" data-effect="mfp-move-horizontal"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="champion-details filterd-items yr21 hide">
                <div class="contents">
                    <h1 class="details-title">THE CHAMPIONS LEAGUE
                        TROPHY 2010</h1>
                    <p class="p1">It is one of the most popular football clubs that offer training programs
                        for the youth, as well as summer camps. Play the fastest NFT based fantasy
                        football manager earn coins, collect & trade officially.</p>

                    <p class="p2">
                        Welcome to the official Chelsea FC website. Get all the latest news, videos
                        & ticket information as well as player profiles.
                    </p>
                </div>
                <div class="details-video">
                    <div class="video-thumb"><img src="assets/images/about/2023_ACC_BMX_logo_FINAL.JPEG" alt="video-thumb">
                        <div class="play-btn play-video"><a class="popup-video"
                                href="https://www.youtube.com/watch?v=G4t6TqG5LM8" data-effect="mfp-move-horizontal"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="champion-details filterd-items yr22 hide">
                <div class="contents">
                    <h1 class="details-title">THE CHAMPIONS LEAGUE
                        TROPHY 2010</h1>
                    <p class="p1">It is one of the most popular football clubs that offer training programs
                        for the youth, as well as summer camps. Play the fastest NFT based fantasy
                        football manager earn coins, collect & trade officially.</p>

                    <p class="p2">
                        Welcome to the official Chelsea FC website. Get all the latest news, videos
                        & ticket information as well as player profiles.
                    </p>
                </div>
                <div class="details-video">
                    <div class="video-thumb"><img src="assets/images/about/2023_ACC_BMX_logo_FINAL.JPEG" alt="video-thumb">
                        <div class="play-btn play-video"><a class="popup-video"
                                href="https://www.youtube.com/watch?v=G4t6TqG5LM8" data-effect="mfp-move-horizontal"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="champion-details filterd-items yr23 hide">
                <div class="contents">
                    <h1 class="details-title">ASIAN BMX CHAMPIONSHIP 2023</h1>
                    <p class="p1">It is one of the most popular football clubs that offer training programs
                        for the youth, as well as summer camps. Play the fastest NFT based fantasy
                        football manager earn coins, collect & trade officially.</p>

                    <p class="p2">
                        Welcome to the official Chelsea FC website. Get all the latest news, videos
                        & ticket information as well as player profiles.
                    </p>
                </div>
                <div class="details-video">
                    <div class="video-thumb"><img src="assets/images/about/2023_ACC_BMX_logo_FINAL.JPEG" alt="video-thumb">
                        <div class="play-btn play-video"><a class="popup-video"
                                href="https://www.youtube.com/watch?v=02_SL_Kixt0" data-effect="mfp-move-horizontal"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
    <!--================= Champions Section End Here =================-->



    <!--================= Sponsors Section Start Here =================-->
    <div class="rts-sponsors-section section-gap">
        <div class="container">
            <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle watermark-logo"><img src="assets/images/watermarks/acc-tac-2026-black.png"alt="ACC TAC 2026 Logo"></span>
                <h1 class="section-title">ORGANIZING COMMITTEE (PhilCycling)</h1>
                <p>The Integrated Cycling Federation of the Philippines (PhilCycling) is the national governing body for cycling as a sport in the Philippines. It is duly recognised by the Philippine Sports Commission and the Philippine Olympic Committee
                    and the International Cycling Union (Union Cycliste Internationale a.k.a. UCI).</p>
            </div>
            <div class="sponsors-section-inner">
                <div class="swiper rts-brandSlider">
                    <div class="swiper-wrapper">
                        <!--  <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/1.png" alt="sponsor"></div>
                            </a>
                        </div> -->
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/2.png" alt="sponsor" style="max-height: 142px; width: auto;"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/7.png" alt="sponsor" style="max-height: 125px; width: auto;"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/3.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/4.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/5.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/6.png" alt="sponsor"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Sponsors Table Section End Here =================-->


    <!--================= Newsletter Popup Start Here =================-->
    <div class="rts-newsletter-popup">
        <div class="newsletter-close-btn"><i class="fal fa-times"></i></div>
        <div class="newsletter-inner">
            <h3 class="newsletter-heading">Get Weekly Newsletter</h3>
            <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a completely modern design</p>
            <form>
                <div class="input-area">
                    <div class="input-div"><input type="text" placeholder="Your name">
                        <div class="input-icon"><i class="far fa-user"></i></div>
                    </div>
                    <div class="input-div"><input type="email" placeholder="Email address" required>
                        <div class="input-icon"><i class="far fa-envelope"></i></div>
                    </div>
                </div>
                <button type="submit" class="subscribe-btn">Subscribe Now <i
                        class="fal fa-long-arrow-right ml--5"></i></button>
            </form>
        </div>
    </div>
    <!--================= Newsletter Popup End Here =================-->


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
                                <!--  <a href="https://www.facebook.com/profile.php?id=100094321766590" class="platform"><i
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
                                <!-- <li class="widget-list-item"><a href="/match-schedule">SCHEDULE</a></li> -->
                                <li class="widget-list-item"><a href="/team">Technical Handbook</a></li>
                                <!--  <li class="widget-list-item"><a href="/league-standings">AWARDING</a></li>
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
