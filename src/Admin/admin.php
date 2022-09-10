<?php

function pixicodes_add_admin_page(){
    add_menu_page('Pixicodes Theme Options', 'Pixicodes', 'manage_options', 'pixicodes_blog', 'theme_create_page', '', 110);

    add_submenu_page('pixicodes_blog','Theme Settings','Settings','manage_options','pixicodes_blog','theme_create_page',1 );
    add_submenu_page('pixicodes_blog','Temp Settings','Temp','manage_options','pixicodes_blog_temp','theme_settings_page',2 );
}

add_action('admin_menu', 'pixicodes_add_admin_page');

function theme_create_page(){

}

function theme_settings_page(){

}