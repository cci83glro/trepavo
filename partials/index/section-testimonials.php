<section class="testimonials-section">
    <div class="testimonials-section-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"><img
            src="assets/images/shapes/testimonials-section-shape.png" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="testimonials-section__left wow slideInLeft" data-wow-delay="100ms"
                    data-wow-duration="2500ms">
                    <div class="testimonials-section__img">
                        <img src="assets/images/testimonials/testimonials_left_image_712_430.webp" alt="Business woman in conference">
                        <div class="testimonials-section__content">
                            <h3 class="testimonials-section__title">#Happy <span>Customers</span></h3>
                        </div>
                        <div class="testimonials-section__box-1"></div>
                        <div class="testimonials-section__box-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="testimonials-section__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline"><?=$lang["testimonialsSectionTitleTagline"]?></span>
                        <h2 class="section-title__title"><?=$lang["testimonialsSectionTitleTitle"]?></h2>
                    </div>
                    <div class="testimonials-section__carousel owl-theme owl-carousel">
                        <?php include_once "partials/about/testimonial-item-vestmaegler.php"?>
                        <?php include_once "partials/about/testimonial-item-frisoeren-maria.php"?>
                        <?php include_once "partials/about/testimonial-item-letvikar.php"?>
                        <?php include_once "partials/about/testimonial-item-centrumfoto.php"?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>