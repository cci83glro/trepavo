<?php if($project_list_type === "filter") : ?>
    <div class="col-xl-4 col-lg-6 col-md-6 filter-item <?=$project_item_filter;?>">
<?php endif; ?>

<div class="projects-section__single">
    <div class="projects-section__img">
        <img src="<?=$project_item_img_url?>" alt="<?=$project_item_img_alt?>">
        <div class="projects-section__hover">
            <p class="projects-section__tagline"><?=$project_item_tagline?></p>
            <h3 class="projects-section__title">
                <a href="<?=$project_item_url?>"><?=$project_item_title?></a> 
                <p><?=$project_item_title?></p>
            </h3>
        </div>
    </div>
</div>

<?php if($project_list_type === "filter") : ?>
    </div>
<?php endif; ?>
