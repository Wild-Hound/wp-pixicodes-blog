<?php

function pixicodes_add_admin_page(){
    add_menu_page('Pixicodes Theme Options', 'Pixicodes', 'manage_options', 'pixicodes-blog', 'theme_create_page', '', 110);
}

add_action('admin_menu', 'pixicodes_add_admin_page');

function theme_create_page(){

}