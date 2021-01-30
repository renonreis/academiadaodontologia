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

<main id="main primary" class="site-main">
  <section class="hero"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.png);">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/Mariane-Makinf-of-VERSAO-1-MINUTO.mp4"
        type="video/mp4">
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 align-items-end">
        <div class="w-100 text-white">
          <h1 class="display-1">Odontopediatras atualizados a qualquer hora e em qualquer lugar</h1>
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
          <ul class="list-invist text-center p-0 m-0">
            <li class="p-5 mb-2 fw-bold bg-dark mb-4"><span class="fs-2">+22</span> <span class="fs-3">cursos</span>
            </li>
            <li class="p-5 mb-2 fw-bold bg-dark mb-4"><span class="fs-2">14</span> <span class="fs-3">professores</span>
            </li>
            <li class="p-5 mb-2 fw-bold bg-dark"><span class="fs-2">540</span> <span class="fs-3">horas/aula</span>
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
            <div class="p-5">
              <h5 class="ui-plan__title card-title text-uppercase text-center mt-4">Odontopediatria <br>
                Plus <span><i class="fas fa-plus-circle text-primary"></i></span></h5>
              <h6 class="ui-plan__price">R$ <span>137,80</span> /mês</h6>
              <div class="text-center mt-3">
                <a href="#" class="btn btn-primary btn-lg text-uppercase fw-bold py-3 px-5">Assinar
                  Plus</a>
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
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="ui-title">
            <h2 class="ui-title-main">Nossos cursos</h2>
            <span class="ui-title-sub"> Últimos adicionados:</span>
          </div>
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
                <?php echo get_template_directory_uri(); ?>/assets/images/square-person-2.png" alt="Nome alternativo">
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
      </div>
      <div class="row text-center">
        <div class="col">
          <a href="#" class="btn btn-md btn-outline-light py-3 px-4 mt-4 text-uppercase fw-600 border-2"> Ver todos
            os cursos</a>
        </div>
      </div>
  </section>
  <section class="py-5 my-5">
    <div class="container">
      <div class="row">
        <div class="ui-title">
          <h2 class="ui-title-main">O que dizem nossos alunos</h2>
        </div>
      </div> <!-- //row -->
      <!-- //container -->
    </div>
    <div class="container-fluid">
      <div class="row">
        <div id="carouselTestimonial" data-bs-interval="1224000"
          class="ui-carousel carousel slide _carousel-fade text-white" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselTestimonial" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselTestimonial" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselTestimonial" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row justify-content-center align-items-center align-content-center m-auto">
                <div class="col-12 col-lg-auto justify-content-center">
                  <div class="picture-person mb-5 m-auto"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/person-300x300.jpg);">
                  </div>
                </div>
                <div class="col">
                  <figure class="ms-md-5">
                    <blockquote class="blockquote">
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem illum magni
                        numquam cupiditate
                        voluptas modi, placeat quia earum. Quisquam illum fugit cumque quibusdam repudiandae quas,
                        facilis
                        sed voluptatibus neque adipisci?</p>
                    </blockquote>
                    <figcaption class="blockquote-footer mt-4 text-light">
                      <strong class="fs-6"> Karen Bousson </strong><cite class="ms-3" title="Source Title">Estudante
                        de
                        odontologia
                        da UFPR</cite>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row justify-content-center align-items-center align-content-center m-auto">
                <div class="col-12 col-lg-auto justify-content-center ">
                  <div class="picture-person mb-5 m-auto"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/person-300x300.jpg">
                  </div>
                </div>
                <div class="col">
                  <figure class="ms-md-5">
                    <blockquote class="blockquote">
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem illum magni
                        numquam cupiditate
                        voluptas modi, placeat quia earum. Quisquam illum fugit cumque quibusdam repudiandae quas,
                        facilis
                        sed voluptatibus neque adipisci?</p>
                    </blockquote>
                    <figcaption class="blockquote-footer mt-4 text-light">
                      <strong class="fs-6"> Karen Bousson </strong> <cite class="ms-3" title="Source Title">Estudante
                        de
                        odontologia
                        da UFPR</cite>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row justify-content-center align-items-center align-content-center m-auto">
                <div class="col-12 col-lg-auto justify-content-center">
                  <div class="picture-person mb-5 m-auto"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/person-300x300.jpg">
                  </div>
                </div>
                <div class="col">
                  <figure class="ms-md-5">
                    <blockquote class="blockquote">
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem illum magni
                        numquam cupiditate
                        voluptas modi, placeat quia earum. Quisquam illum fugit cumque quibusdam repudiandae quas,
                        facilis
                        sed voluptatibus neque adipisci?</p>
                    </blockquote>
                    <figcaption class="blockquote-footer mt-4 text-light">
                      <strong class="fs-6"> Karen Bousson</strong> <cite class="ms-3" title="Source Title">Estudante
                        de
                        odontologia
                        da UFPR</cite>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselTestimonial" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
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
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading1">
                <button class="accordion-button text-start" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                  O que está incluído no curso on-line?
                </button>
              </h2>
              <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                data-bs-parent="#accordionFaq">
                <div class="accordion-body">
                  <p>
                    O curso que você adquirir dá acesso a todas as videoaulas do respectivo curso. Você pode
                    assistir até 3 vezes a aula que quiser, na ordem que preferir, no período de 06 meses a partir da
                    data da compra. Pode acessar de qualquer dispositivo conectado à internet, desde que atenda às
                    necessidades técnicas do player de vídeo e escolher a resolução de imagem que melhor atenda a sua
                    tela e a sua conexão.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading2">
                <button class="accordion-button collapsed text-start" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                  O pagamento é seguro?
                </button>
              </h2>
              <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                data-bs-parent="#accordionFaq">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente laudantium at iusto rem natus
                  nam,
                  a maiores quis libero suscipit, velit sunt repellat, maxime labore sequi adipisci eligendi tempore
                  voluptas.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente laudantium at iusto rem natus
                  nam,
                  a maiores quis libero suscipit, velit sunt repellat, maxime labore sequi adipisci eligendi tempore
                  voluptas.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading3">
                <button class="accordion-button collapsed text-start" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                  Como funcionam as aulas AO VIVO?
                </button>
              </h2>
              <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                data-bs-parent="#accordionFaq">
                <div class="accordion-body">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet quia dolor libero voluptatem et
                  magni
                  tempora architecto voluptate natus blanditiis totam doloribus officia, ipsa debitis quibusdam quis
                  earum sequi. Tempora!

                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente laudantium at iusto rem natus
                  nam,
                  a maiores quis libero suscipit, velit sunt repellat, maxime labore sequi adipisci eligendi tempore
                  voluptas.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading4">
                <button class="accordion-button collapsed text-start" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                  Como posso esclarecer minhas dúvidas?
                </button>
              </h2>
              <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                data-bs-parent="#accordionFaq">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                  collapse
                  plugin adds the appropriate classes that we use to style each element. These classes control the
                  overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                  this
                  with custom CSS or overriding our default variables. It's also worth noting that just about any
                  HTML
                  can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading5">
                <button class="accordion-button collapsed text-start" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                  Como posso estudar?
                </button>
              </h2>
              <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                data-bs-parent="#accordionFaq">
                <div class="accordion-body">
                  O curso que você adquirir dá acesso a todas as videoaulas do respectivo curso. Você pode assistir
                  até 3 vezes a aula que quiser, na ordem que preferir, no período de 06 meses a partir da data da
                  compra.
                  Pode acessar de qualquer dispositivo conectado à internet, desde que atenda às necessidades
                  técnicas
                  do player de vídeo e escolher a resolução de imagem que melhor atenda a sua tela e a sua conexão.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();