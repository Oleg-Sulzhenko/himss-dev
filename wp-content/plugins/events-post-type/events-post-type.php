<?php
/*
  Plugin Name: Himms events Custom post type
  Plugin URI: http://wp.tutsplus.com/
  Description: Declares a plugin that will create a custom post type displaying Himms events.
  Version: 1.0
  Author: Soumitra Chakraborty
  Author URI: http://wp.tutsplus.com/
  License: GPLv2
 */


//Функция которая создает и реестрирует кастом пост тайп
function create_event_type() {
    register_post_type('himms_events', array(
        'labels' => array(
            'name' => 'Events',
            'singular_name' => 'Events',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Event',
            'edit' => 'Edit',
            'edit_item' => 'Edit Event',
            'new_item' => 'New Event',
            'view' => 'View',
            'view_item' => 'View Event',
            'search_items' => 'Search Event',
            'not_found' => 'No Events found',
            'not_found_in_trash' => 'No Events found in Trash',
            'parent' => 'Parent Event'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category'),
        'menu_icon' => plugins_url('images/image.png', __FILE__),
        'has_archive' => true
            )
    );
}
add_action('init', 'create_event_type');
 
?>