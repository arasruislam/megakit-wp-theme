<?php

/**
 * Template Name: Home
 */
?>
<?php get_header(); ?>


<div class="main-wrapper ">

    <!-- Dynamic Hero Section -->
    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-10">
                    <div class="block">
                        <?php
                        $hero = get_field('hero', 'option');
                        ?>
                        <span class="d-block mb-3 text-white text-capitalize">
                            <?php echo $hero['sub_title'] ?>
                        </span>
                        <h1 class="animated fadeInUp mb-5">
                            <?php echo $hero['title'] ?>
                        </h1>
                        <a href="<?php echo $hero['btn_url'] ?>" target="_blank"
                            class="btn btn-main animated fadeInUp btn-round-full"><?php echo $hero['btn_text'] ?><i
                                class="btn-icon fa fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic Section Intro Start -->
    <section class="section intro">
        <?php
        $intro_sub_title = get_field('intro_sub_title', 'option');
        $intro_title = get_field('intro_title', 'option');
        $intro_items = get_field('intro_item', 'option');
        ?>
        <div class="container">
            <div class="row ">
                <div class="col-lg-8">
                    <div class="section-title">
                        <span class="h6 text-color ">
                            <?php echo $intro_sub_title ?>
                        </span>
                        <h2 class="mt-3 content-title">
                            <?php echo $intro_title ?>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($intro_items as $intro_item) { ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="intro-item mb-5 mb-lg-0">
                        <i class="<?php echo $intro_item['icon'] ?> color-one"></i>
                        <h4 class="mt-4 mb-3">
                            <?php echo $intro_item['title'] ?>
                        </h4>
                        <p>
                            <?php echo $intro_item['text_area'] ?>
                        </p>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Dynamic Section About Start -->
    <section class="section about position-relative">
        <div class="bg-about"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 offset-md-0">
                    <div class="about-item ">
                        <span class="h6 text-color">
                            <?php the_field('about_item_text', 'option'); ?>
                        </span>
                        <h2 class="mt-3 mb-4 position-relative content-title">
                            <?php the_field('about_item_title', 'option'); ?>
                        </h2>
                        <div class="about-content">
                            <h4 class="mb-3 position-relative">
                                <?php the_field('about_item_sub_title', 'option'); ?>
                            </h4>
                            <p class="mb-5">
                                <?php the_field('about_item_textarea', 'option'); ?>
                            </p>

                            <a href="<?php the_field('about_item_btn_url', 'option'); ?>"
                                class="btn btn-main btn-round-full">
                                <?php the_field('about_item_btn_text', 'option'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic section Counter Start -->
    <section class="section counter">
        <div class="container">
            <div class="row">
                <?php
                $counters = get_field('counter', 'option');
                foreach ($counters as $counter) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span
                                class="counter-stat font-weight-bold"><?php echo $counter['number'] ?></span>
                            <?php esc_html_e('+', 'megakit') ?>
                        </h3>
                        <p class="text-muted"><?php echo $counter['text'] ?></p>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!--  Section Services Start -->
    <?php echo get_template_part('./template-parts/content', 'service') ?>

    <!-- Dynamic Section Cta Start -->
    <section class="section cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cta-item  bg-white p-5 rounded">
                        <span class="h6 text-color">
                            <?php the_field('cta_sub_title', 'option'); ?>
                        </span>
                        <h2 class="mt-2 mb-4">
                            <?php the_field('cta_title', 'option'); ?>
                        </h2>
                        <p class="lead mb-4">
                            <?php the_field('cta_text', 'option'); ?>
                        </p>
                        <h3><i class="ti-mobile mr-3 text-color"></i>
                            <?php the_field('cta_number', 'option'); ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic Section Testimonial Start -->
    <section class="section testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ">
                    <div class="section-title">
                        <span class="h6 text-color">
                            <?php esc_html_e('Clients testimonial', 'megakit') ?>
                        </span>
                        <h2 class="mt-3 content-title">
                            <?php esc_html_e('Check what\'s our clients say about us', 'megakit') ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <?php echo get_template_part('./template-parts/content', 'testimonial') ?>
    </section>
    <!-- Section Testimonial End -->

    <!-- Dynamic Blog Post -->
    <section class="section latest-blog bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color">
                            <?php esc_html_e(`Latest News`, 'megakit') ?>
                        </span>
                        <h2 class="mt-3 content-title text-white">
                            <?php esc_html_e(`Latest articles to enrich knowledge`, 'megakit') ?></h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <?php
                $args = [
                    'post_type' => ' post ',
                    'post_per_page' => 3,
                ];
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();
                ?>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card bg-transparent border-0">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                            class="img-fluid rounded">

                        <div class="card-body mt-2">
                            <div class="blog-item-meta">
                                <a href="#" class="text-white-50">Design<span class="ml-2 mr-2">/</span></a>
                                <a href="#" class="text-white-50">Ui/Ux<span class="ml-2">/</span></a>
                                <a href="#" class="text-white-50 ml-2"><i class="fa fa-user mr-2"></i>admin</a>
                            </div>

                            <h3 class="mt-3 mb-5 lh-36"><a href="<?php the_permalink(); ?>" class="text-white ">
                                    <?php the_title(); ?>
                                </a></h3>

                            <a href="<?php the_permalink(); ?>"
                                class="btn btn-small btn-solid-border btn-round-full text-white">
                                <?php the_field('btn_text'); ?>
                            </a>
                        </div>
                    </div>
                </div>

                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- Dynamic Entrust -->
    <section class="mt-70 position-relative">
        <div class="container">
            <div class="cta-block-2 bg-gray p-5 rounded border-1">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-7">
                        <span class="text-color"><?php the_field('entrust_sub_title', 'option'); ?></span>
                        <h2 class="mt-2 mb-4 mb-lg-0">
                            <?php the_field('entrust_title', 'option'); ?>
                        </h2>
                    </div>
                    <div class="col-lg-4">
                        <a href="contact.html" class="btn btn-main btn-round-full float-lg-right ">
                            <?php the_field('entrust_btn_text', 'option'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php get_footer(); ?>