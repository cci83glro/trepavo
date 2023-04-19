<div class="service-details__img">
    <img src="assets/images/services/<?=$service_id;?>/banner_770_473.webp" alt="<?=$service_detail_image_alt;?>">
</div>
<div class="service-details__content">
    <h3 class="service-details__title"><?=$lang["ourServices" . $service_id . "NoBr"];?></h3>
    <p class="service-details__text"><?=$lang["serviceDetail" . $service_id . "Text"];?></p>
</div>

<?php
    if(isset($lang["serviceDetail" . $service_id . "Points"])) {
        include_once "service-details-points.php";
    }    
?>

<div class="service-details__benefits">
    <div class="row">
        <div class="col-xl-6">
            <div class="service-details__benefits-content">
                <h3 class="service-details__benefits-title"><?=$lang["serviceDetail" . $service_id . "BenefitsTitle"];?></h3>
                <p class="service-details__benefits-text"><?=$lang["serviceDetail" . $service_id . "BenefitsText"];?></p>
                <ul class="list-unstyled service-details__benefits-list">
                    <?php
                        foreach (explode("||", $lang["serviceDetail" . $service_id . "BenefitList"]) as $benefit_text) {
                            include "service-details-benefit-template.php";
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="service-details__benefits-img">
                <img src="assets/images/services/help_image.webp" alt="People needing help">
            </div>
        </div>
    </div>
</div>
<div class="service-details__faq">
    <div class="accordion-grp" data-grp-name="faq-one-accordion">
        <?php
            foreach (explode("||", $lang["serviceDetail" . $service_id . "Faq"]) as $faq_item) {
                $faq_item_parts = explode("|", $faq_item);
                include "service-details-faq-item-template.php";
            }
        ?>
    </div>
</div>