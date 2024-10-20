<?php

include './components/header.php';

?>


<!-- Page Banner Section Start -->
<div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg)">
    <div class="container">
        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Contact Us</h2>

            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->
    </div>
</div>
<!-- Page Banner Section End -->

<!-- Contact Section Start -->
<div class="section section-padding">
    <div class="container">
        <!-- Contact Wrapper Start -->
        <div class="contact-wrapper">
            <div class="row gx-0">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h2 class="title">Contact Info</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit sed eiusmod
                        </p>

                        <!-- Contact Info Items Start -->
                        <div class="contact-info-items">
                            <div class="single-contact-info">
                                <div class="info-icon">
                                    <i class="pe-7s-call"></i>
                                </div>
                                <div class="info-content">
                                    <p>
                                        <a href="tel:+00125458222">+00 125 458 222</a>
                                    </p>
                                </div>
                            </div>

                            <div class="single-contact-info">
                                <div class="info-icon">
                                    <i class="pe-7s-mail"></i>
                                </div>
                                <div class="info-content">
                                    <p>
                                        <a href="mailto:demo@yourmail.com">demo@yourmail.com</a>
                                    </p>
                                </div>
                            </div>

                            <div class="single-contact-info">
                                <div class="info-icon">
                                    <i class="pe-7s-map-marker"></i>
                                </div>
                                <div class="info-content">
                                    <p>Your Address Goese Here</p>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Info Items End -->

                        <!-- Contact Social Start -->
                        <ul class="social">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-tumblr"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                        <!-- Contact Social End -->

                        <img src="assets/images/contact-info.png" alt="Contact-info" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Contact Form Start  -->
                    <div class="contact-form">
                        <form id="contact-form" action="assets/php/contact.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="name" placeholder="Name*" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="email" name="email" placeholder="Email*" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="subject" placeholder="Subject" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="phone" placeholder="Phone No" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <textarea name="message" placeholder="Write your comments here"></textarea>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <button type="submit" class="btn btn-dark btn-hover-primary">
                                            Submit Review
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form End  -->
                </div>
            </div>
        </div>
        <!-- Contact Wrapper End -->
    </div>
</div>
<!-- Contact Section End -->

<!-- Contact Map Start -->
<div class="contact-map">
    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
</div>
<!-- Contact Map End -->

<!-- Footer Section Start -->
<div class="section footer-section">
    <!-- Footer Top Start -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-4">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <a href="index.html"><img src="assets/images/logo.png" width="154" height="46" alt="Logo" /></a>
                    </div>
                    <!-- Footer Logo End -->
                </div>
                <div class="col-xl-5 col-md-8">
                    <!-- Footer Contact & Payment End -->
                    <div class="footer-contact-payment">
                        <div class="footer-contact">
                            <div class="contact-icon">
                                <img src="assets/images/icon/icon-4.png" width="39" height="46" alt="Icon" />
                            </div>

                            <div class="contact-content">
                                <h6 class="title">Call Us:</h6>
                                <p>00 123 456 789</p>
                            </div>
                        </div>
                        <div class="footer-payment">
                            <img src="assets/images/payment.png" width="192" height="21" alt="Payment" />
                        </div>
                    </div>
                    <!-- Footer Contact & Payment End -->
                </div>
                <div class="col-xl-5">
                    <!-- Footer Subscribe End -->
                    <div class="footer-subscribe">
                        <span class="title">Subscribe Now :</span>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Your Mail" />
                                <button>
                                    <i class="pe-7s-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Footer Subscribe End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->

    <!-- Footer Widget Section Start -->
    <div class="footer-widget-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Customer Service</h4>

                        <ul class="footer-link">
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back guarantee!</a></li>
                            <li><a href="#">Returns-Shipping</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Information</h4>

                        <ul class="footer-link">
                            <li><a href="about.html">About Furbar</a></li>
                            <li>
                                <a href="shop-grid-4-column.html">How to Shop</a>
                            </li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="login.html">Log in</a></li>
                        </ul>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">My Account</h4>

                        <ul class="footer-link">
                            <li><a href="register.html">Sign In</a></li>
                            <li><a href="cart.html">View Cart</a></li>
                            <li><a href="wishlist.html">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-2 col-md-5 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Our Stores</h4>

                        <ul class="footer-link">
                            <li><a href="#">New aYork</a></li>
                            <li><a href="#">London SF</a></li>
                            <li><a href="#">Cockfosters BP</a></li>
                            <li><a href="#">Los Angeles</a></li>
                            <li><a href="#">Chicago</a></li>
                        </ul>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-3 col-md-7">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">About Us</h4>

                        <div class="widget-about">
                            <p>
                                Lorem ipsum dolor sit amet consect adipisicing
                                elit sed do eiusmod temp incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim
                            </p>
                        </div>
                        <div class="widget-social">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-tumblr"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Copyright End -->
    <div class="copyright">
        <div class="container">
            <div class="copyright-text">
                <p>
                    &copy; 2023 <span> Furbar </span> Made with
                    <i class="fa fa-heart" aria-hidden="true"></i> by
                    <a href="#">codecarnival</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer Copyright End -->
</div>
<!-- Footer Section End -->

<!--Back To Start-->
<button id="backBtn" class="back-to-top"><i class="pe-7s-angle-up"></i></button>
<!--Back To End-->
<!-- JS
    ============================================ -->

<!-- Modernizer & jQuery JS -->
<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

<!-- Bootstrap JS -->
<script src="assets/js/plugins/popper.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<!-- Plugins JS -->
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/ajax-contact.js"></script>
<script src="assets/js/plugins/odometer.min.js"></script>
<script src="assets/js/plugins/select2.min.js"></script>
<script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
<script src="assets/js/plugins/jquery.zoom.min.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>