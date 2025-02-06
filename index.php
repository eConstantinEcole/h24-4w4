<?php 
// Modele de base de notre thème
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4-Voyage</title>
    <?php wp_head() ?>  
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
            <img src="<?php echo get_template_directory_uri() . '/images/logo.png' ?>" alt="logo voyage">

            </figure>


            <input type="checkbox" id="chk_burger" class="chk__burger">
            <label for="chk_burger">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu" alt="Menu" style="width: 32px; height: 32px;">
            </label>





            <div class="entete__nav">
                <nav class="entete__menu">
                    <ul class="menu">
                        <li class="menu__li">
                            <a class="menu__a" href="#">Aventure</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Sportive</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a"  href="#">Culturelle</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Zen</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Sportive</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a"  href="#">Culturelle</a>
                        </li>
                    </ul>
                </nav>
                <div class="entete__recherche">
                    <form  class="recherche">
                        <input type="text" class="recherche__input">
                        <img  class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
                    </form>
                </div>
            </div>
        </div>
    </header>
    <section class="hero">
        <div class="hero__contenu global">
            <h1 class="hero__titre">
            Voyagez Autrement avec Mondo Voyages !
            </h1>
            <p class="hero__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur est officiis, mollitia minus asperiores quas libero saepe consequuntur at blanditiis et eligendi, sequi sit quae laboriosam, ex delectus nesciunt.
            </p>
            <a href="" class="hero__courriel">
                info@cmaisonneuve.qc.ca
            </a>
            <button class="hero__bouton">
                S'INSCRIRE
            </button>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
            </div>
        </div>
    </section>

    <section class="inscription">
    <div id="containeur__infos">
        <div class="nom">
            <p class="inscription__titre">NOM</p>
            <input type="text" id="nom" placeholder="Écrivez votre nom">
        </div>
        <div class="prenom">
            <p class="inscription__titre">PRENOM</p>
            <input type="text" id="prenom" placeholder="Écrivez votre prénom">
        </div>
        <div class="courriel">
            <p class="inscription__titre">COURRIEL</p>
            <input type="text" id="courriel" placeholder="Écrivez votre courriel">
        </div>
        <div class="telephone">
            <p class="inscription__titre">TELEPHONE</p>
            <input type="text" id="telephone" placeholder="Écrivez votre téléphone">
        </div>
    </div>


            </div>
            <button class="inscription__bouton">S'INSCRIRE</button>
        </div>

    </section>


    <section class="promotion">
        <h1 class="promotion__titre">Nos destinations favorites</h1>

        <div class="promotion__images">
            <img src="wp-content/themes/tp1/images/images (1).jpg" alt="">
            <img src="wp-content/themes/tp1/images/images (2).jpg" alt="">
            <img src="wp-content/themes/tp1/images/images.jpg" alt="">
            <img src="wp-content/themes/tp1/images/téléchargement (1).jpg" alt="">
            <img src="wp-content/themes/tp1/images/téléchargement (2).jpg" alt="">
            <img src="wp-content/themes/tp1/images/téléchargement (3).jpg" alt="">
            <img src="wp-content/themes/tp1/images/téléchargement (4).jpg" alt="">
            <img src="wp-content/themes/tp1/images/téléchargement (5).jpg" alt="">
            <img src="wp-content/themes/tp1/images/téléchargement (6).jpg" alt="">
            <img src="wp-content/themes/tp1/images/téléchargement.jpg" alt="">
        </div>
    </section>

    <section class="populaire">
        <div class="global">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <article class="populaire__article">
                <h2 class="populaire__titre"><?php the_title(); ?></h2>
                <p class="populaire__description"><?php echo wp_trim_words(get_the_content(), 20, "...") ?></p>

            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>

    <footer>
        <?php wp_footer() ?>
    </footer>
</body>
</html>