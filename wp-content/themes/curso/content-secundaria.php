<article class="noticia-secundaria">
      <div class="miniatura">
        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
        </a>
      </div>
      <a href="<?php the_permalink(); ?>">
        <h2> <?php the_title(); ?> </h2>
      </a>
      <p>por <span><?php the_author_posts_link(); ?></span> em <span><?php the_category(' '); ?></span>
      <?php the_tags('Tags: ', ', '); ?></p>
      <p><?php the_excerpt(); ?></p>
</article>
