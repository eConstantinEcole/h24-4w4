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

<div class="galerie">
    <?php the_content(); ?>
</div>

<!-- Menu des pays -->
<div class="menu-pays">
    <?php
    $liste_pays = [
        "France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc",
        "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"
    ];
    foreach ($liste_pays as $pays) {
        echo '<button class="bouton-pays" data-pays="' . esc_attr($pays) . '">' . esc_html($pays) . '</button> ';
    }
    ?>
</div>



<div id="liste-articles"></div>

<script>
function fetchArticlesByCountry(pays) {
    document.getElementById('liste-articles').innerHTML = "Chargement...";
    const paysLower = pays.toLowerCase();
    const paysUpper = pays.toUpperCase();
    fetch('/4w4/wp-json/wp/v2/posts?per_page=100&search=' + encodeURIComponent(pays))
        .then(res => res.json())
        .then(data => {

          const filtered = data.filter(post =>
                post.title.rendered.toLowerCase().includes(paysLower) ||
                post.content.rendered.toLowerCase().includes(paysLower)
            );
            let html = '';
            if (filtered.length === 0) {
                html = "<p>Aucun article trouvé pour ce pays.</p>";
            } else {
                filtered.forEach(post => {
                    html += `
                        <article class="carte carte--grande">
                            <div class="carte__contenu">
                                <h2 class="carte__titre">${post.title.rendered}</h2>
                                <div class="carte__description">${post.excerpt.rendered}</div>
                                <a href="${post.link}" class="carte__bouton carte__bouton--actif">Lire plus</a>
                            </div>
                        </article>
                    `;
                });
            }
            document.getElementById('liste-articles').innerHTML = html;
        })
        .catch(() => {
            document.getElementById('liste-articles').innerHTML = "Erreur lors du chargement.";
        });
}

document.querySelectorAll('.bouton-pays').forEach(btn => {
    btn.addEventListener('click', function() {
        // Retire la classe active de tous les boutons
        document.querySelectorAll('.bouton-pays').forEach(b => b.classList.remove('active'));
        // Ajoute la classe active au bouton cliqué
        this.classList.add('active');
        fetchArticlesByCountry(this.getAttribute('data-pays'));
    });
});

// _Par défaut : France
window.addEventListener('DOMContentLoaded', function() {
    const btnFrance = document.querySelector('.bouton-pays[data-pays="France"]');
    if (btnFrance) btnFrance.classList.add('active');
    fetchArticlesByCountry('France');
});
</script>


<?php get_footer(); ?>