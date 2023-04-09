<section class="subpage-banner">
    <div class="subpage-banner-bg">
        <picture>
            <source media="(min-width: 768px)" srcset="<?=$subpage_banner_image_url;?>">
            <img src="<?=$subpage_banner_mobile_image_url;?>" alt="<?=$subpage_banner_image_alt;?>">
        </picture>
    </div>
    <div class="container">
        <div class="subpage-banner__inner">
            <ul class="breadcrumb list-unstyled">
                <li><a href="<?=$index_link;?>"><?=$lang["home"];?></a></li>
            </ul>
            <h2><?=$subpage_banner_title;?></h2>
        </div>
    </div>
</section>