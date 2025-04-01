

<?php get_header(); ?>

<div class="page-404">
    <div class="page-404__contenu global">
    <div class="page-404__icone">
            <i class="fas fa-exclamation-triangle"></i> <!-- Icône d'erreur -->
        </div>
        <h1 class="page-404__titre">
            <?php echo get_theme_mod('404_titre', 'Erreur 404 : Page introuvable'); ?>
        </h1>
        <p class="page-404__description">
            <?php echo get_theme_mod('404_description', 'Désolé, la page que vous recherchez est introuvable.'); ?>
        </p>
        <a href="<?php echo home_url(); ?>" class="page-404__bouton">
            Retour à l'accueil
        </a>
        <div class="page-404__social">
            <?php get_template_part('icons_social'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>