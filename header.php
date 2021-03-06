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

  <link rel="icon" href="<?php echo wp_get_attachment_image_url( 139, '' ); ?>" sizes="32x32" />
  <link rel="icon" href="<?php echo wp_get_attachment_image_url( 141, '' ); ?>" sizes="192x192" />
  <link rel="apple-touch-icon" href="<?php echo wp_get_attachment_image_url( 140, '' ); ?>" sizes="180x180" />
  <meta name="msapplication-TileImage" content="<?php echo wp_get_attachment_image_url( 146, '' ); ?>" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">

    <div id="app-mobile-sidebar" class="app-mobile-sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" aria-label="fechar menu">×</a>
      <div class="mobile-menu">
        <?php
              wp_nav_menu(
                array(
                  'theme_location' 		=> 'menu-principal',
                  'container'			 		=> 'div',
                  'container_class'   => 'container_class',
                  'container_id'   		=> 'bdNavbar',
                  'menu_class'		 		=> 'mobile-menu',
                  'menu_id'       		=> 'mobile-menu',
                  )
                );
                ?>
      </div>
    </div>
    <a href="#" onclick="closeNav()" aria-label="fechar menu" id="app-content-overlayer"
      class="app-content-overlayer"></a>
    <header id="masthead" class="site-header navbar fixed-top navbar-expand-lg navbar-dark bd-navbar py-4">

      <nav class="container-xxl flex-wrap flex-lg-nowrap" aria-label="Main navigation">
        <a class="navbar-brand p-0 me-2" href="<?php echo get_home_url(); ?>" aria-label="Academia da odontologia"></a>
        <div class="d-none d-lg-block">
          <?php
              wp_nav_menu(
                array(
                  'theme_location' 		=> 'menu-principal',
                  'container'			 		=> 'div',
                  'container_class'   => 'container_class',
                  'container_id'   		=> 'bdNavbar',
                  'menu_class'		 		=> 'navbar-nav',
                  'menu_id'       		=> 'primary-menu',
                )
              );
            ?>
        </div> <!-- //d-none d-lg-block -->
        <button type="button" onclick="openNav()" class="btn btn-light menu-hamburger"> <i class="fas fa-bars"></i>
        </button>
      </nav>

    </header>