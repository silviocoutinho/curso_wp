<article id="post-<?php the_ID(); ?>" <?php post_class(array('post-format-video')); ?> >
	   <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><h1> <?php the_title(); ?> </h1></a>
	   <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
	   <p>Categorias: <?php the_category(' '); ?></p>
	   <p><?php the_content(); ?></p>
</article>
