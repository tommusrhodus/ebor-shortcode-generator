<?php
/*
Plugin Name: Ebor Shortcodes Generator
Plugin URI: http://www.madeinebor.com
Description: Super simple shortcodes for your theme.
Version: 1.0.1
Author: TommusRhodus
Author URI: http://www.madeinebor.com
*/

class eborShortcodes {

    function __construct() 
    {	
    	require_once( plugin_dir_path( __FILE__ ) .'shortcodes.php' );
    	define('ebor_TINYMCE_URI', plugin_dir_url( __FILE__ ) .'tinymce');
		define('ebor_TINYMCE_DIR', plugin_dir_path( __FILE__ ) .'tinymce');
		
        add_action('init', array(&$this, 'init'));
        add_action('admin_init', array(&$this, 'admin_init'));
	}
	
	/**
	 * Registers TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function init()
	{
		if( ! is_admin() )
		{
			wp_enqueue_style( 'ebor-shortcodes', plugin_dir_url( __FILE__ ) . 'shortcodes.css' );
			wp_enqueue_script( 'ebor-shortcodes-lib', plugin_dir_url( __FILE__ ) . 'js/ebor-shortcodes-lib.js', array('jquery'), false, true );
		}
		
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
			return;
	
		if ( get_user_option('rich_editing') == 'true' )
		{
			add_filter( 'mce_external_plugins', array(&$this, 'add_rich_plugins') );
			add_filter( 'mce_buttons', array(&$this, 'register_rich_buttons') );
		}
	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Defins TinyMCE rich editor js plugin
	 *
	 * @return	void
	 */
	function add_rich_plugins( $plugin_array )
	{
	if ( floatval(get_bloginfo('version')) >= 3.9){
	$plugin_array['eborShortcodes'] = ebor_TINYMCE_URI . '/plugin.js';
	}else{
	$plugin_array['eborShortcodes'] = ebor_TINYMCE_URI . '/plugin.old.js'; // For old versions of WP
	}
	return $plugin_array;
	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Adds TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function register_rich_buttons( $buttons )
	{
		array_push( $buttons, "|", 'ebor_button' );
		return $buttons;
	}
	
	/**
	 * Enqueue Scripts and Styles
	 *
	 * @return	void
	 */
	function admin_init()
	{
		// css
		wp_enqueue_style( 'ebor-popup', ebor_TINYMCE_URI . '/css/popup.css', false, '1.0', 'all' );
		
		// js
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-livequery', ebor_TINYMCE_URI . '/js/jquery.livequery.js', false, '1.1.1', false );
		wp_enqueue_script( 'jquery-appendo', ebor_TINYMCE_URI . '/js/jquery.appendo.js', false, '1.0', false );
		wp_enqueue_script( 'base64', ebor_TINYMCE_URI . '/js/base64.js', false, '1.0', false );
		if ( floatval(get_bloginfo('version')) >= 3.9){
		wp_enqueue_script( 'ebor-popup', ebor_TINYMCE_URI . '/js/popup.js', false, '1.0', false );
		}else{
		wp_enqueue_script( 'ebor-popup', ebor_TINYMCE_URI . '/js/popup.old.js', false, '1.0', false );
		//For older versions of WP
		}
		
		wp_localize_script( 'jquery', 'eborShortcodes', array('plugin_folder' => plugin_dir_url( __FILE__ ) ) );
	}
    
}
$ebor_shortcodes = new eborShortcodes();