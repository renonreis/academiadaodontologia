<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package academiadaodontologia
 */

?>


<div class="row">
  <div class="col">
    <div class="ui-title">
      <header class="page-header">
        <h1 class="ui-title-main page-title"><?php esc_html_e( 'Nada encontrado', 'academiadaodontologia' ); ?></h1>
      </header><!-- .page-header -->
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-8">
    <div class="text-light fs-5 fw-lighter">
      <?php
        if ( is_home() && current_user_can( 'publish_posts' ) ) :

          printf(
            '<p>' . wp_kses(
              /* translators: 1: link to WP admin new post page. */
              __( 'pronto para publicar seu primeiro post? <a href="%1$s">Comece aqui</a>.', 'academiadaodontologia' ),
              array(
                'a' => array(
                  'href' => array(),
                ),
              )
            ) . '</p>',
            esc_url( admin_url( 'post-new.php' ) )
          );
        elseif ( is_search() ) :
      ?>
      <p>
        <?php esc_html_e( 'Desculpe, mas nada corresponde aos seus termos de pesquisa. Tente novamente com algumas palavras-chave diferentes. ',' Academiadaodontologia' ); ?>
      </p>
    </div>
    <div class="text-light fs-5 fw-lighter content-entry page-content">
      <?php
						get_search_form();
						else :
					?>
      <p>
        <?php esc_html_e( 'Parece que não conseguimos encontrar o que você está procurando. Talvez pesquisar possa ajudar.', 'academiadaodontologia' ); ?>
      </p>
      <?php
						get_search_form();
						endif;
					?>
    </div>
  </div><!-- .page-content -->
  <?php get_sidebar(); ?>
</div>