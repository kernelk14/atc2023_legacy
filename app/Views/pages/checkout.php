<?php
$view->open([
    'title'  => 'Checkout | Track Asia Cup | Tagaytay 2026',
    'header' => 'default',
    'active' => 'shop',
    'banner' => [
        'title'  => 'CHECKOUT',
        'crumbs' => [
            ['text' => 'Home', 'href' => '/', 'class' => 'home-page-link'],
            ['text' => 'Checkout', 'href' => '#', 'class' => 'current-page'],
        ],
    ],
]);
?>
    <!--================= Checkout Section strat Here =================-->
    <div class="rts-checkout-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8">
                    <div class="coupon-area">
                        <div class="coupon-ask">
                            <span>Have a coupon?</span>
                            <button class="coupon-click">Click here to enter your code</button>
                        </div>
                        <div class="coupon-input-area">
                            <input type="text" placeholder="Enter Coupon Code...">
                            <button type="submit" class="apply-btn">Apply Coupon</button>
                        </div>
                    </div>
                    <form class="checkout-form">
                        <div class="row">
                            <div class="col-xl-6  col-md-6">
                                <div class="input-div"><input type="text" placeholder="First name**"></div>
                            </div>
                            <div class="col-xl-6  col-md-6">
                                <div class="input-div"><input type="text" placeholder="Last name**"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6  col-md-6">
                                <select>
                                    <option value="us">Country/Region</option>
                                    <option value="us">USA</option>
                                    <option value="ast">Australia</option>
                                    <option value="cnd">Canada</option>
                                    <option value="bd">Bangladesh</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="State**"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="Town/City**"></div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="Zip Code**"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="Street Address**"></div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text"
                                        placeholder="Appartments, suit, unit, etc (Optional)"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="Phone Number**"></div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="email" placeholder="Email Address**"></div>
                            </div>
                        </div>
                        <div class="check-options">
                            <div class="form-group">
                                <input type="checkbox" id="crat">
                                <label class="check-title" for="crat">Create an account?</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="shadd">
                                <label class="check-title" for="shadd">Ship to a different address?</label>
                            </div>
                        </div>
                        <textarea id="orderNotes" cols="80" rows="4" placeholder="Order notes (optional)"></textarea>
                    </form>
                </div>
                <div class="col-xl-4">
                    <div class="action-item">
                        <div class="action-top">
                            <span class="action-title">Product</span>
                            <span class="subtotal">Subtotal</span>
                        </div>
                        <div class="category-item">
                            <div class="category-item-inner">
                                <div class="category-title-area">
                                    <span class="category-title">Preschool Flex Runner × 1</span>
                                </div>
                                <div class="price">$69.00</div>
                            </div>
                        </div>
                        <div class="category-item">
                            <div class="category-item-inner">
                                <div class="category-title-area">
                                    <span class="category-title">Hiking Boots × 1
                                    </span>
                                </div>
                                <div class="price">$220.00</div>
                            </div>
                        </div>
                        <div class="category-item">
                            <div class="category-item-inner">
                                <div class="category-title-area">
                                    <span class="category-title">Tiktok Tshirt × 1</span>
                                </div>
                                <div class="price">$75.00</div>
                            </div>
                        </div>
                        <div class="action-middle">
                            <span class="subtotal">Subtotal</span>
                            <span class="total-price">$364.00</span>
                        </div>
                        <div class="shipping-options checkout-options">
                            <span class="shipping">Shipping</span>
                            <form>
                                <div class="form-group">
                                    <input type="checkbox" id="fltrt2">
                                    <label class="check-title" for="fltrt2">Flat rate</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="frsh2">
                                    <label class="check-title" for="frsh2">Free shipping</label>
                                </div>
                            </form>
                        </div>
                        <div class="action-bottom">
                            <span class="total">Total</span>
                            <span class="total-price">$364.00</span>
                        </div>
                    </div>
                    <div class="action-item m-0">
                        <div class="payment-options checkout-options">
                            <form>
                                <div class="form-group">
                                    <input type="checkbox" id="drbank">
                                    <label class="check-title" for="drbank">Direct bank transfer</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="freetrans">
                                    <label class="check-title" for="freetrans">Cash on delivery</label>
                                </div>
                                <div class="form-group last-child">
                                    <input type="checkbox" id="paypl">
                                    <label class="check-title" for="paypl">PayPal <a href="/blog-details">What is
                                            PayPal?</a></label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <a href="/thank-you" class="place-order-btn">Place Order</a>
                </div>
            </div>
        </div>
    </div>
    <!--================= Checkout Section End Here =================-->


    <!--================= Footer Start Here =================-->
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
