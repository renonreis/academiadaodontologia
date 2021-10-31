<section class="py-5 bg-dark">
  <div class="container pt-5">
    <div class="row">
      <div class="ui-title pb-3 pb-lg-5">
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
                  <figcaption class="blockquote-footer mt-lg-4 text-light">
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