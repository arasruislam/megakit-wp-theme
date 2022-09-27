<?php

/**
 * Template Name: Portfolio
 */
?>
<?php get_header(); ?>

<div class="main-wrapper ">
    <!-- Breadcrumb -->
    <?php echo get_template_part('./template-parts/content', 'breadcrumb') ?>

    <!-- Dynamic section portfolio start -->
    <section class="section portfolio pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color"><?php esc_html_e('Our works', 'megakit') ?></span>
                        <h2 class="mt-3 content-title ">
                            <?php esc_html_e('We have done lots of works, lets check some', 'megakit') ?></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row portfolio-gallery">
                <?php
                $args = [
                    'post_type' => ' Portfolios ',
                    'post_per_page' => 6,
                ];
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();

                    $portfolio_sub_title = get_field('portfolio_sub_title');
                    $pop_up_imag = get_field('pop_up_imag');
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="portflio-item position-relative mb-4">
                        <a href="<?php the_post_thumbnail_url(); ?>" class=" popup-gallery">
                            <img src="<?php echo $pop_up_imag ?>" alt="<?php the_title(); ?>" class="img-fluid w-100">

                            <i class="ti-plus overlay-item"></i>
                            <div class="portfolio-item-content">
                                <h3 class="mb-0 text-white">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="text-white-50">
                                    <?php echo $portfolio_sub_title ?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- section portfolio END -->

    <?php get_footer(); ?>