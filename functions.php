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

function creer_vague($couleur_haut, $couleur_bas) {
    echo '
    <div style="background: linear-gradient(to bottom, '.$couleur_haut.' 0%, '.$couleur_bas.' 100%);">
        <svg viewBox="0 0 1440 200" width="100%" height="200" preserveAspectRatio="none" style="display:block;">
            <path d="M0,80 C360,200 1080,0 1440,120 L1440,200 L0,200 Z" fill="'.$couleur_bas.'"></path>
        </svg>
    </div>
    ';
}
?>