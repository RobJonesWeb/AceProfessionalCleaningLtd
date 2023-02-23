<?php

$roots_includes = [
    '/inc/functions/styles.php',
    '/inc/functions/scripts.php',
    '/inc/functions/rjw.php'
];

foreach($roots_includes as $file)
{
    if(!$filepath = locate_template($file))
    {
        trigger_error("Error locating `$file` for inclusion!", E_USER_ERROR);
    }

    require_once $filepath;
}
unset ($file, $filepath);
