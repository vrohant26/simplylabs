<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="container">
		<div class="site-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/Images/simply%20labs%20logo%20bold.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="site-logo-img">
			</a>
		</div>
		<nav class="site-navigation">
			<ul class="nav-menu">
				<li><a href="#" class="active">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact</a></li>
			</ul>
		</nav>
		<div class="header-cta">
			<a href="#" class="btn-contact text-sm">CONTACT NOW <span class="arrow">&rarr;</span></a>
		</div>
	</div>
</header>
