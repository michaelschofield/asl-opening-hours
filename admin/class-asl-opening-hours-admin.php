<?php 

class ASL_Opening_Hours_Admin {

	private $version;

	public function __construct( $version ) {
		$this->version = $version;

	}
	
	public function create_the_hours_post_type() {

		register_post_type( 

			'hours', array(

			'labels' => 
				array(
					'name' => __('Opening Hours' ), 
					'singular_name' => __('Schedule' ), 
					'all_items' => __('All Hours' ), 
					'add_new' => __('Add New Schedule' ),
					'add_new_item' => __('Add New Schedule' ), 
					'edit' => __( 'Edit'  ), 
					'edit_item' => __('Edit Schedule' ), 
					'new_item' => __('New Schedule' ), 
					'view_item' => __('View Schedule' ), 
					'search_items' => __('Search Hours' ),
					'not_found' =>  __('Nothing found.' ), 
					'not_found_in_trash' => __('Nothing found in the trash' ), 
					'parent_item_colon' => ''
				),

			'description' => __( '' ), /* Custom Type Description */
			'taxonomies' => array( 'category', 'post_tag' ),
			'public' => false,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,			
			'menu_icon' => plugin_dir_path( dirname( __FILE__ ) ) . 'library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'has_archive' => 'hours', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'revisions', 'excerpt')
		 	) /* end of options */
		); /* end of register post type */
	}

	//public function register_post_type_custom_fields() {}
}