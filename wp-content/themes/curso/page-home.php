<?php get_header(); ?>
<?php get_template_part('content','cabecalho'); ?>
<div class="conteudo">
	<main>
		<section class="slide">
			<?php  /*motoPressSlider( "home-slider" ); */ ?>
		</section>
		<section class="servicos">
			<div class="container">
				Serviços
			</div>
		</section>

			<section class="meio">
			<div class="container">
				<div class="row">

					<div class="noticias col-md-8">
						<div class="row">
								<?php

											$tamanho = 'col-md-12';
											$op_content = 'destaque';

											$itens = get_categories(array('include' => '4,5,6'));  //pega todas as categorias cadastradas nesse WordPress

											foreach ($itens as $item):

												$args = array(
																'category__in' 	=> $item->cat_ID, //pega o ID da categoria
																'post_per_page'	=> 1

												);

												$consulta = new WP_Query($args);

												if($consulta->have_posts()):
														while($consulta->have_posts()):
																$consulta->the_post();
											?>
																<div class="<?php echo $tamanho; ?>">
																	<?php get_template_part('content', $op_content); ?>

																</div>
											<?php

														$tamanho = 'col-md-6';
														$op_content = 'secundaria';
														endwhile;
														wp_reset_postdata();

												endif;

											endforeach;

								 ?>

						</div> <!-- Fim da div row -->
					</div> <!-- Fim da NOTICIAS -->
					<aside class="barra-lateral col-md-4">
						<?php get_sidebar('home'); ?>
					</aside>
				</div>
			</div>
		</section>
	</main>
</div>
<?php get_footer(); ?>
