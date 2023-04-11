<?php

/**
 * theme nav template
 * 
 * @package grace
 */
?>

<!-- Primary Navigation -->
<nav class="primary-menu">

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'header-menu',
            'container' => false,
            'menu_class' => 'menu-container',
            'walker' => new Walker_Nav_Header()
        )
    )
    ?>

</nav>
<!-- #primary-menu end -->