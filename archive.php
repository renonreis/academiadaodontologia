<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package academiadaodontologia
 */

get_header();
?>

<main id="main" class="site-main">
  <section class="mt-5 py-5 mb-5">
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <?php if ( have_posts() ) : ?>
          <div class="ui-title py-3 py-md-4 py-lg-5">
            <header class="page-header">
              <?php
								the_archive_title( '<h1 class="ui-title-main page-title">', '</h1>' );
							  the_archive_description( '<div class="text-white archive-description">', '</div>' );
              ?>
            </header><!-- .page-header -->
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mb-md-0 mb-3">
          <div class="row row-cols-1 row-cols-lg-2 g-3">
            <?php
              /* Start the Loop */
              while ( have_posts() ) :
                the_post();

                /*
                * Include the Post-Type-specific template for the content.
                * If you want to override this in a child theme, then include a file
                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                */
                get_template_part( 'template-parts/content', 'archive' );

              endwhile;

            else :

              get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php

get_footer();