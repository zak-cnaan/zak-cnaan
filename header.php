<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'underscores' ); ?></a>

	<header id="Header" class="site-header">

			<nav class="navbar navbar-expand-md navbar-dark fixed-top">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
							<ul class="navbar-nav mr-auto" >
									
							<?php

							$menuLocations = get_nav_menu_locations();
							$menuID = $menuLocations['menu-1']; // Get the *primary* menu ID

$primaryNav = wp_get_nav_menu_items($menuID);

							foreach ( $primaryNav as $navItem ) {
								echo '<li class="nav-item"><a class="nav-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';

						
						}
			
							?>

						
						</ul>
					
					</div>
				</nav>

		<div class="site-branding">
			<?php
			the_custom_logo();
			
			$underscores_description = get_bloginfo( 'description', 'display' );
			if ( $underscores_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $underscores_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
