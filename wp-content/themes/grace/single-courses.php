<?php

/**
 * theme single course post template
 * 
 * @package grace
 */

get_header();

?>


<!-- Page Title -->
<?php $banner = get_field('course_banner'); ?>
<section id="slider" class="slider-element dark parallax include-header course-header" style="
          background: #111 url('<?php echo $banner['url']; ?>') center
            center / cover;
        " data-0="background-position:0px -200px;" data-400="background-position:0px -100px;">
    <div class="container clearfix">
        <div class="mx-auto center" style="max-width: 800px">
            <h3 class="nott font-weight-bold mb-5 display-4" data-animate="zoomIn">
                <?php the_title(); ?>
            </h3>
        </div>
        <div class="mx-auto center" style="max-width: 900px">
            <div class="slider-features" data-animate="zoomIn" data-delay="300">
                <?php if (have_rows('features')) : ?>
                    <ul class="list-unstyled row no-gutters align-items-center overflow-hidden col-mb-50 mt-5">
                        <?php
                        while (have_rows('features')) : the_row();
                            $icon = get_sub_field('icon_white');
                        ?>

                            <li class="col-6 col-lg text-center text-lg-left">
                                <div class="grid-inner px-5">
                                    <img src="<?php echo $icon['url']; ?>" alt="Level" width="30" />
                                    <h5 class="mb-0"><?php the_sub_field('title'); ?></h5>
                                </div>
                            </li>

                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<!-- #page-title end -->

<!-- Content -->
<section id="content" class="bg-light">
    <div class="content-wrap pt-0" style="overflow: visible">
        <div class="container">
            <div class="card border-0 shadow-sm" style="top: -100px">
                <div class="card-body px-4">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between py-3 pl-3">
                        <h4 class="mb-0 text-center text-md-left">
                            Are you ready to apply for the course
                        </h4>

                        <div class="text-center mt-4 mt-md-0">
                            <a href="#" class="button button-circle m-0"><i class="icon-line-cloud-download"></i> Apply
                                Now</a>
                        </div>
                    </div>

                    <div class="line my-4"></div>

                    <div class="row justify-content-between mt-5 mb-4 clearfix">
                        <div class="offset-lg-1 col-lg-10 mt-5 mt-lg-0">
                            <h4>Course Details</h4>
                            <div class="rounded position-relative dark mb-5 course-img" style="
                        background: url('<?php the_post_thumbnail_url(); ?>')
                          no-repeat center center / cover;
                      "></div>

                            <h4 class="mt-4 lh-base" style="line-height: 1.75 !important">
                                This is an intensive course in Indian cookery. The
                                students will be doing hands on cooking daily for 5 days a
                                week in the Tandoor and the other cookery. Theory class
                                will be limited to 40 minutes to maximise learning by
                                doing hands-on cooking.
                            </h4>

                            <div class="program-description">
                                <div class="program-block cms-content" id="content-1">
                                    <div id="content-1" class="program-block cms-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in
                                            reprehenderit in voluptate velit esse cillum dolore
                                            eu fugiat nulla pariatur. Excepteur sint occaecat
                                            cupidatat non proident, sunt in culpa qui officia
                                            deserunt mollit anim id est laborum.
                                        </p>
                                        <h4>Intakes:</h4>
                                        <p>September/October, February/March</p>
                                        <h4>Entry Requirements:</h4>
                                        <p>
                                            Successful completion of undergraduate (Bachelor’s)
                                            degree from any recognized university. Students
                                            expecting to successfully complete the required
                                            entry eligibility before commencement of academic
                                            session be accepted in conditional basis.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <h4>Requirements</h4>
                            <ol class="list-unstyled list-preparation">
                                <li>
                                    Place frozen tater tots on a baking sheet and bake at
                                    450˚F (230˚C) for 20 minutes, or until crispy. Set
                                    aside.
                                </li>
                                <li>
                                    In a large bowl, toss chicken thighs with 1 tablespoon
                                    whole grain mustard, salt, pepper, and 1 tablespoon
                                    olive oil.
                                </li>
                                <li>
                                    In a cast iron skillet, cook on high heat until there is
                                    a nice brown sear on the surface of the chicken, and the
                                    inside is no longer pink.
                                </li>
                                <li>
                                    Roughly four minutes each side. Set chicken aside.
                                </li>
                            </ol>

                            <div class="line my-5"></div>

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

                            <!-- Comments -->
                            <div id="comments" class="clearfix">
                                <div id="respond">
                                    <h4>Apply <span>Now</span></h4>

                                    <?php
                                    echo do_shortcode('[contact-form-7 id="243" title="Comment Form"]');
                                    ?>

                                    <form class="row" action="#" method="post" id="commentform">
                                        <div class="col-md-4 form-group">
                                            <label class="nott ls0 font-weight-normal" for="author">Name</label>
                                            <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="form-control form-control-pill" />
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label class="nott ls0 font-weight-normal" for="email">Email</label>
                                            <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="form-control form-control-pill" />
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label class="nott ls0 font-weight-normal" for="rating">Course</label>
                                            <div class="select-wrapper form-control-pill px-2">
                                                <select id="rating" name="rating" class="form-control border-0">
                                                    <option value="" disabled selected>
                                                        -- Select One --
                                                    </option>
                                                    <option value="1 Star">1 Star</option>
                                                    <option value="2 Star">2 Star</option>
                                                    <option value="3 Star">3 Star</option>
                                                    <option value="4 Star">4 Star</option>
                                                    <option value="5 Star">5 Star</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-12 form-group">
                                            <label class="nott ls0 font-weight-normal" for="comment">Comment</label>
                                            <textarea name="comment" cols="58" rows="7" tabindex="4" class="form-control form-control-pill"></textarea>
                                        </div>

                                        <div class="col-12 form-group">
                                            <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-circle button-large mt-3">
                                                Apply Now
                                            </button>
                                        </div>
                                    </form>

                                </div>
                                <!-- #respond end -->
                            </div>
                            <!-- #comments end -->
                        </div>
                    </div>
                </div>
            </div>

            <h4>Other Courses</h4>

            <div class="related-posts recipe-itmes">
                <div class="row no-gutters">

                    <?php
                    $args = array(
                        'post_type' => 'courses',
                        'post_status' => 'publish',
                        'post_per_page' => 4,
                        'post__not_in' => array(get_the_ID()),
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>

                            <div class="col-md-3 col-sm-6 bg-white">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="image" />
                                        <div class="mt-4 mb-2">
                                            <h3 class="card-title">
                                                <a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a>
                                            </h3>
                                            <h5 class="card-date">
                                                Read More <i class="icon-line-arrow-right"></i>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_query()
                    ?>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- #content end -->


<?php
get_footer();
?>