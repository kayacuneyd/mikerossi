<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Furbar - Furniture eCommerce Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css" />

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css" />

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/style.min.css" />
</head>


<body>
    <!-- Header Start  -->
    <div class="header-area header-white header-sticky d-none d-lg-block">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="index.php"><img src="../assets/images/logo.png" width="154" height="46" alt="Logo" /></a>
                    </div>
                    <!-- Header Logo End -->
                </div>
                <div class="col-lg-3">
                    <div class="header-menu">
                        <ul class="nav-menu">
                            <li>
                                <a href="index.php">Home</a>

                            </li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Header Mobile Start -->
    <div class="header-mobile section d-lg-none">
        <!-- Header Mobile top Start -->
        <div class="header-mobile-top header-sticky">
            <div class="container">
                <div class="row row-cols-3 gx-2 align-items-center">
                    <div class="col">
                        <!-- Header Toggle Start -->
                        <div class="header-toggle">
                            <button class="mobile-menu-open" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <!-- Header Toggle End -->
                    </div>
                    <div class="col">
                        <!-- Header Logo Start -->
                        <div class="header-logo text-center">
                            <a href="index.php"><img src="../assets/images/logo.png" width="154" height="46" alt="Logo" /></a>
                        </div>
                        <!-- Header Logo End -->
                    </div>
                    <div class="col">
                        <!-- Header Action Start -->
                        <div class="header-meta">
                            <div class="dropdown">
                                <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                                <ul class="dropdown-menu dropdown-profile">
                                    <li>
                                        <a href="my-account.php">My Account</a>
                                    </li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="login.php">Sign In</a></li>
                                </ul>
                            </div>
                            <a class="action" href="cart.php">
                                <i class="pe-7s-shopbag"></i>
                                <span class="number">3</span>
                            </a>
                        </div>
                        <!-- Header Action End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Mobile top End -->

        <!-- Header Mobile Bottom End -->
        <div class="header-mobile-bottom">
            <div class="container">
                <!-- Header Search Start -->
                <div class="header-search">
                    <form action="#">
                        <input type="text" placeholder="Enter your search key ... " />
                        <button><i class="pe-7s-search"></i></button>
                    </form>
                </div>
                <!-- Header Search End -->
            </div>
        </div>
        <!-- Header Mobile Bottom End -->
    </div>
    <!-- Header Mobile End -->

    <!-- off Canvas Start -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
        <div class="offcanvas-header">
            <!-- Canvas Action Start -->
            <div class="canvas-action">
                <a class="action" href="compare.php"><i class="icon-sliders"></i> Compare
                    <span class="action-num">(3)</span></a>
                <a class="action" href="wishlist.php"><i class="icon-heart"></i> Wishlist
                    <span class="action-num">(3)</span></a>
            </div>
            <!-- Canvas Action end -->

            <!-- Canvas Close bar Start -->
            <div class="canvas-close-bar">
                <span>Menu</span>
                <button class="menu-close" data-bs-dismiss="offcanvas">
                    <i class="pe-7s-angle-left"></i>
                </button>
            </div>
            <!-- Canvas Close bar End -->
        </div>

        <div class="offcanvas-body">
            <!-- Canvas Menu Start -->
            <div class="canvas-menu">
                <nav>
                    <ul class="nav-menu">
                        <li>
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.php">Home 01</a></li>
                                <li><a href="index-2.php">Home 02</a></li>
                            </ul>
                        </li>
                        <li><a href="about.php">About</a></li>
                        <li>
                            <a href="#">Shop</a>
                            <ul class="mega-sub-menu">
                                <li>
                                    <a href="#" class="menu-title">Shop Grid</a>

                                    <ul class="menu-item">
                                        <li>
                                            <a href="shop-grid-3-column.php">Shop Grid 3 Column</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-4-column.php">Shop Grid 4 Column</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-left-sidebar.php">Shop Grid Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right-sidebar.php">Shop Grid Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="menu-title">Shop List</a>

                                    <ul class="menu-item">
                                        <li><a href="shop-list.php">Shop List</a></li>
                                        <li>
                                            <a href="shop-list-left-sidebar.php">Shop List Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-list-right-sidebar.php">Shop List Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="menu-title">Shop Single</a>

                                    <ul class="menu-item">
                                        <li><a href="product-details.php">Product Details</a></li>
                                        <li>
                                            <a href="product-details-affiliate.php">Product Details Affiliate</a>
                                        </li>
                                        <li>
                                            <a href="product-details-gallery.php">Product Details Gallery</a>
                                        </li>
                                        <li>
                                            <a href="product-details-group.php">Product Details Group</a>
                                        </li>
                                        <li>
                                            <a href="product-details-sticky.php">Product Details Sticky</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="menu-title">Page</a>

                                    <ul class="menu-item">
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="cart.php">Cart</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="my-account.php">My Account</a></li>
                                    </ul>
                                </li>

                                <li class="manu-banner">
                                    <a href="#"><img src="../assets/images/banner-menu-01.jpg" width="465" height="170" alt="Banner" /></a>
                                </li>
                                <li class="manu-banner">
                                    <a href="#"><img src="../assets/images/banner-menu-02.jpg" width="465" height="170" alt="Banner" /></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages </a>
                            <ul class="sub-menu">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="compare.php">Compare</a></li>
                                <li><a href="wishlist.php">Wishlist</a></li>
                                <li><a href="empty-cart.php">Empty Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="my-account.php">My Account</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.php">Blog Grid</a></li>
                                        <li>
                                            <a href="blog-grid-left-sidebar.php">Blog Grid Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid-right-sidebar.php">Blog Grid Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog List</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-list-left-sidebar.php">Blog List Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-list-right-sidebar.php">Blog List Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog Details</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-details-left-sidebar.php">Blog details Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-right-sidebar.php">Blog details Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Canvas Menu End -->
        </div>
    </div>
    <!-- off Canvas End -->