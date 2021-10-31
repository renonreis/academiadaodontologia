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
<style>
	.newsletter-footer {
		display: none;
	}
</style>
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
      <?php //echo do_shortcode( '[wpforms id="161"]'); ?>
		<div id="mauticform_wrapper_academiadaodontologianewsletter" class="mauticform_wrapper">
			<div id="mauticform_wrapper_academiadaodontologianewsletter" class="mauticform_wrapper">
  <form autocomplete="false" role="form" method="post" action="https://academiadaodontologia.com.br/mkt/form/submit?formId=59" id="mauticform_academiadaodontologianewsletter" data-mautic-form="academiadaodontologianewsletter" enctype="multipart/form-data">
      
      <div class="mauticform-innerform">


        <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

          <div id="mauticform_academiadaodontologianewsletter_email" data-validate="email" data-validation-type="email" class="mauticform-row mauticform-email mauticform-field-1 mauticform-required"> 
              <input id="mauticform_input_academiadaodontologianewsletter_email" name="mauticform[email]" value="" class="mauticform-input" type="email" placeholder="Digite o seu e-mail">
              <span class="mauticform-errormsg" style="display: none;">Este campo é obrigatório.</span>
          </div>

          <div id="mauticform_academiadaodontologianewsletter_obrigatorio" class="mauticform-row mauticform-freetext mauticform-field-2" style="display:none;">
              <div id="mauticform_input_academiadaodontologianewsletter_obrigatorio" name="mauticform[obrigatorio]" value="" class="mauticform-freetext">
                  <span fr-original-style="font-family: Arial,Helvetica,sans-serif;" style="font-family: Arial, Helvetica, sans-serif; box-sizing: border-box;"><span fr-original-style="font-size: 11px;" style="font-size: 11px; box-sizing: border-box;">*Ao se inscrever em nosso newsletter você autoriza o envio de e-mails promocionais e divulgados dos cursos da Academia da Odontologia e seus parceiros, podendo cancelar a inscrição a qualquer momento. Não se preocupe que não iremos encher sua caixa de spam!</span></span>
              </div>
          </div>

          <div id="mauticform_academiadaodontologianewsletter_submit" class="mauticform-row mauticform-button-wrapper mauticform-field-3">
              <button type="submit" name="mauticform[submit]" id="mauticform_input_academiadaodontologianewsletter_submit" value="" class="mauticform-button btn btn-default">Enviar</button>
          </div>
          </div>
      </div>
	  <div class="mauticform-error" id="mauticform_academiadaodontologianewsletter_error"></div>
      <div class="mauticform-message" id="mauticform_academiadaodontologianewsletter_message"></div>

      <input type="hidden" name="mauticform[formId]" id="mauticform_academiadaodontologianewsletter_id" value="59">
      <input type="hidden" name="mauticform[return]" id="mauticform_academiadaodontologianewsletter_return" value="">
      <input type="hidden" name="mauticform[formName]" id="mauticform_academiadaodontologianewsletter_name" value="academiadaodontologianewsletter">

      </form>
</div>
		</div>
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