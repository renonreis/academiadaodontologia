<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
              <h1 class="ui-title-main page-title">
                <?php
									/* translators: %s: search query. */
									printf( esc_html__( 'Resultados da busca por: %s', 'academiadaodontologia' ), '<span>' . get_search_query() . '</span>' );
								?>
              </h1>
            </header><!-- .page-header -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mb-md-0 mb-3">
          <div class="row row-cols-1 row-cols-lg-2 g-3" data-masonry='{"percentPosition": false }'>
            <?php
              /* Start the Loop */
              while ( have_posts() ) :
                the_post();

                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part( 'template-parts/content', 'search' );

              endwhile;

              the_posts_navigation();

              else :

                get_template_part( 'template-parts/content', 'none' );

              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php

get_footer();