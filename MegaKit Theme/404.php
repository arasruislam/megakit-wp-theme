<?php

/***
 * Template for 404 page
 */

get_header();
?>

<div class="main-wrapper ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error_page_megakit">
                    <h2>
                        <?php esc_html_e('404', 'megakit') ?>
                    </h2>
                    <h3>
                        <?php esc_html_e('Page not found error!', 'megakit') ?>
                    </h3>
                    <button><a href="<?php echo site_url() ?>"><?php esc_html_e('back Home', 'megakit') ?></a></button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>