<?php

/**
 * Testimonial Template Part
 */
?>

<div class="container">
    <div class="row testimonial-wrap">
        <?php
        $args = [
            'post_type' => ' Testimonials ',
            'post_per_page' => 4,
        ];
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();
        ?>
        <div class="testimonial-item position-relative">
            <i class="ti-quote-left text-color"></i>

            <div class="testimonial-item-content">
                <p class="testimonial-text">
                    <?php echo the_field('testi_text') ?>
                </p>

                <div class="testimonial-author">
                    <h5 class="mb-0 text-capitalize">
                        <?php the_title(); ?>
                    </h5>
                    <p><?php echo the_field('profession') ?></p>
                </div>
            </div>
        </div>
        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
</div>