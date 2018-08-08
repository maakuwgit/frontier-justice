<?php
/**
 * Register the custom post type
 */
if ( ! function_exists('register_team_custom_post_type') ) {

  // Register Custom Post Type
  function register_team_custom_post_type() {

    $labels = array(
      'name'                => 'Team Members',
      'singular_name'       => 'Team Member',
      'menu_name'           => 'Team',
      'parent_item_colon'   => 'Parent Team',
      'all_items'           => 'All Members',
      'view_item'           => 'View Member',
      'add_new_item'        => 'Add New Member',
      'add_new'             => 'New Member',
      'edit_item'           => 'Edit Member',
      'update_item'         => 'Update Member',
      'search_items'        => 'Search Members',
      'not_found'           => 'No members found',
      'not_found_in_trash'  => 'No members found in Trash',
    );
    $args = array(
      'label'               => 'team',
      'description'         => 'Team description',
      'labels'              => $labels,
      'supports'            => array( 'title', 'thumbnail', 'excerpt', 'page-attributes' ),
      'hierarchical'        => true,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => false,
      'show_in_admin_bar'   => true,
      'menu_position'       => 20,
      'menu_icon'           => 'dashicons-groups',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    );
    register_post_type( 'team', $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'register_team_custom_post_type', 0 );

}

/**
 * Custom taxonomies
 */
if ( ! function_exists('register_team_taxonomies') ) {

  function register_team_taxonomies() {

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
      'name'                => _x( 'Positions', 'taxonomy general name' ),
      'singular_name'       => _x( 'Position', 'taxonomy singular name' ),
      'search_items'        => __( 'Search Team Positions' ),
      'all_items'           => __( 'All Positions' ),
      'parent_item'         => __( 'Parent Position' ),
      'parent_item_colon'   => __( 'Parent Position:' ),
      'edit_item'           => __( 'Edit Position' ),
      'update_item'         => __( 'Update Position' ),
      'add_new_item'        => __( 'Add New Position' ),
      'new_item_name'       => __( 'New Position Name' ),
      'menu_name'           => __( 'Positions' )
    );

    $args = array(
      'hierarchical'        => true,
      'labels'              => $labels,
      'show_ui'             => true,
      'show_admin_column'   => true,
      'query_var'           => true,
      'rewrite'             => array( 'slug' => 'position' )
    );

    register_taxonomy( 'team_position', array( 'team' ), $args ); // Must include custom post type name

  }

  add_action( 'init', 'register_team_taxonomies', 0 );

}