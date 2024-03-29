
<?php
    $project_list_type = "latest";
?>

<section class="projects-section">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline"><?=$lang["ourProjectsSectionTitleTagline"]?></span>
            <h2 class="section-title__title"><?=$lang["ourProjectsSectionTitleTitle"]?></h2>
        </div>
        <div class="projects-section__carousel masonary-layout owl-theme owl-carousel">
            <?php include_once "partials/projects/project-item-letvikar-webdesign.php"?>
            <?php include_once "partials/projects/project-item-centrumfoto-outdoor.php"?>
            <?php include_once "partials/projects/project-item-hairdresser-maria-outdoor.php"?>
            <?php include_once "partials/projects/project-item-hairdresser-maria-logo.php"?>
        </div>
        <div class="read-more-button-wrapper">
            <a href="projects" class="thm-btn"><?=$lang["readMore"]?></a>
        </div>
    </div>
</section>
