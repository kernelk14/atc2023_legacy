<?php
// Shared "ACC" header layout: preloader, navigation, off-canvas cart & mobile menu.
// Variables: $active (nav item to highlight), $banner (optional inner-page banner data).
$active = $active ?? '';
?>
    <!--================= Preloader Section Start Here =================-->
    <div id="rts__preloader">
        <div class="main-fader responsive-height-comments">
            <div class="loader">
                <svg viewBox="0 0 866 866" xmlns="http://www.w3.org/2000/svg">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 164.83 151.5">
                        <svg class="bike" viewBox="0 0 75 30" width="250px" height="160px">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1">
                                <g transform="translate(9.5,19)">
                                    <circle class="bike__tire" r="9" stroke-dasharray="56.549 56.549" />
                                    <g class="bike__spokes-spin" stroke-dasharray="31.416 31.416"
                                        stroke-dashoffset="-23.562">
                                        <circle class="bike__spokes" r="5" />
                                        <circle class="bike__spokes" r="5" transform="rotate(180,0,0)" />
                                    </g>
                                </g>
                                <g transform="translate(24,19)">
                                    <g class="bike__pedals-spin" stroke-dasharray="25.133 25.133"
                                        stroke-dashoffset="-21.991" transform="rotate(67.5,0,0)">
                                        <circle class="bike__pedals" r="4" />
                                        <circle class="bike__pedals" r="4" transform="rotate(180,0,0)" />
                                    </g>
                                </g>
                                <g transform="translate(38.5,19)">
                                    <circle class="bike__tire" r="9" stroke-dasharray="56.549 56.549" />
                                    <g class="bike__spokes-spin" stroke-dasharray="31.416 31.416"
                                        stroke-dashoffset="-23.562">
                                        <circle class="bike__spokes" r="5" />
                                        <circle class="bike__spokes" r="5" transform="rotate(180,0,0)" />
                                    </g>
                                </g>
                                <polyline class="bike__seat" points="14 3,18 3" stroke-dasharray="5 5" />
                                <polyline class="bike__body" points="16 3,24 19,9.5 19,18 8,34 7,24 19"
                                    stroke-dasharray="79 79" />
                                <path class="bike__handlebars" d="m30,2h6s1,0,1,1-1,1-1,1" stroke-dasharray="10 10" />
                                <polyline class="bike__front" points="32.5 2,38.5 19" stroke-dasharray="19 19" />
                            </g>
                        </svg>
                </svg>
                </svg>





                <!-- <svg viewBox="0 0 866 866" xmlns="http://www.w3.org/2000/svg">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 164.83 151.5">
                        <path class="path-0"
                            d="M117.24,69.24A8,8,0,0,0,115.67,67c-4.88-4-9.8-7.89-14.86-11.62A4.93,4.93,0,0,0,96.93,55c-5.76,1.89-11.4,4.17-17.18,6a4.36,4.36,0,0,0-3.42,4.12c-1,6.89-2.1,13.76-3,20.66a4,4,0,0,0,1,3.07c5.12,4.36,10.39,8.61,15.68,12.76a3.62,3.62,0,0,0,2.92.75c6.29-2.66,12.52-5.47,18.71-8.36a3.49,3.49,0,0,0,1.68-2.19c1.34-7.25,2.54-14.55,3.9-22.58Z"
                            fill="#e41b23" />
                        <path class="path-1"
                            d="M97.55,38.68A43.76,43.76,0,0,1,98,33.44c.41-2.36-.5-3.57-2.57-4.64C91.1,26.59,87,24,82.66,21.82a6.18,6.18,0,0,0-4-.71C73.45,22.55,68.32,24.25,63.22,26c-3.63,1.21-6.08,3.35-5.76,7.69a26.67,26.67,0,0,1-.6,4.92c-1.08,8.06-1.08,8.08,5.86,11.92,3.95,2.19,7.82,5.75,11.94,6.08s8.76-2.41,13.12-3.93c9.33-3.29,9.33-3.3,9.78-14Z"
                            fill="#e41b23" />
                        <path class="path-2"
                            d="M66.11,126.56c5.91-.91,11.37-1.7,16.81-2.71a3.3,3.3,0,0,0,1.87-2.17c1-4.06,1.73-8.19,2.84-12.24.54-2-.11-3-1.55-4.15-5-4-9.9-8.12-15-12a6.19,6.19,0,0,0-4.15-1.1c-5.35.66-10.7,1.54-16,2.54A4,4,0,0,0,48.34,97a109.13,109.13,0,0,0-3,12.19,4.47,4.47,0,0,0,1.34,3.6c5.54,4.36,11.23,8.53,16.91,12.69a10.84,10.84,0,0,0,2.57,1.11Z"
                            fill="#e41b23" />
                        <path class="path-3"
                            d="M127.42,104.12c4.1-2.1,8-3.93,11.72-6a6,6,0,0,0,2.27-3,58.22,58.22,0,0,0,3.18-29.92c-.26-1.7-8-7.28-9.71-6.85A5,5,0,0,0,133,59.65c-2.81,2.49-5.71,4.88-8.33,7.56a9.46,9.46,0,0,0-2.47,4.4c-1.29,6.49-2.38,13-3.35,19.55a5.73,5.73,0,0,0,.83,3.91c2.31,3.08,5,5.88,7.7,9Z"
                            fill="#e41b23" />
                        <path class="path-4"
                            d="M52.58,29.89c-2.15-.36-3.78-.54-5.39-.9-2.83-.64-4.92.1-7,2.32A64.1,64.1,0,0,0,26.09,54.64c-2.64,7.92-2.62,7.84,5.15,10.87,1.76.69,2.73.45,3.93-1C39.79,59,44.54,53.65,49.22,48.2a4.2,4.2,0,0,0,1.13-2c.8-5.32,1.49-10.68,2.24-16.34Z"
                            fill="#e41b23" />
                        <path class="path-5" fill="#e41b23"
                            d="M23,68.13c0,2.51,0,4.7,0,6.87a60.49,60.49,0,0,0,9.75,32.15c1.37,2.13,6.4,3,7,1.2,1.55-5,2.68-10.2,3.82-15.34.13-.58-.58-1.38-.94-2.06-2.51-4.77-5.47-9.38-7.45-14.37C32.94,71,28.22,69.84,23,68.13Z" />
                        <path class="path-6" fill="#e41b23"
                            d="M83.91,12.86c-.32.36-.66.71-1,1.07.9,1.13,1.57,2.62,2.73,3.33,4.71,2.84,9.56,5.48,14.39,8.1a9.29,9.29,0,0,0,3.13.83c5.45.69,10.89,1.38,16.35,1.94a10.41,10.41,0,0,0,3.07-.71c-11.48-9.9-24.26-14.61-38.71-14.56Z" />
                        <path class="path-7" fill="#e41b23"
                            d="M66.28,132.51c13.36,3.78,25.62,3.5,38-.9C91.68,129.59,79.36,128,66.28,132.51Z" />
                        <path class="path-8" fill="#e41b23"
                            d="M127.2,30.66l-1.27.37a18.58,18.58,0,0,0,1,3.08c3,5.52,6.21,10.89,8.89,16.54,1.34,2.83,3.41,3.82,6.49,4.9a60.38,60.38,0,0,0-15.12-24.9Z" />
                        <path class="bb-9" fill="#e41b23"
                            d="M117.35,125c5.58-2.32,16.9-13.84,18.1-19.2-2.41,1.46-5.18,2.36-6.78,4.23-4.21,5-7.89,10.37-11.32,15Z" />
                    </svg>
                </svg> -->
            </div>
        </div>
    </div>
    <!--================= Preloader End Here =================-->

    <div class="anywere anywere-home"></div>

    <!--================= Header Section Start Here =================-->
    <header id="rtsHeader" class="rts-header1">
        <div class="navbar-sticky">
            <div class="navbar-part navbar-part1">

                <div class="navbar-inner">
                    <div class="letterhead">
                        <div class="letterhead-inner">
                            <a href="/"><img src="assets/images/banner/tac2026-lh.png" alt="ACC Letterhead" class="letterhead-logo"></a>
                        </div>
                    </div>
                    <!-- <a href="/" class="logo"><img src="assets/images/2026_ACC_TAC_Letterhead_1.png" alt="sportius-logo" width="110" height="150"></a>
                        <a href="/" class="logo-sticky"><img src="assets/images/2026_ACC_TAC_Letterhead_1.png" alt="kester-logo"></a> -->
                    <div class="rts-menu">
                        <nav class="menus menu-toggle">
                            <ul class="nav__menu">
                                <li class="has-dropdown"><a class="menu-item<?= $active === 'home' ? ' active1' : '' ?>" href="/">Home</a>
                                    <!-- <ul class="dropdown-ul">
                                            <li class=""><a class="dropdown-link active" href="/">Homepage
                                                    1</a>
                                            </li>
                                             <li class="dropdown-li"><a class="dropdown-link"
                                                    href="/index-two">Homepage
                                                    2</a></li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="/index-three">Homepage 3</a></li> 
                                        </ul> -->
                                </li>

                                <li class="has-dropdown">
                                    <a class="menu-item" href="/about">About</a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link" href="/about-city">About the City</a>
                                            <li class="dropdown-li"><a class="dropdown-link" href="/about-competition">About the Competition</a>
                                                <li class="dropdown-li"><a class="dropdown-link" href="/about-organizer">About the organizer</a>
                                    </ul>
                                    </li>

                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="/about-competition">Competition Guide</a>
                                        <ul class="dropdown-ul mega-dropdown">
                                            <li class="mega-dropdown-li">
                                                <ul class="mega-dropdown-ul">
                                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                            href="/match-schedule">Schedule</a>
                                                    </li> -->
                                                    <li class="dropdown-li"><a class="dropdown-link" href="/team">Technical Handbook</a>
                                                    </li>

                                                    <li class="dropdown-li"><a class="dropdown-link" href="/venue">Vicinity Map of Velodrome</a>
                                                    </li>
                                                    <!--  <li class="dropdown-li"><a class="dropdown-link"
                                                            href="/league-standings">Awarding</a>
                                                    </li> -->
                                                    <!--<li class="dropdown-li"><a class="dropdown-link"
                                                    href="/league-standings">Standings</a>
                                                </li>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                        href="/awards">Awards</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="/faq">FAQ</a>
                                                    </li> -->
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown-li">
                                                <ul class="mega-dropdown-ul">
                                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                        href="/league-standings">Team Standing</a>
                                                    </li> -->
                                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                            href="/event">Event</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="/event-details">Event Details</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="/error">Error</a>
                                                    </li>-->
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown-li">
                                                <ul class="mega-dropdown-ul">
                                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                            href="/match-schedule">Competition Schedule</a>
                                                    </li> -->
                                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                            href="/match-result">Match
                                                            Result</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="/league-standings">Point Table</a>
                                                    </li> -->
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="has-dropdown"><a class="menu-item" href="/race-schedule">Race Info</a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="/race-schedule">Race Schedule</a></li>
                                            <li class="dropdown-li"><a class="dropdown-link" href="/start-list">Start Lists & Results</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="/organization">Contact Us</a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="/organization">Organization</a></li>
                                            <li class="dropdown-li"><a class="dropdown-link" href="/emergency-contact">Emergency Contact</a></li>
                                        </ul>
                                    </li>

                                    <!-- <li class="has-dropdown"><a class="menu-item" href="#">Shop</a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="/shop">Shop</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="/product-details">Product Details</a></li>
                                            <li class="dropdown-li"><a class="dropdown-link" href="/cart">Cart</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="/checkout">Checkout</a></li>
                                            <li class="dropdown-li"><a class="dropdown-link" href="/account">My
                                                    Account</a></li>
                                            <li class="dropdown-li"><a class="dropdown-link" href="/thank-you">Thank
                                                    you</a></li>
                                        </ul>
                                    </li> -->
                                    <!--  <li class="has-dropdown"><a class="menu-item" href="/gallery">Gallery</a>
                                        <ul class="dropdown-ul"> -->
                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/blog">News</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="/blog-details">News
                                                    Details</a></li> -->
                            </ul>
                            </li>
                            <!-- <li><a class="menu-item" href="/contact">Contact</a></li> -->
                            </ul>
                        </nav>
                    </div>
                    <div class="header-action-items header-action-items1">
                        <div class="search-part">
                            <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                            <div class="search-input-area">
                                <div class="container">
                                    <div class="search-input-inner">
                                        <!-- <select class="custom-select select-hidden">
                                                <option value="hide">All</option>
                                                <option value="all">All</option>
                                                <option value="league">League</option>
                                                <option value="club">Club</option>
                                                <option value="team">Team</option>
                                                <option value="player">Player</option>
                                                <option value="match">Match</option>
                                                <option value="score">Score</option> 
                                            </select>-->
                                        <div class="input-div">
                                            <div class="search-input-icon"><i class="rt-search mr--10"></i></div>
                                            <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                                        </div>
                                        <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="cart action-item">
                                <div class="cart-nav">
                                    <div class="basket-icon cart-icon icon"><a href="#0"><i
                                                class="fal fa-shopping-basket"></i></a></div>
                                </div>
                            </div> -->
                    </div>
                    <a class="hamburger-menu aitem">
                        <div class="hamburger-menu-inner">
                            <span></span>
                            <span class=""></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="cart-bar">
            <div class="cart-header">
                <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
                <div class="close-cart"><i class="fal fa-times"></i></div>
            </div>
            <div class="product-area">
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="assets/images/products/product1.png" alt="product-thumb">
                        </div>
                        <div class="item-wrapper">
                            <span class="product-name">Parachute Jacket</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">3 ×</span>
                                <span class="product-price">$198.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="3" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="assets/images/products/product2.png" alt="product-thumb">
                        </div>
                        <div class="item-wrapper">
                            <span class="product-name">Narrow Trouser</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">2 ×</span>
                                <span class="product-price">$88.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="2" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-item last-child">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="assets/images/products/product6.png" alt="product-thumb">
                        </div>
                        <div class="item-wrapper">
                            <span class="product-name">Bellyless Hoodie</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">1 ×</span>
                                <span class="product-price">$289.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="2" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-bottom-area">
                <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE FOR FREE SHIPPING</span>
                <span class="total-price">TOTAL: <span class="price">$556</span></span>
                <a href="/checkout" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
                <a href="/cart" class="view-btn cart-btn">VIEW CART</a>
            </div>
        </div>
        <!--================= Slide Bar Start Here =================-->
        <aside class="slide-bar">
            <div class="offset-sidebar">
                <button class="slide-bar-close ml--30"><i class="fal fa-times"></i></button>
                <div class="offset-widget offset-logo mb-30">
                    <a href="/">
                        <img src="assets/images/2026_ACC_TAC_Letterhead_1.png" alt="logo">
                    </a>
                </div>
            </div>
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu side-mobile-menu1">
                <ul id="mobile-menu-active">
                    <!-- <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="/">Home<i class="rt-angle-down"></i></a>
                         <ul class="sub-menu">
                            <li><a href="/">Home Style 1</a></li>
                            <li><a href="/index-two">Home Style 2</a></li>
                            <li><a href="/index-three">Home Style 3</a></li>
                        </ul> 
                    </li>-->
                    <li><a class="mm-link" href="/">Home</a></li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="/about">About <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu mega-dropdown-mobile">
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                                                        href="/match-schedule">Schedule</a>
                                                                                </li> -->
                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/team-details">Player
                                                                                        Details</a>
                                                                                </li>
                                                                                <li class="dropdown-li"><a class="dropdown-link" href="/history">History</a>
                                                                                </li>
                                                                                <li class="dropdown-li"><a class="dropdown-link" href="/faq">FAQ</a>
                                                                                </li> -->
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="/about-city">About the City</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="/about-competition">About the Competition</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="/about-organizer">About the Organizer</a>
                                    </li>
                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/event-details">Event
                                                                                        Details</a>
                                                                                </li>
                                                                                <li class="dropdown-li"><a class="dropdown-link" href="/error">Error</a>
                                                                                </li> -->
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                                                        href="/league-standings">Awarding</a>
                                                                                </li> -->
                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/match-result">Match
                                                                                        Result</a>
                                                                                </li>
                                                                                <li class="dropdown-li"><a class="dropdown-link" href="/league-standings">Point Table</a>
                                                                                </li> -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="#">Competition Guide <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu mega-dropdown-mobile">
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                                href="/match-schedule">Schedule</a>
                                                        </li> -->
                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/team-details">Player
                                                                Details</a>
                                                        </li>
                                                        <li class="dropdown-li"><a class="dropdown-link" href="/history">History</a>
                                                        </li>
                                                        <li class="dropdown-li"><a class="dropdown-link" href="/faq">FAQ</a>
                                                        </li> -->
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="/team">Technical Handbook</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="/venue">Vicinity Map of Velodrome</a>
                                    </li>
                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/event-details">Event
                                                                Details</a>
                                                        </li>
                                                        <li class="dropdown-li"><a class="dropdown-link" href="/error">Error</a>
                                                        </li> -->
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                                href="/league-standings">Awarding</a>
                                                        </li> -->
                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/match-result">Match
                                                                Result</a>
                                                        </li>
                                                        <li class="dropdown-li"><a class="dropdown-link" href="/league-standings">Point Table</a>
                                                        </li> -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="#">Race Info <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu mega-dropdown-mobile">
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                                                                            href="/match-schedule">Schedule</a>
                                                                                                    </li> -->
                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/team-details">Player
                                                                                                            Details</a>
                                                                                                    </li>
                                                                                                    <li class="dropdown-li"><a class="dropdown-link" href="/history">History</a>
                                                                                                    </li>
                                                                                                    <li class="dropdown-li"><a class="dropdown-link" href="/faq">FAQ</a>
                                                                                                    </li> -->
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="/race-schedule">Race Schedule</a>
                                    </li>

                                    <li class="dropdown-li"><a class="dropdown-link" href="/start-list">Start Lists and Results</a>
                                    </li>

                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/event-details">Event
                                                                                                            Details</a>
                                                                                                    </li>
                                                                                                    <li class="dropdown-li"><a class="dropdown-link" href="/error">Error</a>
                                                                                                    </li> -->
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                                                                            href="/league-standings">Awarding</a>
                                                                                                    </li> -->
                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/match-result">Match
                                                                                                            Result</a>
                                                                                                    </li>
                                                                                                    <li class="dropdown-li"><a class="dropdown-link" href="/league-standings">Point Table</a>
                                                                                                    </li> -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="#">Contact Us<i class="rt-angle-down"></i></a>
                        <ul class="sub-menu mega-dropdown-mobile">
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                                                                                                href="/match-schedule">Schedule</a>
                                                                                                                        </li> -->
                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/team-details">Player
                                                                                                                                Details</a>
                                                                                                                        </li>
                                                                                                                        <li class="dropdown-li"><a class="dropdown-link" href="/history">History</a>
                                                                                                                        </li>
                                                                                                                        <li class="dropdown-li"><a class="dropdown-link" href="/faq">FAQ</a>
                                                                                                                        </li> -->
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="/organization">Organization</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="/emergency-contact">Emergency Contact</a>
                                    </li>

                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/event-details">Event
                                                                                                                                Details</a>
                                                                                                                        </li>
                                                                                                                        <li class="dropdown-li"><a class="dropdown-link" href="/error">Error</a>
                                                                                                                        </li> -->
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <!-- <li class="dropdown-li"><a class="dropdown-link"
                                                                                                                                href="/league-standings">Awarding</a>
                                                                                                                        </li> -->
                                    <!-- <li class="dropdown-li"><a class="dropdown-link" href="/match-result">Match
                                                                                                                                Result</a>
                                                                                                                        </li>
                                                                                                                        <li class="dropdown-li"><a class="dropdown-link" href="/league-standings">Point Table</a>
                                                                                                                        </li> -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="/">Shop <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="/shop">Shop</a></li>
                            <li><a href="/product-details">Product Details</a></li>
                            <li><a href="/cart">cart</a></li>
                            <li><a href="/checkout">Checkout</a></li>
                            <li><a href="/account">My Account</a></li>
                            <li><a href="/thank-you">Thank You</a></li>
                        </ul>
                    </li> -->
                    <!--<li class="has-dropdown firstlvl">
                        <a class="mm-link" href="/gallery">Gallery <i class="rt-angle-down"> </i></a>
                        <ul class="sub-menu">
                            <li><a href="/blog">G</a></li>
                            <li><a href="/blog-details">News Details</a></li>
                        </ul> 
                    </li>-->
                    <!--    <li><a class="mm-link" href="/gallery">Gallery</a></li>
                    <li><a class="mm-link" href="/contact">Contact</a></li> -->
                </ul>
            </nav>
            <!-- side-mobile-menu end -->
            <div class="side-bar-social-links">
                <!-- <a href="https://www.facebook.com/profile.php?id=100094321766590" class="platform"><i
                        class="fab fa-facebook-f"></i></a> -->
                <!-- <a href="#0" class="platform"><i class="fab fa-twitter"></i></a>
                <a href="#0" class="platform"><i class="fab fa-behance"></i></a>
                <a href="#0" class="platform"><i class="fab fa-youtube"></i></a> -->
            </div>
        </aside>
    <?php if (!empty($banner)): ?>
    <?php $this->render('layouts/banner', ['banner' => $banner]); ?>
    <?php endif; ?>
    </header>
