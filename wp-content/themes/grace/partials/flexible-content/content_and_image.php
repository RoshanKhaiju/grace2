<?php

/**
 * theme who we are(page) template
 * 
 * @package grace
 */
?>

<section class="section">
    <div class="bg-transparent">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h2 class="text-title-light text-dark mb-5 ls1 text-uppercase center">
                        <?php the_title(); ?>
                    </h2>
                    <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-8 col-12 text-justify">
                            <?php the_content(); ?>
                            <!-- <p style="font-size: 18px; color: #777">
                                The Grace Culinary Academy is a not-for-profit educational
                                institution dedicated to providing comprehensive culinary
                                education to students in Nepal. Our mission is to prepare
                                students for successful careers in the culinary arts and
                                hospitality industry by providing a rigorous and engaging
                                curriculum, hands-on experience, and a supportive learning
                                environment.
                            </p>
                            <p style="font-size: 18px; color: #777">
                                The purpose of the Grace Culinary Academy is to provide
                                students with the knowledge, skills, and practical
                                experience needed to succeed in the culinary arts and
                                hospitality industry. We aim to produce graduates who are
                                not only technically competent but also creative,
                                imaginative, and culturally sensitive.
                            </p> -->
                        </div>
                        <div class="offset-md-1 col-md-3 col-12 mb-5 mb-md-0">
                            <img src="<?php the_post_thumbnail_url(); ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>