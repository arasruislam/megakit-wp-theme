<?php

/**
 * The Template For Single Page
 * */
?>
<?php get_header() ?>

<div class="main-wrapper">
    <!-- Breadcrumb -->
    <?php echo get_template_part('./template-parts/content', 'breadcrumb') ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="sinle_page_title">
                    <?php the_title(); ?>
                </h2>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>