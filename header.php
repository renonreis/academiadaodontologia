<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package academiadaodontologia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-favicon-32x32.png"
    sizes="32x32" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-favicon-192x192.png"
    sizes="192x192" />
  <link rel="apple-touch-icon"
    href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-favicon-180x180.png" />
  <meta name="msapplication-TileImage"
    content="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-favicon-270x270.png" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <header id="masthead" class="site-header navbar fixed-top navbar-expand-lg navbar-dark bd-navbar py-4">

      <nav class="container-xxl flex-wrap flex-lg-nowrap" aria-label="Main navigation">

        <a class="navbar-brand p-0 me-2" href="<?php echo get_home_url(); ?>" aria-label="Bootstrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand.png" alt="Academia da Odontologia">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar"
          aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <?php
					wp_nav_menu(
						array(
							'theme_location' 		=> 'menu-principal',
							'container'			 		=> 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'   		=> 'bdNavbar',
							'menu_class'		 		=> 'align-items-center navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-lg-0 ms-auto',
							'menu_id'       		=> 'primary-menu',
						)
					);
				?>
      </nav>

    </header>