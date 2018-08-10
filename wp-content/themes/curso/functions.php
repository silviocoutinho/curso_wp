<?php

remove_action('wp_head','wp_generator');

/*Funcao para carregamento dos scripts*/
function carrega_scripts(){
 /*  argumentos da funcao wp_enqueue_style
    template --> identificador
    get_template_directory_uri --> funcao que retorna o caminho do template
    array --> dependencias para folha de estilos
    versao do template
    tipo de mídia
 */
  wp_enqueue_style('template', get_template_directory_uri().'/css/template.css', array(), '1.0'
    , 'all');

  /*
    Template -- identificador
    diretorio+nome do arquivo js
    array que carrega alguma dependencia, como o jquery por exemplo
    versao do script
    ultimo parametro identifica se o js serão carregados no inicio(head) ou final(apos body, valor true) da pagina
  */
  wp_enqueue_script('template', get_template_directory_uri().'/js/template.js', array(), '1.0'
    , true);

  /*
      Carregando o bootstrap
  */

  wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7'
    , 'all');
  wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7'
      , true);

}

/* função que adiciona uma acao, no momento em que wp_enqueue_scripts for
    acionada ela vai carregar a funcao carrega_scripts junto com ela

    Estamos usando o mesmo hook(gancho) para carregar os dois scripts
*/

add_action('wp_enqueue_scripts', 'carrega_scripts');



/* Funcoes para menus*/
register_nav_menus(
  array(
    'meu_menu_principal' => 'Menu Principal',
    'menu_rodape'        => 'Menu Rodapé'
  )
);

//Adicionando suporte ao tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',  array('video' , 'image' ));
add_theme_support('html5', array('search-form'));

//Registrando sidebars
if (function_exists('register_sidebar')){
  register_sidebar(
    array(
          'name'          =>    'Barra Lateral 1',
          'id'            =>    'sidebar-1',
          'description'   =>    'Barra lateral da página home',
          'before_widget' =>    '<div class="widget-wrapper">',
          'after_widget'  =>    '</div>',
          'before_title'  =>    '<h2 class="widget-titulo">',
          'after_title'   =>    '</h2>'

    )
  );
  register_sidebar(
    array(
          'name'          =>    'Barra Lateral 2',
          'id'            =>    'sidebar-2',
          'description'   =>    'Barra lateral da página blog',
          'before_widget' =>    '<div class="widget-wrapper">',
          'after_widget'  =>    '</div>',
          'before_title'  =>    '<h2 class="widget-titulo">',
          'after_title'   =>    '</h2>'

    )
  );
}

//Shortcodes para mostrar o telefone na pagina de contato
function mostra_telefone(){

    if(wp_is_mobile()){
      $resultado = '<div class="telefone"><p>Ligue agora:<a href="tel:01436028779">(14)3602-8779</a></p></div>';
    }
    return $resultado;

}

add_shortcode('meutelefone','mostra_telefone');


//
function num_itens_blog($query){
  if(is_admin() || ! $query->is_main_query())
  return;

  // A home definida eh a pag Blog
  if (is_home()) {
    $query->set('posts_per_page', 3);
    return;

  }

  if (is_front_page()) {
    $query->set('posts_per_page', 4);
    return;

  }


}

add_action('pre_get_posts', 'num_itens_blog', 1);

 ?>
