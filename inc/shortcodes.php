<?php function foobar_func($atts)
{
    $map = get_field('map');
    echo "<pre>";
    var_dump($map);
    echo "</pre>";
}
add_shortcode('foobar', 'foobar_func');