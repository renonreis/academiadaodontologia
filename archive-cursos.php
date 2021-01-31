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

<main id="main primary" class="site-main">
  <section class="mt-5 py-5">
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col">
          <div class="ui-title pb-4">
            <h2 class="ui-title-main">Conheça os nossos cursos</h2>
            <!-- <span class="ui-title-sub"> some subtitle</span> -->
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-sm">
          <ul id="filters" class="list-inline text-center mb-5">

            <a class="btn active btn-lg btn-outline-light ms-2 border-gray-light"
              onclick="filterSelection('all')">Todos</a>
            <a class=" btn btn-lg btn-outline-light ms-2 border-gray-light"
              onclick="filterSelection('lancamentos')">Lançamentos</a>
            <a class="btn btn-lg btn-outline-light ms-2 border-gray-light"
              onclick="filterSelection('mais-acessados')">Mais acessados</a>
            <a class="btn btn-lg btn-outline-light ms-2 border-gray-light"
              onclick="filterSelection('semi-presenciais')">Semi-presenciais</a>
            <a class="btn btn-lg btn-outline-light ms-2 border-gray-light" onclick="filterSelection('sedacao')">
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
          <div class="card card-course  card-course_is-new"
            style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium_large'); ?>);">
            <?php 
              if( get_field('course_is_new') ) {
                echo '';
              } else {
                echo '
                <style>
                  .card-course_is-new::after {
                    display: none;
                  }   
                </style>';
              }
            ?>
            <a class="card-course_all_height" href="<?php echo get_post_permalink(); ?>">
              <div class="card-course-content">
                <img class="img-thumbnai" src="<?php
                  foreach($post_terms as $term){     
                    the_field('image_teacher', $term);                  
                  }
                ?>" alt="Nome alternativo">
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
      <div class="row py-3">
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