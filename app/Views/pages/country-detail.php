<?php

require __DIR__ . '/countries.php';

/*
|--------------------------------------------------------------------------
| GET COUNTRY
|--------------------------------------------------------------------------
*/

$code = strtoupper($_GET['code'] ?? 'PHI');

$country = $countries[$code] ?? null;

if ($country === null) {
    http_response_code(404);
    $country = $countries['PHI'];
}

/*
|--------------------------------------------------------------------------
| CALCULATED VALUES
|--------------------------------------------------------------------------
*/

$totalDelegates = count($country['delegates']);

$totalEntries = count($country['entries']);


/*
|--------------------------------------------------------------------------
| STATUS LABEL
|--------------------------------------------------------------------------
*/

$statusLabels = [
    'registered' => 'Registered',
    'partial' => 'Partial',
    'not-registered' => 'Not Registered',
    'not-participating' => 'Not Participating',
];

$statusLabel = $statusLabels[$country['status']] ?? ucfirst($country['status']);


/*
|--------------------------------------------------------------------------
| PAGE
|--------------------------------------------------------------------------
*/


$view->open([
    'title'  => $country['name'] . ' | Participating Nations | Track Asia Cup | Tagaytay 2026',
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
        'title' => $country['name'],
        'crumbs' => [
            ['text' => 'Home','href' => '/home','class' => 'home-page-link'],
            ['text' => 'Participating Nations','href' => '/country-detail?code=' . urlencode($country['code']),'class' => 'current-page']
    ],
],

]);
?>
    </header>

    
    <!--================= MAIN CONTENT=================-->

    <!-- =========================================================
        COUNTRY DETAIL
        ========================================================= -->

    <section class="country-detail-section">

        <div class="container">

    
            <!-- =================================================
                COUNTRY HERO
                ================================================= -->

            <div class="country-hero">

                <div
                    class="country-hero-background"
                    style="background-image:
                        linear-gradient(
                            90deg,
                            rgba(3, 13, 29, .98) 0%,
                            rgba(3, 13, 29, .88) 45%,
                            rgba(3, 13, 29, .45) 100%
                        ),
                        url('<?= htmlspecialchars($country['flag-bg']) ?>');"
                ></div>

                <div class="country-hero-content">

                    <div class="country-flag-large">
                        <img
                            src="<?= htmlspecialchars($country['flag']) ?>"
                            alt="<?= htmlspecialchars($country['name']) ?> Flag"
                        >
                    </div>

                    <div class="country-heading">

                        <h1>
                            <?= htmlspecialchars(strtoupper($country['name'])) ?>
                        </h1>

                        <div class="country-meta">

                            <span class="country-status-badge <?= htmlspecialchars($country['status']) ?>">
                                <?= htmlspecialchars($statusLabel) ?>
                            </span>

                            <span class="country-meta-item">
                                Total Delegates:
                                <strong><?= $totalDelegates ?></strong>
                            </span>

                            <span class="country-divider">|</span>

                            <span class="country-meta-item">
                                Sports:
                                <strong><?= $totalEntries ?></strong>
                            </span>

                        </div>

                    </div>

                    <div class="country-quote">
                        <span>"ONE TEAM.</span>
                        <span>ONE NATION."</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                TABS
                ================================================= -->

            <div class="country-tabs">

                <button class="country-tab active" data-tab="delegates">
                    <i class="fas fa-users"></i>
                    Delegates
                </button>

                <button class="country-tab" data-tab="entries">
                    <i class="fas fa-bicycle"></i>
                    Entries by Event
                </button>

               

            </div>


            <!-- =================================================
                MAIN CONTENT
                ================================================= -->

            <div class="country-content-grid">

                <!-- LEFT -->
                <div class="country-main-panel">


                    <!-- =========================================
                        DELEGATES TAB
                        ========================================= -->

                    <div class="country-tab-content active" id="tab-delegates">

                        <div class="country-panel-title">

                            <div>
                                <h3>Delegates / Team Members</h3>
                                <p>
                                    <?= $totalDelegates ?> registered team members
                                </p>
                            </div>

                        </div>


                        <!-- SEARCH / FILTER -->

                        <div class="delegate-filters">

                            <div class="delegate-search">

                                <i class="fas fa-search"></i>

                                <input
                                    type="text"
                                    id="delegateSearch"
                                    placeholder="Search name, role or event..."
                                >

                            </div>

                            <div class="delegate-role-filter">

                                <select id="delegateRoleFilter">

                                    <option value="">All Roles</option>
                                    <option value="Athlete">Athlete</option>
                                    <option value="Coach">Coach</option>
                                    <option value="Team Official">Team Official</option>

                                </select>

                            </div>

                        </div>


                        <!-- TABLE -->

                        <div class="delegate-table-wrapper">

                            <table class="delegate-table">

                                <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Event(s)</th>
                                        <th>Status</th>
                                    </tr>

                                </thead>

                                <tbody id="delegateTableBody">

                                    <?php foreach ($country['delegates'] as $index => $delegate): ?>

                                        <tr
                                            class="delegate-row"
                                            data-name="<?= htmlspecialchars(strtolower($delegate['name'])) ?>"
                                            data-role="<?= htmlspecialchars($delegate['role']) ?>"
                                            data-event="<?= htmlspecialchars(strtolower($delegate['events'])) ?>"
                                        >

                                            <td class="delegate-number">
                                                <?= $index + 1 ?>
                                            </td>

                                            <td>

                                                <div class="delegate-person">

                                                    <div class="delegate-photo">

                                                        <img
                                                            src="<?= htmlspecialchars($delegate['photo']) ?>"
                                                            alt=""
                                                        >

                                                    </div>

                                                    <span>
                                                        <?= htmlspecialchars($delegate['name']) ?>
                                                    </span>

                                                </div>

                                            </td>

                                            <td>
                                                <?= htmlspecialchars($delegate['role']) ?>
                                            </td>

                                            <td>
                                                <?= htmlspecialchars($delegate['events']) ?>
                                            </td>

                                            <td>

                                                <span class="delegate-status <?= htmlspecialchars($delegate['status']) ?>">

                                                    <?php if ($delegate['status'] === 'confirmed'): ?>
                                                        Confirmed
                                                    <?php else: ?>
                                                        Pending
                                                    <?php endif; ?>

                                                </span>

                                            </td>

                                        </tr>

                                    <?php endforeach; ?>

                                </tbody>
                                

                            </table>

                                <?php if (empty($country['delegates'])): ?>

                                    <div class="empty-state">

                                        <img
                                            src="assets/images/watermarks/acc-tac-2026-white.png"
                                            alt=""
                                            class="empty-watermark"
                                        >

                                        <div class="empty-text">
                                            <h4>No Delegates Yet</h4>
                                            <p>Delegate information has not been added yet.</p>
                                        </div>

                                    </div>

                                <?php else: ?>

                                    <table class="delegate-table">

                                        <!-- your existing table code -->

                                    </table>

                                <?php endif; ?>

                        </div>

                    </div>


                    <!-- =========================================
                        ENTRIES TAB
                        ========================================= -->

                    <div class="country-tab-content" id="tab-entries">

                        <div class="country-panel-title">

                            <div>
                                <h3>Entries by Event</h3>
                                <p>
                                    Registered entries for this nation
                                </p>
                            </div>

                        </div>


                        <?php if (empty($country['entries'])): ?>

                            <div class="empty-state">

                                <img
                                    src="assets/images/watermarks/acc-tac-2026-white.png"
                                    alt=""
                                    class="empty-watermark"
                                >

                                <div class="empty-text">
                                    <h4>No Entries Yet</h4>
                                    <p>Event entries have not been added yet.</p>
                                </div>

                            </div>

                        <?php else: ?>

                            <div class="event-entry-list">

                                <?php foreach ($country['entries'] as $entry): ?>

                                    <div class="event-entry-item">

                                        <div class="event-entry-icon">
                                            <i class="fas fa-bicycle"></i>
                                        </div>

                                        <div class="event-entry-name">
                                            <?= htmlspecialchars($entry['event']) ?>
                                        </div>

                                        <div class="event-entry-count">
                                            <?= $entry['athletes'] ?>
                                            <span>
                                                <?= $entry['athletes'] === 1 ? 'Athlete' : 'Athletes' ?>
                                            </span>
                                        </div>

                                    </div>

                                <?php endforeach; ?>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>


                <!-- =================================================
                    QUICK INFO
                    ================================================= -->

                <aside class="country-quick-info">

                    <h3>Quick Info</h3>


                    <div class="quick-info-item">

                        <div class="quick-info-icon">
                            <i class="fas fa-passport"></i>
                        </div>

                        <div>
                            <span>NOC Code</span>
                            <strong><?= htmlspecialchars($country['code']) ?></strong>
                        </div>

                    </div>


                    <div class="quick-info-item">

                        <div class="quick-info-icon">
                            <i class="fas fa-users"></i>
                        </div>

                        <div>
                            <span>Total Delegates</span>
                            <strong><?= $totalDelegates ?></strong>
                        </div>

                    </div>


                    <div class="quick-info-item">

                        <div class="quick-info-icon">
                            <i class="fas fa-bicycle"></i>
                        </div>

                        <div>
                            <span>Participating Sports</span>
                            <strong><?= $totalEntries ?></strong>
                        </div>

                    </div>


                    <div class="quick-info-item">

                        <div class="quick-info-icon">
                            <i class="far fa-calendar-alt"></i>
                        </div>

                        <div>
                            <span>Registration Date</span>
                            <strong>
                                <?= htmlspecialchars($country['registration_date']) ?>
                            </strong>
                        </div>

                    </div>


                    <div class="quick-info-item">

                        <div class="quick-info-icon status-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>

                        <div>
                            <span>Status</span>

                            <strong>
                                <span class="quick-status <?= htmlspecialchars($country['status']) ?>">
                                    <?= htmlspecialchars($statusLabel) ?>
                                </span>
                            </strong>

                        </div>

                    </div>

                </aside>

            </div>

        </div>

    </section>


    <!-- =========================================================
        COUNTRY DETAIL JAVASCRIPT
        ========================================================= -->

    <script>

    document.addEventListener('DOMContentLoaded', function () {

        /*
        |--------------------------------------------------------------------------
        | TABS
        |--------------------------------------------------------------------------
        */

        const tabs = document.querySelectorAll('.country-tab');
        const contents = document.querySelectorAll('.country-tab-content');

        tabs.forEach(function (tab) {

            tab.addEventListener('click', function () {

                const target = this.dataset.tab;

                tabs.forEach(function (item) {
                    item.classList.remove('active');
                });

                contents.forEach(function (content) {
                    content.classList.remove('active');
                });

                this.classList.add('active');

                const targetContent = document.getElementById('tab-' + target);

                if (targetContent) {
                    targetContent.classList.add('active');
                }

            });

        });


        /*
        |--------------------------------------------------------------------------
        | DELEGATE SEARCH
        |--------------------------------------------------------------------------
        */

        const search = document.getElementById('delegateSearch');
        const roleFilter = document.getElementById('delegateRoleFilter');
        const rows = document.querySelectorAll('.delegate-row');

        function filterDelegates() {

            const searchValue = search.value.toLowerCase().trim();
            const roleValue = roleFilter.value;

            rows.forEach(function (row) {

                const name = row.dataset.name;
                const role = row.dataset.role;
                const event = row.dataset.event;

                const matchesSearch =
                    name.includes(searchValue) ||
                    role.toLowerCase().includes(searchValue) ||
                    event.includes(searchValue);

                const matchesRole =
                    roleValue === '' ||
                    role === roleValue;

                if (matchesSearch && matchesRole) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }

            });

        }

        search.addEventListener('input', filterDelegates);
        roleFilter.addEventListener('change', filterDelegates);

    });

    </script>


    <!--================= Footer Start Here =================-->
    <div class="footer footer1">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo"><img src="assets/images/2026_ACC_TAC_Letterhead_1.png" alt="footer-logo">
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
