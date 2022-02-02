<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    List_Users
 * @subpackage List_Users/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    List_Users
 * @subpackage List_Users/includes
 * @author     Your Name <email@example.com>
 */
class List_Users_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

		$slug = 'list-users-page';
		$title = 'List Users Page';
		
		// check if our page exists and if so, delete it
		if ( get_page_by_path( $slug ) != null ) {

			$list_users_page = get_page_by_path( $slug );
			$post_id = $list_users_page->ID;
			$deleted_post = wp_delete_post( $post_id, true );

			if ( !$deleted_post ) {
				wp_die( 'There was an issue deleting the post.' );
			}
			
		}

	}

}
