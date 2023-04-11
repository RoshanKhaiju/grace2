<?php

/**
 * theme homepage courses banner template
 * 
 * @package grace
 */
?>

<div class="section bg-transparent py-0 py-md-auto">
    <div class="container">
        <h2 class="text-title-light text-dark mb-4">Courses</h2>

        <div id="recipes-carousel" class="owl-carousel carousel-widget" data-margin="0" data-nav="true"
            data-pagi="false" data-items="1">

            <?php
            $args = array(
                'post_type' => 'courses',
                'post_status' => 'publish',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>

            <div class="row no-gutters align-items-stretch rounded shadow">
                <div class="col-lg-5 rounded-left" style="
                      background: url('<?php the_post_thumbnail_url(); ?>')
                        no-repeat center center / cover;
                      min-height: 300px;
                    "></div>
                <div class="col-lg-7 d-flex justify-content-center flex-column rounded-right"
                    style="padding: 80px 50px">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <div class="slider-features d-none d-sm-block my-3">
                        <ul class="list-unstyled">
                            <li class="d-inline-block mr-4">
                                <img src="demos/recipes/images/icons/lunch.svg" alt="ingredients" width="30" />
                                <h5 class="mb-0">Beginner Level</h5>
                            </li>

                            <li class="d-inline-block mr-4">
                                <img src="demos/recipes/images/icons/timer-dark.svg" alt="Timer" width="30" />
                                <h5 class="mb-0">6 months</h5>
                            </li>

                            <li class="d-inline-block">
                                <img src="demos/recipes/images/icons/ingredients-dark.svg" alt="ingredients"
                                    width="30" />
                                <h5 class="mb-0">Intern Included</h5>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="<?php the_permalink(); ?>"
                            class="button button-circle button-large m-0 font-weight-semibold nott ls0 text-right">View
                            Course<i class="icon-angle-right"></i></a>
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