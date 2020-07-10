<?php
/**
 * Header file for the Security Matters WordPress default theme.
 *
 * 
 *
 * @package Security Matters
 * @subpackage Security_Matters
 * @since Security Matters 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="main-header">
			<!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
				<a class="navbar-brand" href="#">
					<?php bloginfo('name'); ?>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" 		aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
					<?php
						wp_nav_menu($arg = array(
							'menu_class' => 'main-navigation',
							'theme_location' => 'primary'
						));
					?>
			
			</nav> -->

			<nav class="navbar navbar-expand-md navbar-light bg-faded">
				<a class="navbar-brand" href="#"><?php bloginfo() ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php
				wp_nav_menu([
					'menu'            => 'primary',
					'theme_location'  => 'primary',
					'container'       => 'div',
					'container_id'    => 'bs4navbar',
					'container_class' => 'collapse navbar-collapse',
					'menu_id'         => false,
					'menu_class'      => 'navbar-nav mr-auto',
					'depth'           => 2,
					'fallback_cb'     => 'bs4navwalker::fallback',
					'walker'          => new bs4navwalker()
				]);
				?>
			</nav>

        </header>