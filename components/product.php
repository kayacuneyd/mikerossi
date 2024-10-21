<?php
// JSON dosyasını okuma
$jsonData = file_get_contents('data/products.json'); // JSON dosyasının yolu

// JSON verisini PHP dizisine çevirme
$products = json_decode($jsonData, true);
?>

<!-- Products Section Start -->
<div class="section section-padding-02">
    <div class="container">
        <!-- Product Wrapper 02 Start -->
        <div class="product-wrapper-02">
            <div class="product-tabs-content">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1">
                        <div class="row">
                            <?php foreach ($products as $key => $product): ?>
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product-02">
                                        <div class="product-images">
                                            <a href="product-details.php?id=<?php echo $key; ?>">
                                                <img src="<?php echo $product['image']; ?>" width="270" height="303" alt="product" />
                                            </a>
                                            <!-- Ürün tıklanabilir ve id parametresiyle product-details.php sayfasına yönlendirilecek -->
                                        </div>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="product-details.php?id=<?php echo $key; ?>"><?php echo $product['title']; ?></a>
                                            </h4>
                                            <div class="price">
                                                <span class="sale-price">$<?php echo $product['price']; ?></span>
                                                <?php if (!is_null($product['old_price'])): ?>
                                                    <span class="old-price">$<?php echo $product['old_price']; ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Wrapper 02 End -->
    </div>
</div>
<!-- Products Section End -->