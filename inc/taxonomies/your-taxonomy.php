<?php
/**
 * @Author: Niku Hietanen
 * @Date: 2020-02-18 15:05:35
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2023-03-31 14:29:17
 *
 * @package terranean-wp-starter
 */

namespace Air_Light;

/**
 * Registers the Your Taxonomy taxonomy.
 *
 * @param Array $post_types Optional. Post types in
 * which the taxonomy should be registered.
 */
class Your_Taxonomy extends Taxonomy {


  public function register( array $post_types = [] ) {
    // Taxonomy labels.
    $labels = [
      'name'                  => _x( 'Your Taxonomies', 'Taxonomy plural name', 'terranean-wp-starter' ),
      'singular_name'         => _x( 'Your Taxonomy', 'Taxonomy singular name', 'terranean-wp-starter' ),
      'search_items'          => __( 'Search Your Taxonomies', 'terranean-wp-starter' ),
      'popular_items'         => __( 'Popular Your Taxonomies', 'terranean-wp-starter' ),
      'all_items'             => __( 'All Your Taxonomies', 'terranean-wp-starter' ),
      'parent_item'           => __( 'Parent Your Taxonomy', 'terranean-wp-starter' ),
      'parent_item_colon'     => __( 'Parent Your Taxonomy', 'terranean-wp-starter' ),
      'edit_item'             => __( 'Edit Your Taxonomy', 'terranean-wp-starter' ),
      'update_item'           => __( 'Update Your Taxonomy', 'terranean-wp-starter' ),
      'add_new_item'          => __( 'Add New Your Taxonomy', 'terranean-wp-starter' ),
      'new_item_name'         => __( 'New Your Taxonomy', 'terranean-wp-starter' ),
      'add_or_remove_items'   => __( 'Add or remove Your Taxonomies', 'terranean-wp-starter' ),
      'choose_from_most_used' => __( 'Choose from most used Taxonomies', 'terranean-wp-starter' ),
      'menu_name'             => __( 'Your Taxonomy', 'terranean-wp-starter' ),
    ];

    $args = [
      'labels'            => $labels,
      'public'            => false,
      'show_in_nav_menus' => true,
      'show_admin_column' => true,
      'hierarchical'      => true,
      'show_tagcloud'     => false,
      'query_var'         => false,
      'pll_translatable'  => true,
      'rewrite'           => [
        'slug' => 'your-taxonomy',
      ],
    ];

    $this->register_wp_taxonomy( $this->slug, $post_types, $args );
  }

}
