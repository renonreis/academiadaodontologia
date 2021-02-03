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
            <h2 class="ui-title-main"><?php the_title(); ?></h2>
            <!-- <span class="ui-title-sub"> some subtitle</span> -->
          </div>
        </div> <!-- //col-->
      </div>
      <!--//row-->
      <div class="row">
        <div class="col-lg-8 mb-md-0 mb-3">
          <!--init postlist -->
          <div class="row row-cols-1 row-cols-lg-2 g-3" data-masonry='{"percentPosition": false }'>
            <?php           
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
              
              $args = array(
              'numberposts'	=> -1,
              'posts_per_page'=> 8,
              'paged' => $paged,
              'post_type'		=> 'post',
              'orderby' => 'date',
              'order'     => 'DESC',
              );
              $the_query = new WP_Query( $args );                       
              if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post(); $id = get_the_ID(); 

              $user = wp_get_current_user();
              $author_id = get_the_author_meta( 'ID' );
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
                      <span class="badge bg-primary mb-3 fs-small rounded-0 text-uppercase p-2 ff-primary">
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
                          class="border-1 rounded-circle" width="55px" height="55px"
                          alt="<?php echo get_the_author_meta( 'display_name', $author_id ); ?>">
                      </li>
                      <li class="list-inline-item fs-5">
                        <?php echo get_the_author(); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="align-self-center">
                    <span class="text-muted">
                      <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
                        <?php echo get_the_date(); ?>
                      </time>
                    </span>
                  </div>
                </div>
              </div> <!-- // card-curso -->
            </div>
            <?php 
              endwhile;  
            ?>
          </div> <!-- //row  -->
          <div class="blog-pagination">
            <?php 
                echo paginate_links( array (
                  'base'         => str_replace( 9, '%#%', esc_url( get_pagenum_link( 9 ) ) ),
                  'total'        => $the_query->max_num_pages,
                  'current'      => max( 1, get_query_var( 'paged' ) ),
                  'format'       => '?paged=%#%',
                  'show_all'     => false,
                  'type'         => 'list',
                  'end_size'     => 3,
                  'mid_size'     => 1,
                  'prev_next'    => true,
                  'prev_text'    => sprintf( '%1$s', __( 'Anterior', 'text-domain' ) ),
                  'next_text'    => sprintf( '%1$s', __( 'Próximo', 'text-domain' ) ),
                  'add_args'     => false,
                  'add_fragment' => '',
                ));
              ?>
          </div>
          <?php
              endif;
              wp_reset_query();
            ?>


          <!-- end postlist -->
        </div> <!-- //col -->
        <aside class="col-lg-4 pl-xs-0 pl-lg-5 blog-sidebar">
          <div class="blog-sidebar__inner ps-lg-4">
            <ul class="list-inline fs-5 blog-sidebar__social  mb-3 d-flex">
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
                <?php get_search_form(); ?>
              </li>
            </ul>

            <div class="border-1 p-5 text-white ff-primary border-blog-light border mb-4">
              <h4 class="fw-100 fst-italic fs-2 ff-primary">Fique por dentro</h4>
              <p class="fw-200">Acompanhe as últimas publicações científicas, promoções e novidades da Academia da
                Odontologia.</p>
              <form>
                <div class="mb-2">
                  <label for="blogInputEmail" class="form-label sr-only d-none">Digite seu e-mail</label>
                  <input type="email" class="form-control rounded-0" id="blogInputEmail" placeholder="Digite seu e-mail"
                    aria-describedby="emailHelp">
                  <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-outline-light btn-block text-uppercase">Enviar</button>
                </div>
              </form>
            </div>

            <nav class="widget-menu-link">
              <ul>
                <li><a href="<?php echo get_home_url(); ?>/blog/" class="bg-white text-dark">Todas as categorias</a>
                </li>
                <?php 
                  $our_walker= new Walker_Category_Custom();
                  academia_wp_list_categories( array(
                    'walker'=>$our_walker,
                    'orderby' => 'name',
                    'hierarchical'        => true,
                    'order'               => 'ASC',
                    'orderby'             => 'name',
                    'show_count'          => 1,
                    'show_option_all'     => '',
                    'style'               => 'list',
                    'taxonomy'            => 'category',
                    'title_li'            => '',
                  ) ); ?>
              </ul>
            </nav>
          </div> <!-- //blog-sidebar__inner-->
        </aside> <!-- //col-lg-4 blog-sidebar -->
      </div> <!-- //row -->
    </div> <!-- //container -->
  </section>
</main><!-- #main -->

<?php
get_footer();