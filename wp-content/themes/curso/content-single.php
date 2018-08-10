<article id="post-<?php the_ID(); ?>" <?php post_class(array()); ?> >
  <header>
      <h1> <?php the_title(); ?> </h1>
      <p>Autor do artigo: <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?></p>
      <p><?php the_tags('Tags: ', ', '); ?></p>
      <p>Categoria:<?php the_category(); ?></p>
  </header>

  <div class="content">
      <?php the_content(); ?>
  </div>
</article>
