<?php

/**
 * theme testimonials template
 * 
 * @package grace
 */
?>


<section class="section my-0">
    <div class="container clearfix">
        <h3><?php the_title(); ?></h3>
        <?php
        if (have_rows('testimonials_repeater')) :
        ?>
            <ul class="testimonials-grid grid-1 grid-md-2 grid-lg-3">
                <?php
                while (have_rows('testimonials_repeater')) : the_row();
                    $image = get_sub_field('image');
                ?>
                    <li class="grid-item testimonial">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="<?php echo $image['url']; ?>" alt="Customer Testimonails" /></a>
                            </div>
                            <div class="testi-content">
                                <p>
                                    <?php the_sub_field('review'); ?>
                                </p>
                                <div class="testi-meta">
                                    <?php the_sub_field('name'); ?>
                                    <span><?php the_sub_field('company'); ?></span>
                                </div>
                            </div>
                        </div>
                    </li>

                <?php
                endwhile;
                ?>
            </ul>
        <?php
        endif;
        ?>

        <div class="fslider testimonial testimonial-full bottommargin" data-animation="fade" data-arrows="false">
            <div class="flexslider">
                <?php
                $args = array(
                    'order_by' => 'rand',
                );

                if (have_rows('testimonials_repeater')) :
                ?>
                    <div class="slider-wrap">
                        <?php
                        $i = 0;
                        while (have_rows('testimonials_repeater') && $i < 3) : the_row();
                            $image = get_sub_field('image');
                        ?>
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="<?php echo $image['url']; ?>" alt="Customer Testimonails" /></a>
                                </div>
                                <div class="testi-content">
                                    <p>
                                        <?php the_sub_field('review'); ?>
                                    </p>
                                    <div class="testi-meta">
                                        <?php the_sub_field('name'); ?>
                                        <span><?php the_sub_field('company'); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $i += 1;
                        endwhile;
                        ?>

                    </div>
                <?php
                endif;
                ?>

            </div>
        </div>
    </div>
</section>