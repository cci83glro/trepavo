
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
