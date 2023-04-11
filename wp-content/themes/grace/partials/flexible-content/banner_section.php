<?php

/**
 * theme homepage banner slider template
 * 
 * @package grace
 */
?>

<?php if (have_rows('banner_repeater')) : ?>

<section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header">
    <div class="slider-inner">
        <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="distortion-addon"
            data-source="gallery" style="padding: 0px">
            <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
            <div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display: none" data-version="5.4.8.1">

                <ul>
                    <!-- SLIDE  -->

                    <?php
                        $i = 7;
                        while (have_rows('banner_repeater')) : the_row();
                            $image = get_sub_field('image');
                        ?>

                    <li data-index="rs-<?php echo $i; ?>" data-transition="fade" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="300" data-thumb="<?php echo $image['url']; ?>" data-rotate="0"
                        data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo $image['url']; ?>" alt="Image" data-duration="4000"
                            data-lazyload="<?php echo $image['url']; ?>" data-bgposition="center center"
                            data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina />
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <h3 class="tp-caption font-primary mb-3" id="slide-7-layer-13-1"
                            data-x="['left','left','left','middle']" data-hoffset="['0','30','0','0']"
                            data-y="['middle','middle','top','top']" data-voffset="['-100','-100','260','320']"
                            data-fontsize="['54','44','36','40']" data-width="auto" data-height="auto"
                            data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":1200,"split":"words","splitdelay":0.05,"speed":1000,"split_direction":"forward","frame":"0","from":"x:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","split":"words","splitdelay":0.02,"speed":300,"split_direction":"backward","frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','left','center']" style="
                      z-index: 7;
                      white-space: nowrap;
                      font-size: 54px;
                      line-height: 54px;
                      letter-spacing: 0px;
                      color: #fff;
                    ">
                            <?php the_sub_field('heading'); ?>
                        </h3>

                        <!-- LAYER NR. 2 -->
                        <p class="tp-caption Restaurant-Description" id="slide-7-layer-13-2"
                            data-x="['left','left','left','middle']" data-hoffset="['0','30','0','0']"
                            data-y="['middle','middle','top','top']" data-voffset="['0','0','360','400']"
                            data-fontsize="['24','21','24','27']" data-lineheight="['30','30','30','30']"
                            data-fontweight="['400','400','520','520']" data-width="['680','600','680','600']"
                            data-height="auto" data-visibility="['on', 'on', 'off', 'off']" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1500,"split":"words","splitdelay":0.05,"speed":1000,"split_direction":"forward","frame":"0","from":"x:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","split":"words","splitdelay":0.02,"speed":300,"split_direction":"backward","frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['left','left','left','center']" style="
                      z-index: 5;
                      min-width: 480px;
                      max-width: 480px;
                      white-space: normal;
                      letter-spacing: 0px;
                    ">
                            <?php the_sub_field('sub_heading'); ?>
                            <!-- We will give
                    you 5-days a week of practical bulk cooking based on the
                    Australian TAFE system in our fully equipped commercial
                    kitchen. -->
                        </p>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption" id="slide-7-layer-20" data-x="['left','left','left','middle']"
                            data-hoffset="['0','30','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['100','100','0','200']" data-width="['680','600','680','520']"
                            data-fontsize="['21','18','21','24']" data-lineheight="['30','30','30','30']"
                            data-height="auto" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":2600,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','left','center']" style="
                      z-index: 14;
                      white-space: normal;
                      font-size: 20px;
                      line-height: 22px;
                      font-weight: 400;
                      color: #ffffff;
                    ">
                            <?php the_sub_field('enrollment_text'); ?>
                        </div>

                        <a class="tp-caption rev-btn button button-large m-0 button-white font-weight-bold button-circle button-grace text-capitalize"
                            href="<?php the_sub_field('button_url'); ?>" target="_blank" id="slide-7-layer-13"
                            data-x="['left','left','left','middle']" data-hoffset="['0','30','0','0']"
                            data-y="['middle','middle','bottom','bottom']" data-voffset="['200','200','280','20']"
                            data-width="auto" data-height="auto" data-type="button" data-actions=""
                            data-responsive_offset="off" data-responsive="off" data-fontsize="['18', '15', '15', '15']"
                            data-lineheight="['40', '40', '30', '30']"
                            data-frames='[{"delay":3000,"speed":1600,"frame":"0","from":"x:50px;z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;fbr:100;","bgcolor":"#FFF","to":"o:1;fbr:100;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","bgcolor":"#FFF","to":"opacity:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:#000;"}]'
                            style="z-index: 9; padding: 4px 28px"><span><?php the_sub_field('button_label'); ?></span>
                            <i class="icon-angle-right"></i>
                        </a>
                    </li>

                    <?php
                            $i += 1;
                        endwhile; ?>
                </ul>

                <div class="tp-bannertimer" style="height: 6px; background: rgba(255, 255, 255, 0.15)"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
</section>

<?php endif; ?>