<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

        
if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_ext1', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css' );

if ( !function_exists( 'chld_thm_cfg_child_css' ) ):
    function chld_thm_cfg_child_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', get_stylesheet_uri() ); 
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_child_css', 999 );

// END ENQUEUE PARENT ACTION

/* ==================================================================
 * wp_enqueue_script for custom js
 * ================================================================== */
add_action( 'wp_enqueue_scripts', 'theme_js' );
function theme_js() {
	wp_register_script('ajax_call', get_stylesheet_directory_uri() .'/main.js', array('jquery'), true);
	wp_enqueue_script('ajax_call');
	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	//after wp_enqueue_script
	wp_localize_script( 'ajax_call', 'object_name', $translation_array );
}

/* ==================================================================
 * wp_ajax for json files
 * ================================================================== */
add_action( 'wp_ajax_import_developer', 'import_developer' );
add_action( 'wp_ajax_nopriv_import_developer', 'import_developer' );

function import_developer() {

  $developer_data = json_decode( file_get_contents( 'php://input' ) );

  if ( compare_keys() ) {
    insert_or_update( $developer_data );
  }

  wp_die();

}

function insert_or_update($developer_data) {

  if ( ! $developer_data)
    return false;

  $args = array(
    'meta_query' => array(
      array(
        'key'   => 'developer_id',
        'value' => $developer_data->id
      )
    ),
    'post_type'      => 'developer',
    'post_status'    => array('publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit'),
    'posts_per_page' => 1
  );

  $developer = get_posts( $args );

  $developer_id = '';

  if ( $developer )
    $developer_id = $developer[0]->ID;

  $developer_post = array(
    'ID'            => $developer_id,
    'post_title'    => $developer_data->nama,
    'post_content'  => $developer_data->kota,
    'post_type'     => 'donatur',
    'post_status'   => ( $developer ) ? $developer[0]->post_status : 'publish'
  );

  $developer_id = wp_insert_post( $developer_post );

  if ( $developer_id ) {
    update_post_meta( $developer_id, 'developer_id', $developer_data->id );

    update_post_meta( $developer_id, 'json', addslashes( file_get_contents( 'php://input' ) ) );

    wp_set_object_terms( $developer_id, $developer_data->tags, 'developer_tag' );
  }

  print_r( $developer_id );

}

function compare_keys() {

  if ( ! isset( $_SERVER['HTTP_X_CODEABLE_SIGNATURE'] ) ) {
    throw new Exception( "HTTP header 'X-Codeable-Signature' is missing." );
  }

  list( $algo, $hash ) = explode( '=', $_SERVER['HTTP_X_CODEABLE_SIGNATURE'], 2 ) + array( '', '' );
  $raw_post = file_get_contents( 'php://input' );

  if ( $hash !== hash_hmac( $algo, $raw_post, CODEABLE_KEY ) ) {
    throw new Exception( 'Secret hash does not match.' );
  }

  return true;

}

/* ==================================================================
 * Display child pages list
 * ================================================================== */

function wpb_list_child_pages() { 

global $post; 
if ( is_page() && $post->post_parent )
  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
if ( $childpages ) {
  $string = '<ul class="__nodot __nopaddingleft">' . $childpages . '</ul>';
}
return $string;
}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');


function is_child() {
  global $post;     // if outside the loop

  if ( is_page() && $post->post_parent ) {
    // This is a subpage
    echo 'col-xs-12';

  } else {
    // This is not a subpage
    echo 'col-xs-12 col-sm-9';
  }
}


/* Enable featured image on pages/posts */
add_theme_support( 'post-thumbnails' );

/* Add additional image size */
add_image_size( 'site_logo', 100, 100, true );
add_image_size( 'site_logo_med', 150, 150, true );
add_image_size( 'square_small', 200, 200, true );
add_image_size( 'square', 300, 300, true );

ini_set( 'mysql.trace_mode', 0 ); 

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination clearfix text-center'>";
      //echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}

?>