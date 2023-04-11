<?php

/**
 * theme top-header template
 * 
 * @package grace 
 */
?>

<!-- Logo -->
<div id="logo">
    <a href="<?php echo home_url(); ?>" class="standard-logo"><img
            src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/grace.png' ?>"
            alt="Canvas Logo" /></a>
    <a href="<?php echo home_url(); ?>" class="retina-logo"><img
            src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/grace-mobile.png' ?>"
            alt="Canvas Logo" /></a>
</div>
<!-- #logo end -->

<div class="header-misc">
    <!-- Top Search -->
    <!-- <div id="top-search" class="header-misc-icon"><a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a></div> -->
    <!-- #top-search end -->
</div>

<div id="primary-menu-trigger">
    <svg class="svg-trigger" viewBox="0 0 100 100">
        <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
        </path>
        <path d="m 30,50 h 40"></path>
        <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
        </path>
    </svg>
</div>