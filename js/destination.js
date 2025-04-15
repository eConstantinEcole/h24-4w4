(function () {
    console.log("vive Javascript");

    let categoryId = 3; // ID de la catégorie par défaut
    const domaine = window.location.href; // Domaine actuel
    let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    const listeCategories = document.querySelectorAll(".categorie__ul__li");
    const listeDestinations = document.querySelector('.destination__list');

    console.log("Nombre de catégories :", listeCategories.length);

    // Fonction pour récupérer et afficher les articles
    function fetchAndDisplayArticles(apiUrl) {
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                listeDestinations.innerHTML = ""; // Nettoyer la liste des articles

                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add('article');

                    // Générer le contenu de l'article
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered}</h3>
                        <p>${article.excerpt.rendered}</p>
                        <a href="${article.link}" class="article__link">Lire plus</a>
                    `;

                    listeDestinations.appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles :', error));
    }

    // Charger les articles de la catégorie par défaut
    fetchAndDisplayArticles(apiUrl);

    // Ajouter un événement pour chaque catégorie
    listeCategories.forEach(categorie => {
        categorie.addEventListener("mousedown", function () {
            categoryId = categorie.dataset.id; // Récupérer l'ID de la catégorie
            apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
            console.log("Nouvelle URL de l'API :", apiUrl);

            fetchAndDisplayArticles(apiUrl); // Charger les articles de la nouvelle catégorie
        });
    });
})();
