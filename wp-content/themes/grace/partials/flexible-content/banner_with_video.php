<?php
/**
 * theme banner with video template
 * 
 * @package grace
 */
?>

<?php
$bgImage = get_sub_field('background_image');
$videoUrl = get_sub_field('video_url');
$heading = get_sub_field('heading');
$content = get_sub_field('content');
$buttonLabel = get_sub_field('button_label');
$buttonUrl = get_sub_field('button_url');
?>

<section id="page-title" class="page-title-parallax include-header" style="
          background-image: url('<?php echo $bgImage['url']; ?>');
          background-size: cover;
          padding: 100px 0;
        " data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div class="container clearfix">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="nott mb-5" data-animate="zoomIn">
                    <?php echo $heading;?>
                </h1>
                <span data-animate="zoomIn" data-delay="300"><?php echo $content;?></span>
                <a href="<?php echo $buttonUrl;?>" class="button button-large button-circle ml-0 mt-5 px-4"
                    data-animate="zoomIn" data-delay="500"><?php echo $buttonLabel;?></a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo $videoUrl;?>" data-lightbox="iframe" class="play-video">
                    <i class="icon-play"></i>
                </a>
            </div>
        </div>
    </div>
</section>