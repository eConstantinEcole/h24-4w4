<?php
/**
 * Template-part carte
 */
?>
<article class="carte carte--grande">
<figure class="carte__image">
<?php 
                if (has_post_thumbnail())
                the_post_thumbnail("medium"); ?>
  <div class="carte__contenu">
    <h2 class="carte__titre"><?php the_title(); ?></h2>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(),10, " ... " ); ?></p>
    <a href="<?php the_permalink(); ?>" class="carte__bouton carte__bouton--actif">Suite</a>
  </div>
</article>