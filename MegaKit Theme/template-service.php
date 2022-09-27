<?php

/**
 * Template Name: Service
 */
?>

<?php get_header(); ?>

<div class="main-wrapper ">
    <!-- Breadcrumb -->
    <?php echo get_template_part('./template-parts/content', 'breadcrumb') ?>


    <!--  Section Services Start -->
    <?php echo get_template_part('./template-parts/content', 'service') ?>

    <section class="cta-2">
        <div class="container">
            <div class="cta-block p-5 rounded">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-7">
                        <span class="text-color"><?php the_field('entrust_sub_title', 'option'); ?></span>
                        <h2 class="mt-2 text-white"><?php the_field('entrust_title', 'option'); ?></h2>
                    </div>
                    <div class="col-lg-4">
                        <a href="contact.html"
                            class="btn btn-main btn-round-full float-right"><?php the_field('entrust_btn_text', 'option'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>