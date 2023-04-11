<?php

/**
 * theme functions and description
 * 
 * @package grace
 */

$include_file = [
    "inc/setup.php",
    "inc/walker.php",
];

array_walk($include_file, function ($file) {
    if (!locate_template($file, true, true)) {
        trigger_error(sprintf('Could not find %s', $file), E_USER_ERROR);
    }
});

unset($include_file);