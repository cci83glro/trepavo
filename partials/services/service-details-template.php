<div class="service-details__img">
    <img src="<?=$service_detail_image_url;?>" alt="<?=$service_detail_image_alt;?>">
</div>
<div class="service-details__content">
    <h3 class="service-details__title"><?=$service_detail_title;?></h3>
    <p class="service-details__text"><?=$service_detail_text;?></p>
</div>
<ul class="service-details__points list-unstyled">
    <?php
        foreach (explode("||", $service_detail_points) as $point_text) {
            include "service-details-point-template.php";
        }
    ?>
</ul>
<div class="service-details__benefits">
    <div class="row">
        <div class="col-xl-6">
            <div class="service-details__benefits-content">
                <h3 class="service-details__benefits-title"><?=$service_detail_benefits_title;?></h3>
                <p class="service-details__benefits-text"><?=$service_detail_benefits_text;?></p>
                <ul class="list-unstyled service-details__benefits-list">
                    <?php
                        foreach (explode("||", $service_detail_benefit_list) as $benefit_text) {
                            include "service-details-benefit-template.php";
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="service-details__benefits-img">
                <img src="assets/images/resources/service-details__benefits-img.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<div class="service-details__faq">
    <div class="accordion-grp" data-grp-name="faq-one-accordion">
        <?php
            foreach (explode("||", $service_detail_faq) as $faq_item) {
                $faq_item_parts = explode("|", $faq_item);
                include "service-details-faq-item-template.php";
            }
        ?>
    </div>
</div>