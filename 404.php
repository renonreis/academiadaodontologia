<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package academiadaodontologia
 */

get_header();
?>

<main id="primary" class="site-main">
  <section class="mt-5 py-5 mb-5 error-404 not-found">
    <div class="container mt-5 mb-5">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="ui-title">
            <header class="page-header">
              <h1 class="ui-title-main page-title">
                <?php esc_html_e( 'Ops! Essa página não pode ser encontrada.', 'academiadaodontologia' ); ?>
              </h1>
            </header><!-- .page-header -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="text-light fs-5 fw-lighter content-entry page-content">
            <p>
              <?php esc_html_e( 'Parece que nada foi encontrado neste local. Talvez tente um dos links abaixo ou uma pesquisa?', 'academiadaodontologia' ); ?>
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="text-light fs-5 fw-lighter content-entry page-content">
            <?php
							get_search_form();

							the_widget( 'WP_Widget_Recent_Posts' );
						?>

            <div class="widget widget_categories">
              <h2 class="widget-title"><?php esc_html_e( 'Categories', 'academiadaodontologia' ); ?></h2>
              <ul>
                <?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
              </ul>
            </div><!-- .widget -->

            <?php
					/* translators: %1$s: smiley */
					$academiadaodontologia_archive_content = '<p>' . sprintf( esc_html__( 'Tente olhar nos arquivos mensais. %1$s', 'academiadaodontologia' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$academiadaodontologia_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

          </div>
        </div><!-- .page-content -->
      </div>
    </div>
    </div>
  </section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();