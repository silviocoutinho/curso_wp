<?php  get_header(); ?>

<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div id="primary">
  <main id="main">
    <div class="container">
        Single PHP
        <?php
            while(have_posts()): the_post();
                get_template_part('content', 'single');

                ?>
                    <div class="row">
                        <div class="paginacao text-left"><?php previous_post_link(); ?></div>
                        <div class="paginacao text-right"><?php next_post_link(); ?></div>
                    </div>
              <?php

                if(comments_open() || get_comments_number()):
                    comments_template();
                endif;

          endwhile;
         ?>

    </div>
  </main>
</div>

<?php get_footer(); ?>
