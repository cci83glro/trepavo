<?php
    $page_title = "About - Trepavo Creative Agency";
    include_once "header.php";

    $subpage_banner_image_url = "assets/images/about/page-banner_1894_522.webp";
    $subpage_banner_mobile_image_url = "assets/images/about/page-banner_720_1044.webp";
    $subpage_banner_image_alt = "Image with abous us written on a piece of paper";
    $subpage_banner_title = $lang["about"];
    include_once "partials/subpage-banner.php";
?>

<section class="about-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-page__left">
                    <ul class="list-unstyled about-page__images">
                        <li>
                            <div class="about-page__img-1">
                                <img src="assets/images/resources/about-page-img-1.jpg" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="about-page__img-2">
                                <img src="assets/images/resources/about-page-img-2.jpg" alt="">
                            </div>
                        </li>
                    </ul>
                    <div class="about-page__badge"><img data-tilt
                            src="assets/images/resources/about-page-badge.png" alt=""></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-page__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline"><?=$lang["aboutPageUpperSectionTagline"];?></span>
                        <h2 class="section-title__title"><?=$lang["aboutPageUpperSectionTitle"];?></h2>
                    </div>
                    <p class="about-page__right-text-1"><?=$lang["aboutPageUpperSectionMainText"];?></p>
                    <h4 class="about-page__right-text-2"><?=$lang["aboutPageUpperSectionBottomText"];?></h4>
                    <!-- <a href="about.html" class="thm-btn abut-page__btn">Discover More</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="brand-one">
    <div class="container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "375": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "575": {
                "spaceBetween": 30,
                "slidesPerView": 3
            },
            "767": {
                "spaceBetween": 50,
                "slidesPerView": 4
            },
            "991": {
                "spaceBetween": 50,
                "slidesPerView": 5
            },
            "1199": {
                "spaceBetween": 100,
                "slidesPerView": 5
            }
        }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-1.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-2.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-3.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-4.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-5.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-1.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-2.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-3.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-4.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-5.png" alt="">
                </div><!-- /.swiper-slide -->
            </div>
        </div>
    </div>
</section>

<?php
    include_once "partials/about/presentation-video.php";
    include_once "partials/index/section-testimonials.php";
?>

<section class="best-agency about-page-best-agency">
    <div class="best-agency-shape" style="background-image: url(assets/images/shapes/best-agency-shape.png)">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="best-agency__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline"><?=$lang["aboutPageLowerSectionTagline"];?></span>
                        <h2 class="section-title__title"><?=$lang["aboutPageLowerSectionTitle"];?></h2>
                    </div>
                    <ul class="list-unstyled best-agency__points">
                        <?php
                            foreach (explode("||", $lang["aboutPageLowerSectionPoints"]) as $point_text) {
                                include "partials/about/about-page-lower-section-point-template.php";
                            }
                        ?>
                    </ul>
                    <div class="best-agency__experience">
                        <div class="best-agency__experience-icon">
                            <span class="icon-social-media"></span>
                        </div>
                        <div class="best-agency__experience-text-box">
                            <p class="best-agency__experience-text"><?=$lang["aboutPageLowerSectionBottomText"];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="best-agency__right">
                    <div class="accordion-grp" data-grp-name="faq-one-accordion">
                        <?php
                            foreach (explode("||", $lang["aboutPageLowerSectionFaq"]) as $faq_item) {
                                $faq_item_parts = explode("|", $faq_item);
                                include "partials/about/about-page-lower-section-faq-item-template.php";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php" ?>
