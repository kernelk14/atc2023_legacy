<?php
$view->open([
    'title'  => 'Tagaytay Tourism | Track Asia Cup | Tagaytay 2026',
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
               TAGAYTAY TOURISM PAGE
               Uses the existing Track Asia Cup theme/header/footer
               ========================================================= */

            .tourism-page {
                background: #0a0c1b;
                color: #fff;
            }

            /* HERO */
            .tourism-hero {
                min-height: 520px;
                display: flex;
                align-items: center;
                position: relative;
                overflow: hidden;

                background:
                    linear-gradient(
                        90deg,
                        rgba(5, 8, 20, 0.96) 0%,
                        rgba(8, 18, 52, 0.80) 48%,
                        rgba(8, 24, 65, 0.35) 100%
                    ),
                    url("assets/images/tourism/taal.jpg")
                    center / cover no-repeat;
            }

            .tourism-hero::after {
                content: "";
                position: absolute;
                inset: 0;
                background: linear-gradient(
                    0deg,
                    #0a0c1b 0%,
                    transparent 30%
                );
                pointer-events: none;
            }

            .tourism-hero-content {
                width: min(1180px, 92%);
                margin: 0 auto;
                position: relative;
                z-index: 2;
                padding-top: 250px;
                padding-bottom: -50px;
            }

            .tourism-eyebrow {
                display: inline-block;
                color: #165cff;
                
                font-size: 16px;
                font-weight: 700;
                letter-spacing: 2px;
                text-transform: uppercase;
                margin-bottom: 10px;
            }

            .tourism-hero h1 {
                max-width: 850px;
                margin: 0;
                
                font-size: clamp(60px, 8vw, 105px);
                line-height: .88;
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: .5px;
            }

            .tourism-hero h1 span {
                color: #165cff;
            }
            .tourism-hero h1 {
                color: #fff;
            }

            .tourism-hero p {
                max-width: 650px;
                margin: 25px 0 30px;
                color: #d9dfeb;
                font-size: 16px;
                line-height: 1.8;
            }

            .tourism-btn {
                display: inline-flex;
                align-items: center;
                gap: 9px;
                padding: 14px 25px;
                background-color: #0d6efd;
                border-color: #0d6efd;
                color: #fff !important;
                
                font-size: 16px;
                font-weight: 700;
                letter-spacing: 1px;
                text-transform: uppercase;
                border: 1px solid rgba(255,255,255,.12);
                transition: all .2s ease;
                border-radius: 5px;
            }

            .tourism-btn:hover {
                background-color: #0d6efd;
                border-color: #0d6efd;
                color: #fff !important;
                transform: translateY(-2px);
            }

            /* GENERAL */
            .tourism-section {
                padding: 85px 0;
            }

            .tourism-container {
                width: min(1180px, 92%);
                margin: 0 auto;
            }

            .tourism-section-heading {
                text-align: center;
                margin-bottom: 45px;
            }

            .tourism-section-heading .tourism-eyebrow {
                margin-bottom: 5px;
            }

            .tourism-section-heading h2 {
                color: #fff;
                margin: 0;
                
                font-size: 52px;
                line-height: 1;
                font-weight: 800;
                text-transform: uppercase;
            }

            .tourism-section-heading p {
                max-width: 700px;
                margin: 15px auto 0;
                color: #9da8bc;
                font-size: 14px;
            }

            /* INTRO */
            .tourism-intro {
                background: #0a0c1b;
            }

            .tourism-intro-grid {
                display: grid;
                grid-template-columns: 1.1fr .9fr;
                gap: 55px;
                align-items: center;
            }

            .tourism-intro-copy h3 {
                margin: 0 0 18px;
                
                font-size: 44px;
                line-height: 1;
                font-weight: 800;
                text-transform: uppercase;
            }

            .tourism-intro-copy h3 span {
                color: #165cff;
            }
                .tourism-intro-copy h3 {
                color: #fff;
            }
                h3{
                color: #fff;
                }

            .tourism-intro-copy p {
                color: #c1c9d8;
                font-size: 15px;
                line-height: 1.8;
                margin-bottom: 15px;
            }

            /* STATS */
            .tourism-stats {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1px;
                background: rgba(255,255,255,.09);
                border: 1px solid rgba(255,255,255,.09);
            }

            .tourism-stat {
                background: #101529;
                padding: 30px;
            }

            .tourism-stat strong {
                display: block;
                color: #165cff;
                
                font-size: 36px;
                line-height: 1;
                font-weight: 800;
                text-transform: uppercase;
            }

            .tourism-stat small {
                display: block;
                margin-top: 9px;
                color: #9da8bc;
                font-size: 11px;
                line-height: 1.5;
                text-transform: uppercase;
                letter-spacing: .8px;
            }

            /* DESTINATIONS */
            .tourism-destinations {
                background: #0c1020;
                border-top: 1px solid rgba(255,255,255,.08);
                border-bottom: 1px solid rgba(255,255,255,.08);
            }

            .tourism-cards {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }

            .tourism-card {
                background: #182237;
                border: 1px solid rgba(255,255,255,.09);
                overflow: hidden;
                transition: all .25s ease;
            }

            .tourism-card:hover {
                transform: translateY(-5px);
                border-color: rgba(22,92,255,.65);
            }

            .tourism-card-image {
                height: 210px;
                background-size: cover;
                background-position: center;
            }

            /* =========================================================
                DESTINATION CARD IMAGES
                ========================================================= */

                /* 1 - PEOPLES PARK IN THE SKY */
                .tourism-card:nth-child(1) .tourism-card-image {
                    background-image:
                       url("assets/images/tourism/peoples-park.jpg") 
                }


                /* 2 - TAGAYTAY PICNIC GROVE */
                .tourism-card:nth-child(2) .tourism-card-image {
                    background-image:
                        url("assets/images/tourism/picnic-grove.jpg")
                }


                /* 3 - SKY RANCH TAGAYTAY */
                .tourism-card:nth-child(3) .tourism-card-image {
                    background-image:
                        url("assets/images/tourism/sky-ranch.jpg")
                }


                /* 4 - PUZZLE MANSION */
                .tourism-card:nth-child(4) .tourism-card-image {
                    background-image:
                        url("assets/images/tourism/puzzle-mansion.jpg")
                }


                /* 5 - MAHOGANY MARKET */
                .tourism-card:nth-child(5) .tourism-card-image {
                    background-image:
                        url("assets/images/tourism/mahogany-market.jpg")
                }


                /* 6 - TAGAYTAY / TAAL SCENIC VIEW */
                .tourism-card:nth-child(6) .tourism-card-image {
                    background-image:
                        url("assets/images/tourism/view.jpg")
                }

            .tourism-card-body {
                padding: 24px;
            }

            .tourism-card-tag {
                color: #165cff;
                
                font-size: 13px;
                font-weight: 700;
                letter-spacing: 1px;
                text-transform: uppercase;
            }

            .tourism-card h3 {
                margin: 5px 0 10px;
                
                font-size: 29px;
                line-height: 1;
                font-weight: 800;
                text-transform: uppercase;
            }

            .tourism-card p {
                margin: 0;
                color: #fff;
                font-size: 13px;
                line-height: 1.7;
            }

            /* =========================================================
                EXPERIENCE SECTION
                TAGAYTAY SCENIC VIEW
                ========================================================= */

                .tourism-experience {
                    background:
                        linear-gradient(
                            90deg,
                            rgba(8,12,28,.94),
                            rgba(13,38,90,.78)
                        ),
                        url("assets/images/tourism/taal.jpg")
                        center / cover no-repeat;
                }

            .tourism-experience-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 1px;
                background: rgba(255,255,255,.12);
                border: 1px solid rgba(255,255,255,.12);
            }

            .tourism-experience-item {
                padding: 32px 20px;
                background: rgba(8,12,27,.68);
                text-align: center;
            }

            .tourism-experience-item b {
                display: block;
                
                font-size: 29px;
                font-weight: 800;
                text-transform: uppercase;
            }

            .tourism-experience-item span {
                color: #b5c0d2;
                font-size: 12px;
            }

            /* CTA */
            .tourism-cta {
                padding: 85px 20px;
                text-align: center;
                background: #0a0c1b;
            }

            .tourism-cta h2 {
                color: #fff;
                margin: 0;
                
                font-size: 54px;
                line-height: 1;
                font-weight: 800;
                text-transform: uppercase;
            }

            .tourism-cta p {
                max-width: 650px;
                margin: 15px auto 27px;
                color: #9da8bc;
                font-size: 14px;
            }

            /* TAGAYTAY TOURISM CONTACT INFO */
            .tourism-contact-info {
                margin-top: 28px;
                display: flex;
                flex-direction: column;
                gap: 12px;
            }

            .tourism-contact-item {
                display: flex;
                align-items: center;
                gap: 12px;
                color: #fff;
                font-size: 15px;
                line-height: 1.4;
            }

            .tourism-contact-item i {
                width: 20px;
                text-align: center;
                color: #fff;
                font-size: 16px;
            }

            .tourism-contact-item a {
                color: #fff;
                text-decoration: none;
                transition: color .2s ease;
            }

            .tourism-contact-item a:hover {
                color: #165cff;
            }

            /* =========================================================
            RESPONSIVE
            ========================================================= */

            @media (max-width: 1440px) {
                    .tourism-hero-content {
                        padding-top: 200px;
                        padding-bottom: 50px;
                    }
                }

            /* TABLET / SMALL DESKTOP
            Around 900px 1199px
            */

            @media (max-width: 1199px) {

                .tourism-hero {
                    min-height: 520px;
                }

                .tourism-hero-content {
                    width: 90%;
                    padding-top: 200px;
                    padding-bottom: 50px;
                }

                .tourism-hero h1 {
                    font-size: clamp(52px, 7vw, 82px);
                }

            }


            /* TABLET
            Around 768px 991px
            */

            @media (max-width: 991px) {

                .tourism-intro-grid {
                    grid-template-columns: 1fr;
                    gap: 40px;
                }

                .tourism-cards {
                    grid-template-columns: repeat(2, 1fr);
                }

                .tourism-experience-grid {
                    grid-template-columns: repeat(2, 1fr);
                }

                .tourism-hero {
                    min-height: 520px;
                }

                .tourism-hero-content {
                    width: 90%;
                    padding-top: 160px;
                    padding-bottom: 50px;
                }

                .tourism-hero h1 {
                    font-size: clamp(50px, 7.5vw, 75px);
                }

            }


            /* MOBILE
            Around 480px 767px
            */

            @media (max-width: 767px) {

                .tourism-hero {
                    min-height: 560px;

                    /* Keeps the background looking good on phones */
                    background-position: 60% center;
                }

                .tourism-hero-content {
                    width: 90%;
                    padding-top: 160px;
                    padding-bottom: 50px;
                }

                .tourism-eyebrow {
                    font-size: 13px;
                    letter-spacing: 1.5px;
                    line-height: 1.5;
                }

                .tourism-hero h1 {
                    font-size: clamp(42px, 11vw, 65px);
                    line-height: .9;
                }

                .tourism-hero p {
                    font-size: 14px;
                    line-height: 1.7;
                    margin: 22px 0 25px;
                }

                .tourism-btn {
                    font-size: 13px;
                    padding: 13px 20px;
                }

                .tourism-section {
                    padding: 60px 0;
                }

                .tourism-section-heading h2,
                .tourism-cta h2 {
                    font-size: 43px;
                }

                .tourism-cards {
                    grid-template-columns: 1fr;
                }

                .tourism-experience-grid {
                    grid-template-columns: 1fr;
                }

                .tourism-intro-copy h3 {
                    font-size: 38px;
                }

            }


            /* SMALL MOBILE
            Around 320p 479px
            */

            @media (max-width: 480px) {

                .tourism-hero {
                    min-height: 580px;
                }

                .tourism-hero-content {
                    width: 88%;
                    padding-top: 130px;
                    padding-bottom: 50px;
                }

                .tourism-hero h1 {
                    font-size: clamp(38px, 12vw, 55px);
                    line-height: .92;
                }

                .tourism-hero p {
                    font-size: 14px;
                    line-height: 1.65;
                }

                .tourism-btn {
                    font-size: 12px;
                    padding: 12px 17px;
                }

                .tourism-stats {
                    grid-template-columns: 1fr;
                }

            }
        </style>
    ',
]);
?>


<!-- =========================================================
     TAGAYTAY TOURISM CONTENT
     ========================================================= -->

<div class="tourism-page">

<!-- HERO -->
<section class="tourism-hero">
    <div class="tourism-hero-content">

        <div class="tourism-eyebrow">
            Beyond the Race • Discover Tagaytay City
        </div>

        <h1>
            RIDE THE</br>
            <span>RHYTHM</span></br>
            OF TAGAYTAY
        </h1>

        <p>
            Experience the cool climate, scenic ridge views, exciting
            attractions, food, culture, and relaxing atmosphere that
            make Tagaytay City a favorite destination in South Luzon.
        </p>

        <a
            class="tourism-btn"
            href="#destinations"
        >
            Explore Tagaytay
            <i class="fas fa-arrow-right"></i>
        </a>

        <!-- TAGAYTAY TOURISM CONTACT INFORMATION -->
<div class="tourism-contact-info">

    <div class="tourism-contact-item">
        <i class="fas fa-phone"></i>
        <a href="tel:09171429785">
            +63 917 142 9785
        </a>
    </div>

    <div class="tourism-contact-item">
        <i class="fas fa-envelope"></i>
        <a href="mailto:tagaytaytourism8@gmail.com">
            tagaytaytourism8@gmail.com
        </a>
    </div>

    <div class="tourism-contact-item">
        <i class="fas fa-globe"></i>
        <a
            href="https://tagaytay.gov.ph"
            target="_blank"
            rel="noopener noreferrer"
        >
            tagaytay.gov.ph
        </a>
    </div>


    </div>
</section>


<!-- INTRODUCTION -->
<section class="tourism-section tourism-intro">

    <div class="tourism-container">

        <div class="tourism-intro-grid">

            <div class="tourism-intro-copy">

                <div class="tourism-eyebrow">
                    The City
                </div>

                <h3>
                    Where <span>speed</span> meets a scenic escape.
                </h3>

                <p>
                    Tagaytay City is known for its refreshing atmosphere
                    and memorable views of Taal Lake and Taal Volcano.
                    Its combination of nature, leisure, dining, and
                    attractions makes it an ideal place to explore before
                    or after the Track Asia Cup 2026.
                </p>

                <p>
                    From elevated viewpoints and family parks to local
                    food and relaxing destinations, Tagaytay offers
                    visitors many ways to enjoy the city beyond the
                    race track.
                </p>

                <a
                    class="tourism-btn"
                    href="https://www.facebook.com/tagaytaytourism/"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Official Tourism Facebook
                    <i class="fab fa-facebook-f"></i>
                </a>

            </div>


            <div class="tourism-stats">

                <div class="tourism-stat">
                    <strong>TAAL</strong>
                    <small>
                        Scenic lake &amp; volcano views
                    </small>
                </div>

                <div class="tourism-stat">
                    <strong>COOL</strong>
                    <small>
                        Refreshing ridge atmosphere
                    </small>
                </div>

                <div class="tourism-stat">
                    <strong>PLAY</strong>
                    <small>
                        Parks &amp; leisure attractions
                    </small>
                </div>

                <div class="tourism-stat">
                    <strong>TASTE</strong>
                    <small>
                        Dining &amp; local experiences
                    </small>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- DESTINATIONS -->
<section
    class="tourism-section tourism-destinations"
    id="destinations"
>

    <div class="tourism-container">

        <div class="tourism-section-heading">

            <div class="tourism-eyebrow">
                Explore the City
            </div>

            <h2>
                Featured Destinations
            </h2>

            <p>
                Discover some of the destinations associated with
                Tagaytay's tourism experience.
            </p>

        </div>


        <div class="tourism-cards">

            <!-- CARD 1 -->
            <article class="tourism-card">

                <div class="tourism-card-image"></div>

                <div class="tourism-card-body">

                    <div class="tourism-card-tag">
                        Viewpoint
                    </div>

                    <h3>
                        People's Park in the Sky
                    </h3>

                    <p>
                        A well-known elevated attraction offering
                        panoramic views of Taal Lake, the volcano,
                        and the surrounding city.
                    </p>

                </div>

            </article>


            <!-- CARD 2 -->
            <article class="tourism-card">

                <div class="tourism-card-image"></div>

                <div class="tourism-card-body">

                    <div class="tourism-card-tag">
                        Nature &amp; Recreation
                    </div>

                    <h3>
                        Tagaytay Picnic Grove
                    </h3>

                    <p>
                        A popular destination for picnics, sightseeing,
                        family outings, and outdoor activities with
                        views toward Taal Volcano.
                    </p>

                </div>

            </article>


            <!-- CARD 3 -->
            <article class="tourism-card">

                <div class="tourism-card-image"></div>

                <div class="tourism-card-body">

                    <div class="tourism-card-tag">
                        Leisure
                    </div>

                    <h3>
                        Sky Ranch
                    </h3>

                    <p>
                        A themed leisure park with rides, food, and
                        activities suited for families and groups.
                    </p>

                </div>

            </article>


            <!-- CARD 4 -->
           <article class="tourism-card">

                <div class="tourism-card-image"></div>

                <div class="tourism-card-body">

                    <div class="tourism-card-tag">
                        Arts &amp; Culture
                    </div>

                    <h3>
                        Puzzle Mansion
                    </h3>

                    <p>
                        A unique Tagaytay attraction famous for its extensive
                        collection of jigsaw puzzles and its Guinness World
                        Record recognition for having the world's largest
                        collection of jigsaw puzzles.
                    </p>

                </div>

            </article>


            <!-- CARD 5 -->
            <article class="tourism-card">

                <div class="tourism-card-image"></div>

                <div class="tourism-card-body">

                    <div class="tourism-card-tag">
                        Food &amp; Local Life
                    </div>

                    <h3>
                        Mahogany Market
                    </h3>

                    <p>
                        A local market experience that adds food,
                        shopping, and everyday Tagaytay character
                        to a city visit.
                    </p>

                </div>

            </article>


            <!-- CARD 6 -->
            <article class="tourism-card">

                <div class="tourism-card-image"></div>

                <div class="tourism-card-body">

                    <div class="tourism-card-tag">
                        Relaxation
                    </div>

                    <h3>
                        Tagaytay Getaway
                    </h3>

                    <p>
                        Take time to enjoy the city's cool atmosphere,
                        scenic stops, restaurants, cafés, and
                        staycation destinations.
                    </p>

                </div>

            </article>

        </div>

    </div>

</section>


<!-- EXPERIENCE -->
<section class="tourism-section tourism-experience">

    <div class="tourism-container">

        <div class="tourism-section-heading">

            <div class="tourism-eyebrow">
                Your Tagaytay Experience
            </div>

            <h2>
                More Than a Race
            </h2>

        </div>


        <div class="tourism-experience-grid">

            <div class="tourism-experience-item">
                <b>SCENIC</b>
                <span>
                    Panoramic ridge views
                </span>
            </div>

            <div class="tourism-experience-item">
                <b>ACTIVE</b>
                <span>
                    Outdoor &amp; leisure activities
                </span>
            </div>

            <div class="tourism-experience-item">
                <b>CULTURAL</b>
                <span>
                    Arts &amp; local destinations
                </span>
            </div>

            <div class="tourism-experience-item">
                <b>FLAVOR</b>
                <span>
                    Food &amp; dining experiences
                </span>
            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="tourism-cta">

    <div class="tourism-container">

        <div class="tourism-eyebrow">
            Plan Your Visit
        </div>

        <h2>
            Discover Tagaytay City
        </h2>

        <p>
            Follow the official Tagaytay tourism page for tourism
            announcements, destinations, activities, and local updates.
        </p>

        <a
            class="tourism-btn"
            href="https://www.facebook.com/tagaytaytourism/"
            target="_blank"
            rel="noopener noreferrer"
        >
            Visit Tagaytay Tourism Facebook
            <i class="fab fa-facebook-f"></i>
        </a>

    </div>

</section>

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
