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

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PMZMGKF');</script>
	<!-- End Google Tag Manager -->
	
	<!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1373708729487613');
    fbq('track', 'PageView');fbq('track', 'InitiateCheckout');fbq('track', 'Purchase', {value: 0.00, currency: 'USD'});
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1373708729487613&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

  <?php wp_head(); ?>
	
	<script type="text/javascript">
    /** This section is only needed once per page if manually copying **/
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head            = document.getElementsByTagName('head')[0];
        var script          = document.createElement('script');
        script.type         = 'text/javascript';
        script.src          = 'https://academiadaodontologia.com.br/mkt/media/js/mautic-form.js';
        script.onload       = function() {
            MauticSDK.onLoad();
        };
        head.appendChild(script);
        var MauticDomain = 'https://academiadaodontologia.com.br/mkt';
        var MauticLang   = {
            'submittingMessage': "Por favor, aguarde..."
        }
    }else if (typeof MauticSDK != 'undefined') {
        MauticSDK.onLoad();
    }
</script>

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PMZMGKF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
