<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<title><?php ( !defined( 'WPSEO_VERSION' ) ) ? ( wp_title( '|', true, 'right' ) . bloginfo( 'name' ) ) : wp_title( '' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel='stylesheet' id='added-styles' href='<?php echo get_template_directory_uri(); ?>/style.css' type='text/css' media='all'/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'basey_head' );
