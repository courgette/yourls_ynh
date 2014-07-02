<?php
/*
Plugin Name: YunoHost Auth plugin
Plugin URI: http://yourls.org/
Description: Authentification plugin for YunoHost
Version: 0.1
Author: ju
Author URI: http://github.com/julienmalik
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_filter( 'shunt_is_valid_user', 'yunohost_auth_is_valid_user' );
 
function yunohost_auth_is_valid_user( $value ) {
        return $_SERVER['PHP_AUTH_USER'] == YOURLS_YUNOHOST_AUTH_ADMIN;
}

/* And that's it. Activate the plugin and notice how the page title changes */

