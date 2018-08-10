<?php get_header(); ?>
<?php get_template_part('content','cabecalho'); ?>
<div class="conteudo">
  <main>
    <section class="meio container">

        <div class="noticias">
          <?php
              // Se houver algum post
              if(have_posts()) :
                //Enquanto houver algum post, chame o post de determinada maneira
                while (have_posts()) : the_post();
          ?>
                <h1> <?php the_title(); ?> </h1>
                <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?> </p>
                <p>Categorias:: <?php the_category(' '); ?> </p>
                <p><?php the_tags('Tags: ', ', '); ?></p>
                <p><?php the_content(); ?>
          <?php
                endwhile;
              else:
           ?>
                <p>Nao tem posts</p>
            <?php
              endif;
             ?>
        </div>

    </section>

  </main>
</div>
<?php get_footer(); ?>
