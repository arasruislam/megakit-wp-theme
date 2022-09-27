<?php

/**
 * This template part displaying for template-about.php 
 */

$about_hero_btn = get_field('about_hero_btn', 'option');
$about_infos = get_field('about_info', 'option');
$about_hero_sub_title = get_field('about_hero_sub_title', 'option');
$about_hero_title = get_field('about_hero_title', 'option');
$about_hero_image = get_field('about_hero_image', 'option');
$about_text = get_field('about_text', 'option');
?>
<!-- Section About Start -->
<section class="section about-2 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-item pr-3 mb-5 mb-lg-0">
                    <span class="h6 text-color">
                        <?php echo $about_hero_sub_title ?>
                    </span>
                    <h2 class="mt-3 mb-4 position-relative content-title">
                        <?php echo $about_hero_title ?>
                    </h2>
                    <p class="mb-5">
                        <?php echo $about_text ?>
                    </p>

                    <a href="<?php echo $about_hero_btn['url'] ?>" class="btn btn-main btn-round-full">
                        <?php echo $about_hero_btn['btn'] ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-item-img">
                    <img src="<?php echo $about_hero_image ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section About End -->

<section class="about-info section pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($about_infos as $about_info) { ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="about-info-item mb-4 mb-lg-0">
                    <h3 class="mb-3"><span
                            class="text-color mr-2 text-md "><?php echo $about_info['numbering'] ?></span>
                        <?php echo $about_info['title'] ?></h3>
                    <p>
                        <?php echo $about_info['text'] ?>
                    </p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>