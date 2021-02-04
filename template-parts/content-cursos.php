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
 
   
    <aside class="single__big-hero-image pt-5"
      style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
      <div class="container pt-5">
        <div class="row justify-content-center pt-5">
          <div class="col-lg-10">
            <div class="ui-title pb-4 w-100">
              <h2 class="ui-title-main"><?php the_title(); ?></h2>
            </div>
          </div> <!-- //col -->
          <div class="col-lg-6 mb-5">
            <div class="card-course-content text-white text-center">
              <img class="img-thumbnai" src="<?php
                foreach($post_terms as $term){     
                  the_field('image_teacher', $term);                  
                }
              ?>" alt="Nome alternativo">
              <h3><?php echo $post_terms[0]->name; ?></h3>
              <div class="line--small mx-auto"></div>
              <span class="time">
                <i class="far fa-clock" aria-hidden="true"></i>
                <?php the_field('course_length'); ?>h
              </span>
              <?php if( $course_link ){ ?>
              <a href="<?php echo $course_link['link']; ?>" <?php if( $course_link['new_window'] ) { echo 'target="_blank"' ; }
                else { echo '' ; } ?> class="btn btn-lg btn-primary"><?php echo $course_link['text']; ?></a>
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
          <div class="col-10 mt-2">
            <div class="entry-content text-white fw-100">
              <?php
                the_content();
              ?>
            </div> <!-- //entry-content -->
          </div> <!-- // col -->
        </div><!-- // row -->
      </div> <!-- // container -->
    </section>

    <section class="py-5">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-white text-center">
              <div class="d-flex flex-column">
                    <h6 class="ui-plan__price mb-0 ">10x R$ <span>129,90</span> /mês</h6>
                    <strong>ou a vista por R$ 287,00</strong>
                    <div>
                      <a href="#" class="btn btn-lg btn-primary my-4 fs-4 px-4 ff-primary"> Comece agora</a>
                    </div>
                    <p class="text-muted">Este curso não faz parte dos pacotes Odontopediatria Premium <br> ou Odontopediatria Plus e portanto é vendido separadamente.</p>
              </div> <!-- //d-flex -->
            </div> <!-- //col -->
        </div> <!-- //row -->
      </div> <!-- // container -->
    </section> 

    <?php
    // get_footer();