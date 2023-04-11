<?php

/**
 * theme homepage news and notice template
 * 
 * @package grace
 */
?>

<div class="section mb-0">
    <div class="container">
        <div class="row clearfix">

            <div class="heading-block center col-md-6 offset-md-3">
                <h2 class="mb-3"><?php the_sub_field('heading'); ?></h2>
                <p>
                    <?php the_sub_field('sub_heading'); ?>
                </p>
            </div>

        </div>
        <div class="clear"></div>
        <div class="row clearfix">

            <?php
            $args = array(
                'post_type' => 'news_and_notice',
                'post_status' => 'publish',
                'posts_per_page' => 3,
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>

                    <div class="col-md-4 mt-4">
                        <div class="card border-0 shadow-sm">
                            <?php the_post_thumbnail('newsAndNoticeImg', array('class' => 'card-img-top', 'alt' => 'Image')); ?>
                            <div class="card-body" style="padding: 40px">
                                <h4 class="card-title mb-3">
                                    <?php the_title(); ?>
                                </h4>
                                <p class="card-text">
                                    <?php the_excerpt(); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="card-link stretched-link">Learn More
                                    <i class="icon-angle-right position-relative ml-2" style="top: 2px"></i></a>
                            </div>
                        </div>
                    </div>

            <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>

        </div>
    </div>
</div>