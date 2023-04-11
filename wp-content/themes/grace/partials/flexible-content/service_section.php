<?php

/**
 * theme introduction(page) service section template
 * 
 * @package grace
 */
?>


<div class="section bg-light mb-0 mt-3" style="padding: 100px 0">
    <div class="container">

        <div class="heading-block center mx-auto" style="max-width: 700px">
            <h2 class="mb-3"><?php the_sub_field('heading'); ?></h2>
            <p>
                <?php the_sub_field('sub_heading'); ?>
            </p>
        </div>

        <div class="clear"></div>

        <div class="row align-items-stretch justify-content-center">

            <?php
            if (have_rows('service_repeater')) :
                while (have_rows('service_repeater')) : the_row();

                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');

            ?>

                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-5">
                                <div class="feature-box flex-column fbox-light fbox-plain">
                                    <div class="fbox-icon mx-0 bottommargin-sm">
                                        <img src="<?php echo $icon['url']; ?>" alt="Icon" style="height: 60px" />
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="ls0 nott mb-4">
                                            <?php echo $title; ?>
                                        </h3>
                                        <p>
                                            <?php echo $content; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
                endwhile;
            endif;
            ?>

        </div>

    </div>
</div>