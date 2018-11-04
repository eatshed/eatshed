<?php

/**
 * Remove unnecessary meta/link tags
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2 );
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');	
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'events',
    array(
      'labels' => array(
      'name' => 'Events',
      'add_new' => 'Add New',
      'add_new_item' => 'Add New',
      'singular_name' => 'Events'
      ),
    'public' => true,
    'has_archive' => false,
    'hierarchical' => true,
    'rewrite' => array('slug' => 'events'),
    )
  );
}

/**
 * Add featured image support
 */
add_theme_support('post-thumbnails');

// remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );