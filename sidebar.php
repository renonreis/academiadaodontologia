<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package academiadaodontologia
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="col-lg-4 pt-5 pt-lg-0 pl-xs-0 pl-lg-5 blog-sidebar">
  <div class="blog-sidebar__inner">
    <ul class="list-inline fs-5 blog-sidebar__social  mb-3 d-flex">
      <li class="list-inline-item">
        <a href="<?php the_field('facebook_url', 'option'); ?>" target="_blank" class="text-white">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-inline-item ms-3">
        <a href="<?php the_field('instagram_url', 'option'); ?>" target="_blank" class="text-white">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li class="list-inline-item ms-3">
        <a href="<?php the_field('youtube_url', 'option'); ?>" target="_blank" class="text-white">
          <i class="fab fa-youtube"></i>
        </a>
      </li>
      <li class="list-inline-item flex-shrink-1 ms-auto">
        <?php get_search_form(); ?>
      </li>
    </ul>

    <div class="border-1 p-5 text-white ff-primary border-blog-light border mb-4">
      <h4 class="fw-100 fst-italic fs-2 ff-primary">Fique por dentro</h4>
      <p class="fw-200">Acompanhe as últimas publicações científicas, promoções e novidades da Academia da
        Odontologia.</p>
      <?php echo do_shortcode( '[wpforms id="161"]'); ?>
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