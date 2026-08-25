<?php
$view->open([
    'title'  => 'Organization | Track Asia Cup | Tagaytay 2026',
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
',
    'banner' => [
        'title'  => 'ABOUT THE ORGANIZATION',
        'crumbs' => [
            ['text' => 'CONTACT US', 'href' => '/contact', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li'],
            ['text' => 'ORGANIZATION', 'href' => '/organization', 'class' => 'dropdown-link', 'liClass' => 'dropdown-li']
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <div class="rts-org-section" style="position: relative; background: #0b0b15; overflow: hidden; padding-top: 120px; padding-bottom: 150px; min-height: 100vh;">

        <div class="tech-orb orb-blue"></div>
        <div class="tech-orb orb-red"></div>
        <div class="tech-orb orb-sun"></div>

        <div class="bg-grid-overlay"></div>

        <div class="container" style="position: relative; z-index: 5;">

            <div class="row justify-content-center mb--80">
                <div class="col-lg-8 text-center" data-aos="fade-down" data-aos-duration="1000">
                    <div class="title-badge">
                        <span style="color:#0038A8">PHIL</span><span style="color:#FCD116">CYC</span><span style="color:#CE1126">LING</span>
                    </div>
                    <h2 class="main-title">ORGANIZATIONAL STRUCTURE</h2>
                    <p class="sub-text">The visionaries behind the Integrated Cycling Federation of the Philippines.</p>
                    <div class="separator-line"></div>
                </div>
            </div>

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
                
                .tech-orb {
                    position: absolute;
                    border-radius: 50%;
                    filter: blur(90px);
                    opacity: 0.45;
                    z-index: 0;
                    animation: floatOrb 12s infinite alternate;
                }
                /* The Flag Colors Positioning */
                
                .orb-blue {
                    width: 600px;
                    height: 600px;
                    background: var(--ph-blue);
                    top: -150px;
                    left: -100px;
                    /* Top Left */
                }
                
                .orb-red {
                    width: 600px;
                    height: 600px;
                    background: var(--ph-red);
                    bottom: -150px;
                    right: -100px;
                    /* Bottom Right */
                    animation-delay: 2s;
                }
                
                .orb-sun {
                    width: 400px;
                    height: 400px;
                    background: var(--ph-yellow);
                    top: 15%;
                    left: 50%;
                    transform: translateX(-50%);
                    /* Behind President */
                    opacity: 0.3;
                    filter: blur(100px);
                }
                
                @keyframes floatOrb {
                    from {
                        transform: translate(0, 0) scale(1);
                    }
                    to {
                        transform: translate(30px, 30px) scale(1.1);
                    }
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
                    content: '';
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
                    content: '';
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
                    content: '';
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
                    .tech-orb {
                        opacity: 0.3;
                    }
                }
            </style>

            <div class="org-tree">

                <div class="org-row">
                    <div class="org-card boss-card" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/Dato-Amarjit-Singh-Gill.jpg" alt="Dato Amarjit Singh Gill" loading="lazy">
                        </div>
                        <h3 class="name">Dato' Amarjit Singh Gill</h3>
                        <span class="role"><i class="fas fa-sun" style="color:#FCD116; margin-right:5px;"></i>Vice President & President</span>
                        <span class="role" style="font-size: 10px; opacity: 0.6; margin-top: 5px; color:#fff;">UCI & ACC</span>
                    </div>
                    <div class="org-card boss-card" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/abraham-tolentino.jpg" alt="Abraham Tolentino" loading="lazy">
                        </div>
                        <h3 class="name">Abraham N. Tolentino</h3>
                        <span class="role"><i class="fas fa-sun" style="color:#FCD116; margin-right:5px;"></i>President</span>
                        <span class="role" style="font-size: 10px; opacity: 0.6; margin-top: 5px; color:#fff;">Integrated Cycling Federation of the Philippines</span>
                    </div>
                </div>

                <div class="org-row">
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/aizack-tolentino.jpg" alt="Oscar Rodriguez" loading="lazy">
                        </div>
                        <h4 class="name">Hon. Aizack Brent D. Tolentino</h4>
                        <span class="role">Vice President</span>
                        <small style="color:#bbb; font-size:11px; display:block; margin-top:4px;">Tagaytay City Vice Mayor</small>
                    </div>
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/aniela-tolentino.jpg" alt="Aniela Bianca Tolentino" loading="lazy">
                        </div>
                        <h4 class="name">Hon. Aniela Bianca D. Tolentino</h4>
                        <span class="role">Congresswoman</span>
                        <small style="color:#bbb; font-size:11px; display:block; margin-top:4px;">8th District of Cavite</small>
                    </div>
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/avelino-sumagui.jpg" alt="Avelino Sumagui" loading="lazy">
                        </div>
                        <h4 class="name">Atty. Avelino M. Sumagui</h4>
                        <span class="role">Secretary General</span>
                        <small style="color:#bbb; font-size:11px; display:block; margin-top:4px;">Integrated Cycling Federation of the Philippines</small>
                    </div>
                </div>

                <div class="org-row split-branch" style="justify-content: center;">
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/athena-tolentino.jpg" alt="Athena Bryana Tolentino" loading="lazy">
                        </div>
                        <h4 class="name">Hon. Athena Bryana D. Tolentino</h4>
                        <span class="role">Former Governor</span>
                        <small style="color:#bbb; font-size:11px; display:block; margin-top:4px;">Provincial Gov't of Cavite</small>
                    </div>
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/aizack-tolentino.jpg" alt="Hon. Aizack Tolentino" loading="lazy">
                        </div>
                        <h4 class="name">Hon. Aizack Brent D. Tolentino</h4>
                        <span class="role">Tagaytay City Mayor</span>
                    </div>
                    <div class="org-card vip-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/agnes-tolentino.jpg" alt="Hon. Agnes D. Tolentino" loading="lazy">
                        </div>
                        <h4 class="name">Hon. Agnes D. Tolentino</h4>
                        <span class="role">Tagaytay City Vice Mayor</span>
                    </div>
                </div>

                <div class="org-row">
                    <div class="org-card td-card" style="width: 340px;" data-aos="zoom-in-up" data-aos-delay="600">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/kamilla-sumagui.jpg" alt="Kamilla Sumagui" loading="lazy">
                        </div>
                        <h4 class="name">Kamilla M. Sumagui</h4>
                        <span class="role"><i class="fas fa-star" style="font-size:10px; vertical-align:middle; margin-right:5px;"></i>Tournament Director</span>
                    </div>
                </div>

                <div class="org-row">
                    <div class="org-card dir-card" data-aos="fade-up" data-aos-delay="700">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/joshua-sumagui.jpg" alt="Joshua Sumagui" style="object-position: center 70%;" loading="lazy">
                        </div>
                        <h4 class="name">Joshua Noel G. Sumagui</h4>
                        <span class="role">Asst. Tournament Director</span>
                        <small style="color:#ff6b6b; font-size:11px; display:block; margin-top:4px;">Technical Matters</small>
                    </div>
                    <div class="org-card dir-card" data-aos="fade-up" data-aos-delay="800">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/lorenzo-lomibao.jpg" alt="Lorenzo Lomibao" loading="lazy">
                        </div>
                        <h4 class="name">Lorenzo M. Lomibao Jr.</h4>
                        <span class="role">Asst. Tournament Director</span>
                        <small style="color:#ff6b6b; font-size:11px; display:block; margin-top:4px;">Marketing & Media</small>
                    </div>
                </div>

                <div class="org-row">
                    <div class="org-card dir-card" data-aos="fade-up" data-aos-delay="900">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/joshua-alvarez.jpg" alt="Joshua Alvarez" loading="lazy">
                        </div>
                        <h4 class="name">Joshua L. Alvarez</h4>
                        <span class="role">Director</span>
                        <small style="color:#bbb; font-size:11px; display:block; margin-top:4px;">International Relations</small>
                    </div>
                    <!-- <div class="org-card dir-card" data-aos="fade-up" data-aos-delay="1000">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/sunshine-mendoza.jpg" alt="Sunshine Mendoza" loading="lazy">
                        </div>
                        <h4 class="name">Sunshine Mendoza</h4>
                        <span class="role">Asst. Tournament Director</span>
                        <small style="color:#ff6b6b; font-size:11px; display:block; margin-top:4px;">Sporting Control</small>
                    </div> -->
                    <div class="org-card dir-card" data-aos="fade-up" data-aos-delay="1100">
                        <div class="org-img-wrap">
                            <img src="assets/images/organization/adrian-caraan.jpg" alt="Adrian Caraan" loading="lazy">
                        </div>
                        <h4 class="name">Adrian M. Caraan</h4>
                        <span class="role">Director</span>
                        <small style="color:#bbb; font-size:11px; display:block; margin-top:4px;">Venue & Logistics</small>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 50,
            duration: 900,
            easing: 'ease-out-cubic',
        });
    </script>
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

    <!-- logos offical -->
    <div style="background-color: #0b0b15; width: 100%; padding: 20px 0 100px 0; position: relative; z-index: 5;">

        <div class="container">
            <div class="affiliations-panel" data-aos="fade-up" data-aos-delay="500" style="background: #14141a; border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 20px; padding: 50px 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.5);">

                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <p style="color: #FCD116; font-size: 0.9rem; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 40px; font-weight: 800; text-shadow: 0 0 10px rgba(252, 209, 22, 0.3);">
                            — Officially Recognized By —
                        </p>

                        <div class="affiliations-wrapper" style="display: flex; justify-content: center; gap: 60px; flex-wrap: wrap; align-items: center;">

                            <div class="partner-logo">
                                <h2 class="metallic-text">UCI</h2>
                                <span class="partner-subtext">Union Cycliste<br>Internationale</span>
                            </div>

                            <div class="partner-logo">
                                <h2 class="metallic-text">ACC</h2>
                                <span class="partner-subtext">Asian Cycling<br>Confederation</span>
                            </div>

                            <div class="partner-logo">
                                <h2 class="metallic-text">POC</h2>
                                <span class="partner-subtext">Philippine Olympic<br>Committee</span>
                            </div>

                            <div class="partner-logo">
                                <h2 class="metallic-text">PSC</h2>
                                <span class="partner-subtext">Philippine Sports<br>Commission</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <style>
        .partner-logo {
            text-align: center;
            opacity: 0.7;
            transition: all 0.4s ease;
            cursor: default;
            transform: scale(0.95);
        }
        
        .partner-logo:hover {
            opacity: 1;
            transform: scale(1.05) translateY(-5px);
        }
        /* Metallic Text Effect */
        
        .metallic-text {
            margin: 0;
            font-weight: 900;
            letter-spacing: -2px;
            font-size: 3.5rem;
            /* Pwede mong gawing 3rem kung masyadong malaki */
            background: linear-gradient(to bottom, #ffffff, #777777);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.8));
        }
        
        .partner-subtext {
            font-size: 11px;
            color: #888 !important;
            display: block;
            text-transform: uppercase;
            margin-top: 5px;
            letter-spacing: 1px;
        }
        /* Gold hover effect */
        
        .partner-logo:hover .metallic-text {
            background: linear-gradient(to bottom, #FCD116, #B8860B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0px 0px 15px rgba(252, 209, 22, 0.6));
        }
    </style>
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
