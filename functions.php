<?php 
// fonction php 
?>


<?php  
function ajouter_css_dans_header() {

  wp_enqueue_style(
    'style_normalize',
    get_template_directory_uri() . '/normalize.css',
    array(),
    filemtime(get_template_directory() . '/normalize.css'));


    wp_enqueue_style(
        'style_principal',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css'));
}

add_action('wp_enqueue_scripts', 'ajouter_css_dans_header');


/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function modifie_requete_principal( $query ) {
  if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
    $query->set( 'category_name', 'nouvelle' );
    $query->set( 'orderby', 'title' );
    $query->set( 'order', 'ASC' );
    }
   }
   add_action( 'pre_get_posts', 'modifie_requete_principal' );

?>