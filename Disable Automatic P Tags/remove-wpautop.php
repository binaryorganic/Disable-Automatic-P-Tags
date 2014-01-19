<?php

/**
 * Plugin Name: Disable Automatic P Tags
 * Plugin URI: https://github.com/binaryorganic/Disable-Automatic-P-Tags
 * Description: Disables the Wordpress "feature" that injects paragraph tags into double line breaks. With this plugin installed, you can say goodby to automatic and unwanted paragraph tags, your markup can stay beautiful, and never again will you have to wonder why there are line breaks where none should be.
 * Version: 1.0
 * Author: binary/organic
 * Author URI: http://binaryorganic.com
 * License: GPL2
 */

/*  Copyright 2014  binary/organic  (email : contact@binaryorganic.com)

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

/*==========  Remove wpautop  ==========*/


remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


/* more info: http://codex.wordpress.org/Function_Reference/wpautop */

?>