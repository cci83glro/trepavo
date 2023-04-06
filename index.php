<?php
  $title = "Main - Trepavo Creative Agency";

?>
<?php include_once "header.php" ?>

        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 5000
                }}'>
                
                <div class="swiper-wrapper">
                    <div class="main-slider__social">
                        <a href="https://www.facebook.com/trepavocreativeagency" target="_blank">facebook</a>
                        <a href="https://www.instagram.com/trepavocreativeagency/" target="_blank">instagram</a>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/slider/main-slider-1_947_486.webp);">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider__content">
                                        <div class="main-slider__title-box-1">
                                            <h2><?=$lang['slide1Title'] ?></h2>
                                            <div class="main-slider__title-box-2">
                                                <h2><?=$lang['slide1Title'] ?></h2>
                                            </div>
                                        </div>
                                        <a href="about" class="thm-btn"><?=$lang['discoverMore'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/slider/main-slider-2_947_486.webp);">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider__content">
                                        <div class="main-slider__title-box-1">
                                            <h2><?=$lang['slide2Title'] ?></h2>
                                            <div class="main-slider__title-box-2">
                                                <h2><?=$lang['slide2Title'] ?></h2>
                                            </div>
                                        </div>
                                        <a href="about" class="thm-btn"><?=$lang['discoverMore'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/slider/main-slider-3_947_486.webp);">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider__content">
                                        <div class="main-slider__title-box-1">
                                            <h2><?=$lang['slide3Title'] ?></h2>
                                            <div class="main-slider__title-box-2">
                                                <h2><?=$lang['slide3Title'] ?></h2>
                                            </div>
                                        </div>
                                        <a href="about" class="thm-btn"><?=$lang['discoverMore'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="slider-bottom-box clearfix">
                    <div class="swiper-pagination" id="main-slider-pagination"></div>
                    <div class="main-slider__nav">
                        <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                            <span class="icon-arrow-left"></span>
                        </div>
                        <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                            <span class="icon-arrow-right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Main Slider End-->

        <?php include_once "partials/index/section-our-approach.php" ?>
        <?php include_once "partials/index/section-our-services.php" ?>
        
        <!--Brand One Start-->
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
        <!--Brand One End-->

        <!--Design Studio Start-->
        <section class="design-studio">
            <div class="design-studio-bg-box">
                <div class="design-studio-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(assets/images/backgrounds/design-studio-bg.jpg)">

                </div>
            </div>
            <div class="container">
                <div class="col-lg-12">
                    <div class="design-studio__inner">
                        <h2 class="design-studio__title">Design <span>Studio</span> that gets <br> excited about</h2>
                        <div class="design-studio__video-link">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="design-studio__video-icon">
                                    <span class="icon-play-button"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Design Studio End-->

        <!--We Care Start-->
        <section class="we-care">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="we-care__inner">
                            <div class="we-care__img">
                                <img src="assets/images/resources/we-care-img.jpg" alt="">
                            </div>
                            <div class="we-care__content">
                                <h3 class="we-care__title">We Care About Business Growths</h3>
                                <p class="we-care__text">Behind a successful brand there is always a team that strives to achieve the best. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--We Care End-->

        <!--Project One Start-->
        <section class="project-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">recent projects</span>
                    <h2 class="section-title__title">work showcase</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="project-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                            <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                            <li data-filter=".bra"><span class="filter-text">Branding</span></li>
                            <li data-filter=".photo"><span class="filter-text">Photography</span></li>
                            <li data-filter=".some"><span class="filter-text">Social Media</span></li>
                            <li data-filter=".web"><span class="filter-text">Web Design</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row filter-layout masonary-layout">
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item bra photo web">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="assets/images/resources/project-one-img-1.jpg" alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Graphic</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Outdoor</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item bra app web">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="assets/images/resources/project-one-img-2.jpg" alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Graphic</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Outdoor</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item bra web">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="assets/images/resources/project-one-img-3.jpg" alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Graphic</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Logo Design</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item bra photo web">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="assets/images/resources/project-one-img-4.jpg" alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Photography</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Portrait Photography</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item bra web">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="assets/images/resources/project-one-img-5.jpg" alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Graphic</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Business card</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item app some photo">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="assets/images/resources/project-one-img-6.jpg" alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Social Media</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Video ad</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item app photo">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="assets/images/resources/project-one-img-7.jpg" alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Photography</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Portrait photography</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item app photo">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="assets/images/resources/project-one-img-6.jpg" alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Graphic</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Fimlor Experience</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item app photo">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="assets/images/resources/project-one-img-6.jpg" alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Graphic</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Fimlor Experience</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Project One End-->

        <!--Why Choose One Start-->
        <section class="why-choose-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="why-choose-one__left">
                            <div class="why-choose-one__img">
                                <img src="assets/images/resources/why-choose-one-img.jpg" alt="">
                            </div>
                            <div class="why-choose-one-box-1"></div>
                            <div class="why-choose-one-box-2"></div>
                            <div class="why-choose-one-box-3"></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">why choose us</span>
                                <h2 class="section-title__title">We add value to your brand</h2>
                            </div>
                            <p class="why-choose-one__right-text">There are many variations of passages of lorem ipsum
                                available, but the majority have suffered in some form, by injected free text not
                                humour.</p>
                            <div class="why-choose-one__content">
                                <div class="why-choose-one__content-img">
                                    <img src="assets/images/resources/why-choose-one-content-img.jpg" alt="">
                                </div>
                                <div class="why-choose-one__content-list">
                                    <ul class="list-unstyled why-choose-one__points">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Nsectetur cing elit</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Suspe ndisse suscip sagittis leo</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Entum estib dignissim posuere</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>If you are going to use a pass</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="why-choose-one__progress">
                                <div class="why-choose-one__progress-single">
                                    <h4 class="why-choose-one__progress-title">Digital marketing</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="100%">
                                            <div class="count-text">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one__map"
                style="background-image: url(assets/images/shapes/testimonial-one-map.png)"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">our customer feedbacks</span>
                    <h2 class="section-title__title">What they’re saying</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-one__carousel owl-theme owl-carousel">
                            <!--Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">I was very impresed by the trepavo service and their
                                        work of quality lorem ipsum is simply free text used by copy typing refreshing.
                                        Neque porro est qui ipsum.</p>
                                </div>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client__img">
                                        <img src="assets/images/testimonial/testimonial-one-img-1.jpg" alt="">
                                    </div>
                                    <h4 class="testimonial-one__name">Zahide Tanirli</h4>
                                    <p class="testimonial-one__title">Vestmægler</p>
                                </div>
                            </div>
                            <!--Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">I was very impresed by the trepavo service and their
                                        work of quality lorem ipsum is simply free text used by copy typing refreshing.
                                        Neque porro est qui ipsum.</p>
                                </div>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client__img">
                                        <img src="assets/images/testimonial/testimonial-one-img-2.jpg" alt="">
                                    </div>
                                    <h4 class="testimonial-one__name">Jan Poulsen</h4>
                                    <p class="testimonial-one__title">Centrumfoto</p>
                                </div>
                            </div>
                            <!--Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">I was very impresed by the trepavo service and their
                                        work of quality lorem ipsum is simply free text used by copy typing refreshing.
                                        Neque porro est qui ipsum.</p>
                                </div>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client__img">
                                        <img src="assets/images/testimonial/testimonial-one-img-3.jpg" alt="">
                                    </div>
                                    <h4 class="testimonial-one__name">Maria Mortensen</h4>
                                    <p class="testimonial-one__title">Frisøren</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--CTA One Start-->
        <section class="cta-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner">
                            <div class="cta-one__box-1"></div>
                            <div class="cta-one__box-2"></div>
                            <div class="cta-one__left">
                                <div class="cta-one__icon">
                                    <span class="icon-consulting"></span>
                                </div>
                                <div class="cta-one__title-box">
                                    <h2 class="cta-one__title">we’re delivering the best <br> customer experience</h2>
                                </div>
                            </div>
                            <div class="cta-one__right">
                                <a href="<?=$contact_link; ?>" class="thm-btn cta-one__btn"><?=$lang['letsGetStarted'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

        <!--Google Map Start-->
        <section class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2253.053590582235!2d12.421786516084849!3d55.61848320981064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465256f5545f2475%3A0x8c00df4dc176c692!2sTj%C3%B8rnevangen%201%2C%202660%20Br%C3%B8ndby%20Strand!5e0!3m2!1sen!2sdk!4v1667569303579!5m2!1sen!2sdk"
                class="google-map__one" allowfullscreen style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>
        <!--Google Map End-->

<?php include "footer.php" ?>
