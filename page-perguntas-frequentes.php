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
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <div class="ui-title py-3 py-md-4 py-lg-5 w-100">
            <h2 class="ui-title-main"><?php the_title(); ?></h2>
            <!-- <span class="ui-title-sub"> some subtitle</span> -->
          </div>
        </div> <!-- //col-->
      </div>
      <div class="row">
        <div class="col">
          <div class="ui-accordion accordion" id="accordionFaq">
            <?php 
              $i = 0;
              $args = array(
              'numberposts'	=> -1,
              'posts_per_page'=> 10,
              'post_type'		=> 'faq',
              'orderby' => 'date',
              'order'     => 'ASC',
              );
              $the_query = new WP_Query( $args );
              if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post(); $id = get_the_ID(); 
            ?>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-<?php echo $i; ?>">
                <button class="accordion-button text-start collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-<?php echo $i; ?>" aria-expanded="true"
                  aria-controls="collapse-<?php echo $i; ?>">
                  <?php the_field('question'); ?>
                </button>
              </h2>
              <div id="collapse-<?php echo $i; ?>" class="accordion-collapse collapse"
                aria-labelledby="heading-<?php echo $i; ?>" data-bs-parent="#accordionFaq">
                <div class="accordion-body">
                  <p>
                    <?php the_field('answer'); ?>
                  </p>
                </div>
              </div>
            </div>
            <?php $i++; endwhile; endif; wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();