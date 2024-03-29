<?php
    $page_title = "Services - Trepavo Creative Agency";
    include_once "header.php";

    $subpage_banner_image_url = "assets/images/services/page-banner_1894_522.webp";
    $subpage_banner_mobile_image_url = "assets/images/services/page-banner_720_1044.webp";
    $subpage_banner_image_alt = "Image with contact blocks";
    $subpage_banner_title = $lang["services"];
    include_once "partials/subpage-banner.php";
?>

<section id="services-list" class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="service-details__sidebar">
                    <div class="service-details__sidebar-service">
                        <h4 class="service-details__sidebar-title"><?=$lang["categories"];?></h4>
                        <ul id="services-list-filter" class="service-details__sidebar-service-list list-unstyled">
                            <li>
                                <a class="service-detail-link" href="service-details-graphic-design.php">
                                    <?=$lang["ourServicesGraphicDesignNoBr"];?>
                                    <span class="icon-arrow-right"></span>
                                </a>
                            </li>
                            <li>
                                <a class="service-detail-link" href="service-details-web-design.php">
                                    <?=$lang["ourServicesWebDesignNoBr"];?>
                                    <span class="icon-arrow-right"></span>
                                </a>
                            </li>
                            <li>
                                <a class="service-detail-link" href="service-details-seo-analytics.php">
                                    <?=$lang["ourServicesSeoAnalyticsNoBr"];?>
                                    <span class="icon-arrow-right"></span>
                                </a>
                            </li>
                            <li>
                                <a class="service-detail-link" href="service-details-some-marketing.php">
                                    <?=$lang["ourServicesSoMeMarketingNoBr"];?>
                                    <span class="icon-arrow-right"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="service-details__need-help">
                        <div class="service-details__need-help-bg"
                            style="background-image: url(assets/images/backgrounds/service-details-need-help-bg.jpg)">
                        </div>
                        <div class="service-details__need-help-icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <h2 class="service-details__need-help-title"><?=$lang["wantToHearMore"];?></h2>
                        <div class="service-details__need-help-contact">
                            <p><?=$lang["callUs"];?></p>
                            <a href="tel:004560543077">+ 45 6054 3077</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div id="service-details-container" class="service-details__right">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php" ?>
