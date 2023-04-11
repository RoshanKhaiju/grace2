<?php

/**
 * theme introduction(page) quote template
 * 
 * @package grace
 */
?>

<?php
$bgImage = get_sub_field('background_image');

?>

<div class="section m-0 center dark" style="
              background: linear-gradient(
                  rgba(0, 0, 0, 0.6),
                  rgba(0, 0, 0, 0.8)
                ),
                url('<?php echo $bgImage['url']; ?>') no-repeat center center /
                  cover;
              padding: 120px 0;
            ">
    <div class="container">
        <blockquote class="blockquote text-center border-0 m-auto" style="max-width: 700px">
            <h2 class="h1 font-weight-bold text-capitalize" style="line-height: 1.4">
                <?php the_sub_field('quote'); ?>
            </h2>
            <footer class="blockquote-footer text-white-50 mt-4">
                <cite title="Source Title"><?php the_sub_field('quote_by'); ?></cite>
            </footer>
        </blockquote>
    </div>

</div>

</div>
</section>