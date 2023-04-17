<?php

/**
 * theme Courses(page) page banner template
 * 
 * @package grace
 */
?>

<?php
$bgImage = get_sub_field('background_image');
$heading = get_sub_field('heading');
$subHeading = get_sub_field('sub_heading');
?>
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="
          background: #111 url('<?php echo $bgImage['url']; ?>') center
            center / cover;
          padding: 100px 0;
        " data-0="background-position:0px -200px;" data-400="background-position:0px -100px;">
    <div class="container clearfix">
        <div class="row">
            <div class="col-md-7">
                <h1 class="nott mb-5" data-animate="zoomIn"><?php echo $heading; ?></h1>
                <span data-animate="zoomIn" data-delay="300" class="text-white-50"><?php echo $subHeading; ?></span>
            </div>
        </div>
    </div>
</section>