<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package academiadaodontologia
 */

$user = wp_get_current_user();
$author_id = get_the_author_meta( 'ID' );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section class="mt-5 py-5 mb-5 ">
    <div class="container mb-5">
      <div class="d-flex align-items-center">
        <div class="flex-shrink-1 d-flex">
          <a href="<?php echo get_home_url(); ?>/blog" id="" class="return-page text-white fs-1 ff-primary"
            data-bs-toggle="tooltip" data-bs-placement="top" title="Voltar para página anterior">
            <span class="arrow-light-left"></span>
          </a>
        </div>
        <div class="d-flex w-100">
          <div class="ui-title pb-4 w-100">
            <h2 class="ui-title-main">Blog da Academia</h2>
          </div>
        </div> <!-- //col-->
      </div>
      <!--//row-->
      <div class="row bg-white justify-content-center">
        <div class="col-12 col-lg-10 py-2 pb-4">
          <header class="entry-header ff-primary">
            <?php
            $categories = get_the_category();
              if ( ! empty( $categories ) ) {
                  echo '
                  <a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">
                    <span class="badge bg-primary mb-3 fs-small rounded-0 text-uppercase p-2 ff-primary fw-500">
                      ' . esc_html( $categories[0]->name ) . '
                    </span>
                  </a>
                  ';
              }
            ?>
            <header class="page-header">
              <?php the_title( '<h1 class="entry-title display-2">', '</h1>' ); ?>
            </header><!-- .entry-header -->
            <ul class="list-inline author pt-3">
              <li class="list-inline-item">
                <img src="<?php echo get_avatar_url($user->ID, ['size' => '55']); ?>"
                  class="author__thumb border border-2 rounded-circle border-primary" width="55px" height="55px"
                  alt="<?php echo get_the_author_meta( 'display_name', $author_id ); ?>">
              </li>
              <li class="list-inline-item">
                <span class="author__name">
                  <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"
                    title="<?php echo esc_attr( get_the_author() ); ?>">
                    <?php echo get_the_author(); ?>
                  </a>
                </span>
              </li>
            </ul>
            <span class="text-muted">
              <time class="ff-secondary fw-light" datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
                <?php echo get_the_date(); ?>
              </time>
            </span>
          </header>
          <div class="entry-content">
            <?php
              the_content();
            ?>
          </div>
        </div>
        <!--//col-12-->
      </div> <!-- //row-->
      <section class="row">
        <div class="banner-info banner-info--center position-relative py-5">
          <div class="col py-3">
            <h2>A comodidade do Ensino On-line aliada à interação com o professor possível no Ensino Presencial.</h2>
            <a href="#" class="btn btn-lg btn-outline-light  stretched-link"> junte-se a nós</a>
          </div>
        </div>
      </section>
      <section class="row bg-white justify-content-center">
        <div class="col-12 col-lg-10">
          <div class=" row py-5  text-dark g-0  overflow-hidden flex-md-row position-relative">
            <div class="col-lg-auto col-12 text-center d-lg-block mb-3">
              <img src="<?php echo get_avatar_url($user->ID, ['size' => '112']); ?>" class="border-1 rounded-circle"
                width="112px" height="112px" alt="<?php echo get_the_author_meta( 'display_name', $author_id ); ?>">
            </div>
            <div class="col p-lg-4 p-3 pt-1 ps-lg-5 d-flex flex-column position-static">
              <h3 class="fs-4 fw-bolder">
                <?php echo get_the_author_meta( 'first_name', $author_id ); ?>
                <?php echo get_the_author_meta( 'last_name', $author_id ); ?>
              </h3>
              <div class="fw-lighter fs-5">
                <?php
                  echo wpautop( get_the_author_meta( 'description' ) );
                ?>
              </div>
              <ul class="list-inline fs-5">
                <?php if (!empty(get_the_author_meta( 'facebook' , $post->post_author ))){ ?>
                <li class="list-inline-item">
                  <a href="<?php echo get_the_author_meta( 'facebook' , $post->post_author ); ?>" target="_blank"
                    class="text-dark">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <?php } ?>
                <?php if (!empty(get_the_author_meta( 'instagram' , $post->post_author ))){ ?>
                <li class="list-inline-item ms-3">
                  <a href="<?php echo get_the_author_meta( 'instagram' , $post->post_author ); ?>" target="_blank"
                    class="text-dark">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <?php } ?>
                <?php if (!empty(get_the_author_meta( 'youtube' , $post->post_author ))){ ?>
                <li class="list-inline-item ms-3">
                  <a href="<?php echo get_the_author_meta( 'youtube' , $post->post_author ); ?>" target="_blank"
                    class="text-dark">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <?php } ?>
                <?php if (!empty(get_the_author_meta( 'twitter' , $post->post_author ))){ ?>
                <li class="list-inline-item ms-3">
                  <a href="https://twitter.com/<?php echo get_the_author_meta( 'twitter' , $post->post_author ); ?>"
                    target="_blank" class="text-dark"> <i class="fab fa-twitter"></i></a>
                </li>
                <?php } ?>
                <?php if (!empty(get_the_author_meta( 'linkedin' , $post->post_author ))){ ?>
                <li class="list-inline-item ms-3">
                  <a href="<?php echo get_the_author_meta( 'linkedin' , $post->post_author ); ?>" target="_blank"
                    class="text-dark">
                    <i class="fab fa-linkedin"></i>
                  </a>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div> <!-- //col-->
      </section>
      <section class="row position-relative py-5 related-posts">
        <?php
          $i = 0;
          $related = get_posts( array(
            'category__in' => wp_get_post_categories($post->ID),
            'numberposts' => 3,
            'post__not_in' => array($post->ID) ) );
          if( $related ) foreach( $related as $post ) {
          setup_postdata($post);
        ?>
        <div class="col">
          <div class="card card-post rounded-0 border-0 p-0 h-100" data-aos="fade-up">
            <div class="card-header border-0 p-0">
              <a href="<?php echo get_permalink(); ?>" class="text-decoration-none up-link">
                <img class="img-thumbnail img-fluid  border-0 rounded-0 p-0 "
                  src="<?php the_post_thumbnail_url( array(420, 420) ); ?>" alt="<?php the_title(); ?>"
                  title="<?php the_title_attribute(); ?>">
              </a>
            </div>
            <div class="card-content p-4 border-0">
              <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="up-link" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">
                    <span class="badge bg-primary mb-3 fs-small rounded-0 text-uppercase p-2 ff-primary fw-500">
                    ' . esc_html( $categories[0]->name ) . '</span></a>';
                }
              ?>
              <h3>
                <a href="<?php echo get_permalink(); ?>" class="text-decoration-none stretched-link">
                  <?php the_title(); ?>
                </a>
              </h3>
            </div>
            <div class="card-footer d-flex border-0 bg-white mt-auto p-4">
              <div class="flex-grow-1">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <img src="<?php echo get_avatar_url($user->ID, ['size' => '55']); ?>"
                      class="border border-1 rounded-circle border-primary" width="55px" height="55px"
                      alt="<?php echo get_the_author_meta( 'display_name', $author_id ); ?>">
                  </li>
                  <li class="list-inline-item author">
                    <?php echo get_the_author(); ?>
                  </li>
                </ul>
              </div>
              <div class="align-self-center">
                <span class="text-muted">
                  <time class="ff-secondary fw-light" datetime="<?php echo get_the_date('c'); ?>"
                    itemprop="datePublished">
                    <?php echo get_the_date(); ?>
                  </time>
                </span>
              </div>
            </div>
          </div> <!-- // card-curso -->
        </div>
        <?php }
          wp_reset_postdata();
        ?>
      </section>
    </div>
  </section>
</article><!-- #post-<?php the_ID(); ?> -->