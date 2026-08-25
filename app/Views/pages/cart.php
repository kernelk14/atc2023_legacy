<?php
$view->open([
    'title'  => 'Cart | Track Asia Cup | Tagaytay 2026',
    'header' => 'default',
    'active' => 'shop',
    'banner' => [
        'title'  => 'CART DETAILS',
        'crumbs' => [
            ['text' => 'Home', 'href' => '/', 'class' => 'home-page-link'],
            ['text' => 'CART', 'href' => '#', 'class' => 'current-page'],
        ],
    ],
]);
?>
    <!--================= Cart Section Start Here =================-->
    <div class="rts-cart-section section-gap">
        <div class="container">
            <h4 class="section-title">Product List</h4>
            <div class="row justify-content-between">
                <div class="col-xl-7">
                    <div class="cart-table-area">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="product-thumb"><img src="assets/images/products/product1.png"
                                                alt="product-thumb"></div>
                                    </td>
                                    <td>
                                        <div class="product-title-area">
                                            <span class="pretitle">Nighty</span>
                                            <h4 class="product-title">CLUB FOOTBALL</h4>
                                        </div>
                                    </td>
                                    <td><span class="product-price">$69.00</span></td>
                                    <td>
                                        <div class="cart-edit">
                                            <div class="quantity-edit">
                                                <button class="button"><i class="fal fa-minus minus"></i></button>
                                                <input type="text" class="input" value="3" />
                                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="last-td"><button class="remove-btn">Remove</button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-thumb"><img src="assets/images/products/product2.png"
                                                alt="product-thumb"></div>
                                    </td>
                                    <td>
                                        <div class="product-title-area">
                                            <span class="pretitle">Nighty</span>
                                            <h4 class="product-title">CLUB BOOT</h4>
                                        </div>
                                    </td>
                                    <td><span class="product-price">$69.00</span></td>
                                    <td>
                                        <div class="cart-edit">
                                            <div class="quantity-edit">
                                                <button class="button"><i class="fal fa-minus minus"></i></button>
                                                <input type="text" class="input" value="3" />
                                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="last-td"><button class="remove-btn">Remove</button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-thumb"><img src="assets/images/products/product3.png"
                                                alt="product-thumb"></div>
                                    </td>
                                    <td>
                                        <div class="product-title-area">
                                            <span class="pretitle">Nighty</span>
                                            <h4 class="product-title">CLUB JERSEY</h4>
                                        </div>
                                    </td>
                                    <td><span class="product-price">$69.00</span></td>
                                    <td>
                                        <div class="cart-edit">
                                            <div class="quantity-edit">
                                                <button class="button"><i class="fal fa-minus minus"></i></button>
                                                <input type="text" class="input" value="3" />
                                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="last-td"><button class="remove-btn">Remove</button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-thumb"><img src="assets/images/products/product4.png"
                                                alt="product-thumb"></div>
                                    </td>
                                    <td>
                                        <div class="product-title-area">
                                            <span class="pretitle">Nighty</span>
                                            <h4 class="product-title">CLUB JERSEY AWAY</h4>
                                        </div>
                                    </td>
                                    <td><span class="product-price">$69.00</span></td>
                                    <td>
                                        <div class="cart-edit">
                                            <div class="quantity-edit">
                                                <button class="button"><i class="fal fa-minus minus"></i></button>
                                                <input type="text" class="input" value="3" />
                                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="last-td"><button class="remove-btn">Remove</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="coupon-apply">
                            <span class="coupon-text">Coupon Code:</span>
                            <div class="apply-input">
                                <input type="text" placeholder="Apply coupon here">
                                <button type="submit" class="apply-btn">Apply <i
                                        class="fal fa-long-arrow-right ml--5"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="checkout-box">
                        <div class="checkout-box-inner">
                            <div class="subtotal-area">
                                <span class="title">Subtotal</span>
                                <span class="subtotal-price">$364.00</span>
                            </div>
                            <div class="shipping-check">
                                <span class="title">Shipping</span>
                                <div class="check-options">
                                    <form>
                                        <div class="form-group">
                                            <input type="checkbox" id="fltrt">
                                            <label class="check-title" for="fltrt">Flat rate</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="frsh">
                                            <label class="check-title" for="frsh">Free shipping</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="shipping-location">
                                <span class="shipping-to">Shipping to <span>NY.</span></span>
                                <span class="change-address"><i class="fal fa-map-marker-alt mr--5"></i>Change
                                    address</span>
                            </div>
                            <div class="total-area">
                                <span class="title">Total</span>
                                <span class="total-price">$364.00</span>
                            </div>
                        </div>
                        <a href="/checkout" class="procced-btn">Procced To Checkout</a>
                        <a href="/shop" class="continue-shopping"><i class="fal fa-long-arrow-left"></i> Continue
                            Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Cart Section End Here =================-->


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
