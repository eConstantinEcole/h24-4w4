<!-- Le modèle 404.php contiendra
Un menu différent du menu principal
Un titre
Une description
Les icône sociaux
5 commits
Utilisation du customizer
intégration de l'entête et du footer
Intégration de template-part -->

<?php get_header(); ?>

<div class="page-404">
    <div class="page-404__contenu global">
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