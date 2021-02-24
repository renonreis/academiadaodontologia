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
$course_link = get_field('course_link');
$course_video = get_field('course_video');

?>


<aside class="single__big-hero-image pt-lg-5"
  style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
  <div class="container pt-lg-5">
    <div class="row justify-content-center pt-5">
      <div class="col-lg-10">
        <div class="ui-title pb-4 w-100">
          <h2 class="ui-title-main"><?php the_title(); ?></h2>
        </div>
      </div> <!-- //col -->
      <div class="col-lg-7">
        <div class="card-course-content text-white text-center">
          <div class="thumb-avatar thumb-avatar--large mb-lg-4" style="background-image: url(<?php
                  foreach($post_terms as $term){
                    the_field('image_teacher', $term);
                  }
                ?>)"></div> <!-- //thumb-avatar -->
          <h3 class='h3--large'><?php echo $post_terms[0]->name; ?></h3>
          <div class="line--small mx-auto"></div>
          <span class="time">
            <i class="far fa-clock" aria-hidden="true"></i>
            <?php the_field('course_length'); ?>h
          </span>
          <?php if( $course_link ){ ?>
          <a href="<?php echo $course_link['link']; ?>" <?php if( $course_link['new_window'] ) { echo 'target="_blank"' ; }
                else { echo '' ; } ?> class="btn btn-lg btn-primary px-4"><?php echo $course_link['text']; ?></a>
          <?php } ?>
          <?php
            if( get_field('course_separate') ) {
          ?>
          <p class="info-text">
            Este curso não faz parte dos pacotes Odontopediatria Premium ou Odontopediatria Plus e, portanto, é vendido
            separadamente.
          </p>
          <?php } ?>
        </div>
      </div>
    </div>
    <!--//row-->
  </div> <!-- //container -->
</aside>
<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 mt-5">
        <div>
          <div class="videoWrapper">
            <?php if( $course_video ){ ?>
            <?php if( $course_video['embed'] == 'youtube' ) { ?>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $course_video['id']; ?>"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
            <?php } else { ?><iframe width="560" height="315"
              src="https://player.vimeo.com/video/<?php echo $course_video['id']; ?>?title=0&byline=0&portrait=0"
              frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
            </iframe>
            <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-lg-12 mt-2">
        <div class="entry-content text-white fw-100">
          <?php
                the_content();
              ?>
        </div> <!-- //entry-content -->
      </div> <!-- // col -->
    </div><!-- // row -->
  </div> <!-- // container -->
</section>
<?php
  if( get_field('course_separate') ) {
?>
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-white text-center">
        <div class="d-flex flex-column">
          <?php $information = get_field('information'); if( $information ): ?>
          <h6 class="ui-plan__price mb-0 "><?php echo esc_html( $information['installment'] ); ?>x R$
            <span>
              <?php
                $installment = $information['amount']/$information['installment'];
                $installment_value = number_format($installment, 2, '.', '');

                echo esc_html( $installment_value );
              ?>
            </span> /mês
          </h6>
          <strong>ou a vista por R$ <?php echo esc_html( $information['cash_value'] ); ?></strong>
          <div>
            <a href="<?php echo esc_html( $information['link_button'] ); ?>" target="_blank"
              class="btn btn-lg btn-primary my-4 fs-4 px-4 ff-primary">
              <?php echo esc_html( $information['text_button'] ); ?>
            </a>
          </div>
          <p class="ui-plan__info"><?php echo esc_html( $information['comments'] ); ?></p>
          <?php endif; ?>
        </div> <!-- //d-flex -->
      </div> <!-- //col -->
    </div> <!-- //row -->
  </div> <!-- // container -->
</section>
<?php } ?>
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