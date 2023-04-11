<?php

/**
 * theme single page template
 * 
 * @package grace
 */

get_header();

?>

<?php
if (have_rows('flexible_section')) :
    while (have_rows('flexible_section')) : the_row();
        get_template_part('partials/flexible-content/' . get_row_layout());
    endwhile;
endif;
?>

<?php
get_footer();
?>