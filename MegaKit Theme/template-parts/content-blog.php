<?php

/**
 * The Template part displaying for blog post.
 */
?>

<div class="col-lg-8">
    <div class="row">
        <?php
        $args = [
            'post_type' => ' post ',
        ];
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();
        ?>
        <div class="col-lg-6 col-md-6 mb-5">
            <div class="blog-item">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded">

                <div class="blog-item-content bg-white p-4">
                    <div class="blog-item-meta  py-1 px-2">
                        <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>
                            <?php the_category(' '); ?>
                        </span>
                    </div>

                    <h3 class="mt-3 mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p class="mb-4">
                        <?php the_excerpt(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>"
                        class="btn btn-small btn-main btn-round-full"><?php the_field('btn_text'); ?></a>
                </div>
            </div>
        </div>
        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
</div>