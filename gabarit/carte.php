<?php
/**
 * Template-part carte
 */
?>
<article class="carte carte--grande">
    <figure class="carte__image">
      <div class="meteo">
        <div class="meteo_icone">
          <i class="fas fa-sun"></i>
        </div>
        <p>Min. : <?php echo the_field('temperature_minimum'); ?>°C</p>
        <p>Max. : <?php echo the_field('temperature_maximum'); ?>°C</p>
      </div>
      <?php the_category(); ?>
        <?php 
        if (has_post_thumbnail()) 
            the_post_thumbnail("medium"); 
        ?>
    </figure>

    <div class="carte__contenu">
        <h2 class="carte__titre"><?php the_title(); ?></h2>
        <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 10, " ... " ); ?></p>
        <a href="<?php the_permalink(); ?>" class="carte__bouton carte__bouton--actif">Suite</a>
        
    </div>
</article>

<!-- Ajoute Font Awesome si ce n’est pas déjà fait -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
