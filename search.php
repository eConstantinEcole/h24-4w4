<?php
/**
 * Modèle pour les résultats de recherche
 */
get_header();
?>
<main class="site__main">
    <section class="recherche__section">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <article class="populaire__article">
                    <h2 class="populaire__titre"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="populaire__contenu"><?php echo wp_trim_words(get_the_excerpt(), 50,"..."); ?></div>
                    
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <?php  
            get_template_part('404');?>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>