<?php
/*
  Plugin Name: WWW Admin functions
*/

namespace WWW\AdminFunctions;

//Remove gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);

/**
* Initialize menus
*/
add_action('init', function () {
  register_nav_menu('primary', __('Primary Menu'));
});

/**
 * Enable post thumbnails
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
add_theme_support('post-thumbnails');


/**
 * Custom image sizes
 */
add_image_size('thumbnail_lqip', 45);
add_image_size('1400px', 1400, 788, false);
add_image_size('1800px', 1800, 1013, false);
add_image_size('2000px', 2000, 1125, false);
add_image_size('2400px', 2400, 1350, false);
add_image_size('3000px', 3000, 1800, false);
add_image_size('3500px', 3500, 1969, false);

add_filter('image_size_names_choose', function ($sizes) {
    return array_merge($sizes, array(
        '1400px' => __('1400px'),
        '1800px' => __('1800px'),
        '2000px' => __('2000px'),
        '2400px' => __('2400px'),
        '3000px' => __('3000px'),
        '3500px' => __('3500px'),
    ));
});


if (! isset($content_width)) {
    $content_width = 4800;
}


/**
* Remove srcset max image width
*/
add_filter('max_srcset_image_width', function ($max_width) {
    return false;
});

 /**
     * Add ACF options page
     */


    if( function_exists('acf_add_options_page') ) {
      acf_add_options_page(array(
          'page_title' 	=> 'Options',
          'menu_title'	=> 'Options',
          'menu_slug' 	=> 'options',
          'capability'	=> 'edit_posts',
          'redirect'		=> false,
          'show_in_graphql' => true,
      ));
  }

