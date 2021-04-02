<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package academiadaodontologia
 */

$user = wp_get_current_user();
$author_id = get_the_author_meta( 'ID' );

?>
<div class="col">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="card card-post rounded-0 border-0 p-0 h-100">
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
          <a href="<?php echo get_permalink(); ?>" class="text-decoration-none stretched-link fw-light">
            <?php the_title(); ?>
          </a>
        </h3>
      </div>
      <div class="card-footer d-flex border-0 bg-white mt-auto p-4">
        <div class="flex-grow-1">
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 55, '', '', array('class' => 'author__thumb border border-2 rounded-circle border-primary') ); ?>
            </li>
            <li class="list-inline-item author">
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
  </article><!-- #post-<?php the_ID(); ?> -->
</div>