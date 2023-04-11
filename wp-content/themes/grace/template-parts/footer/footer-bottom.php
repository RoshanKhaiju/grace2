<?php

/**
 * theme footer-bottom template
 * 
 * @package grace
 */
?>


<div id="copyrights" class="bg-light">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-5 d-flex justify-content-sm-start text-center text-sm-left mb-3 mb-sm-0 text-black-50">
                Copyrights &copy; <?php the_date('Y'); ?> All Rights Reserved by <?php echo get_bloginfo('name'); ?>.
            </div>

            <div class="col-sm-4 d-flex justify-content-center justify-content-sm-end">
                <div class="copyright-links">
                    Website by <a href="#">Nirvan Studio</a>
                </div>
            </div>
        </div>
    </div>
</div>