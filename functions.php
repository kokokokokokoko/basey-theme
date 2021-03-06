<?php

if ( !defined( 'BASEY_VER' ) ) {
	$basey_theme_object = wp_get_theme();
	define( 'BASEY_VER', $basey_theme_object->version );
}

locate_template( '/inc/assets.php', true, true );
locate_template( '/inc/functions.php', true, true );
locate_template( '/inc/comments.php', true, true );
locate_template( '/inc/gallery.php', true, true );
locate_template( '/inc/search.php', true, true );
locate_template( '/inc/menus.php', true, true );
locate_template( '/inc/widgets.php', true, true );
locate_template( '/inc/custom.php', true, true );
locate_template( '/inc/output.php', true, true );