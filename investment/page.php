<?php get_header('page')?>

        <nav class="nav-tab">
            <div class="page-title">
                <h1 class="page-h1"><?php echo the_title(); ?></h1>
            </div>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                    <?php echo get_field('tab_one') ?>
                </button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                    <?php echo get_field('tab_two') ?>
                </button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                    <?php echo get_field('tab_three') ?>
                </button>
            </div>
        </nav>
    </div>
</header>

<section class="page-block">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <div class="tab-img">
                <img src="<?php echo get_field('banner') ?>" alt="<?php echo get_field('tab_one') ?> banner">
                <?php
                    $textBanner = get_field('text_banner');
                    if ($textBanner) {
                ?>
                <div class="tab-img-text">
                    <span style="color: <?php echo get_field('color_text') ?>"><?php echo $textBanner ?></span>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="container">
                <div class="tab-text">
                    <?php echo get_field('content_one') ?>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <div class="tab-img">
                <img src="<?php echo get_field('banner_two') ?>" alt="<?php echo get_field('tab_two') ?> banner">
                <?php
                    $textBannerTwo = get_field('text_banner_two');
                    if ($textBannerTwo) {
                ?>
                <div class="tab-img-text">
                    <span style="color: <?php echo get_field('color_text_two') ?>"><?php echo $textBannerTwo ?></span>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="container">
                <div class="tab-text">
                    <?php echo get_field('content_two') ?>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <div class="tab-img">
                <img src="<?php echo get_field('banner_three') ?>" alt="<?php echo get_field('tab_three') ?> banner">
                <?php
                    $textBannerThree = get_field('text_banner_three');
                    if ($textBannerThree) {
                ?>
                <div class="tab-img-text">
                    <span style="color: <?php echo get_field('color_text_three') ?>"><?php echo $textBannerThree ?></span>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="container">
                <div class="tab-text">
                    <?php echo get_field('content_three') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>