<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package academiadaodontologia
 */

?>

<footer class="text-white py-3 px-4">
  <div class="container pb-4 pt-5 py-md-6">
    <div class="row justify-content-md-between">
      <div class="col-12 col-sm-6 col-lg-3 has_menu-footer">
        <?php
					wp_nav_menu(
						array(
							'theme_location' 		=> 'menu-footer-1',
							'container'			 		=> 'container',
							'container_class'   => 'container_class',
							'menu_class'		 		=> 'menu_class',
							'menu_id'       		=> 'menu-footer-1',
						)
					);
				?>
      </div>
      <div class="col-12 col-sm-6  col-lg-4 has_menu-footer">
        <?php
					wp_nav_menu(
						array(
							'theme_location' 		=> 'menu-footer-2',
							'container'			 		=> 'div',
							'container_class'   => 'container_class',
							'menu_class'		 		=> 'menu_class',
							'menu_id'       		=> 'menu-footer-2',
						)
					);
				?>
      </div>
      <div class="col-sm-12 col-lg-4 mt-5 mt-lg-0 ms-auto">
		  <div class="newsletter-footer">
			  
		  
        <h2 class="h6 mb-3">Inscreva-se em nossa newsletter</h2>
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

          <div id="mauticform_academiadaodontologianewsletter_obrigatorio" class="mauticform-row mauticform-freetext mauticform-field-2" style="display: none;">
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
        <p class="text-muted lh-1">
          <small>
            *Ao se inscrever em nosso newsletter você autoriza o envio de e-mails promocionais e divulgados dos cursos da Academia da Odontologia e seus parceiros, podendo cancelar a inscrição a qualquer momento. Não se preocupe que não iremos encher sua caixa de spam!
          </small>
        </p>
			  </div>
        <ul class="list-inline fs-5">
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
        </ul>
      
		</div>
    </div>
  </div>
  <div class="container py-5">
    <div class="row text-center">
      <div class="col">
        <img src="<?php echo wp_get_attachment_image_url( 143, '' ); ?>" alt="">
      </div>
    </div>
  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<style type="text/css" scoped>
.mauticform_wrapper {
  max-width: 600px;
  margin: 0px auto 24px;
}
.mauticform-innerform {
}
.mauticform-post-success {
}
.mauticform-name {
  font-weight: bold;
  font-size: 1.5em;
  margin-bottom: 3px;
}
.mauticform-description {
  margin-top: 2px;
  margin-bottom: 10px;
}
.mauticform-error {
  margin-bottom: 10px;
  color: red;
}
.mauticform-message {
  	display: block;
	color: #333;
	background: #e0ffc7;
	border: 0;
	font-size: 16px;
	margin-top: 0.5rem;
	line-height: 40px;
	text-align: center
}
.mauticform-row {
  display: block;
  margin-bottom: .5rem;
}
.mauticform-label {
  font-size: 1.1em;
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}
.mauticform-row.mauticform-required .mauticform-label:after {
  color: #e32;
  content: " *";
  display: inline;
}
.mauticform-helpmessage {
	display: block;
	color: #333;
	background: #e0ffc7;
	border: 1px solid #b4d39b;
	font-size: 12px;
}
.mauticform-errormsg {
  	display: block;
	color: #e61d7d;
	margin-top: .5rem;
	font-size: 12px;
}
.mauticform-input {
  border: 0;
  border-bottom: 1px solid #e61d7d;
  background-color: #fff;
  background-clip: padding-box;
  border-radius: 0;
  box-shadow: none;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 600;
  line-height: 1.5;
	width: 100%;
}
.mauticform-input:focus {
  background-color: #1a1a1a !important;
  border-bottom: 1px solid #e61d7d;
	outline: 0;
}
.mauticform-checkboxgrp-row {
}
.mauticform-checkboxgrp-label {
  font-weight: normal;
}
.mauticform-checkboxgrp-checkbox {
}
.mauticform-radiogrp-row {
}
.mauticform-radiogrp-label {
  font-weight: normal;
}
.mauticform-radiogrp-radio {
}
.mauticform-button-wrapper .mauticform-button.btn-default,
.mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default {
  color: #5d6c7c;
  background-color: #ffffff;
  border-color: #dddddd;
}
.mauticform-button-wrapper .mauticform-button,
.mauticform-pagebreak-wrapper .mauticform-pagebreak {
  display: inline-block;
  margin-bottom: 0;
  font-weight: 600;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.3856;
  border-radius: 3px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.mauticform-button-wrapper .mauticform-button.btn-default[disabled],
.mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default[disabled] {
  background-color: #ffffff;
  border-color: #dddddd;
  opacity: 0.75;
  cursor: not-allowed;
}
.mauticform-pagebreak-wrapper .mauticform-button-wrapper {
  display: inline;
}
	button#mauticform_input_academiadaodontologianewsletter_submit {
		width: 100%;
		background-color: transparent;
		border: 1px solid #f8f9fa;
		color: #f8f9fa;
		padding: .375rem .75rem;
		font-size: 1rem;
		border-radius: 0;
		transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	}
	button#mauticform_input_academiadaodontologianewsletter_submit:hover {
		color: #000;
		background-color: #f8f9fa;
		border-color: #f8f9fa;
	}

</style>


<div class="talk-whatsapp">
  <div class="talk-whatsapp__info">
    <span>Fale conosco via whatsapp</span>
    <span><?php the_field('whatsapp_number', 'option'); ?></span>
  </div>
  <a class="talk-whatsapp__link"
    href="https://api.whatsapp.com/send?phone=55<?php the_field('whatsapp_number', 'option'); ?>" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>

</body>

</html>