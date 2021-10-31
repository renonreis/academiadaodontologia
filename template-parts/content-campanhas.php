<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package academiadaodontologia
 */

get_header();

$post_terms = get_the_terms( get_the_ID(), 'curso_category' );

$valor_mensal = get_field('valor_mensal_curso');
$valor_anual = get_field('valor_anual_curso');

$format_price_mensal = str_replace(",", ".", $valor_mensal);
$format_price_anual = str_replace(",", ".", $valor_anual);

$anual_price = $format_price_mensal * 12;
$anual_price_total = $format_price_anual * 12;

$plus_premium = get_field('plus_premium');
?>


<section class="pt-lg-5 campanhas"
  style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
  <div class="container pt-lg-5">
    <div class="row justify-content-center pt-5 text-white text-center">
      <div class="col-lg-10">
        <div class="ui-title pb-0 w-100">
          <h2 class="ui-title-main"><?php the_title(); ?></h2>
          <p class="fs-3 fw-bold text-uppercase">
            <?php 
              if( $plus_premium == 'plus' ) {
                echo 'Plus';
              } else {
                echo 'Premium';
              }
            ?>
          </p>
          <?php 
            if( $plus_premium == 'plus' ) { ?>
              <div class="line--small mx-auto plus"></div>
            <?php } else { ?>
              <div class="line--small mx-auto premium"></div>
            <?php } ?>          
          <p class="description mb-5"><?php echo get_field('descricao'); ?></p>          
        </div>
      </div>
      <?php if( get_field('plus_premium') == 'plus' ) { ?>
        <div class="col-lg-12 mb-5">
          <p class="price">R$ <span><?php echo $valor_mensal; ?></span> / mês*</p>
          <div class="btn-courses description">
            <a href="<?php echo get_field('link_botao_assinar'); ?>" class="btn btn-lg btn-primary px-4">
              Assinar agora
            </a>
          </div>
          <p>* Plano anual total R$ <?php echo str_replace(".", ",", $anual_price); ?></p>
        </div>
      <?php } else { ?>
        <div class="col-lg-4 mb-5">
          <p class="price">R$ <span><?php echo $valor_mensal; ?></span> / mês*</p>
          <div class="btn-courses description premium">
            <a href="<?php echo get_field('link_botao_assinar_mensal'); ?>" class="btn btn-lg btn-primary px-4 mensal">
              Assinar agora
            </a>
          </div>
          <p>* Plano anual total R$ <?php echo str_replace(".", ",", $anual_price); ?></p>
        </div>
        <div class="col-lg-4   mb-5">
          <p class="price">R$ <span><?php echo $valor_anual; ?></span> / mês*</p>
          <div class="btn-courses description premium">
            <a href="<?php echo get_field('link_botao_assinar_anual'); ?>" class="btn btn-lg btn-primary px-4">
              Assinar agora
            </a>
          </div>
          <p>* Plano anual total R$ <?php echo str_replace(".", ",", $anual_price_total); ?></p>
        </div>
      <?php } ?>      
    </div>
  </div>
</section>

<section class="pb-5 campanhas">
  <div class="container">
    <div class="row text-center text-white">
      <div class="col-lg-4 mb-5">
        <div class="box">
          <?php get_template_part( 'template-parts/svg/garantia' ); ?>
          <p>Não gostou? <strong>Devolução integral</strong> do valor pago em até 7 dias.</p>
        </div>
      </div>        
      <div class="col-lg-4 mb-5">
        <div class="box">
          <?php get_template_part( 'template-parts/svg/atendimento' ); ?>
          <p>Agende seu <strong>atendimento personalizado</strong> com um de nossos professores.</p>
        </div>
      </div>        
      <div class="col-lg-4 mb-5">
        <div class="box">
          <?php get_template_part( 'template-parts/svg/aovivo' ); ?>
          <p>Aulas semanais <strong>AO VIVO</strong> com discussão de casos clínicos.</p>
        </div>
      </div>        
      <div class="col-lg-4 mb-5">
        <div class="box">
          <?php get_template_part( 'template-parts/svg/certificado' ); ?>
          <p><strong>Certificado de conclusão</strong> de curso.</p>
        </div>
      </div>        
      <div class="col-lg-4 mb-5">
        <div class="box">
          <?php get_template_part( 'template-parts/svg/novos' ); ?>
          <p>Todo mês um <strong>novo curso</strong> no ar.</p>
        </div>
      </div>        
      <div class="col-lg-4 mb-5">
        <div class="box">
          <?php get_template_part( 'template-parts/svg/material' ); ?>
          <p><strong>Material de apoio</strong> com roteiros, gráficos, checklist e leitura recomendada.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-5 pb-5 campanhas">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php get_template_part( 'template-parts/components/table' ); ?>          
      </div>
    </div>
  </div>
</section>

<section class="pt-5 pb-5 campanhas cursos">
  <div class="container">
    <div class="row text-center text-white">
      <div class="col-md-12">
        <h2 class="mb-5">Cursos do plano plus</h2>
      </div>

      <?php
        $args = array(
        'cursos_cat'    => 32,
        'numberposts'	  => -1,
        'posts_per_page'=> 4,
        'post_type'		  => 'cursos',
        'orderby'   => 'menu_order',
        'order'     => 'ASC'
        );
        $the_query = new WP_Query( $args );
        if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post(); $id = get_the_ID();

        $terms = get_terms('curso_category');
        $post_terms = get_the_terms( get_the_ID(), 'curso_category' );
        $post_cat = get_the_terms( get_the_ID(), 'categoria-cursos' );
      ?>
      <div class="col mb-5 <?php
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

      <div class="col-md-12">
        <?php if( get_field('plus_premium') == 'plus' ) { ?>
          <div class="btn-courses">
            <a href="<?php echo get_field('link_botao_assinar'); ?>" class="btn btn-lg btn-primary px-4">
              Assinar o plus AGORA
            </a>
          </div>
        <?php } else { ?>
          <div class="btn-courses mt-5 premium">
            <a href="<?php echo get_field('link_botao_assinar'); ?>" class="btn btn-lg btn-primary px-4">
              Assinar o premium AGORA
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/components/testimonials' ); ?>

<?php get_template_part( 'template-parts/components/banner' ); ?>