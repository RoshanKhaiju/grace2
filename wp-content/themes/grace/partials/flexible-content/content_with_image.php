<?php

/**
 * theme introduction(page) content with image template
 * 
 * @package grace
 */
?>

<?php
$image = get_sub_field('images');
$heading = get_sub_field('heading');
$content = get_sub_field('content');
$sign = get_sub_field('signature');
?>

<section id="content">
    <div class="content-wrap pb-0">

        <div class="section bg-transparent p-0">
            <div class="container">
                <div class="row align-items-center clearfix">

                    <div class="col-md-6">

                        <h2 class="nott mb-5"><?php echo $heading; ?></h2>

                        <?php echo $content; ?>

                        <div class="clear"></div>
                        <div class="d-flex flex-row mt-3">
                            <img src="<?php echo $sign['url']; ?>" alt="Sign" height="70" class="mr-5" />

                            <?php $socials = get_field('socials', 'option'); ?>
                            <div>

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

                    <div class="col-md-6 mt-5 mt-md-0">
                        <div class="about-img position-relative px-4">
                            <img src="<?php echo $image['image2']['url']; ?>" alt="About Image" />
                            <img src="<?php echo $image['image1']['url']; ?>" alt="About Image" />
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="clear"></div>