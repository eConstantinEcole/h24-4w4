<?php 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 

// Récupérer les images de fond pour le carrousel
$hero_background = [];
for ($k = 0; $k < 3; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, get_template_directory_uri() . '/images/default-hero.jpg'); 
}

$couleur = get_theme_mod('hero_couleur', '#fff');
$hero_email = get_theme_mod('hero_email', 'info@cmaisonneuve.qc.ca');
?>

<style>
    .hero__couleur {
        color: <?php echo $couleur ?>;
    }
</style>

<section class="hero">
    <!-- Contenu texte -->
    <div class="hero__contenu global">
        <h1 class="hero__titre hero__couleur">
            <?php bloginfo('name'); ?>
        </h1>
        <p class="hero__description">
            <?php bloginfo('description'); ?>
            Découvrez notre <span class="souligne c1">club de voyage</span> et explorez des destinations uniques à travers le monde. 
            <a href="#footer" class="souligne c2">Rejoignez-nous</a> pour vivre des expériences inoubliables et partager votre passion du voyage !
        </p>
        <a href="mailto:<?php echo esc_attr($hero_email); ?>" class="hero__courriel">
            <?php echo esc_html($hero_email); ?>
        </a>
        <button class="hero__bouton">Inscription</button>
        <div class="hero__icone-app">
            <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
        </div>
        <p>Auteur : <?php echo esc_html($hero_auteur); ?></p>
    </div>

    <!-- Carrousel d'images de fond -->
    <div class="hero__carrousel" style="background-image: url('<?php echo esc_url($hero_background[0]); ?>');"></div>
    <div class="hero__carrousel" style="background-image: url('<?php echo esc_url($hero_background[1]); ?>');"></div>
    <div class="hero__carrousel" style="background-image: url('<?php echo esc_url($hero_background[2]); ?>');"></div>

    <!-- Radio boutons pour changer de slide -->
    <div class="hero__radio">
        <input class="hero__radio__input" data-id_radio="0" type="radio" name="carroussel" checked="checked">
        <input class="hero__radio__input" data-id_radio="1" type="radio" name="carroussel">
        <input class="hero__radio__input" data-id_radio="2" type="radio" name="carroussel">
    </div>
</section>
