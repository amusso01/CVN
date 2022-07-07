<?php

  /* ***** ----------------------------------------------- ***** **
  ** ***** Events Custom Post Type (example)
  ** ***** ----------------------------------------------- ***** */

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

  // function bml_create_book_taxonomies() {
    
  //   // Add new taxonomy, make it hierarchical (like categories)
  //   $labels = array(
  //     'name' => _x( 'Date', 'taxonomy general name', 'bymattlee' ),
  //     'singular_name' => _x( 'Date', 'taxonomy singular name', 'bymattlee' ),
  //     'search_items' => __( 'Search Date', 'bymattlee' ),
  //     'all_items' => __( 'All Date', 'bymattlee' ),
  //     'parent_item' => __( 'Parent Date', 'bymattlee' ),
  //     'parent_item_colon' => __( 'Parent Date:', 'bymattlee' ),
  //     'edit_item' => __( 'Edit Date', 'bymattlee' ),
  //     'update_item' => __( 'Update Date', 'bymattlee' ),
  //     'add_new_item' => __( 'Add New Date', 'bymattlee' ),
  //     'new_item_name' => __( 'New Date Name', 'bymattlee' ),
  //     'menu_name' => __( 'Date', 'bymattlee' ),
  //   );

  //   $args = array(
  //     'hierarchical' => true,
  //     'labels' => $labels,
  //     'show_ui' => true,
  //     'show_admin_column' => true,
  //     'query_var' => true,
  //     'rewrite' => array( 'slug' => 'date' ),
  //   );

  //   register_taxonomy( 'bml-date', array( 'bml-events' ), $args );
  // }

  //   // Add new taxonomy, NOT hierarchical (like tags)
  //   $labels = array(
  //     'name' => _x( 'Writers', 'taxonomy general name', 'bymattlee' ),
  //     'singular_name' => _x( 'Writer', 'taxonomy singular name', 'bymattlee' ),
  //     'search_items' => __( 'Search Writers', 'bymattlee' ),
  //     'popular_items' => __( 'Popular Writers', 'bymattlee' ),
  //     'all_items' => __( 'All Writers', 'bymattlee' ),
  //     'parent_item' => null,
  //     'parent_item_colon' => null,
  //     'edit_item' => __( 'Edit Writer', 'bymattlee' ),
  //     'update_item' => __( 'Update Writer', 'bymattlee' ),
  //     'add_new_item' => __( 'Add New Writer', 'bymattlee' ),
  //     'new_item_name' => __( 'New Writer Name', 'bymattlee' ),
  //     'separate_items_with_commas' => __( 'Separate writers with commas', 'bymattlee' ),
  //     'add_or_remove_items' => __( 'Add or remove writers', 'bymattlee' ),
  //     'choose_from_most_used' => __( 'Choose from the most used writers', 'bymattlee' ),
  //     'not_found' => __( 'No writers found.', 'bymattlee' ),
  //     'menu_name' => __( 'Writers', 'bymattlee' ),
  //   );

  //   $args = array(
  //     'hierarchical' => false,
  //     'labels' => $labels,
  //     'show_ui' => true,
  //     'show_admin_column' => true,
  //     'update_count_callback' => '_update_post_term_count',
  //     'query_var' => true,
  //     'rewrite' => array( 'slug' => 'writer' ),
  //   );

  //   register_taxonomy( 'bml-writer', 'bml-book', $args );
  // }

  // add_action( 'init', 'bml_create_book_taxonomies', 0 );
  
?>