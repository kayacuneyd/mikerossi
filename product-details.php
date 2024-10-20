<?php

include './components/header.php';

?>

<!-- Page Banner Section Start -->
<div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg)">
    <div class="container">
        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Product Details</h2>

            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Product Details</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->
    </div>
</div>
<!-- Page Banner Section End -->

<!-- Product Details Section Start -->
<div class="section section-padding-02">
    <div class="container">
        <!-- Product Section Wrapper Start -->
        <div class="product-section-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Product Details Images Start -->
                    <div class="product-details-images">
                        <!-- Details Gallery Images Start -->
                        <div class="details-gallery-images" id="img-container">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide single-img zoom">
                                        <img src="assets/images/product-details/product-details-1.jpg" width="570" height="604" alt="Product Image" />
                                    </div>
                                    <div class="swiper-slide single-img zoom">
                                        <img src="assets/images/product-details/product-details-2.jpg" width="570" height="604" alt="Product Image" />
                                    </div>
                                    <div class="swiper-slide single-img zoom">
                                        <img src="assets/images/product-details/product-details-3.jpg" width="570" height="604" alt="Product Image" />
                                    </div>
                                    <div class="swiper-slide single-img zoom">
                                        <img src="assets/images/product-details/product-details-3.jpg" width="570" height="604" alt="Product Image" />
                                    </div>
                                    <div class="swiper-slide single-img zoom">
                                        <img src="assets/images/product-details/product-details-4.jpg" width="570" height="604" alt="Product Image" />
                                    </div>
                                    <div class="swiper-slide single-img zoom">
                                        <img src="assets/images/product-details/product-details-5.jpg" width="570" height="604" alt="Product Image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Details Gallery Images End -->

                        <!-- Details Gallery Thumbs Start -->
                        <div class="details-gallery-thumbs">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/product-details/product-details-1.jpg" width="88" height="93" alt="Product Thumbnail" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/product-details/product-details-2.jpg" width="88" height="93" alt="Product Thumbnail" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/product-details/product-details-3.jpg" width="88" height="93" alt="Product Thumbnail" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/product-details/product-details-4.jpg" width="88" height="93" alt="Product Thumbnail" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/product-details/product-details-5.jpg" width="88" height="93" alt="Product Thumbnail" />
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-prev">
                                <i class="pe-7s-angle-left"></i>
                            </div>
                            <div class="swiper-button-next">
                                <i class="pe-7s-angle-right"></i>
                            </div>
                        </div>
                        <!-- Details Gallery Thumbs End -->
                    </div>
                    <!-- Product Details Images End -->
                </div>
                <div class="col-lg-6">
                    <!-- Product Details Description Start -->
                    <div class="product-details-description">
                        <h4 class="product-name">
                            High quality vase bottle.
                        </h4>
                        <div class="price">
                            <span class="sale-price">$240.00</span>
                            <span class="old-price">$290.00</span>
                        </div>
                        <div class="review-wrapper">
                            <div class="review-star">
                                <div class="star" style="width: 80%"></div>
                            </div>
                            <p>
                                <a href="#reviews">( 1 Customer Review )</a>
                            </p>
                        </div>

                        <div class="product-color">
                            <span class="lable">Color:</span>
                            <ul>
                                <li>
                                    <input type="radio" name="colors" id="color1" />
                                    <label for="color1"><span class="color-blue"></span></label>
                                </li>
                                <li>
                                    <input type="radio" name="colors" id="color2" />
                                    <label for="color2"><span class="color-gray"></span></label>
                                </li>
                                <li>
                                    <input type="radio" name="colors" id="color3" />
                                    <label for="color3"><span
                                            class="color-dark-blue"></span></label>
                                </li>
                                <li>
                                    <input type="radio" name="colors" id="color4" />
                                    <label for="color4"><span
                                            class="color-gray-dark"></span></label>
                                </li>
                            </ul>
                        </div>

                        <p>
                            Lorem ipsum dolor sit amet, consectet
                            adipisicing elit, sed do eiusmod temporf
                            incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis tyu nostrud
                            exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate.
                        </p>

                        <div class="product-meta">
                            <div class="product-quantity d-inline-flex">
                                <button type="button" class="sub">
                                    -
                                </button>
                                <input type="text" value="1" />
                                <button type="button" class="add">
                                    +
                                </button>
                            </div>
                            <div class="meta-action">
                                <button class="btn btn-dark btn-hover-primary">
                                    Add To Cart
                                </button>
                            </div>
                            <div class="meta-action">
                                <a class="action" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="meta-action">
                                <a class="action" href="#"><i class="pe-7s-shuffle"></i></a>
                            </div>
                        </div>

                        <div class="product-info">
                            <div class="single-info">
                                <span class="lable">SKU:</span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Categories:</span>
                                <span class="value"><a href="#">Office,</a>
                                    <a href="#">Home</a></span>
                            </div>
                            <div class="single-info">
                                <span class="lable">tag:</span>
                                <span class="value"><a href="#">Furniture</a></span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Share:</span>
                                <ul class="social">
                                    <li>
                                        <a href="#"><i
                                                class="fa fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i
                                                class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i
                                                class="fa fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i
                                                class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Product Details Description End -->
                </div>
            </div>
        </div>
        <!-- Product Section Wrapper End -->
    </div>
</div>
<!-- Product Details Section End -->

<!-- Product Details tab Section Start -->
<div class="section section-padding-02">
    <div class="container">
        <!-- Product Details Tabs Start -->
        <div class="product-details-tabs">
            <ul class="nav justify-content-center">
                <li>
                    <button data-bs-toggle="tab" data-bs-target="#information">
                        Information
                    </button>
                </li>
                <li>
                    <button class="active" data-bs-toggle="tab" data-bs-target="#description">
                        Description
                    </button>
                </li>
                <li>
                    <button data-bs-toggle="tab" data-bs-target="#reviews">
                        Reviews (03)
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade" id="information">
                    <!-- Information Content Start -->
                    <div class="information-content">
                        <h4 class="title">Information</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit. Donec odio. Quisque volutpat mattis eros.
                            Nullam malesuada erat ut turpis. Suspendisse urna
                            viverra non, semper suscipit, posuere a, pede. Donec
                            nec justo eget felis facilisis fermentum. Aliquam
                            porttitor mauris sit amet orci.
                        </p>

                        <h4 class="title">Fabric & care</h4>
                        <ul>
                            <li>Faux suede fabric</li>
                            <li>Gold tone metal hoop handles.</li>
                            <li>RI branding</li>
                            <li>Snake print trim interior</li>
                            <li>Adjustable cross body strap</li>
                            <li>
                                Height: 31cm; Width: 32cm; Depth: 12cm; Handle
                                Drop: 61cm
                            </li>
                        </ul>

                        <h4 class="title">Size</h4>
                        <p>one size</p>
                    </div>
                    <!-- Information Content End -->
                </div>
                <div class="tab-pane fade show active" id="description">
                    <!-- Description Content Start -->
                    <div class="description-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enimlo ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in
                            reprehen in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officiarty
                            deserunt mollit anim id est laborum. Sed ut
                            perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantiu totam
                            rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et quasi architecto beatae vitae dicta
                            sunt explicabo. Nemo enim ipsam voluptatem quia
                            voluptas sit aspernatur aut odit aut fugit,
                        </p>
                    </div>
                    <!-- Description Content End -->
                </div>
                <div class="tab-pane fade" id="reviews">
                    <!-- Reviews Content Start -->
                    <div class="reviews-content">
                        <!-- Review Comment Start  -->
                        <div class="reviews-comment">
                            <!-- Single Comment Start  -->
                            <div class="single-reviews">
                                <div class="comment-author">
                                    <img src="assets/images/author/author-1.png" width="100" height="100" alt="author" />
                                </div>
                                <div class="comment-content">
                                    <div class="author-name-rating">
                                        <h6 class="name">Rosie Silva</h6>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <span class="date">11/20/2023</span>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Esse deleniti itaque
                                        velit explicabo at eum incidunt vel
                                        reprehenderit maxime eos facere ut
                                        pariatur voluptas aut, porro quia
                                        molestias sequi cupiditate!
                                    </p>
                                </div>
                            </div>
                            <!-- Single Comment End  -->
                            <!-- Single Comment Start  -->
                            <div class="single-reviews">
                                <div class="comment-author">
                                    <img src="assets/images/author/author-2.png" width="100" height="100" alt="author" />
                                </div>
                                <div class="comment-content">
                                    <div class="author-name-rating">
                                        <h6 class="name">Aidyn Cody</h6>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <span class="date">11/20/2023</span>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Esse deleniti itaque
                                        velit explicabo at eum incidunt vel
                                        reprehenderit maxime eos facere ut
                                        pariatur voluptas aut, porro quia
                                        molestias sequi cupiditate!
                                    </p>
                                </div>
                            </div>
                            <!-- Single Comment End  -->
                            <!-- Single Comment Start  -->
                            <div class="single-reviews">
                                <div class="comment-author">
                                    <img src="assets/images/author/author-3.png" width="100" height="100" alt="author" />
                                </div>
                                <div class="comment-content">
                                    <div class="author-name-rating">
                                        <h6 class="name">Rosie Silva</h6>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <span class="date">11/20/2023</span>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Esse deleniti itaque
                                        velit explicabo at eum incidunt vel
                                        reprehenderit maxime eos facere ut
                                        pariatur voluptas aut, porro quia
                                        molestias sequi cupiditate!
                                    </p>
                                </div>
                            </div>
                            <!-- Single Comment End  -->
                        </div>
                        <!-- Review Comment End  -->

                        <!-- Review Form Start  -->
                        <div class="reviews-form">
                            <h3 class="reviews-title">Add a review</h3>

                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" placeholder="Enter your name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="email" placeholder="john.smith@example.com" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="review-rating">
                                            <label class="title">Rating:</label>
                                            <ul id="rating" class="rating">
                                                <li class="star" title="Poor" data-value="1">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="star" title="Poor" data-value="2">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="star" title="Poor" data-value="3">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="star" title="Poor" data-value="4">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="star" title="Poor" data-value="5">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea placeholder="Write your comments here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <button class="btn btn-dark btn-hover-primary">
                                                Submit Review
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Review Form End  -->
                    </div>
                    <!-- Reviews Content End -->
                </div>
            </div>
        </div>
        <!-- Product Details Tabs End -->
    </div>
</div>
<!-- Product Details tab Section End -->

<!-- Sale Product Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="">
            <!-- Product Wrapper Start -->
            <div class="product-active-02">
                <!-- Product Top Wrapper Start -->
                <div class="product-top-wrapper">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="title"># Related Products</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Product Menu Start -->
                    <div class="product-menu">
                        <ul class="nav">
                            <li>
                                <button class="active" data-bs-toggle="tab" data-bs-target="#tab7">
                                    All Time
                                </button>
                            </li>
                            <li>
                                <button data-bs-toggle="tab" data-bs-target="#tab8">
                                    This Year
                                </button>
                            </li>
                            <li>
                                <button data-bs-toggle="tab" data-bs-target="#tab9">
                                    This Month
                                </button>
                            </li>
                        </ul>
                    </div>
                    <!-- Product Menu End -->

                    <!-- Swiper Arrows End -->
                    <div class="swiper-arrows">
                        <!-- Add Arrows -->
                        <div class="swiper-button-prev">
                            <i class="pe-7s-angle-left"></i>
                        </div>
                        <div class="swiper-button-next">
                            <i class="pe-7s-angle-right"></i>
                        </div>
                    </div>
                    <!-- Swiper Arrows End -->
                </div>
                <!-- Product Top Wrapper End -->

                <!-- Product Tabs Content Start -->
                <div class="product-tabs-content">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab7">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="assets/images/product/product-07.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Wooden decorations</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="assets/images/product/product-08.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Herman Seater Sofa</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="assets/images/product/product-09.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Reece Seater Sofa</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="assets/images/product/product-10.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Round Swivel Chair</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab8">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="assets/images/product/product-01.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Elona bedside grey
                                                        table</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="assets/images/product/product-02.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Simple minimal Chair</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="assets/images/product/product-03.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Pendant Chandelier
                                                        Light</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="assets/images/product/product-04.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">High quality vase
                                                        bottle</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab9">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="assets/images/product/product-04.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">High quality vase
                                                        bottle</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="assets/images/product/product-03.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Pendant Chandelier
                                                        Light</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="assets/images/product/product-01.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Elona bedside grey
                                                        table</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="assets/images/product/product-10.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Round Swivel Chair</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i
                                                            class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Tabs Content End -->
            </div>
            <!-- Product Wrapper End -->
        </div>
    </div>
</div>
<!-- Sale Product Section End -->
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

<!-- Quick View Start -->
<div class="modal fade" id="quickView">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Quick View Images Start -->
                        <div class="quick-view-images">
                            <!-- Quick Gallery Images Start -->
                            <div class="quick-gallery-images">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/images/product-details/product-details-1.jpg" alt="Product Image" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/images/product-details/product-details-2.jpg" alt="Product Image" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/images/product-details/product-details-3.jpg" alt="Product Image" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/images/product-details/product-details-4.jpg" alt="Product Image" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/images/product-details/product-details-5.jpg" alt="Product Image" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Quick Gallery Images End -->

                            <!-- Quick Gallery Thumbs Start -->
                            <div class="quick-gallery-thumbs">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="assets/images/product-details/product-details-1.jpg" alt="Product Thumbnail" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/product-details/product-details-2.jpg" alt="Product Thumbnail" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/product-details/product-details-3.jpg" alt="Product Thumbnail" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/product-details/product-details-4.jpg" alt="Product Thumbnail" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/product-details/product-details-5.jpg" alt="Product Thumbnail" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-prev">
                                    <i class="pe-7s-angle-left"></i>
                                </div>
                                <div class="swiper-button-next">
                                    <i class="pe-7s-angle-right"></i>
                                </div>
                            </div>
                            <!-- Quick Gallery Thumbs End -->
                        </div>
                        <!-- Quick View Images End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Quick View Description Start -->
                        <div class="quick-view-description">
                            <h4 class="product-name">
                                Your Products Name Here.
                            </h4>
                            <div class="price">
                                <span class="sale-price">$240.00</span>
                                <span class="old-price">$290.00</span>
                            </div>
                            <div class="review-wrapper">
                                <div class="review-star">
                                    <div class="star" style="width: 80%"></div>
                                </div>
                                <p>( 1 Customer Review )</p>
                            </div>
                            <div class="product-color">
                                <span class="lable">Color:</span>
                                <ul>
                                    <li>
                                        <input type="radio" name="colors" id="quick-color1" />
                                        <label for="quick-color1"><span class="color-blue"></span></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="colors" id="quick-color2" />
                                        <label for="quick-color2"><span class="color-gray"></span></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="colors" id="quick-color3" />
                                        <label for="quick-color3"><span
                                                class="color-dark-blue"></span></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="colors" id="quick-color4" />
                                        <label for="quick-color4"><span
                                                class="color-gray-dark"></span></label>
                                    </li>
                                </ul>
                            </div>

                            <p>
                                Lorem ipsum dolor sit amet, consectet
                                adipisicing elit, sed do eiusmod temporf
                                incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis tyu nostrud
                                exercitation ullamco laboris nisi ut aliquip ex
                                ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate.
                            </p>

                            <div class="product-meta">
                                <div class="product-quantity d-inline-flex">
                                    <button type="button" class="sub">-</button>
                                    <input type="text" value="1" />
                                    <button type="button" class="add">+</button>
                                </div>
                                <div class="meta-action">
                                    <button class="btn btn-dark btn-hover-primary">
                                        Add To Cart
                                    </button>
                                </div>
                                <div class="meta-action">
                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                                <div class="meta-action">
                                    <a class="action" href="#"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>

                            <div class="product-info">
                                <div class="single-info">
                                    <span class="lable">SKU:</span>
                                    <span class="value">Ch-256xl</span>
                                </div>
                                <div class="single-info">
                                    <span class="lable">Categories:</span>
                                    <span class="value"><a href="#">Office,</a>
                                        <a href="#">Home</a></span>
                                </div>
                                <div class="single-info">
                                    <span class="lable">tag:</span>
                                    <span class="value"><a href="#">Furniture</a></span>
                                </div>
                                <div class="single-info">
                                    <span class="lable">Share:</span>
                                    <ul class="social">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-dribbble"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i
                                                    class="fa fa-pinterest-p"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Quick View Description End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick View End -->
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