<?php
// Slider verilerini tutan bir dizi
$sliders = [
    [
        'background_image' => 'assets/images/slider/slider-item-1.jpg',
        'title' => 'Stylish Kitchen Furniture',
        'description' => '1 Unique Furniture Style Design for Your Family and Welcome <br /> Our Shop, 30% Offer All Stylish Kitchen Furniture',
        'link' => 'shop-grid-4-column.html',
        'link_text' => 'purchase now'
    ],
    [
        'background_image' => 'assets/images/slider/slider-item-2.jpg',
        'title' => 'Modern Living Room Sets',
        'description' => '2 Enhance Your Living Space with Stylish Furniture <br /> Up to 40% Discount on Selected Living Room Sets',
        'link' => 'shop-grid-4-column.html',
        'link_text' => 'buy now'
    ],
    [
        'background_image' => 'assets/images/slider/slider-item-3.jpg',
        'title' => 'Comfortable Bedroom Furniture',
        'description' => '3 Luxury Bedroom Sets for a Relaxing Sleep Experience <br /> Special Offer: 20% Off All Bedroom Furniture',
        'link' => 'shop-grid-4-column.html',
        'link_text' => 'shop now'
    ]
];
?>

<!-- Slider Section Start -->
<div class="section slider-section-02">
    <div class="slider-active">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($sliders as $slider): ?>
                    <!-- Single Slider Start -->
                    <div class="single-slider slider-02 swiper-slide animation-style-01" style="background-image: url(<?php echo $slider['background_image']; ?>);">
                        <div class="container">
                            <!-- Slider Content Start -->
                            <div class="slider-content-02 text-center">
                                <h2 class="title"><?php echo $slider['title']; ?></h2>
                                <p><?php echo $slider['description']; ?></p>
                                <a href="<?php echo $slider['link']; ?>" class="btn btn-primary btn-hover-dark btn-margin"><?php echo $slider['link_text']; ?></a>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>
                    <!-- Single Slider End -->
                <?php endforeach; ?>

                <!-- Add Arrows -->
                <div class="swiper-button-next">Next</div>
                <div class="swiper-button-prev">Prev</div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Section End -->