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
  
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
                <div class="ui-title">
                  <h2 class="ui-title-main">Contato</h2>
                  <a class="ui-title-sub ff-secondary text-decoration-none text-lowercase" href="mailto:contato@academiadaodontologia.com.br"> contato@academiadaodontologia.com.br</a>
                </div>
        </div> <!-- //col-->
      </div> <!-- //row -->
    </div> <!-- // container -->



    <div class="container pt-3 pb-5">
<div class="row justify-content-center">
  <div class="col-lg-10">

  <form class="needs-validation" novalidate>
          <div class="row g-5">
            <div class="col-md-6">
              <label for="completeName" class="form-label text-white ff-primary fw-bold">Nome completo</label>
              <input type="text" class="form-control--dark  form-control-lg" id="completeName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Campo obrigatório
              </div>
            </div>

            <div class="col-md-6">
              <label for="yourEmail" class="form-label text-white ff-primary fw-bold">Seu e-mail</label>
              <input type="email" class="form-control--dark form-control-lg" id="yourEmail" placeholder="" value="" required>
              <div class="invalid-feedback">
              Campo obrigatório
              </div>
            </div>

            <div class="col-12">
              <label for="message" class="form-label text-white ff-primary fw-bold">Mensagem</label>
              <textarea class="form-control--dark  form-control-lg" id="message" rows="7"></textarea>
                <div class="invalid-feedback">
                  Campo obrigatório
                </div>              
            </div>
 
            <div class="col-12 text-center">
              <button class=" btn btn-outline-light btn-lg px-4" type="submit">Enviar mensagem</button>
              <div class="valid-feedback mt-3">
                  Um ou mais campos possuem um erro. Verifique e tente novamente.
                </div>           
            </div>
      </div>
        </form>
  </div> <!-- //col-lg-8 -->
</div> <!--// row -->
    </div> <!-- //container -->
  </section>
</main><!-- #main -->

<?php
get_footer();