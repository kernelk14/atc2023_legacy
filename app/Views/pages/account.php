<?php
$view->open([
    'title'  => 'My Account | Track Asia Cup | Tagaytay 2026',
    'header' => 'default',
    'active' => 'shop',
    'banner' => [
        'title'  => 'ACCOUNT',
        'crumbs' => [
            ['text' => 'Home', 'href' => '/', 'class' => 'home-page-link'],
            ['text' => 'Account', 'href' => '#', 'class' => 'current-page'],
        ],
    ],
]);
?>
    <!--================= Account Section Start Here =================-->
    <div class="rts-account-section section-gap">
        <div class="container">
            <div class="account-inner">
                <div class="account-side-navigation">
                    <button class="filter-btn active" data-show=".dashboard"><i class="fal fa-chart-bar"></i>
                        Dashboard</button>
                    <button class="filter-btn" data-show=".orders"><i class="fal fa-shopping-cart"></i> Orders</button>
                    <button class="filter-btn" data-show=".address"><i class="fal fa-map-marker-alt"></i>
                        Address</button>
                    <button class="filter-btn" data-show=".accountdtls"><i class="fal fa-user"></i> Account
                        Details</button>
                    <a href="/login" class="filter-btn" data-show=".dashboard"><i
                            class="fal fa-long-arrow-left"></i>
                        Logout</a>
                </div>
                <div class="account-main-area">
                    <div class="account-main dashboard filterd-items">
                        <div class="account-profile-area">
                            <div class="profile-dp"><img src="assets/images/blog/authordp.jpg" alt="profile-dp"></div>
                            <div class="d-block">
                                <span class="profile-name"><span>Hi,</span> Rosalina D.</span>
                                <span class="profile-date d-block">June 23, 2023</span>
                            </div>
                        </div>
                        <p>From your account dashboard you can view your recent orders, manage your shipping and billing
                            addresses, and edit your password and account details.</p>

                        <div class="activity-box">
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-box-check"></i></div>
                                <span class="title">Active Orders</span>
                                <span class="value">33</span>
                            </div>
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-download"></i></div>
                                <span class="title">Downloads</span>
                                <span class="value">10</span>
                            </div>
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                <span class="title">Address</span>
                                <span class="value">12/A, New Castle, NYC</span>
                            </div>
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-user"></i></div>
                                <span class="title">Account Details</span>
                                <span class="value">33</span>
                            </div>
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-heart"></i></div>
                                <span class="title">Wishlist</span>
                                <span class="value">33</span>
                            </div>
                            <a href="/login" class="activity-item">
                                <div class="icon"><i class="fas fa-sign-out-alt"></i></div>
                                <span class="title">Logout</span>
                            </a>
                        </div>
                    </div>
                    <div class="account-main orders filterd-items hide">
                        <h2 class="mb--30">My Orders</h2>
                        <table class="table">
                            <thead>
                                <tr class="top-tr">
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1357</td>
                                    <td>March 45, 2020</td>
                                    <td>Processing</td>
                                    <td>$125.00 for 2 item</td>
                                    <td><a href="#" class="btn-small d-block">View</a></td>
                                </tr>
                                <tr>
                                    <td>#2468</td>
                                    <td>June 29, 2020</td>
                                    <td>Completed</td>
                                    <td>$364.00 for 5 item</td>
                                    <td><a href="#" class="btn-small d-block">View</a></td>
                                </tr>
                                <tr>
                                    <td>#2366</td>
                                    <td>August 02, 2020</td>
                                    <td>Completed</td>
                                    <td>$280.00 for 3 item</td>
                                    <td><a href="#" class="btn-small d-block">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="account-main address filterd-items hide">
                        <div class="row">
                            <div class="col-xl-5 col-md-5">
                                <div class="billing-address">
                                    <h2 class="mb--30">Billing Address</h2>
                                    <address>
                                        3522 Interstate<br>
                                        75 Business Spur,<br>
                                        Sault Ste. <br>Marie, MI 49783
                                    </address>
                                    <p class="mb--10">New York</p>
                                    <a href="#" class="btn-small">Edit</a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-5">
                                <div class="shipping-address">
                                    <h4 class="mb--30">Shipping Address</h4>
                                    <address>
                                        4299 Express Lane<br>
                                        Sarasota, <br>FL 34249 USA <br>Phone: 1.941.227.4444
                                    </address>
                                    <p class="mb--10">Sarasota</p>
                                    <a href="#" class="btn-small">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-main accountdtls filterd-items hide">
                        <div class="login-form">
                            <div class="section-title">
                                <h2>Login</h2>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form">
                                            <input type="text" class="form-control" id="username"
                                                placeholder="Username or email address*" required="">
                                        </div>
                                        <div class="form">

                                            <div class="password-input">
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Password*" required="">
                                                <span class="show-password-input"></span>
                                            </div>
                                        </div>
                                        <div class="form">
                                            <input type="checkbox" class="form-check-input" id="remember">
                                            <label for="remember" class="form-label">Remember Me</label>
                                        </div>
                                        <div class="form">
                                            <button type="submit" class="btn">Login <i
                                                    class="fal fa-long-arrow-right"></i></button>
                                        </div>
                                        <a class="forgot-password" href="#">Lost your password?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Account Section End Here =================-->
    <div class="footer footer1 inner">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo"><img src="assets/images/logo.png" alt="footer-logo">
                            </div>
                            <p class="footer-text">It was the end of a period in the 1980s
                                in which it seemed like every NBA Finals
                                matchup featured the Celtics sports club.</p>
                            <div class="social-links">
                                <a href="https://www.facebook.com/profile.php?id=100094321766590" target="_blank" rel="noopener" class="platform"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="#0" class="platform"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="#0" class="platform"><i
                                        class="fab fa-behance"></i></a>
                                <a href="https://www.youtube.com/watch?v=G4t6TqG5LM8" target="_blank" rel="noopener" class="platform"><i
                                        class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title"><span class="decorator"></span> ESSENTIAL LINKS</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item"><a href="/about">ABOUT CLUB</a></li>
                                <li class="widget-list-item"><a href="/contact">CONTACTS</a></li>
                                <li class="widget-list-item"><a href="/shop">PRICE TABLE</a></li>
                                <li class="widget-list-item"><a href="/shop">SHOP</a></li>
                                <li class="widget-list-item"><a href="/team">OUR PLAYERS</a></li>
                                <li class="widget-list-item"><a href="/venue">ARENA</a></li>
                                <li class="widget-list-item"><a href="/team-details">TEAM DETAILS</a></li>
                                <li class="widget-list-item"><a href="/history">OUR HISTORY</a></li>
                                <li class="widget-list-item"><a href="/gallery">TROPHY ROOM</a></li>
                                <li class="widget-list-item"><a href="/awards">SHORT CODE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget address-widget">
                            <h3 class="footer-widget-title"><span class="decorator"></span> GET IN TOUCH</h3>
                            <ul>
                                <li class="widget-list-item"><i class="fas fa-envelope-open"></i><a
                                        href="mailto:info@webmail.com">INFO@WEBMAIL.COM</a></li>
                                <li class="widget-list-item"><i class="fas fa-phone"></i><a href="tel:09877788890">098
                                        777
                                        888 90</a></li>
                                <li class="widget-list-item"><i class="fas fa-map-marker-alt"></i> <span>USA, CALIFORNIA
                                        20,
                                        FIRST <br>
                                        AVENUE, CALIFORNIA</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="bottom-area-inner">
                    <span class="copyright">COPYRIGHT & DESIGN BY <span class="brand">KESTER</span> - 2023</span>
                    <div class="footer-bottom-links">
                        <a href="#">TERMS & CONDITONS</a>
                        <a href="/faq">FAQ</a>
                        <a href="#">CAREER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Footer End Here =================-->


<?php $view->close(); ?>
