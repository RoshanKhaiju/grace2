<?php

/**
 * theme homepage categroy template
 * 
 * @package grace
 */
?>

<div class="col-12 mt-5 mb-3">
    <h3 class="center"><?php the_sub_field('heading'); ?></h3>
    <div class="categories-lists justify-content-center clearfix">

        <?php
        if (have_rows('category_repeater')) :
            while (have_rows('category_repeater')) : the_row();

                $bg_image = get_sub_field('background_image');
                $image = get_sub_field('image');
        ?>

        <a href="<?php the_sub_field('category_url'); ?>" data-animate="fadeInUp" data-delay="200" class="categories"
            style="background-image: url('<?php echo $bg_image['url']; ?>');">
            <div class="categories-details">
                <div class="icon">
                    <img src="<?php echo $image['url']; ?>" alt="Dinner" />
                </div>
                <div class="info"><?php the_sub_field('heading'); ?></div>
            </div>
        </a>

        <?php
            endwhile;
        endif;
        ?>

    </div>
</div>