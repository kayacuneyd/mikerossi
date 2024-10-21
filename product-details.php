<?php
// Header dosyasını ekleyelim
include './components/header.php';

// JSON dosyasından verileri çekelim
$jsonData = file_get_contents('data/products.json');
$products = json_decode($jsonData, true);

// URL'den gelen 'id' parametresini kontrol edelim
$productId = isset($_GET['id']) ? $_GET['id'] : null;

// Eğer id yoksa veya geçersizse, ana sayfaya yönlendirelim
if ($productId === null || !isset($products[$productId - 1])) {
    header("Location: index.php");
    exit();
}

// Ürünün detaylarını alalım
$product = $products[$productId - 1];
?>

<!-- Page Banner Section Start -->
<div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg)">
    <div class="container">
        <div class="page-banner-content">
            <h2 class="title">Product Details</h2>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Product Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->

<!-- Product Details Section Start -->
<div class="section section-padding-02">
    <div class="container">
        <div class="product-section-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Product Details Images Start -->
                    <div class="product-details-images">
                        <div class="details-gallery-images" id="img-container">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide single-img zoom">
                                        <img src="<?php echo $product['image']; ?>" width="570" height="604" alt="<?php echo $product['title']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Details Images End -->
                </div>
                <div class="col-lg-6">
                    <!-- Product Details Description Start -->
                    <div class="product-details-description">
                        <h4 class="product-name">
                            <?php echo $product['title']; ?>
                        </h4>
                        <div class="price">
                            <span class="sale-price">$<?php echo $product['price']; ?></span>
                            <?php if (!is_null($product['old_price'])): ?>
                                <span class="old-price">$<?php echo $product['old_price']; ?></span>
                            <?php endif; ?>
                        </div>
                        <p><?php echo $product['description']; ?></p>
                        <div class="product-meta">
                            <div class="meta-action">
                                <button class="btn btn-dark btn-hover-primary">
                                    Add To Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Product Details Description End -->
                </div>
            </div>
        </div>
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
                        Reviews (<?php echo count($product['reviews']); ?>)
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                <!-- Information Section Start -->
                <div class="tab-pane fade" id="information">
                    <div class="information-content">
                        <h4 class="title">Information</h4>
                        <p><?php echo $product['information']; ?></p>

                        <h4 class="title">Fabric & Care</h4>
                        <ul>
                            <?php foreach ($product['fabric_and_care'] as $item): ?>
                                <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <h4 class="title">Size</h4>
                        <p><?php echo $product['size']; ?></p>
                    </div>
                </div>
                <!-- Information Section End -->

                <!-- Description Section Start -->
                <div class="tab-pane fade show active" id="description">
                    <div class="description-content">
                        <p><?php echo $product['description']; ?></p>
                    </div>
                </div>
                <!-- Description Section End -->

                <!-- Reviews Section Start -->
                <div class="tab-pane fade" id="reviews">
                    <div class="reviews-content">
                        <div class="reviews-comment">
                            <?php foreach ($product['reviews'] as $review): ?>
                                <div class="single-reviews">
                                    <div class="comment-author">
                                        <img src="assets/images/author/author-1.png" width="100" height="100" alt="author" />
                                    </div>
                                    <div class="comment-content">
                                        <div class="author-name-rating">
                                            <h6 class="name"><?php echo $review['author']; ?></h6>
                                            <div class="review-star">
                                                <div class="star" style="width: <?php echo $review['rating']; ?>%"></div>
                                            </div>
                                        </div>
                                        <span class="date"><?php echo $review['date']; ?></span>
                                        <p><?php echo $review['comment']; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Review Form Start -->
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
                        <!-- Review Form End -->
                    </div>
                </div>
                <!-- Reviews Section End -->
            </div>
        </div>
        <!-- Product Details Tabs End -->
    </div>
</div>
<!-- Product Details tab Section End -->

<!-- Footer Dosyasını Dahil Edelim -->
<?php include './components/footer.php'; ?>