<?php 
// Inclusion des fichiers nécessaires
include_once get_template_directory() . '/functions/genere-list-categorie.php';
include_once get_template_directory() . '/functions/customizer.php';
include_once get_template_directory() . '/functions/options.php';

// Fonction pour inclure les styles et scripts
function tp1_enqueue_styles() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'tp1_enqueue_styles');

add_action('after_setup_theme', function () {
    load_theme_textdomain('tp1-em', get_template_directory() . '/languages');
});
?>