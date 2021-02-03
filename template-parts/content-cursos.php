<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package academiadaodontologia
 */

get_header();
?>




   <section class="pt-5">
    <div class="container pt-5">
      <div class="row justify-content-center pt-5">
        <div class="col-lg-7">
          <div class="ui-title pb-4 w-100">
            <h2 class="ui-title-main"><?php the_title(); ?> </h2>
          </div>
        </div> <!-- //col -->

        <div class="col-lg-6 mb-5">
        <div class="card-course-content text-white text-center">
                <img class="img-thumbnai" src="http://odonto.test/wp-content/uploads/2021/01/square-person.png" alt="Nome alternativo">
                <h3>Juliana Andriani</h3>
                <div class="line--small mx-auto" ></div>
                 <span class="time">
                  <i class="far fa-clock" aria-hidden="true"></i>
                  1h25min
                </span>
                <a href="#" class="btn btn-lg btn-primary"> Saiba mais</a>
          </div>
        </div>

        
        <div class="col-lg-8 mt-5">
          <div>
              <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Do5HAPmcL2c" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
            </div>
        </div>

        <div class="col-10 mt-2">
        <div class="entry-content text-white fw-100"> 

            <p> Entenda a importância do cirurgião dentista na prevenção das doenças bucais na gestante e quais os
              cuidados essenciais para o atendimento odontológico em gestantes baixando o e-book Pré-Natal
              Odontológico. </p>
            <p> Você sabe o que é Pré-Natal odontológico? O objetivo do pré-natal odontológico é dar atenção integral
              ao binômio materno-fetal, ou seja, cuidar da saúde bucal da gestante, assim como dar as primeiras
              orientações em relação à saúde bucal de seu bebê.</p>
            <p> Porém, o número de gestantes que buscam atendimento odontológico ainda é pequeno. <strong>Mas por que
                será?</strong>
            </p>
            <p> Às vezes o que falta é conhecimento da gestante em relação a importância de manter uma boa saúde bucal
              para a saúde de seu bebê, já que problemas bucais também podem estar associados à parto prematuro ou
              mesmo pré-eclâmpsia, ou mesmo falta de conhecimento do cirurgião dentista em saber como conduzir o
              tratamento dessa gestante.</p>
            <p> <strong>Leia também o texto</strong> <em>“Como se diferenciar no mercado de trabalho oferecendo
                atendimento odontológico
                para gestante”</em>.</p>
            <p> Por isso um trabalho do cirurgião dentista direcionado às mulheres gestantes pode ser uma boa
              estratégia para se diferenciar no mercado de trabalho.</p>
            <p> A Academia da Odontologia juntamente com a Professora Aline Manfro preparou e-book com os 10 cuidados
              essenciais para o tratamento odontológico em gestantes com o intuito de auxiliar o cirurgião-dentista no
              atendimento à gestante.gravidez.</p>
            <h3> 01. Anamnese direcionada para gestantes</h3>
            <p> Para definir o melhor horário e tempo de atendimento à gestante, é importante acrescentar algumas
              perguntas em sua anamnese, como: qual o tempo de gestação? Sente náuseas ou vômitos?</p>
            <p> Essas perguntas podem direcionar o profissional em relação ao melhor o horário e o momento oportuno de
              atendimento.</p>
            <h3> 02. Monitore os sinais vitais no pré-natal odontológico </h3>
            <p> A avaliação dos sinais vitais antes do atendimento, como frequência respiratória, frequência cardíaca
              e pressão arterial, ajudam a estabelecer um padrão de normalidade antes e após à consulta, bem como
              avaliar o estado de saúde geral de sua paciente.</p>
            <p> Dessa forma o profissional pode orientar sua conduta clínica em consultas posteriores como reduzir o
              tempo de atendimento ou rever a realização do procedimento caso encontre alterações dos sinais vitais.
            </p>
            <h3> 03. Horário de atendimento</h3>
            <p> Dê preferência para realizar o atendimento no segundo período da manhã, já que geralmente neste
              horário a gestante está mais disposta e as náuseas são menos frequentes.</p>
          </div>
        </div>
      </div> <!--//row-->
       
       
      
 
<?php
get_footer();