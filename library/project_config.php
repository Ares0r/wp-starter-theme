<?php 


// File section
// styles
wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/library/css/bootstrap.min.css', array(), '' );



// scripts
wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/library/js/jquery.min.js', array(), '3.5.1', true );


// wp thumbnails (sizes handled in functions.php)
add_theme_support( 'post-thumbnails' );

// default thumb size
set_post_thumbnail_size(125, 125, true);

// wp menus
add_theme_support( 'menus' );

// registering wp3+ menus
register_nav_menus(
    array(
        'main-nav' => __( 'The Main Menu', 'mymodulo' ),   // main nav in header
        'footer-links' => __( 'Footer Links', 'mymodulo' ) // secondary nav in footer
    )
);

/*********************
PAGE NAVI
*********************/

// Numeric Page Navi (built into the theme by default)
function pc_page_navi() {
    global $wp_query;
    $bignum = 999999999;
    if ( $wp_query->max_num_pages <= 1 )
      return;
    echo '<nav class="pagination">';
    echo paginate_links( array(
      'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
      'format'       => '',
      'current'      => max( 1, get_query_var('paged') ),
      'total'        => $wp_query->max_num_pages,
      'prev_text'    => '&larr;',
      'next_text'    => '&rarr;',
      'type'         => 'list',
      'end_size'     => 3,
      'mid_size'     => 3
    ) );
    echo '</nav>';
  } /* end page navi */


function generateImageSizes() {
    // add_image_size( '100-wide-image', 2594, 722, true );
}

add_action('after_setup_theme', 'generateImageSizes');

//adding excerpts to pages
add_post_type_support( 'page', 'excerpt' );