<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package academiadaodontologia
 */

?>

<footer class="text-white py-3 px-4">
  <div class="container pb-4 pt-5 py-md-6">
    <div class="row justify-content-md-between">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <?php
					wp_nav_menu(
						array(
							'theme_location' 		=> 'menu-mobile-1',
							'container'			 		=> 'div',
							'container_class'   => '',
							'menu_class'		 		=> 'nav flex-column fw-bold text-white',
							'menu_id'       		=> 'primary-menu',
						)
					);
				?>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <?php
					wp_nav_menu(
						array(
							'theme_location' 		=> 'menu-mobile-2',
							'container'			 		=> 'div',
							'container_class'   => '',
							'menu_class'		 		=> 'nav flex-column fw-bold text-white',
							'menu_id'       		=> 'primary-menu',
						)
					);
				?>
      </div>
      <div class="col-sm-12 col-lg-4 mt-4 mt-md-0 ms-auto">
        <h2 class="h6 mb-3">Inscreva-se em nossa newsletter</h2>
        <div class="input-group mb-2">
          <input type="text" class="form-control rounded-0 border-0" placeholder="name@example.com"
            aria-label="name@example.com" aria-describedby="button-addon1">
          <button class="btn btn-outline-light ms-2  rounded-0" type="button" id="button-addon1">Enviar</button>
        </div>
        <p class="text-muted lh-1">
          <small>The information you provide on this form will only be used to provide you
            with
            Dropsmith's updates and special offers for personalized marketing. Your privacy is important for us!
          </small>
        </p>
        <ul class="list-inline fs-5">
          <li class="list-inline-item"><i class="fab fa-facebook-f"></i></li>
          <li class="list-inline-item ms-3"><i class="fab fa-instagram"></i></li>
          <li class="list-inline-item ms-3"><i class="fab fa-youtube"></i></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container py-5">
    <div class="row text-center">
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-site-seguro.png" alt="">
      </div>
    </div>
  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>