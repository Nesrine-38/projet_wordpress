<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medicore
 */

if ( ! is_active_sidebar( 'sidebar-primary' ) ) {
	return;
}

dynamic_sidebar( 'sidebar-primary' ); 