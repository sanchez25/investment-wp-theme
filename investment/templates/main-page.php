<?php
/*Template Name: Main*/
?>

<?php get_header()?>

<section class="main-block">
    <img src="<?php echo get_template_directory_uri() ?>/img/main-banner.jpg" alt="Investing in the future">
    <div class="main-block-text">
        <div class="container">
            <h1 class="main-title"><?php echo the_title() ?></h1>
        </div>
    </div>
</section>

<?php get_footer()?>
