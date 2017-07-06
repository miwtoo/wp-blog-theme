<?php


register_nav_menus(
  array('primary' => 'Primary Menu'
 )
);


function material_theme_setup()
{
  add_theme_support('post-thumbnails');
}

// Filter For Controlling Excerpt Length
function material_excerpt_length( $length ) {
    return 150;
}
add_filter( 'excerpt_length', 'material_excerpt_length', 999 );
?>
