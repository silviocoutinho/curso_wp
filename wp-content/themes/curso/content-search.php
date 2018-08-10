<article id="post-<?php the_ID(); ?>" <?php post_class(array('post-format-pesquisa')); ?> >
      <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><h1> <?php the_title(); ?> </h1></a>
      <?php if (has_category()): ?>
          <p>Categorias: <?php the_category(' '); ?> </p>
      <?php endif; ?>
      <p><?php the_excerpt(); ?></p>
</article>
