<?php 
/**
 * Trigger this file on Plugin Uninstall
 * 
 * @package first-plugin
 */

 if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
     die;
 }


 // Clear Database stored data
 $args = array(
     'post_type'    => 'book',
     'numberposts'  => '-1'
 );
 
 $books = get_posts( $args );

 foreach ( $books as $book ) {
     wp_delete_post( $book->ID, true );
 }


 // Clear Database stored data vi SQL
 global $wpdb;
 $wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'book' " );
 $wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)" );
 $wpdb->query( "DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)" );
