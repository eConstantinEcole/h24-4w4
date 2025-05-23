<?php
/*
Template Name: Pays
*/
?>

<?php get_header(); ?>
<h1 class="titre">Les plus beaux pays</h1>

<!-- Description modifiable dans WordPress -->
<p class="description">
    <?php echo wp_kses_post(get_theme_mod('pays_description', 'Texte de description par défaut pour la page Pays.')); ?>
</p>

<?php get_footer(); ?>