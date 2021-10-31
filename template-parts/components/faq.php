<div class="row">
  <div class="col">
    <div class="ui-accordion accordion" id="accordionFaq">
      <?php 
        $i = 0;
        $args = array(
        'numberposts'	=> -1,
        'posts_per_page'=> 10,
        'post_type'		=> 'faq',
        'orderby' => 'date',
        'order'     => 'ASC',
        );
        $the_query = new WP_Query( $args );
        if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post(); $id = get_the_ID(); 
      ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading-<?php echo $i; ?>">
          <button class="accordion-button text-start collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse-<?php echo $i; ?>" aria-expanded="true"
            aria-controls="collapse-<?php echo $i; ?>">
            <?php the_field('question'); ?>
          </button>
        </h2>
        <div id="collapse-<?php echo $i; ?>" class="accordion-collapse collapse"
          aria-labelledby="heading-<?php echo $i; ?>" data-bs-parent="#accordionFaq">
          <div class="accordion-body">
            <p>
              <?php the_field('answer'); ?>
            </p>
          </div>
        </div>
      </div>
      <?php $i++; endwhile; endif; wp_reset_query(); ?>
    </div>
  </div>
</div>