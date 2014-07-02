<?php
/*
 * Plugin Name: Sports-Scheduler
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: 
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 3.8
 * Tested up to: 3.9.1
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Include plugin class files
require_once( 'includes/class-sports-scheduler.php' );
require_once( 'includes/class-sports-scheduler-settings.php' );
require_once( 'includes/post-types/class-sports-scheduler-post_type.php' );

/**
 * Returns the main instance of Sports-Scheduler to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Sports-Scheduler
 */
function Sports-Scheduler () {
	$instance = Sports-Scheduler::instance( __FILE__, '1.0.0' );
	if( is_null( $instance->settings ) ) {
		$instance->settings = Sports-Scheduler_Settings::instance( $instance );
	}

	$instance->post_type = Sports-Scheduler_Post_Type::instance( $instance );

	return $instance;
}

Sports-Scheduler();