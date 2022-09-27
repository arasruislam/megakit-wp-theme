<?php

/**
 * Template Name: About
 */
?>

<?php get_header(); ?>

<div class="main-wrapper ">
    <!-- Breadcrumb Section -->
    <?php echo get_template_part('./template-parts/content', 'breadcrumb') ?>


    <!-- About Hero Section -->
    <?php echo get_template_part('./template-parts/content', 'about') ?>

    <!-- section Counter Start -->
    <section class="section counter bg-counter">
        <div class="container">
            <div class="row">
                <?php
                $counters = get_field('a-counter', 'option');
                foreach ($counters as $counter) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <i class="<?php echo $counter['icon'] ?> color-one text-md"></i>
                        <h3 class="mt-2 mb-0 text-white"><span
                                class="counter-stat font-weight-bold"><?php echo $counter['number'] ?></span>
                            <?php esc_html_e('+', 'megakit') ?>
                        </h3>
                        <p class="text-white-50"><?php echo $counter['text'] ?></p>
                    </div>
                </div>
                <?php
                }
                ?>


            </div>
        </div>
    </section>

    <!--  Section Services Start -->
    <section class="section team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color">Our Team</span>
                        <h2 class="mt-3 content-title">Expert Team member to get best service</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item-wrap mb-5">
                        <div class="team-item position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>./images/team/team-1.jpg" alt=""
                                class="img-fluid w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="fab fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="fab fa-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">Justin hammer</h4>
                            <p>Digital Marketer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item-wrap mb-5">
                        <div class="team-item position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>./images/team/team-2.jpg" alt=""
                                class="img-fluid w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="fab fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="fab fa-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">Jason roy</h4>
                            <p>UI/UX Designer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item-wrap mb-5 ">
                        <div class="team-item position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>./images/team/team-3.jpg" alt=""
                                class="img-fluid w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="fab fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="fab fa-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">Henry oswald</h4>
                            <p>Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item-wrap mb-5 mb-lg-0">
                        <div class="team-item position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>./images/team/team-4.jpg" alt=""
                                class="img-fluid w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="fab fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="fab fa-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">David Williams</h4>
                            <p>Senior Marketer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item-wrap mb-5 mb-lg-0">
                        <div class="team-item position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>./images/team/team-6.jpg" alt=""
                                class="img-fluid w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="fab fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="fab fa-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">Peter Odin</h4>
                            <p>App Developer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-item-wrap mb-5 mb-lg-0 ">
                        <div class="team-item position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>./images/team/team-5.jpg" alt=""
                                class="img-fluid w-100">
                            <div class="team-img-hover">
                                <ul class="team-social list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="twitter"><i class="fab fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="instagram"><i class="fab fa-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">David Spensor</h4>
                            <p>Project Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Section Services End -->

    <!-- Section Testimonial Start -->
    <section class="section testimonial bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color"><?php esc_html_e('Clients testimonial', 'megakit') ?></span>
                        <h2 class="mt-3 content-title">
                            <?php esc_html_e('Check what\'s our clients say about us', 'megakit') ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- testimonial template part -->
        <?php echo get_template_part('./template-parts/content', 'testimonial') ?>
    </section>

    <?php get_footer(); ?>