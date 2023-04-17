<?php

/**
 * theme footer-top template
 * 
 * @package grace
 */
?>

<div class="container">

    <!-- Footer Widgets -->
    <div class="footer-widgets-wrap">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-12 pr-4">
                <div class="widget clearfix">
                    <h3 class="ls0 nott"><?php echo get_bloginfo('name'); ?></h3>
                    <p><?php the_field('location', 'option'); ?></p>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-6">
                <div class="widget clearfix">
                    <h4 class="ls0 nott">Sitemap</h4>

                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'container' => false,
                            'menu_class' => 'list-unstyled ml-0',
                            'add_li_class' => 'mb-2',
                            'add_a_class' => 'text-black-50',
                        )
                    );
                    ?>

                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6">
                <div class="widget clearfix">
                    <h4 class="ls0 nott">Contact Info</h4>
                    <?php $contact = get_field('contact_info', 'option'); ?>
                    <ul class="list-unstyled ml-0">
                        <?php if ($contact['email']) : ?>
                            <li class="mb-2">
                                Email :
                                <a href="mailto:<?php echo $contact['email']; ?>" class="text-black-50"><?php echo $contact['email']; ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if ($contact['phone']) : ?>
                            <li class="mb-2">
                                Phone :
                                <a href="tel:<?php echo $contact['phone']; ?>" class="text-black-50"><?php echo $contact['phone']; ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>

            <div class="col-lg-2 col-md-2">
                <h4 class="ls0 nott">Socials</h4>
                <?php $socials = get_field('socials', 'option'); ?>
                <div class="d-flex mb-3 mb-sm-0">

                    <?php if ($socials['facebook_link']) : ?>
                        <a href="<?php echo $socials['facebook_link']; ?>" target="_blank" class="social-icon si-small si-colored si-facebook" title="Facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                    <?php endif; ?>

                    <?php if ($socials['twitter_link']) : ?>
                        <a href="<?php echo $socials['twitter_link']; ?>" target="_blank" class="social-icon si-small si-colored si-twitter" title="Twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                    <?php endif; ?>

                    <?php if ($socials['youtube_link']) : ?>
                        <a href="<?php echo $socials['youtube_link']; ?>" target="_blank" class="social-icon si-small si-colored si-youtube" title="youtube">
                            <i class="icon-youtube"></i>
                            <i class="icon-youtube"></i>
                        </a>
                    <?php endif; ?>

                    <?php if ($socials['instagram_link']) : ?>
                        <a href="<?php echo $socials['instagram_link']; ?>" target="_blank" class="social-icon si-small si-colored si-instagram" title="instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>

</div>