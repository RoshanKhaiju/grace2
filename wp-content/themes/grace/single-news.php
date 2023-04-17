<?php

/**
 * theme single news post template
 * 
 * @package grace
 */

get_header();

?>

<section class="section">
    <div class="container clearfix">
        <div class="single-post mb-0">
            <!-- Single Post -->
            <?php if (have_posts()) : ?>
                <div class="entry clearfix">
                    <!-- Entry Title -->
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="entry-title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <!-- .entry-title end -->

                        <!-- Entry Meta -->
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
                                <li>
                                    <a href="#"><i class="icon-user"></i> <?php the_author(); ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- .entry-meta end -->

                        <!-- Entry Image -->
                        <div class="entry-image bottommargin">
                            <a href="#"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" /></a>
                        </div>
                        <!-- .entry-image end -->

                        <!-- Entry Content -->
                        <div class="entry-content mt-0">
                            <?php the_content(); ?>
                            <!-- Post Single - Content End -->

                            <!-- Tag Cloud -->
                            <?php
                            $tags = get_terms([
                                'taxonomy'  => 'post_tag',
                                'hide_empty'    => false
                            ]); ?>
                            <div class="tagcloud clearfix bottommargin">
                                <?php foreach ($tags as $tag) : ?>
                                    <a href="#"><?php echo $tag->name; ?></a>
                                <?php endforeach; ?>
                            </div>
                            <!-- .tagcloud end -->

                            <div class="clear"></div>

                            <!-- Post Single - Share -->
                            <div class="si-share border-0 d-flex justify-content-between align-items-center">
                                <span>Share this Post:</span>
                                <div>
                                    <?php echo do_shortcode("[sharethis-inline-buttons]"); ?>


                                </div>
                            </div>
                            <!-- Post Single - Share End -->
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <!-- .entry end -->

            <!-- Post Navigation -->
            <div class="row justify-content-between col-mb-30 post-navigation">
                <div class="col-6 col-md-auto text-center">
                    <?php previous_post_link(); ?>
                </div>

                <div class="col-6 col-md-auto text-center">
                    <?php next_post_link(); ?>
                </div>
            </div>
            <!-- .post-navigation end -->

            <div class="line"></div>

            <h4>Related Posts:</h4>

            <div class="related-posts row posts-md col-mb-30">

                <?php
                // $terms = get_the_terms(get_the_ID(), 'category');
                // $term_list = wp_list_pluck($terms, 'slug');
                // echo '<pre>';
                // print_r($term_list);
                // wp_die();
                ?>

                <?php
                $args = array(
                    'post_type' => 'news',
                    'post_status' => 'publish',
                    'post_per_page' => 4,
                    'order_by' => 'rand',
                    'post__not_in' => array(get_the_ID()),
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>

                        <div class="entry col-12 col-md-6">
                            <div class="grid-inner row align-items-center gutter-20">
                                <div class="col-4 col-xl-5">
                                    <div class="entry-image">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="Blog Single" /></a>
                                    </div>
                                </div>
                                <div class="col-8 col-xl-7">
                                    <div class="entry-title title-xs nott">
                                        <h3><a href="#"><?php the_title(); ?></a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
                                            <?php
                                            if (get_comments_number() > 0) :
                                            ?>
                                                <li>
                                                    <a href="#"><i class="icon-comments"></i>
                                                        <?php
                                                        echo get_comments_number();
                                                        ?>
                                                    </a>
                                                </li>
                                            <?php
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="entry-content d-none d-xl-block">
                                        <?php the_excerpt(); ?>
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
</section>

<?php
get_footer();
?>