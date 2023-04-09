<?php
    $page_title = "Projects - Trepavo Creative Agency";
    include_once "header.php";

    $subpage_banner_image_url = "assets/images/projects/page-banner_1894_522.webp";
    $subpage_banner_mobile_image_url = "assets/images/projects/page-banner_720_1044.webp";
    $subpage_banner_image_alt = "Image with contact blocks";
    $subpage_banner_title = $lang["projects"];
    include_once "partials/subpage-banner.php";

    $project_list_type = "filter";
?>
    
    <section class="projects-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="project-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                        <li data-filter=".filter-item" class="active"><span class="filter-text"><?=$lang["all"];?></span></li>
                        <li data-filter=".grades"><span class="filter-text"><?=$lang["ourServicesGraphicDesignNoBr"];?></span></li>
                        <li data-filter=".webdes"><span class="filter-text"><?=$lang["ourServicesWebDesignNoBr"];?></span></li>
                        <li data-filter=".mobapp"><span class="filter-text"><?=$lang["ourServicesMobileAppsNoBr"];?></span></li>
                        <li data-filter=".socmed"><span class="filter-text"><?=$lang["ourServicesSoMeNoBr"];?></span></li>
                        <li data-filter=".seoana"><span class="filter-text"><?=$lang["ourServicesSeoAndAnalyticsNoBr"];?></span></li>
                    </ul>
                </div>
            </div>
            <div class="row filter-layout masonary-layout">
                <?php include_once "partials/projects/project-item-letvikar-webdesign.php"?>
                <?php include_once "partials/projects/project-item-centrumfoto-outdoor.php"?>
                <?php include_once "partials/projects/project-item-hairdresser-maria-outdoor.php"?>
                <?php include_once "partials/projects/project-item-hairdresser-maria-logo.php"?>
            </div>
        </div>
    </section>
        
<?php include "footer.php" ?>
