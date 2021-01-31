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
          <ul class="list-inline text-center mb-5">
            <li class="list-inline-item">
              <a href="" class="btn  btn-lg btn-outline-light ms-2 border-gray-light"> Todos</a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn  btn-lg btn-outline-light ms-2 border-gray-light"> Lançamentos</a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn active  btn-lg btn-outline-light ms-2 border-gray-light"> Mais acessados</a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn btn-lg btn-outline-light ms-2 border-gray-light"> Semi-presenciais</a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn btn-lg btn-outline-light ms-2 border-gray-light"> Sedação
                <i class="fas fa-plus-circle"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
          <div class="card card-course  card-course_is-new"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background-course-1.jpg);">
            <a class="card-course_all_height" href="#">
              <div class="card-course-content">
                <img class="img-thumbnai"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person.png"
                  alt="Nome alternativo">
                <h3>Juliana Andriani</h3>
                <div class="line"></div>
                <p>Impacção do primeiro molar permanente</p>
                <span class="time">
                  <i class="far fa-clock"></i>
                  18h/aula
                </span>
              </div>
            </a>
          </div> <!-- // card-curso -->
        </div><!-- //col -->
        <div class="col">
          <div class=" card card-course"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background-course-2.jpg);">
            <a class="card-course_all_height" href="#">
              <div class="card-course-content">
                <img class="img-thumbnai"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person-2.png"
                  alt="Nome alternativo">
                <h3>Jéssica Barussel</h3>
                <div class="line"></div>
                <p>Endodontia mecanizada em dentes decíduos</p>
                <span class="time">
                  <i class="far fa-clock"></i>
                  18h/aula
                </span>
              </div>
            </a>
          </div> <!-- // card-curso -->
        </div><!-- //col -->
        <div class="col">
          <div class="card card-course  card-course_is-new"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background-course-1.jpg);">
            <a class="card-course_all_height" href="#">
              <div class="card-course-content">
                <img class="img-thumbnai"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person.png"
                  alt="Nome alternativo">
                <h3>Juliana Andriani</h3>
                <div class="line"></div>
                <p>Impacção do primeiro molar permanente</p>
                <span class="time">
                  <i class="far fa-clock"></i>
                  18h/aula
                </span>
              </div>
            </a>
          </div> <!-- // card-curso -->
        </div><!-- //col -->
        <div class="col">
          <div class=" card card-course"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background-course-2.jpg);">
            <a class="card-course_all_height" href="#">
              <div class="card-course-content">
                <img class="img-thumbnai"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person-2.png"
                  alt="Nome alternativo">
                <h3>Jéssica Barussel</h3>
                <div class="line"></div>
                <p>Endodontia mecanizada em dentes decíduos</p>
                <span class="time">
                  <i class="far fa-clock"></i>
                  18h/aula
                </span>
              </div>
            </a>
          </div> <!-- // card-curso -->
        </div><!-- //col -->
        <div class="col">
          <div class="card card-course  card-course_is-new"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background-course-1.jpg);">
            <a class="card-course_all_height" href="#">
              <div class="card-course-content">
                <img class="img-thumbnai"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person.png"
                  alt="Nome alternativo">
                <h3>Juliana Andriani</h3>
                <div class="line"></div>
                <p>Impacção do primeiro molar permanente</p>
                <span class="time">
                  <i class="far fa-clock"></i>
                  18h/aula
                </span>
              </div>
            </a>
          </div> <!-- // card-curso -->
        </div><!-- //col -->
        <div class="col">
          <div class=" card card-course"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background-course-2.jpg);">
            <a class="card-course_all_height" href="#">
              <div class="card-course-content">
                <img class="img-thumbnai"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person-2.png"
                  alt="Nome alternativo">
                <h3>Jéssica Barussel</h3>
                <div class="line"></div>
                <p>Endodontia mecanizada em dentes decíduos</p>
                <span class="time">
                  <i class="far fa-clock"></i>
                  18h/aula
                </span>
              </div>
            </a>
          </div> <!-- // card-curso -->
        </div><!-- //col -->
        <div class="col">
          <div class="card card-course  card-course_is-new"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background-course-1.jpg);">
            <a class="card-course_all_height" href="#">
              <div class="card-course-content">

                <img class="img-thumbnai"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person.png"
                  alt="Nome alternativo">
                <h3>Juliana Andriani</h3>
                <div class="line"></div>
                <p>Impacção do primeiro molar permanente</p>
                <span class="time">
                  <i class="far fa-clock"></i>
                  18h/aula
                </span>
              </div>
            </a>
          </div> <!-- // card-curso -->
        </div><!-- //col -->
        <div class="col">
          <div class=" card card-course"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background-course-2.jpg);">
            <a class="card-course_all_height" href="#">
              <div class="card-course-content">
                <img class="img-thumbnai"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person-2.png"
                  alt="Nome alternativo">
                <h3>Jéssica Barussel</h3>
                <div class="line"></div>
                <p>Endodontia mecanizada em dentes decíduos</p>
                <span class="time">
                  <i class="far fa-clock"></i>
                  18h/aula
                </span>
              </div>
            </a>
          </div> <!-- // card-curso -->
        </div><!-- //col -->
      </div> <!-- //row-cols-x-->
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