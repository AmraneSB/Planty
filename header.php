<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;800;900&family=Inter:wght@900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Syne">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<?php wp_body_open(); ?>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>


	
	<div class="directionRow" id="headconteneur">
		<nav>
		<a href="http://localhost/projet6/"><img id="firstimg"  src="<?php echo (get_stylesheet_directory_uri()."/images/Logo.png"); ?>" alt="Planty"></a>
		
			</nav>
			<nav>
				<a class="headHighlight headtxt" href="http://localhost/projet6/nous-renconter/">
					Nous rencontrer
				</a>
				<button id="firstbutton" ><a href="http://localhost/projet6/precommander/" id="htxtnone">Commander</a></button>
			</nav>

		</div>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

				
