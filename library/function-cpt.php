<?php

  /* ***** ----------------------------------------------- ***** **
  ** ***** Events Custom Post Type (example)
  ** ***** ----------------------------------------------- ***** */

  // EVENTS
  // Create custom post type
  function bml_create_book_cpt() {

    $labels = array(
      'name' => _x( 'Events', 'post type general name', 'bymattlee' ),
      'singular_name' => _x( 'Event', 'post type singular name', 'bymattlee' ),
      'menu_name' => _x( 'Events', 'admin menu', 'bymattlee' ),
      'name_admin_bar' => _x( 'Event', 'add new on admin bar', 'bymattlee' ),
      'add_new' => _x( 'Add New', 'event', 'bymattlee' ),
      'add_new_item' => __( 'Add New Event', 'bymattlee' ),
      'new_item' => __( 'New Event', 'bymattlee' ),
      'edit_item' => __( 'Edit Event', 'bymattlee' ),
      'view_item' => __( 'View Event', 'bymattlee' ),
      'all_items' => __( 'All Events', 'bymattlee' ),
      'search_items' => __( 'Search Events', 'bymattlee' ),
      'parent_item_colon' => __( 'Parent Events:', 'bymattlee' ),
      'not_found' => __( 'No Events found.', 'bymattlee' ),
      'not_found_in_trash' => __( 'No Events found in Trash.', 'bymattlee' )
    );

    $args = array(
      'labels' => $labels,
      'description' => __( 'Description.', 'bymattlee' ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'events-archive' ),
      'capability_type' => 'post',
      'has_archive' => false,
      'hierarchical' => true,
      'menu_position' => null,
      // 'show_in_rest' => true,
      'menu_icon' => 'dashicons-admin-post',
      'supports' => array( 'title', 'editor', 'excerpt' )
    );

    register_post_type( 'bml-events', $args );

  }

  add_action( 'init', 'bml_create_book_cpt' );



// NETWORK
  function bml_create_network_cpt() {

    $labels = array(
      'name' => _x( 'Network', 'post type general name', 'bymattlee' ),
      'singular_name' => _x( 'Network', 'post type singular name', 'bymattlee' ),
      'menu_name' => _x( 'Network', 'admin menu', 'bymattlee' ),
      'name_admin_bar' => _x( 'Network', 'add new on admin bar', 'bymattlee' ),
      'add_new' => _x( 'Add New', 'Network', 'bymattlee' ),
      'add_new_item' => __( 'Add New Network', 'bymattlee' ),
      'new_item' => __( 'New Network', 'bymattlee' ),
      'edit_item' => __( 'Edit Network', 'bymattlee' ),
      'view_item' => __( 'View Network', 'bymattlee' ),
      'all_items' => __( 'All Network', 'bymattlee' ),
      'search_items' => __( 'Search Network', 'bymattlee' ),
      'parent_item_colon' => __( 'Parent Network:', 'bymattlee' ),
      'not_found' => __( 'No Network found.', 'bymattlee' ),
      'not_found_in_trash' => __( 'No Network found in Trash.', 'bymattlee' )
    );

    $args = array(
      'labels' => $labels,
      'description' => __( 'Description.', 'bymattlee' ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'Network-archive' ),
      'capability_type' => 'post',
      'has_archive' => true,
      'taxonomies' => array('bml-alphabetical'),
      'hierarchical' => true,
      'menu_position' => null,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-admin-post',
      'supports' => array( 'title', 'editor' )
    );

    register_post_type( 'bml-network', $args );

  }

  add_action( 'init', 'bml_create_network_cpt' );


  function bml_create_network_taxonomies() {
    
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
      'name' => _x( 'Alphabetical', 'taxonomy general name', 'bymattlee' ),
      'singular_name' => _x( 'Alphabetical', 'taxonomy singular name', 'bymattlee' ),
      'search_items' => __( 'Search Alphabetical', 'bymattlee' ),
      'all_items' => __( 'All Alphabetical', 'bymattlee' ),
      'parent_item' => __( 'Parent Alphabetical', 'bymattlee' ),
      'parent_item_colon' => __( 'Parent Alphabetical:', 'bymattlee' ),
      'edit_item' => __( 'Edit Alphabetical', 'bymattlee' ),
      'update_item' => __( 'Update Alphabetical', 'bymattlee' ),
      'add_new_item' => __( 'Add New Alphabetical', 'bymattlee' ),
      'new_item_name' => __( 'New Alphabetical Name', 'bymattlee' ),
      'menu_name' => __( 'Alphabetical', 'bymattlee' ),
    );

    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_rest' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'alphabetical' ),
    );

    register_taxonomy( 'bml-alphabetical', array( 'bml-network' ), $args );
  }

  add_action( 'init', 'bml_create_network_taxonomies', 0 );


  // PARTNERS
  function bml_create_partners_cpt() {

    $labels = array(
      'name' => _x( 'Partners', 'post type general name', 'bymattlee' ),
      'singular_name' => _x( 'Partner', 'post type singular name', 'bymattlee' ),
      'menu_name' => _x( 'Partners', 'admin menu', 'bymattlee' ),
      'name_admin_bar' => _x( 'Partners', 'add new on admin bar', 'bymattlee' ),
      'add_new' => _x( 'Add New', 'partners', 'bymattlee' ),
      'add_new_item' => __( 'Add New Partner', 'bymattlee' ),
      'new_item' => __( 'New Partners', 'bymattlee' ),
      'edit_item' => __( 'Edit Partners', 'bymattlee' ),
      'view_item' => __( 'View Partners', 'bymattlee' ),
      'all_items' => __( 'All Partners', 'bymattlee' ),
      'search_items' => __( 'Search Partners', 'bymattlee' ),
      'parent_item_colon' => __( 'Parent Partners:', 'bymattlee' ),
      'not_found' => __( 'No Partners found.', 'bymattlee' ),
      'not_found_in_trash' => __( 'No Partners found in Trash.', 'bymattlee' )
    );

    $args = array(
      'labels' => $labels,
      'description' => __( 'Description.', 'bymattlee' ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'partners-archive' ),
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => true,
      'menu_position' => null,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-admin-post',
      'supports' => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'bml-partners', $args );

  }


  add_action( 'init', 'bml_create_partners_cpt' );




// Guidelines & Resources
// function bml_create_guidelines_cpt() {

//   $labels = array(
//     'name' => _x( 'Guidelines & Resources', 'post type general name', 'bymattlee' ),
//     'singular_name' => _x( 'Guidelines & Resources', 'post type singular name', 'bymattlee' ),
//     'menu_name' => _x( 'Guidelines & Resources', 'admin menu', 'bymattlee' ),
//     'name_admin_bar' => _x( 'Guidelines & Resources', 'add new on admin bar', 'bymattlee' ),
//     'add_new' => _x( 'Add New', 'Guidelines & Resources', 'bymattlee' ),
//     'add_new_item' => __( 'Add New Guidelines & Resources', 'bymattlee' ),
//     'new_item' => __( 'New Guidelines & Resources', 'bymattlee' ),
//     'edit_item' => __( 'Edit Guidelines & Resources', 'bymattlee' ),
//     'view_item' => __( 'View Guidelines & Resources', 'bymattlee' ),
//     'all_items' => __( 'All Guidelines & Resources', 'bymattlee' ),
//     'search_items' => __( 'Search Guidelines & Resources', 'bymattlee' ),
//     'parent_item_colon' => __( 'Parent Guidelines & Resources:', 'bymattlee' ),
//     'not_found' => __( 'No Guidelines & Resources found.', 'bymattlee' ),
//     'not_found_in_trash' => __( 'No Guidelines & Resources found in Trash.', 'bymattlee' )
//   );

//   $args = array(
//     'labels' => $labels,
//     'description' => __( 'Description.', 'bymattlee' ),
//     'public' => true,
//     'publicly_queryable' => true,
//     'show_ui' => true,
//     'show_in_menu' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'Guidelines & Resources-archive' ),
//     'capability_type' => 'post',
//     'has_archive' => true,
//     'taxonomies' => array('bml-type'),
//     'hierarchical' => true,
//     'menu_position' => null,
//     'show_in_rest' => true,
//     'menu_icon' => 'dashicons-admin-post',
//     'supports' => array( 'title', 'editor' )
//   );

//   register_post_type( 'bml-guidelines', $args );

// }

// add_action( 'init', 'bml_create_guidelines_cpt' );


// function bml_create_guidelines_taxonomies() {
  
//   // Add new taxonomy, make it hierarchical (like categories)
//   $labels = array(
//     'name' => _x( 'Type', 'taxonomy general name', 'bymattlee' ),
//     'singular_name' => _x( 'Type', 'taxonomy singular name', 'bymattlee' ),
//     'search_items' => __( 'Search Type', 'bymattlee' ),
//     'all_items' => __( 'All Type', 'bymattlee' ),
//     'parent_item' => __( 'Parent Type', 'bymattlee' ),
//     'parent_item_colon' => __( 'Parent Type:', 'bymattlee' ),
//     'edit_item' => __( 'Edit Type', 'bymattlee' ),
//     'update_item' => __( 'Update Type', 'bymattlee' ),
//     'add_new_item' => __( 'Add New Type', 'bymattlee' ),
//     'new_item_name' => __( 'New Type Name', 'bymattlee' ),
//     'menu_name' => __( 'Type', 'bymattlee' ),
//   );

//   $args = array(
//     'hierarchical' => true,
//     'labels' => $labels,
//     'show_ui' => true,
//     'show_admin_column' => true,
//     'show_in_rest' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'type' ),
//   );

//   register_taxonomy( 'bml-type', array( 'bml-guidelines' ), $args );
// }

// add_action( 'init', 'bml_create_guidelines_taxonomies', 0 );
  
?>