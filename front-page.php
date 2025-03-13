<?php
/** 
 * modèle front-page.php permet d'afficher la page d'accueil
 * 
*/
?>

<?php get_header() ?>
<h1>front-page.php</h1>
<?php $hero_auteur = get_theme_mod('hero_auteur', ''); ?>
<?php $hero_background = get_theme_mod('hero_background', ''); ?>
<?php $couleur = get_theme_mod('hero_couleur', '#fff') ?>
<style>
    .hero__couleur{
        color: <?php echo $couleur ?>;
    }
</style>

    <section class="hero" style = "background-image: url(<?php echo $hero_background ?>);">
        <div class="hero__contenu global">
            <h1 class="hero__titre hero__couleur">
                <?php  bloginfo('name'); ?>
            </h1>
            <p class="hero__description">
            <?php  bloginfo('description'); ?>
            Découvrez notre <span class="souligne c1"> club de voyage</span> et explorez des destinations uniques à travers le monde. <a href="#footer" class="souligne c2">Rejoignez-nous</a> pour vivre des expériences inoubliables et partager votre passion du voyage !
            </p>
            <?php $hero_email = get_theme_mod('hero_email', 'info@cmaisonneuve.qc.ca'); ?>
            <a href="mailto:<?php echo esc_attr($hero_email); ?>" class="hero__courriel">
                <?php echo esc_html($hero_email); ?>
            </a>

            <button class="hero__bouton">
                Inscription
            </button>
            <?php get_template_part('icons_social'); ?>
            <p>Auteur : <?php echo $hero_auteur ?></p>
        </div>
    </section>

 

    <section class="populaire">
        <div class="boiteflex global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (in_category('galerie')){
                the_content();
            } else { ?>         
            <?php get_template_part("gabarit/carte"); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>