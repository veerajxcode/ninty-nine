<?php
/**
 * Register Post Types
 *
 * @package NintyNine
 */

namespace NINTYNINE_THEME\Inc;

use NINTYNINE_THEME\Inc\Traits\Singleton;

class Register_Post_Types {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'create_movie_cpt' ], 0 );

	}

	// Register Custom Post Type Movie
	public function create_movie_cpt() {

		$labels = [
			'name'                  => _x( 'Movies', 'Post Type General Name', 'nintynine' ),
			'singular_name'         => _x( 'Movie', 'Post Type Singular Name', 'nintynine' ),
			'menu_name'             => _x( 'Movies', 'Admin Menu text', 'nintynine' ),
			'name_admin_bar'        => _x( 'Movie', 'Add New on Toolbar', 'nintynine' ),
			'archives'              => __( 'Movie Archives', 'nintynine' ),
			'attributes'            => __( 'Movie Attributes', 'nintynine' ),
			'parent_item_colon'     => __( 'Parent Movie:', 'nintynine' ),
			'all_items'             => __( 'All Movies', 'nintynine' ),
			'add_new_item'          => __( 'Add New Movie', 'nintynine' ),
			'add_new'               => __( 'Add New', 'nintynine' ),
			'new_item'              => __( 'New Movie', 'nintynine' ),
			'edit_item'             => __( 'Edit Movie', 'nintynine' ),
			'update_item'           => __( 'Update Movie', 'nintynine' ),
			'view_item'             => __( 'View Movie', 'nintynine' ),
			'view_items'            => __( 'View Movies', 'nintynine' ),
			'search_items'          => __( 'Search Movie', 'nintynine' ),
			'not_found'             => __( 'Not found', 'nintynine' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'nintynine' ),
			'featured_image'        => __( 'Featured Image', 'nintynine' ),
			'set_featured_image'    => __( 'Set featured image', 'nintynine' ),
			'remove_featured_image' => __( 'Remove featured image', 'nintynine' ),
			'use_featured_image'    => __( 'Use as featured image', 'nintynine' ),
			'insert_into_item'      => __( 'Insert into Movie', 'nintynine' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Movie', 'nintynine' ),
			'items_list'            => __( 'Movies list', 'nintynine' ),
			'items_list_navigation' => __( 'Movies list navigation', 'nintynine' ),
			'filter_items_list'     => __( 'Filter Movies list', 'nintynine' ),
		];
		$args   = [
			'label'               => __( 'Movie', 'nintynine' ),
			'description'         => __( 'The movies', 'nintynine' ),
			'labels'              => $labels,
			'menu_icon'           => 'dashicons-video-alt',
			'supports'            => [
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'author',
				'comments',
				'trackbacks',
				'page-attributes',
				'custom-fields',
			],
			'taxonomies'          => [],
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'hierarchical'        => false,
			'exclude_from_search' => false,
			'show_in_rest'        => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		];

		register_post_type( 'movies', $args );

	}


}
