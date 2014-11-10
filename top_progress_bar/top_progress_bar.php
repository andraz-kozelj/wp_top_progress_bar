<?php
/**
 * Plugin Name: Top Progress Bar
 * Plugin URI: https://github.com/andraz-kozelj/wp_top_progress_bar
 * Description: Plugin adds a progress bar on top of any page, displaying how far down the content you are.
 * Version: 1.0
 * Author: Andraz Kozelj
 * Author URI: http://kozelj.org
 * License: GPL2
 */
 
 
 
/*  Copyright 2014  Top Progress Bar  (email : andraz@kozelj.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


function wp_top_progress_bar_scripts()
{
    wp_register_script( 'top_progress_bar-script', plugins_url( '/js/top_progress_bar.js', __FILE__ ), array('jquery') );
 
    wp_enqueue_script( 'top_progress_bar-script' );
}
add_action( 'wp_enqueue_scripts', 'wp_top_progress_bar_scripts' );


function wp_top_progress_bar_style()
{
    wp_register_style( 'top_progress_bar-style', plugins_url( '/css/top_progress_bar.css', __FILE__ ), array(), '20141111', 'all' );
 
    wp_enqueue_style( 'top_progress_bar-style' );
}
add_action( 'wp_enqueue_scripts', 'wp_top_progress_bar_style' );