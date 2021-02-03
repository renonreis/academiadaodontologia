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




   <section>

      <aside class="single__big-hero-image pt-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background-course-2.jpg)">
           <div class="container pt-5">
           <div class="row justify-content-center pt-5">
              <div class="col-lg-10">
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

              
            
            </div> <!--//row-->
           </div> <!-- //container -->
      </aside>




      <section>


      <div class="container">
        <div class="row justify-content-center">
       
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
              <p>Já ouviu falar em agilizar seu tempo no tratamento endodôntico com a técnica mais rápida? Também tem receio de fazer endodonia porque sua experiência clínica as vezes te traz insucesso e você não sabe onde está errando? Fica confuso (a) em qual material utilizar e por onde começar a saber sobre a técnica mecanizada? Então este curso pode te ajudar e muito! </p>
              <p>O objetivo o curso de endodontia mecanizada é capacitar os profissionais a realizarem o tratamento endodôntico de dentes decíduos lançando mão da técnica conhecida como “mecanizada” para facilitar o procedimento assim como diferenciar esta técnica da convencional, ou seja, a técnica manual.</p>
              <p> Além disso, o curso abordará indicações e contraindicações para uma endodontia de sucesso em dentes decíduos, explanará o passo-a-passo da técnica mecanizada e dicas clínicas abordando: abertura coronária, odontometria com e sem localizador apical eletrônico, preparo químico-mecânico, secagem dos canais, obturação, restauração e radiografias finais. E dentre esses tópicos, ensinará e discutirá os tipos de materiais utilizados e suas principais diferenças. </p>
              <p>O curso também contempla o aluno com uma apostila completa para acompanhar as aulas sem precisar escrever todo o conteúdo, assim tem a possibilidade de ter completa atenção às aulas juntamente com um material de apoio com revisão e contextualização da literatura para ampliar ainda mais seu embasamento científico.</p>
              <h3>Conteúdo programático</h3>
              <p>Aula contínua completa de 85 minutos com os tópicos:</p>
                <ul>
                  <li>Conceito; </li>
                  <li>Indicações e contraindicações; </li>
                  <li>Motivos relacionados ao insucesso; </li>
                  <li>Passo a passo: abertura coronária, odontometria, preparo químico-mecânico, secagem dos canais, obturação, restauração e radiografia final; </li>
                  <li>Abertura coronária: técnicas de abertura e material utilizado; </li>
                  <li>Odontometria: Técnica convencional e Uso de localizadores apicais eletrônicos; </li>
                  <li>Preparo químico-mecânico: irrigação dos canais, instrumentação dos canais, sistema manual, sistema oscilatório, sistema rotatório e reciprocante. </li>
                </ul>
              </div>  <!-- //entry-content -->
            </div> <!-- // col -->
          </div><!-- // row -->
        </div> <!-- // container -->
      </section>
      <section>
        <div class="row">
            <div class="col">
                    
          </div>
        </div>
      </section>
   <section>
     


     
          
          
      
 
<?php
get_footer();