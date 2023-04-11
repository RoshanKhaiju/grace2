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

                        <h2 class="nott mb-5"><?php echo $heading;?></h2>

                        <?php echo $content;?>

                        <div class="clear"></div>
                        <div class="d-flex flex-row mt-3">
                            <img src="<?php echo $sign['url'];?>" alt="Sign" height="70" class="mr-5" />
                            <div>
                                <a href="https://facebook.com/semicolonweb" target="_blank"
                                    class="social-icon si-small si-colored si-facebook" title="Facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="https://twitter.com/__semicolon" target="_blank"
                                    class="social-icon si-small si-colored si-twitter" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="https://www.youtube.com/semicolonweb" target="_blank"
                                    class="social-icon si-small si-colored si-youtube" title="youtube">
                                    <i class="icon-youtube"></i>
                                    <i class="icon-youtube"></i>
                                </a>
                                <a href="https://www.instagram.com/semicolonweb" target="_blank"
                                    class="social-icon si-small si-colored si-instagram" title="instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
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