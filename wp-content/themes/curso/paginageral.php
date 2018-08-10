<?php
/*
Template Name: Páginas Gerais
*/
?>
<?php get_header(); ?>

<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;
?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="conteudo-wrapper">
  <main>
        <div class="conteudo container">
          <div id="post-<?php the_ID(); ?>" <?php post_class(array()); ?> >
              PAGINA GERAL
              <?php
                  // Se houver algum post
                  if(have_posts()) :
                    //Enquanto houver algum post, chame o post de determinada maneira
                    while (have_posts()) : the_post();
              ?>
                     <h1> <?php the_title(); ?> </h1>
                      <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?> </p>
                      <p>Categorias: <?php the_category(' '); ?> </p>
                      <p><?php the_tags('Tags: ', ', '); ?></p>
              <?php
            endwhile;
                  else:
               ?>
                    <p>Nao tem posts</p>
                <?php
                  endif;
                ?>

          </div>
        </div>
  </main>
</div>
<?php get_footer(); ?>
