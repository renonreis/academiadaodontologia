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

            <a class="filters__btn btn active btn-lg btn-outline-light ms-lg-2 border-gray-light"
              onclick="filterSelection('all')">Todos</a>
            <a class="filters__btn btn btn-lg btn-outline-light ms-lg-2 border-gray-light"
              onclick="filterSelection('lancamentos')">Lançamentos</a>
            <a class="filters__btn btn btn-lg btn-outline-light ms-lg-2 border-gray-light"
              onclick="filterSelection('mais-acessados')">Mais acessados</a>
            <a class="filters__btn btn btn-lg btn-outline-light ms-lg-2 border-gray-light"
              onclick="filterSelection('semi-presenciais')">Semi-presenciais</a>
            <a class="filters__btn btn btn-lg btn-outline-light ms-lg-2 border-gray-light"
              onclick="filterSelection('sedacao')">
              Sedação <i class="fas fa-plus-circle"></i>
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
          'orderby' => 'date',
          'order'     => 'DESC',
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
            <?php  if(	$term->slug === 'sedacao') : ?>
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
                <span class="time">
                  <i class="far fa-clock"></i>
                  <?php the_field('course_length'); ?>h/aula
                </span>
              </div>
            </a>
          </div> <!-- // card-curso -->
        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
      </div><!-- //col -->
    </div> <!-- //container-->
  </section>
  <section class="banner-info banner-info--center position-relative py-5">
    <div class="container">
      <div class="row">
        <div>
          <h2>Invista em conhecimento, invista em você</h2>
          <p class="lead">A comodidade do Ensino On-line aliada à interação com o professor possível no Ensino
            Presencial.</p>
          <a href="#call" class="btn btn-lg btn-outline-light stretched-link"> junte-se a nós</a>
        </div>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();