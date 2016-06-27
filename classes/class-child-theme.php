<?php
/**
 * Helper class for theme functions.
 */
final class WipiChildTheme {
    
    /**
     * Enqueue scripts and stylesheets
     */
    public static function enqueue_scripts()
    {
	    wp_enqueue_style( 'wipi-child-theme', get_stylesheet_uri(), array( 'wipi' ) );
	    wp_enqueue_script( 'wipi-child-theme', get_stylesheet_directory_uri() . '/js/wipi-child.js', array( 'jquery', 'wipi' ) );
    }
}
