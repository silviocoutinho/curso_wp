<article id="post-<?php the_ID(); ?>" <?php post_class(array('post-format-padrao')); ?> >
      <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><h1> <?php the_title(); ?> </h1></a>
      <?php if (has_post_thumbnail()): the_post_thumbnail(array(175,175)); endif; ?>
      <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?> </p>
      <p>Categorias: <?php the_category(' '); ?> </p>
      <p><?php the_tags('Tags: ', ', '); ?></p>
      <p><?php the_content(); ?></p>
</article>
