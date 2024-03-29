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
  <section class="mt-5 py-5">
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <div class="ui-title py-3 py-md-4 py-lg-5">
            <h2 class="ui-title-main">Conheça nossos cursos</h2>
            <!-- <span class="ui-title-sub"> some subtitle</span> -->
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-sm">
          <ul id="filters" class="list-inline text-center mb-5">

            <a class="filters__btn btn btn-lg btn-outline-light ms-lg-2 border-gray-light"
              onclick="filterSelection('odontopediatria-premium')">
              Odontopediatria Premium
            </a>
            <a id="odonto-plus" class="filters__btn btn active btn-lg btn-outline-light ms-lg-2 border-gray-light"
              onclick="filterSelection('odontopediatria-plus')">
              Odontopediatria Plus
              <i class="fas fa-plus-circle"></i>
            </a>

          </ul>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php
          $args = array(
          'numberposts'	=> -1,
          'posts_per_page'=> -1,
          'post_type'		=> 'cursos',
          'orderby' => 'menu_order',
          'order'     => 'ASC',
          );
          $the_query = new WP_Query( $args );
          if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post(); $id = get_the_ID();

          $terms = get_terms('curso_category');
          $post_terms = get_the_terms( get_the_ID(), 'curso_category' );
          $post_cat = get_the_terms( get_the_ID(), 'categoria-cursos' );

        ?>
        <div class="col list-courses <?php
				if ( $post_cat && ! is_wp_error( $post_cat ) ) :
					foreach ( $post_cat as $term ) {
						echo $term->slug . ' ';
					}
				endif;
				?>">
          <div class="card card-course <?php if( get_field('course_is_new') === true ) { ?>card-course_is-new<?php } ?>"
            style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium_large'); ?>);">
            <?php  if(	$term->slug === 'odontopediatria-plus') : ?>
            <span class="card-course__plus">
              <i class="fas fa-plus-circle"></i>
            </span>
            <?php endif;  ?>
            <a class="card-course_all_height" href="<?php echo get_post_permalink(); ?>">
              <div class="card-course-content">
                <div class="thumb-avatar" style="background-image: url(<?php
                  foreach($post_terms as $term){
                    the_field('image_teacher', $term);
                  }
                ?>)"></div> <!-- //thumb-avatar -->
                <h3><?php echo $post_terms[0]->name; ?></h3>
                <div class="line"></div>
                <p><?php the_title(); ?></p>
              </div>
              <span class="time">
                <?php
                  if( have_rows('course_length') ):
                    while( have_rows('course_length') ): the_row();
                    $hour = get_sub_field('hour');
                    $minutes = get_sub_field('minutes');
                      if($hour) {
                        echo '<i class="far fa-clock" aria-hidden="true"></i> ' . $hour . 'h' . $minutes . '' ;
                      }
                    endwhile;
                  endif;
                ?>
              </span>
            </a>
          </div> <!-- // card-curso -->
        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
      </div><!-- //col -->
    </div> <!-- //container-->
  </section>
  
  <?php get_template_part( 'template-parts/components/banner' ); ?>
  
</main><!-- #main -->

<?php
get_footer();