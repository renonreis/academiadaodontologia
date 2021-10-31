<?php
	/* Template Name: Perguntas Frequentes */
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
      
      <?php get_template_part( 'template-parts/components/faq' ); ?>

    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();