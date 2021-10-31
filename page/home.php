<?php
	/* Template Name: Home */
	get_header();

?>

<main id="main" class="site-main">
  <section class="hero" style="background-image: url(<?php echo wp_get_attachment_image_url( 145, '' ); ?>">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="https://www.academiadaodontologia.com.br/wp-content/uploads/2021/04/Academia_home_novo_v03.mp4"
        type="video/mp4">
    </video>
    <div class="container">
      <div class="d-flex align-items-end">
        <div class="w-100 text-white text-center text-sm-start">
          <h1 class="display-1">Sua atualização online <span class="br"> em Odontopediatria</h1>
          <a href="#escolha-o-seu-plano"
            class="hero-button btn btn-primary btn-lg py-3 px-5 mt-4 ff-primary fw-700 ">Comece
            agora!</a>
        </div>
      </div>
    </div>
  </section>
  <section class="ui-block invist">
    <div class="container py-5">
      <div class="row">
        <div class="col-sm">
          <div class="ui-title pb-4">
            <h2 class="ui-title-main ui-title-main--italic">Invista em conhecimento, invista em você</h2>
            <span class="ui-title-sub"> Conheça o nosso método de ensino</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <ul class="list-invist text-center p-0">
            <li>
              <div>
                <div class>
                  <span class="fs-2">15</span> <span class="fs-3">cursos</span>
                </div>
              </div>
            </li>
            <li class="list-invist__item-center">
              <div>
                <div>
                  <span class="fs-2">14</span> <span class="fs-3">professores</span>
                </div>
              </div>
            </li>
            <li>
              <div>
                <div>
                  <span class="fs-2">60</span> <span class="fs-3">horas/aula</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div>
            <div class="videoWrapper">
              <iframe src="https://player.vimeo.com/video/525143132?autoplay=1&title=0&byline=0&portrait=0" width="560"
                height="315" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div><!-- // container -->
  </section>
  <section id="escolha-o-seu-plano" class="pt-5 pt-2 pb-2">
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
            <div class="d-flex flex-column">
              <h5 class="ui-plan__title card-title text-uppercase text-center  mt-4">Odontopediatria <br>
                Premium</h5>
              <h6 class="ui-plan__price">R$ <span>129,90</span> /mês</h6>
              <div class="text-center mt-3">
                <a href="https://cursos.academiadaodontologia.com.br/course/view.php?id=32" class="btn btn-secondary btn-lg text-uppercase fw-bold py-3 px-5">Assinar
                  Premium</a>
                <p class="ff-secondary mt-2 mb-0">* Plano anual total R$ 1.558,80</p>
              </div>
              <ul class="ui-plan__list list-group list-group-flush">
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Acesso imediato a 14 cursos
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
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Cursos novos mensais
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Visualizações ilimitadas das aulas
                </li>
              </ul>
              <div class="pt-4 text-center">
                <a href="<?php echo get_home_url(); ?>/cursos" class="btn btn-lg border-gray-premium">
                  Saiba mais
                </a>
              </div>
            </div>
            <div class="ui-plan__footer p-3 bg-secondary"></div>
          </div> <!-- //ui-plan -->
        </div> <!-- //col  -->
        <div class="col">
          <div class="ui-plan bg-white mb-5 ms-auto">
            <div class="ribbon"><span>Recomendado</span></div>
            <div class="d-flex flex-column">
              <h5 class="ui-plan__title card-title text-uppercase text-center mt-4">Odontopediatria <br>
                Plus <span><i class="fas fa-plus-circle text-primary"></i></span></h5>
              <h6 class="ui-plan__price">R$ <span>169,90</span> /mês</h6>
              <div class="text-center mt-3">
                <a href="https://cursos.academiadaodontologia.com.br/course/view.php?id=33" class="btn btn-primary btn-lg text-uppercase fw-bold py-3 px-5">Assinar
                  Plus</a>
                <p class="ff-secondary mt-2 mb-0">* Plano anual total R$ 2.038,80</p>
              </div>
              <ul class="ui-plan__list list-group list-group-flush">
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Acesso imediato a 15 cursos
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
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Cursos novos mensais
                </li>
                <li class="list-group-item">
                  <i class="mx-2 far fa-check-circle text-black-50"></i> Visualizações ilimitadas das aulas
                </li>
                <li class="list-group-item text-primary">
                  <i class="mx-2 fas fa-plus-circle"></i> Acesso ao curso de sedação medicamentosa
                </li>
                <li class="list-group-item text-primary">
                  <i class="mx-2 fas fa-plus-circle"></i> Aulas sedação AO VIVO bimestrais
                </li>
              </ul>
              <div class="pt-4 text-center">
                <a href="<?php echo get_home_url(); ?>/cursos" class="btn btn-lg border-gray-plus">
                  Saiba mais
                </a>
              </div>
            </div>
            <div class="ui-plan__footer p-3 bg-primary"></div>
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
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 g-lg-4">
        <?php
          $args = array(
          'numberposts'	=> -1,
          'posts_per_page'=> 4,
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
        <div class="col <?php
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
                ?>)"></div>
                <h3 title="<?php echo $post_terms[0]->name; ?>"><?php echo $post_terms[0]->name; ?></h3>
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
      </div>
      <div class="row text-center">
        <div class="col">
          <a href="<?php echo get_home_url(); ?>/cursos"
            class="btn btn-md btn-outline-light py-3 px-4 mt-4 text-uppercase fw-600 border-1">
            Ver todos os cursos
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <?php get_template_part( 'template-parts/components/testimonials' ); ?>

  <?php get_template_part( 'template-parts/components/banner' ); ?>

  <section class="mt-5 py-5">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="ui-title">
            <h2 class="ui-title-main">Perguntas frequentes</h2>
          </div>          
        </div>
      </div>

      <?php get_template_part( 'template-parts/components/faq' ); ?>

    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();
