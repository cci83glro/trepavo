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
                        <h4 class="service-details__sidebar-title">Categories</h4>
                        <ul class="service-details__sidebar-service-list list-unstyled">
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
                            <li><a href="digital-marketing.html">Digital Marketing <span
                                        class="icon-arrow-right"></span></a></li>
                            <li><a href="graphic-designing.html">Graphic Designing <span
                                        class="icon-arrow-right"></span></a></li>
                            <li><a href="website-development.html">Website Development <span
                                        class="icon-arrow-right"></span></a></li>
                            <li><a href="social-marketing.html">Social Marketing <span
                                        class="icon-arrow-right"></span></a></li>
                            <li><a href="content-writing.html">Content Writting <span
                                        class="icon-arrow-right"></span></a></li>
                        </ul>
                    </div>
                    <div class="service-details__need-help">
                        <div class="service-details__need-help-bg"
                            style="background-image: url(assets/images/backgrounds/service-details-need-help-bg.jpg)">
                        </div>
                        <div class="service-details__need-help-icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <h2 class="service-details__need-help-title">Best Quality <br> services</h2>
                        <div class="service-details__need-help-contact">
                            <p>Call us Anytime</p>
                            <a href="tel:926668880000">+ 92 666 888 0000</a>
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
