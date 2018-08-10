<?php get_header(); ?>

<?php get_template_part('content','cabecalho'); ?>


<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">
					INDEX PHP
					<div class="blog col-md-9">
						<?php
							// Se houver algum post
							if(have_posts()) :
								// Enquanto houver algum post, chame o post de determinada maneira
								while (have_posts()) : the_post();
						?>

						<?php get_template_part('content', get_post_format()); ?>

						<?php
								endwhile;
						?>
						<div class="paginacao text-left">
								<?php next_posts_link("<< Mais antigos"); ?>
						</div>
						<div class="paginacao text-right">
								<?php previous_posts_link("Mais novos >>"); ?>
						</div>
						<?php
							else:
						 ?>
							<p>Nao tem nada ainda pra mostrar</p>
						<?php
							endif;
						?>

					</div>
					<aside class="barra-lateral col-md-3">
						<?php get_sidebar('blog'); ?>
					</aside>
				</div>
			</div>
		</section>

	</main>
</div>
<?php get_footer(); ?>
