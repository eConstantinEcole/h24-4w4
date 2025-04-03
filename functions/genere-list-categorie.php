<?php 
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug) {
    // Récupérer la catégorie parente à partir de son slug
    echo '<h2 ça marche</h2>';
    $parent_category = get_category_by_slug($parent_slug);
    
    // Ajoute ici la logique pour traiter $parent_category
}
?>
