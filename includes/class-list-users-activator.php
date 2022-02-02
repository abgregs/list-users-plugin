<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    List_Users
 * @subpackage List_Users/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    List_Users
 * @subpackage List_Users/includes
 * @author     Your Name <email@example.com>
 */
class List_Users_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		$post_id = -1;
		$author_id = 1;
		$slug = 'list-users-page';
		$title = 'List Users Page';
		$post_content = '<h1>List Users</h1><div id="list-users"></div>';
		
		// check if page exists, if not create it.
		if ( get_page_by_title( $title ) == null && get_page_by_path( $slug ) == null ) {

			$list_users_page = array(
				'post_author'       => $author_id,
				'post_name'         => $slug,
				'post_title'        => $title,
				'post_content'		=> $post_content,
				'post_status'       => 'publish',
				'post_type'         => 'page'
			);

			$post_id = wp_insert_post( $list_users_page );

			if ( !$post_id ) {
				wp_die( 'There was an error creating the page' );
			}
		}
		
	}

}
