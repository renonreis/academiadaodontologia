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
            <?php
              if( have_rows('course_length') ):
                while( have_rows('course_length') ): the_row();
                $hour = get_sub_field('hour');
                $minutes = get_sub_field('minutes');
                  if($hour) {
                    echo '<i class="far fa-clock" aria-hidden="true"></i> ' . $hour . 'h' . $minutes . '' ;
                  }
                endwhile;
              endif;
            ?>
          </span>
          <?php if( $course_link ){ ?>
          <a href="<?php echo $course_link['link']; ?>" <?php if( $course_link['new_window'] ) { echo 'target="_blank"' ; }
                else { echo '' ; } ?> class="btn btn-lg btn-primary px-4"><?php echo $course_link['text']; ?></a>
          <?php } ?>
          <?php
            if( get_field('course_separate') ) {
          ?>
          <?php
            $information = get_field('information');
            if( $information ):
          ?>
          <p class="info-text">
            <?php echo esc_html( $information['comments'] ); ?>
          </p>
          <?php endif; ?>
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
            <iframe width="560" height="315"
              src="https://www.youtube.com/embed/<?php echo $course_video['id']; ?>?autoplay=1" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
            <?php } else { ?><iframe width="560" height="315"
              src="https://player.vimeo.com/video/<?php echo $course_video['id']; ?>?autoplay=1?title=0&byline=0&portrait=0"
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
          <?php
            $information = get_field('information');
            if( $information ):
          ?>
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
          <div class="btn-courses">
            <a href="<?php echo $course_link['link']; ?>" <?php if( $course_link['new_window'] ) { echo 'target="_blank"' ; }
            else { echo '' ; } ?> class="btn btn-lg btn-primary my-4 fs-4 px-4">
              <?php echo $course_link['text']; ?>
            </a>
          </div>
          <p class="info-text"><?php echo esc_html( $information['comments'] ); ?></p>
          <?php endif; ?>
        </div> <!-- //d-flex -->
      </div> <!-- //col -->
    </div> <!-- //row -->
  </div> <!-- // container -->
</section>
<?php }
  else {
    if( $course_link ){ ?>
<div class="btn-courses">
  <a href="<?php echo $course_link['link']; ?>" <?php if( $course_link['new_window'] ) { echo 'target="_blank"' ; }
            else { echo '' ; } ?> class="btn btn-lg btn-primary px-4">
    <?php echo $course_link['text']; ?>
  </a>
</div>
<?php
    }
  }
?>

<?php get_template_part( 'template-parts/components/testimonials' ); ?>

<?php get_template_part( 'template-parts/components/banner' ); ?>