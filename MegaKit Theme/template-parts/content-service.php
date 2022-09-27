<?php

/**
 * Service Template Part
 */
?>
<section class="section service border-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <span class="h6 text-color"><?php esc_html_e('Our Services', 'megakit') ?></span>
                    <h2 class="mt-3 content-title ">
                        <?php esc_html_e('We provide a wide range of creative services', 'megakit') ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php
            $args = [
                'post_type' => ' Services ',
                'post_per_page' => 6,
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) {
                $query->the_post();
                $service_icon = get_field('service_icon');
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-5">
                    <i class="<?php echo $service_icon ?>"></i>
                    <h4 class="mb-3"><?php echo the_title(); ?></h4>
                    <p>
                        <?php echo the_content(); ?>
                    </p>
                </div>
            </div>
            <?php
            }
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>