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

function material_scripts() {
	wp_enqueue_style( 'material-style', get_stylesheet_uri() );

	wp_enqueue_script( 'material-navigation', get_template_directory_uri() . 'js\materialize.min.js', array(), '20151215', true );

	wp_enqueue_script( 'material-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'material_scripts' );


function my_nav_wrap() {
  $wrap  = '<ul id="%1$s">%3$s';
  $wrap .= '</ul>';
  return $wrap;
}
?>
