<?php get_header(); ?>

<?php 
$background_image = get_theme_mod('404_image_fond', '');
?>

<div class="page-404" style="background-image: url('<?php echo esc_url($background_image); ?>'); background-size: cover; background-position: center;">>
    <div class="page-404__contenu global">
    <div class="page-404__icone">
            <i class="fas fa-exclamation-triangle"></i> <!-- Icône d'erreur -->
        </div>
        <h1 class="page-404__titre">
            <?php echo get_theme_mod('404_titre', "Oops, vous avez échoué sur l'île 404 !"); ?>
        </h1>
        <p class="page-404__description">
            <?php echo get_theme_mod('404_description', "Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !"); ?>
        </p>
        <a href="<?php echo home_url(); ?>" class="page-404__bouton">
            Retour à l'accueil
        </a>

        <nav class="menu_page_404">
            <?php wp_nav_menu(array(
                'menu' => 'page_404',
                'container' => false, // Supprime le conteneur supplémentaire
                'items_wrap' => '<ul class="menu">%3$s</ul>', // Structure personnalisée
                'fallback_cb' => false, // Supprime le menu par défaut si aucun menu n'est défini
            )); ?>
        </nav>

        <div class="page-404__social">
            <?php get_template_part('icons_social'); ?>
        </div>
    </div>
    
</div>

<?php get_footer(); ?>