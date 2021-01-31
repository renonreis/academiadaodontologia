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
          <div class="ui-title pb-4 w-100">
            <h2 class="ui-title-main">Blog da Academia</h2>
            <!-- <span class="ui-title-sub"> some subtitle</span> -->
          </div>
        </div> <!-- //col-->
      </div>
      <!--//row-->
      <div class="row">
        <div class="col-lg-8 mb-md-0 mb-3">
          <!--init postlist -->
          <div class="row row-cols-1 row-cols-lg-2 g-3" data-masonry='{"percentPosition": true }'>
            <div class="col">
              <div class="card card-post rounded-0 border-0 p-0 h-100">
                <div class="card-header border-0 p-0">
                  <img class="img-thumbnail img-fluid  border-0 rounded-0 p-0 "
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/post-de-blog-1-768x768.jpg"
                    alt="Nome alternativo">
                </div>
                <div class="card-content p-4 border-0">
                  <span class="badge bg-primary mb-3 fs-small rounded-0 text-uppercase p-2 ff-primary">Sedação</span>
                  <h3><a href="<?php echo get_home_url(); ?>/post" class="stretched-link text-decoration-none">Tipos de
                      sedação em odontologia</a></h3>
                </div>
                <div class="card-footer d-flex border-0 bg-white mt-auto p-4">
                  <div class="flex-grow-1">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item"><img
                          src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person.png"
                          class="border-1 rounded-circle" width="55px" height="55px" alt="Author name">
                      </li>
                      <li class="list-inline-item fs-5">Juliana Andriani</li>
                    </ul>
                  </div>
                  <div class="align-self-center">
                    <span class="text-muted"> 15 jan, 2021</span>
                  </div>
                </div>
              </div> <!-- // card-curso -->
            </div><!-- //col -->
            <div class="col">
              <div class="card card-post rounded-0 border-0 p-0 h-100">
                <div class="card-header border-0 p-0">
                  <img class="img-thumbnail img-fluid  border-0 rounded-0 p-0 "
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/post-de-blog-2-768x768.jpg"
                    alt="Nome alternativo">
                </div>
                <div class="card-content p-4 border-0">
                  <span class="badge bg-primary mb-3 fs-small rounded-0 text-uppercase p-2 ff-primary">E-Books</span>
                  <h3><a href="<?php echo get_home_url(); ?>/post" class="stretched-link text-decoration-none">E-book
                      Pré-natal odontológico: 10
                      cuidados
                      essenciais para o atendimento em gestantes</a></h3>
                </div>
                <div class="card-footer d-flex border-0 bg-white mt-auto p-4">
                  <div class="flex-grow-1">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item"><img
                          src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person.png"
                          class="border-1 rounded-circle" width="55px" height="55px" alt="Author name">
                      </li>
                      <li class="list-inline-item fs-5">Juliana Andriani</li>
                    </ul>
                  </div>
                  <div class="align-self-center">
                    <span class="text-muted"> 20 dez, 2021</span>
                  </div>
                </div>
              </div> <!-- // card-curso -->
            </div><!-- //col -->
            <div class="col">
              <div class="card card-post rounded-0 border-0 p-0 h-100">
                <div class="card-header border-0 p-0">
                  <img class="img-thumbnail img-fluid  border-0 rounded-0 p-0 "
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/post-de-blog-3-768x768.jpg"
                    alt="Nome alternativo">
                </div>
                <div class="card-content p-4 border-0">
                  <span class="badge bg-primary mb-3 fs-small rounded-0 text-uppercase p-2 ff-primary">E-Books</span>
                  <h3><a href="<?php echo get_home_url(); ?>/post" class="stretched-link text-decoration-none">Apneia
                      Obstrutiva do Sono em crianças:
                      Conduta terapêutica</a></h3>
                </div>
                <div class="card-footer d-flex border-0 bg-white mt-auto p-4">
                  <div class="flex-grow-1">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item"><img
                          src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person.png"
                          class="border-1 rounded-circle" width="55px" height="55px" alt="Author name">
                      </li>
                      <li class="list-inline-item fs-5">Juliana Andriani</li>
                    </ul>
                  </div>
                  <div class="align-self-center">
                    <span class="text-muted"> 7 Jul, 2021</span>
                  </div>
                </div>
              </div> <!-- // card-curso -->
            </div><!-- //col -->
            <div class="col">
              <div class="card card-post rounded-0 border-0 p-0 h-100">
                <div class="card-header border-0 p-0">
                  <img class="img-thumbnail img-fluid  border-0 rounded-0 p-0 "
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/post-de-blog-6-768x768.jpg"
                    alt="Nome alternativo">
                </div>
                <div class="card-content p-4 border-0">
                  <span class="badge bg-primary mb-3 fs-small rounded-0 text-uppercase p-2 ff-primary">Sedação</span>
                  <h3><a href="<?php echo get_home_url(); ?>/post"
                      class="stretched-link text-decoration-none">Características do aparelho expansor
                      tipo Haas modificado</a></h3>
                </div>
                <div class="card-footer d-flex border-0 bg-white mt-auto p-4">
                  <div class="flex-grow-1">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item"><img
                          src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person.png"
                          class="border-1 rounded-circle" width="55px" height="55px" alt="Author name">
                      </li>
                      <li class="list-inline-item fs-5">Juliana Andriani</li>
                    </ul>
                  </div>
                  <div class="align-self-center">
                    <span class="text-muted"> 15 jan, 2021</span>
                  </div>
                </div>
              </div> <!-- // card-curso -->
            </div><!-- //col -->


            <div class="col">
              <div class="card card-post rounded-0 border-0 p-0 h-100">
                <div class="card-header border-0 p-0">
                  <img class="img-thumbnail img-fluid  border-0 rounded-0 p-0 "
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/post-de-blog-2-768x768.jpg"
                    alt="Nome alternativo">
                </div>
                <div class="card-content p-4 border-0">
                  <span class="badge bg-primary mb-3 fs-small rounded-0 text-uppercase p-2 ff-primary">Sedação</span>
                  <h3><a href="<?php echo get_home_url(); ?>/post"
                      class="stretched-link text-decoration-none">Características do aparelho expansor
                      tipo Haas modificado</a></h3>
                </div>
                <div class="card-footer d-flex border-0 bg-white mt-auto p-4">
                  <div class="flex-grow-1">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item"><img
                          src="<?php echo get_template_directory_uri(); ?>/assets/images/square-person.png"
                          class="border-1 rounded-circle" width="55px" height="55px" alt="Author name">
                      </li>
                      <li class="list-inline-item fs-5">Juliana Andriani</li>
                    </ul>
                  </div>
                  <div class="align-self-center">
                    <span class="text-muted"> 15 jan, 2021</span>
                  </div>
                </div>
              </div> <!-- // card-curso -->
            </div><!-- //col -->
          </div> <!-- //row  -->
          <!-- end postlist -->
        </div> <!-- //col -->
        <div class="col-lg-4 d-none d-lg-block pl-xs-0 pl-lg-5 blog-sidebar">
          <div class="blog-sidebar__inner ps-lg-4">
            <ul class="list-inline fs-5 blog-sidebar__social d-flex">
              <li class="list-inline-item">
                <a href="#"> <i class="fab fa-facebook-f"></i> </a>
              </li>
              <li class="list-inline-item ms-3">
                <a href="#" class=""> <i class="fab fa-instagram"></i></a>
              </li>
              <li class="list-inline-item ms-3">
                <a href="#" class=""> <i class="fab fa-youtube"></i></a>
              </li>
              <li class="list-inline-item flex-shrink-1 ms-auto">
                <div class="input-group blog-sidebar__search mb-3 ">
                  <input type="text" class="form-control" placeholder="Busca" aria-label="buscar conteúdo"
                    aria-describedby="buscarButton">
                  <button class="btn btn-outline-light border-gray rounded-0 bg-dark" type="button" id="buscarButton">
                    <i aria-label="Buscar" class="fas fa-search text-muted"></i>
                  </button>
                </div>
              </li>
            </ul>
            <div class="border-1 p-5 text-white ff-primary border-blog-light border">
              <h4 class="f-italic">Fique por dentro</h4>
              <p>Acompanhe as últimas publicações científicas, promoções e novidades da Academia da Odontologia.</p>
              <form>
                <div class="mb-3">
                  <label for="blogInputEmail" class="form-label sr-only">Digite seu e-mail</label>
                  <input type="email" class="form-control rounded-0" id="blogInputEmail" placeholder="Digite seu e-mail"
                    aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-outline-light btn-block">Enviar</button>
                </div>
              </form>
            </div>
            <div class="accordion mt-5 bg-white" id="accordionExample">
              <div class="accordion-item ">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Accordion Item #1
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        Cras justo odio
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                      <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                      <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                      <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1"
                        aria-disabled="true">Vestibulum at eros</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting
                    that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                    does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting
                    that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                    does limit overflow.
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- //blog-sidebar__inner-->
        </div> <!-- //col-lg-4 blog-sidebar -->
      </div> <!-- //row -->
    </div> <!-- //container -->
  </section>
</main><!-- #main -->

<?php
get_footer();