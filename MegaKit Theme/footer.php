<?php

/**
 * Theme Footer Part
 * */
?>

<!-- footer Start -->
<footer class="footer section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php if (is_active_sidebar('footer_one')) { ?>
                <?php dynamic_sidebar('footer_one'); ?>
                <?php } ?>
                <!-- <div class="widget">
                    <h4 class="text-capitalize mb-4">Company</h4>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <?php if (is_active_sidebar('footer_two')) { ?>
                <?php dynamic_sidebar('footer_two'); ?>
                <?php } ?>
                <!-- <div class="widget">
                    <h4 class="text-capitalize mb-4">Quick Links</h4>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div> -->
            </div>

            <!-- Acf Pro -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php
                $footer_subscribe = get_field('footer_subscribe', 'option');

                if ($footer_subscribe) { ?>
                <div class="widget">

                    <h4 class="text-capitalize mb-4">
                        <?php echo $footer_subscribe['title'] ?>
                    </h4>
                    <p>
                        <?php echo $footer_subscribe['text'] ?>
                    </p>

                    <form action="#" class="sub-form">
                        <input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
                        <a href="<?php echo site_url() ?>"
                            class="btn btn-main btn-small"><?php echo $footer_subscribe['btn_text'] ?></a>
                    </form>
                </div>
                <?php
                }
                ?>

            </div>

            <div class="col-lg-3 ml-auto col-sm-6">
                <?php
                $footer_logo = get_field('footer_logo', 'option');
                // echo '<pre>';
                // print_r($footer_logo );
                // echo '</pre>';
                if ($footer_logo) { ?>
                <div class="widget">
                    <div class="logo mb-4">
                        <h3>
                            <img src="<?php echo $footer_logo['logo'] ?>" alt="<?php esc_html_e('image') ?>">
                        </h3>
                    </div>
                    <h6><a href="tel:+23-345-67890"><?php echo $footer_logo['support_mail'] ?></a></h6>
                    <a href="mailto:support@gmail.com"><span
                            class="text-color h4"><?php echo $footer_logo['cell_number'] ?></span></a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>

        <div class="footer-btm pt-4">
            <div class="row">
                <!-- <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="copyright">
                        &copy; Copyright Reserved to <span class="text-color">Megakit.</span> by <a
                            href="https://themefisher.com/" target="_blank">Themefisher</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="copyright">
                        Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 text-left text-lg-left">
                    <ul class="list-inline footer-socials">
                        <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
                                    class="ti-facebook mr-2"></i>Facebook</a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                    class="ti-twitter mr-2"></i>Twitter</a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                    class="ti-linkedin mr-2 "></i>Linkedin</a></li>
                    </ul>
                </div> -->
                <?php
                $copyright = get_field('copyright', 'option');
                if ($copyright) { ?>
                <?php echo $copyright ?>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</footer>

</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
</script>

<?php wp_footer(); ?>
</body>

</html>