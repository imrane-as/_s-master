<?php
/**
 * The header for our theme.
 *
 * @package _s
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#07111f">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="demo-banner">
	<div class="demo-banner-inner">
		<span class="demo-status"></span>
		<strong>Démonstration DevOps</strong>
		<span>GitHub → Docker → Coolify → WordPress</span>
	</div>
</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', '_s' ); ?>
	</a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<a class="brand-mark" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span>C</span>
			</a>

			<div>
				<p class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						CentUn Studios
					</a>
				</p>

				<p class="site-description">
					WordPress Automation Lab
				</p>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button
				class="menu-toggle"
				aria-controls="primary-menu"
				aria-expanded="false"
			>
				Menu
			</button>

			<ul id="primary-menu" class="menu">
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a></li>
				<li><a href="#pipeline">Pipeline</a></li>
				<li><a href="#services">Projet</a></li>
			</ul>
		</nav>

		<a class="header-cta" href="#pipeline">
			Voir la démo
		</a>
	</header>
