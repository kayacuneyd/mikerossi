<?php

// Bulunduğumuz sayfanın dosya adını tespit et
$pageName = basename($_SERVER['PHP_SELF'], ".php");

// Sayfa verilerini tutan bir array oluştur
$pageDataArray = [
    'contact' => [
        'title' => 'Contact Us',
        'breadcrumb' => 'Contact Us',
        'banner_image' => 'assets/images/page-banner.jpg'
    ],
    'about' => [
        'title' => 'About Us',
        'breadcrumb' => 'About Us',
        'banner_image' => 'assets/images/page-banner.jpg'
    ],
    'product-details' => [
        'title' => 'Product Details',
        'breadcrumb' => 'Product Details',
        'banner_image' => 'assets/images/page-banner.jpg'
    ],
    // Diğer sayfalar için de benzer veriler ekleyebilirsiniz
];

// Sayfa verilerini dinamik olarak `$pageData` değişkenine atıyoruz
$pageData = isset($pageDataArray[$pageName]) ? $pageDataArray[$pageName] : [
    'title' => 'Default Title',
    'breadcrumb' => 'Default Breadcrumb',
    'banner_image' => 'assets/images/page-banner.jpg'
];
?>

<!-- Page Banner Section Start -->
<div class="section page-banner-section" style="background-image: url(<?php echo $pageData['banner_image']; ?>)">
    <div class="container">
        <!-- Page Banner Content Start -->
        <div class="page-banner-content">
            <h2 class="title"><?php echo $pageData['title']; ?></h2>

            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active"><?php echo $pageData['breadcrumb']; ?></li>
            </ul>
        </div>
        <!-- Page Banner Content End -->
    </div>
</div>
<!-- Page Banner Section End -->