<?php

 
// single.php est le modèle pour chaque article individuel
?>
<?php get_header() ?>
<h1>single.php</h1>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populairearticle">
                <?php 
                if (has_post_thumbnail())
                the_post_thumbnail(); ?>
                <h2 class="populairetitre"><?php the_title(); ?></h2>
                <div class="populaire__contenu"><?php the_content(); ?></div>
            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>