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
  <section class="hero" style="background-image: url(<?php echo wp_get_attachment_image_url( 145, '' ); ?>">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/Mariane-Makinf-of-VERSAO-1-MINUTO.mp4"
        type="video/mp4">
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 align-items-end">
        <div class="w-100 text-white">
          <h1 class="display-1">Sua atualização online <br> em Odontopediatria</h1>
          <a href="#" class="hero-button btn btn-primary btn-lg py-3 px-5 mt-4">Comece agora!</a>
        </div>
      </div>
    </div>
  </section>
  <section class="ui-block invist">
    <div class="container py-5">
      <div class="row">
        <div class="col-sm">
          <div class="ui-title">
            <h2 class="ui-title-main ui-title-main--italic">Invista em conhecimento, invista em você</h2>
            <span class="ui-title-sub"> Conheça o nosso método de ensino</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <ul class="list-invist text-center p-0">
            <li><span class="fs-2">+22</span> <span class="fs-3">cursos</span>
            </li>
            <li><span class="fs-2">14</span> <span class="fs-3">professores</span>
            </li>
            <li><span class="fs-2">540</span> <span class="fs-3">horas/aula</span>
            </li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div>
            <div class="videoWrapper">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/Do5HAPmcL2c" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div><!-- // container -->
  </section>
  <section class="mt-5 pt-2 pb-2">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="ui-title">
            <h2 class="ui-title-main">Escolha o seu plano</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center row-cols-1 row-cols-lg-2 g-lg-5">
        <div class="col">
          <div class="ui-plan ff-primary bg-white mb-5 ms-auto">
            <div class="p-5">
              <h5 class="ui-plan__title card-title text-uppercase text-center  mt-4">Odontopediatria <br>
                Premium</h5>
              <h6 class="ui-plan__price">R$ <span>129,90</span> /mês</h6>
              <div class="text-center mt-3">
                <a href="#" class="btn btn-secondary btn-lg text-uppercase fw-bold py-3 px-5">Assinar
                  Premium</a>
                <p class="ff-secondary mt-2 mb-0">* Plano anual total R$ 1.558,80</p>
              </div>
              <ul class="ui-plan__list list-group list-group-flush mt-5">
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Plano de ensino personalizado
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Private Class agendadas – 30 min
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Aulas AO VIVO mensais
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Roteiros de cada curso
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Ebooks, gráficos, informativos
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Acesso imediato a + de 22 cursos
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Cursos novos mensais
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Visulizações ilimitadas das aulas
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Material impresso exclusivo
                </li>
              </ul>
            </div>
            <div class="p-3 bg-secondary"></div>
          </div> <!-- //ui-plan -->
        </div> <!-- //col  -->
        <div class="col">
          <div class="ui-plan bg-white mb-5 ms-auto">
            <div class="ribbon"><span>Recomendado</span></div>
            <div class="p-5">
              <h5 class="ui-plan__title card-title text-uppercase text-center mt-4">Odontopediatria <br>
                Plus <span><i class="fas fa-plus-circle text-primary"></i></span></h5>
              <h6 class="ui-plan__price">R$ <span>137,80</span> /mês</h6>
              <div class="text-center mt-3">
                <a href="#" class="btn btn-primary btn-lg text-uppercase fw-bold py-3 px-5">Assinar
                  Plus</a>
                <p class="ff-secondary mt-2 mb-0">* Plano anual total R$ 1.653,60</p>
              </div>
              <ul class="ui-plan__list list-group list-group-flush mt-5">
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Plano de ensino personalizado
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Private Class agendadas – 30 min
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Aulas AO VIVO mensais
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Roteiros de cada curso
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Ebooks, gráficos, informativos
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Acesso imediato a + de 22 cursos
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Cursos novos mensais
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Visulizações ilimitadas das aulas
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Material impresso exclusivo
                </li>
                <li class="list-group-item text-primary">
                  <i class="mx-2 fas fa-plus-circle"></i> Acesso ao curso de sedação medicamentosa
                </li>
                <li class="list-group-item text-primary">
                  <i class="mx-2 fas fa-plus-circle"></i> Aulas sedação AO VIVO bimestrais
                </li>
              </ul>
            </div>
            <div class="p-3 bg-primary"></div>
          </div> <!-- //ui-plan -->
        </div> <!-- //col  -->
      </div> <!-- //row -->
    </div> <!-- //container -->
  </section>
  <section class="mt-5 pb-5 pt-2">
    <div class="container pb-5">
      <div class="row">
        <div class="col-sm">
          <div class="ui-title">
            <h2 class="ui-title-main">Nossos cursos</h2>
            <span class="ui-title-sub"> Últimos adicionados:</span>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php           
          $args = array(
          'numberposts'	=> -1,
          'posts_per_page'=> 4,
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
        <div class="col <?php 
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
      </div>
      <div class="row text-center">
        <div class="col">
          <a href="<?php echo get_home_url(); ?>/cursos"
            class="btn btn-md btn-outline-light py-3 px-4 mt-4 text-uppercase fw-600 border-2">
            Ver todos os cursos
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 bg-dark">
    <div class="container pt-5">
      <div class="row">
        <div class="ui-title">
          <h2 class="ui-title-main">O que dizem nossos alunos</h2>
        </div>
      </div> <!-- //row -->
      <!-- //container -->
    </div>
    <div class="container-fluid pb-5">
      <div class="row">
        <?php 
          $i = 0;
					$args = array(
					'numberposts'	=> -1,
					'posts_per_page'=> 10,
					'post_type'		=> 'depoimentos',
					);
					$the_query = new WP_Query( $args );
        ?>
        <div id="carouselTestimonial" data-bs-interval="false"
          class="ui-carousel carousel slide _carousel-fade text-white" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <?php if( $the_query->have_posts() ): ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); $id = get_the_ID(); ?>
            <li data-bs-target="#carouselTestimonial" data-bs-slide-to="<?php echo $i;?>"
              class="<?php if($i == 0) echo 'active';?>"></li>
            <?php $i++; endwhile; endif; ?>
          </ol>
          <div class="carousel-inner">
            <?php $i = 0; if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post(); $id = get_the_ID(); ?>
            <div class="carousel-item <?php if($i == 0) echo 'active';?>">
              <div class="row justify-content-center align-items-center align-content-center m-auto">
                <div class="picture-person__container col-12 col-lg-auto justify-content-center">
                  <div class="picture-person m-auto"
                    style="background-image: url(<?php the_field('testimonial_thumb'); ?>">
                  </div>
                </div>
                <div class="col">
                  <?php $testimonials = get_field('testimonial_info'); if( $testimonials ): ?>
                  <figure class="ms-md-5">
                    <blockquote class="blockquote">
                      <p><?php echo esc_html( $testimonials['testimonial_text'] ); ?></p>
                    </blockquote>
                    <figcaption class="blockquote-footer mt-4 text-light">
                      <strong class="fs-6">
                        <?php echo esc_html( $testimonials['testimonial_author'] ); ?>
                      </strong>
                      <cite class="ms-3" title="Source Title">
                        <?php echo esc_html( $testimonials['testimonial_description'] ); ?>
                      </cite>
                    </figcaption>
                  </figure>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php $i++; endwhile; ?>
            <a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Voltar</span>
            </a>
            <a class="carousel-control-next" href="#carouselTestimonial" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Próximo</span>
            </a>
            <?php endif; wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="banner-info banner-info--center position-relative py-5">
    <div class="container">
      <div class="row py-4">
        <div>
          <h2>Invista em conhecimento, invista em você</h2>
          <p class="lead">A comodidade do Ensino On-line aliada à interação com o professor possível no Ensino
            Presencial.</p>
          <a href="#" class="btn btn-lg btn-outline-light  stretched-link"> junte-se a nós</a>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-5 py-5">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="ui-title">
            <h2 class="ui-title-main">Perguntas frequentes</h2>
          </div>
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