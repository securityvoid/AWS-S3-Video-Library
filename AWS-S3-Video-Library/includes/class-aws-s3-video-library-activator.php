<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 * @author     Your Name <email@example.com>
 */
class AwsS3VideoLibrary_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		echo "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		createTables();
	}

	private function createTables(){
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		global $wpdb;

		$charset_collate = $wpdb->get_charset_collate();

		$table_name = $wpdb->prefix . "awss3videolibrary_player";
		$sql = "CREATE TABLE $table_name ( 
			playerId BIGINT(24) NOT NULL AUTO_INCREMENT , 
			name VARCHAR(36) NOT NULL , 
			height INT(8) NOT NULL DEFAULT 640 , 
			width INT(8) NOT NULL DEFAULT 480 , 
			preload ENUM('auto','meta', 'none') NOT NULL DEFAULT 'auto' , 
			posterURL VARCHAR(512) NOT NULL , 
			classes VARCHAR(512) NULL DEFAULT NULL , 
			isControls BOOLEAN NOT NULL DEFAULT TRUE , 
			isAutoPlay BOOLEAN NOT NULL DEFAULT FALSE , 
			isLoop BOOLEAN NOT NULL DEFAULT FALSE , 
			isMuted BOOLEAN NOT NULL DEFAULT FALSE , 
			PRIMARY KEY  (playerId)
			) $charset_collate;";
		dbDelta( $sql );

		$table_name = $wpdb->prefix . "awss3videolibrary_tags";
		$sql = "CREATE TABLE $table_name ( 
			name VARCHAR(128) NOT NULL , 
			videoId BIGINT(24) NOT NULL , 
			playerId BIGINT(24) NOT NULL , 
			isGroup BOOLEAN NOT NULL DEFAULT TRUE , 
			PRIMARY KEY  (name)
			) $charset_collate;";
		dbDelta( $sql );

		$table_name = $wpdb->prefix . "awss3videolibrary_videogroups";
		$sql = "CREATE TABLE $table_name ( 
			videoId BIGINT(24) NOT NULL AUTO_INCREMENT , 
			name VARCHAR(128) NOT NULL , 
			videogroup VARCHAR(128) NOT NULL , 
			position INT NOT NULL DEFAULT '0' , 
			PRIMARY KEY  (videoId)
			) $charset_collate;";
		dbDelta( $sql );

		$table_name = $wpdb->prefix . "awss3videolibrary_sources";
		$sql = "CREATE TABLE $table_name ( 
			sourceId BIGINT(24) NOT NULL AUTO_INCREMENT , 
			videoId BIGINT(24) NOT NULL , 
			type VARCHAR(128) NOT NULL , 
			src VARCHAR(512) NOT NULL , 
			PRIMARY KEY  (sourceId)
			) $charset_collate;";
		dbDelta( $sql );

		$table_name = $wpdb->prefix . "awss3videolibrary_tracks";
		$sql = "CREATE TABLE $table_name ( 
			trackId BIGINT(24) NOT NULL , 
			videoId BIGINT(24) NOT NULL , 
			kind ENUM('captions', 'chapters', 'descriptions', 'metadata', 'subtitles') NOT NULL , 
			label VARCHAR(128) NOT NULL , 
			src VARCHAR(512) NOT NULL , 
			srclang CHAR(2) NOT NULL , 
			isDefault BOOLEAN NOT NULL DEFAULT FALSE , 
			PRIMARY KEY  (trackId)
			) $charset_collate;";
		dbDelta( $sql );
	}
}
