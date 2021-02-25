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
          <div class="ui-title py-3 py-md-4 py-lg-5">
            <h2 class="ui-title-main">O que dizem nossos alunos</h2>
            <!-- <span class="ui-title-sub"> some subtitle</span> -->
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-2 g-5" data-masonry='{"percentPosition": true }'>
        <div class="col">
          <div class="card card-testimonial" data-aos="fade-up">
            <div class="card-testimonial__media">
              <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Do5HAPmcL2c" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
            </div>
            <h3 class="card-testimonial__name">Testimonial Name</h3>
            <span class="card-testimonial__position">Testimonial position</span>
          </div>
        </div> <!-- //col-->
        <div class="col">
          <div class="card card-testimonial" data-aos="fade-up">
            <div class="card-testimonial__media">
              <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Do5HAPmcL2c" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
            </div>
            <h3 class="card-testimonial__name">Testimonial Name</h3>
            <span class="card-testimonial__position">Testimonial position</span>
          </div>
        </div> <!-- //col-->
        <div class="col">
          <div class="card card-testimonial" data-aos="fade-up">
            <div class="blockquote">
              <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
                this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
                with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>
            <h3 class="card-testimonial__name">Testimonial Name</h3>
            <span class="card-testimonial__position">Testimonial position</span>
          </div>
        </div> <!-- //col-->
        <div class="col">
          <div class="card card-testimonial" data-aos="fade-up">
            <div class="blockquote">
              <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
                this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
                with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>
            <h3 class="card-testimonial__name">Testimonial Name</h3>
            <span class="card-testimonial__position">Testimonial position</span>
          </div>
        </div> <!-- //col-->
        <div class="col">
          <div class="card card-testimonial" data-aos="fade-up">
            <div class="blockquote">
              <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
                this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
                with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>
            <h3 class="card-testimonial__name">Testimonial Name</h3>
            <span class="card-testimonial__position">Testimonial position</span>
          </div>
        </div> <!-- //col-->
        <div class="col">
          <div class="card card-testimonial" data-aos="fade-up">
            <div class="blockquote">
              <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                making
                this the first true generator on the Internet. It uses a dictionary of over 200 Latin words,
                combined
                with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>
            <h3 class="card-testimonial__name">Testimonial Name</h3>
            <span class="card-testimonial__position">Testimonial position</span>
          </div>
        </div> <!-- //col-->
      </div> <!-- //row -->
    </div> <!-- //container-->
  </section>
  <section class="banner-info banner-info--center position-relative py-5">
    <div class="container">
      <div class="row py-4">
        <div>
          <h2>A comodidade do Ensino On-line aliada à interação com o professor possível no Ensino Presencial.</h2>
          <a href="#" class="btn btn-lg btn-outline-light  stretched-link"> junte-se a nós</a>
        </div>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();