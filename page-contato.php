<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package academiadaodontologia
 */

get_header();
?>

<main id="main" class="site-main">
  <section class="mt-5 py-5">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="ui-title py-3 py-md-4 py-lg-5">
            <h2 class="ui-title-main">Contato</h2>
            <a class="ui-title-sub ff-secondary text-decoration-none text-lowercase"
              href="mailto:contato@academiadaodontologia.com.br"> contato@academiadaodontologia.com.br</a>
          </div>
        </div> <!-- //col-->
      </div> <!-- //row -->
    </div> <!-- // container -->
    <div class="container pt-3 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <?php echo do_shortcode( '[wpforms id="160"]' ); ?>
        </div> <!-- //col-lg-8 -->
      </div>
      <!--// row -->
    </div> <!-- //container -->
  </section>
</main><!-- #main -->

<?php
get_footer();