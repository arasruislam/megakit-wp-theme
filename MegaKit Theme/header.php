<?php

/**
 * Theme Header Part
 * */

use Elementor\Core\Common\Modules\Finder\Categories\Site;

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
    <meta name="author" content="themefisher.com">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
    <?php global $post; ?>

</head>

<body>


    <!-- Header Start -->

    <header class="navigation">
        <div class="header-top ">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-2 col-md-4">
                        <div class="header-top-socials text-center text-lg-left text-md-left">
                            <?php
                            $header_footers = get_field('header_footer', 'option');

                            foreach ($header_footers as $header_footer) { ?>
                            <a href="<?php echo $header_footer['social_url'] ?>" target="_blank"><i
                                    class="<?php echo $header_footer['icon'] ?>"></i></a>
                            <?php
                            }
                            ?>

                            <!-- <a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
                            <a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a> -->
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
                        <div class="header-top-info">
                            <?php
                            $call_number = get_field('call_number', 'option');
                            $your_mail = get_field('your_mail', 'option');
                            ?>
                            <a href="tel: <?php echo $call_number ?>"><?php esc_html_e('Call Us :', 'megakit') ?>
                                <span><?php echo $call_number ?></span></a>
                            <a href="mailto: <?php echo $your_mail ?>"><i class="fa fa-envelope mr-2">
                                </i><span><?php echo $your_mail ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar navbar-expand-lg  py-4" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <?php the_custom_logo(); ?>
                </a>

                <!-- Toggle Button -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Navbar -->
                <div class="collapse navbar-collapse text-center" id="navbarsExample09">

                    <?php
                    wp_nav_menu([
                        'theme_location'   => 'primary_menu',
                        'container'        => 'div',
                        'container_class'  => 'collapse navbar-collapse text-center',
                        'container_id'     => 'navbarsExample09',
                        'menu'             => 'ul',
                        'menu_class'       => 'navbar-nav ml-auto',
                    ]);
                    ?>
                    <!-- <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">About</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="about.html">Our company</a></li>
                                <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="project.html">Portfolio</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown05">
                                <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                                <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

                                <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul> -->

                    <form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
                        <a href="<?php get_permalink(get_option('page_for_posts')); ?>"
                            class="btn btn-solid-border btn-round-full"><?php esc_html_e('Get a Quote', 'megakit') ?></a>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Header Close -->