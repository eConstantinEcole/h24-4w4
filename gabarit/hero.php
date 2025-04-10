<?php $hero_auteur = get_theme_mod('hero_auteur', ''); ?>
<?php $hero_background = get_theme_mod('hero_background', ''); ?>
<?php $couleur = get_theme_mod('hero_couleur', '#fff') ?>

<style>
    .hero__couleur{
        color: <?php echo $couleur ?>;
    }
</style>

    <section class="hero" style="background-image: url(https://gftnth00.mywhc.ca/4w4_35/wp-content/uploads/2025/03/maldives.jpg);">
        <div class="hero__carroussel" style= "background-image: url(<?php echo $hero_background ?>);"></div>
        <div class="hero__carroussel" style= "background-image: url(<?php echo $hero_background ?>);"></div>
        <div class="hero__carroussel" style= "background-image: url(<?php echo $hero_background ?>);"></div>
      



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