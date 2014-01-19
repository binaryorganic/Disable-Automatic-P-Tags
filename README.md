Disable-Automatic-P-Tags
========================

A tiny WordPress plugin that disables the Wordpress "feature" that injects paragraph tags into double line breaks. With this plugin installed, you can say goodby to automatic and unwanted paragraph tags, your markup can stay beautiful, and never again will you have to wonder why there are line breaks where none should be.

If you'd rather disable `<p></p>` injection without using a plugin, you can simply add the following 2 lines of code to your theme's functions.php file:

`remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );`


More Info: http://codex.wordpress.org/Function_Reference/wpautop
