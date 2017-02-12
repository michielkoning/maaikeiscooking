<?php

add_action( 'init', 'register_recipes' );


function register_recipes() {

  $labels_recipes = array(
    'name'               => 'Recepten',
    'singular_name'      => 'Recept',
    'add_new'            => 'Nieuw recept',
    'add_new_item'       => 'Nieuw recept toevoegen',
    'edit_item'          => 'Recept bewerken',
    'new_item'           => 'Nieuw recept',
    'view_item'          => 'Recept bekijken',
    'search_items'       => 'Zoeken in recepten',
    'not_found'          => 'Geen recept gevonden',
    'not_found_in_trash' => 'Geen recept gevonden in de prullenbak',
    'parent_item_colon'  => 'Bovenliggend recept',
    'menu_name'          => 'Recepten'
  );

  register_post_type(
    'recipe', array(
      'labels'               => $labels_recipes,
      'menu_icon'            => 'dashicons-carrot',
      'hierarchical'         => false,
      'description'          => 'Recepten',
      'supports'             => array( 'title', 'thumbnail'),
      'public'               => true,
      'show_ui'              => true,
      'show_in_menu'         => true,
      'menu_position'        => 5,
      'show_in_nav_menus'    => false,
      'publicly_queryable'   => true,
      'exclude_from_search'  => false,
      'has_archive'          => true,
      'query_var'            => true,
      'can_export'           => true,
      'rewrite'              => array( 'slug' => 'recepten' ),
      'capability_type'      => 'post',
      'taxonomies'           => array('category', 'post_tag')
    )
  );


}

function remove_menus(){

  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments

}
add_action( 'admin_menu', 'remove_menus' );
?>