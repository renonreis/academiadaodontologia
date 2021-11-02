<?php 

$plus_premium = get_field('plus_premium');
?>
<div class="table-responsive">
  <table class="table text-center text-white">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col" class="tb-premium"><strong>Odontopediatria Premium</strong></th>
        <th scope="col" class="tb-plus"><strong>Odontopediatria <span>PLUS</span></strong></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-start">Plano de ensino personalizado</td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
      </tr>
      <tr>
        <td class="text-start">Private Class agendadas – 30 min</td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
      </tr>
      <tr>
        <td class="text-start">Aulas sincronas mensais AO VIVO</td>   
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
      </tr>
      <tr>
        <td class="text-start">Roteiros de cada curso</td>   
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
      </tr>
      <tr>
        <td class="text-start">Ebooks, gráficos, informativos</td>   
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
      </tr>
      <tr>
        <td class="text-start">Acesso imediato a + de 22 cursos online</td>   
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
      </tr>
      <tr>
        <td class="text-start">Cursos novos mensais</td>   
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
      </tr>
      <tr>
        <td class="text-start">Visulizações ilimitadas das aulas</td>   
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
      </tr>
      <tr>
        <td class="text-start">Material impresso exclusivo</td>   
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
      </tr>
      <tr>
        <td class="text-start">Acesso ao curso de sedação medicamentosa</td>   
        <td class="opacity-25"><?php get_template_part( 'template-parts/svg/times-circle' ); ?></td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
      </tr>
      <tr>
        <td class="text-start">Aulas sedação AO VIVO bimestrais</td>   
        <td class="opacity-25"><?php get_template_part( 'template-parts/svg/times-circle' ); ?></td>
        <td><?php get_template_part( 'template-parts/svg/check-circle' ); ?></td>
      </tr>
      <?php if($plus_premium == 'premium') { ?>
        <tr class="btn-table">
          <td></td>   
          <td></td>
          <td>
            <div class="btn-courses">
              <a href="<?php echo get_site_url(); ?>/#escolha-o-seu-plano" class="btn btn-lg btn-primary">
                Saiba mais
              </a>
            </div>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>