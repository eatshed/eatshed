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


function filter_post_link($permalink, $post) {
  if ($post->post_type != 'post')
      return $permalink;
  return 'blog'.$permalink;
}
add_filter('pre_post_link', 'filter_post_link', 10, 2);


add_action( 'generate_rewrite_rules', 'add_blog_rewrites' );
function add_blog_rewrites( $wp_rewrite ) {
  $wp_rewrite->rules = array(
      'blog/([^/]+)/?$' => 'index.php?name=$matches[1]',
      'blog/[^/]+/attachment/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
      'blog/[^/]+/attachment/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
      'blog/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      'blog/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      'blog/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
      'blog/([^/]+)/trackback/?$' => 'index.php?name=$matches[1]&tb=1',
      'blog/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?name=$matches[1]&feed=$matches[2]',
      'blog/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?name=$matches[1]&feed=$matches[2]',
      'blog/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?name=$matches[1]&paged=$matches[2]',
      'blog/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?name=$matches[1]&cpage=$matches[2]',
      'blog/([^/]+)(/[0-9]+)?/?$' => 'index.php?name=$matches[1]&page=$matches[2]',
      'blog/[^/]+/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
      'blog/[^/]+/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
      'blog/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      'blog/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      'blog/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
  ) + $wp_rewrite->rules;
}
