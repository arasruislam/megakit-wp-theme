<?php

/**
 * Template Name: Contact
 */
?>
<?php get_header(); ?>

<div class="main-wrapper ">
    <!-- Breadcrumb -->
    <?php echo get_template_part('./template-parts/content', 'breadcrumb') ?>

    <!-- contact form start -->
    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row">
                <!-- Form -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div id="contact-form" class="contact__form" method="post" action="mail.php">
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>
                        <!-- end message -->
                        <span class="text-color"><?php esc_html_e('Send a message', 'megakit') ?></span>
                        <h3 class="text-md mb-4"><?php esc_html_e('Contact Form', 'megakit') ?></h3>

                        <?php echo do_shortcode('[contact-form-7 id="137" title="Contact form 1"]'); ?>
                    </div>
                </div>

                <?php
                $contact_sub_title = get_field('contact_sub_title', 'option');
                $contact_title = get_field('contact_title', 'option');
                $contact_address = get_field('contact_address', 'option');
                $contact_mail = get_field('contact_mail', 'option');
                $contact_number = get_field('contact_number', 'option');
                ?>
                <div class="col-lg-5 col-sm-12">
                    <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                        <span class="text-muted">
                            <?php if ($contact_sub_title) { ?>
                            <?php echo $contact_sub_title ?>
                            <?php
                            }
                            ?>
                        </span>
                        <h2 class="mb-5 mt-2">
                            <?php if ($contact_title) { ?>
                            <?php echo $contact_title ?>
                            <?php
                            }
                            ?>
                        </h2>
                        <?php if ($contact_address && $contact_mail && $contact_number) { ?>
                        <ul class="address-block list-unstyled">
                            <li>
                                <i class="ti-direction mr-3"></i>
                                <?php echo  $contact_address ?>
                            </li>
                            <li>
                                <i class="ti-email mr-3"></i>
                                <?php echo $contact_mail ?>
                            </li>
                            <li>
                                <i class="ti-mobile mr-3"></i>
                                <?php echo $contact_number ?>
                            </li>
                        </ul>
                        <?php
                        }
                        ?>

                        <ul class="social-icons list-inline mt-5">
                            <?php
                            $header_footers = get_field('header_footer', 'option');

                            foreach ($header_footers as $header_footer) { ?>
                            <li class="list-inline-item">
                                <a href="<?php echo $header_footer['social_url'] ?>"><i
                                        class="<?php echo $header_footer['icon'] ?>"></i></a>
                            </li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="google-map">
        <div id="map"></div>
    </div> -->

    <?php get_footer(); ?>