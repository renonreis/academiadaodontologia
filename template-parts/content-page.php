<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package academiadaodontologia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section class="mt-5 py-5 mb-5 ">
    <div class="container mb-5">
      <div class="row justify-content-center">
        <div class="col-lg-11">
          <div class="ui-title">
            <header class="page-header">
              <?php the_title( '<h2 class="ui-title-main page-title">', '</h2>' ); ?>
            </header><!-- .entry-header -->
          </div>
          <?php academiadaodontologia_post_thumbnail(); ?>
          <div class="text-light fs-5 fw-lighter content-entry entry-content">
            <?php
							the_content();

							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'academiadaodontologia' ),
									'after'  => '</div>',
								)
							);
							?>
          </div><!-- .entry-content -->
        </div>
      </div>
    </div>
  </section>
</article><!-- #post-<?php the_ID(); ?> -->