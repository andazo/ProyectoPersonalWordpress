<?php

/**
 * Plugin Name: Essential Elementor Widgets
 * Description: Elementor custom widgets from Eessential Web Apps.
 * Plugin URI:  https://essentialwebapps.com/
 * Version:     1.0.0
 * Author:      Essential Web Apps
 * Author URI:  https://essentialwebapps.com/
 * Text Domain: essential-elementor-widget
 *
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function register_essential_custom_widgets( $widgets_manager ) {

    require_once( __DIR__ . '/widgets/card-widget.php' );  // include the widget file

    $widgets_manager->register( new \Essential_Elementor_Card_Widget() );  // register the widget

}
add_action( 'elementor/widgets/register', 'register_essential_custom_widgets' );

//require_once( __DIR__ . '/widgets/card-widget.php' );  // include the widget file