<?php

/**
 * theme course(page) course list template
 * 
 * @package grace
 */
?>

<section id="content">
    <div class="content-wrap py-0" style="overflow: inherit">
        <div class="recipe-itmes bg-light">
            <div class="row py-6 mx-0">
                <div class="offset-md-2 col-md-8 border-right-0">
                    <div class="row gx-5">

                        <?php
                        $args = array(
                            'post_type' => 'courses',
                            'post_status' => 'publish',
                            'posts_per_page' => 2,
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                        ?>

                        <div class="col-sm-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="image" />
                                    <div class="mt-4 mb-2">
                                        <h3 class="card-title">
                                            <a href="<?php the_permalink(); ?>"
                                                class="stretched-link"><?php the_title(); ?></a>
                                        </h3>
                                        <h5 class="card-date">
                                            Read More<i class="icon-line-arrow-right"></i>
                                        </h5>
                                    </div>
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
        </div>