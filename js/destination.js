(function(){
  console.log("vive java script");

  let categoryId = null; // Aucune catégorie sélectionnée au départ
  const domaine = window.location.href;
  const categorie__ul__li = document.querySelectorAll('.categorie__ul__li');
  const destinationList = document.querySelector('.destination__list');

  function fetchAndDisplayArticles(categoryId) {
    if (!categoryId) return; // Ne rien faire si aucune catégorie n'est sélectionnée
    
    let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    
    fetch(apiUrl)
      .then(response => response.json())
      .then(data => {
        destinationList.innerHTML = ""; // Nettoyer les articles affichés avant d'ajouter les nouveaux

        data.forEach(article => {
          const articleElement = document.createElement('div');
          articleElement.innerHTML = `
            <h3>${article.title.rendered}</h3>
            <a href="${article.link}">Lire plus</a>
          `;
          destinationList.appendChild(articleElement);
        });
      })
      .catch(error => console.error('Erreur lors de la récupération des articles:', error));
  }

  // Ne pas charger d'articles au démarrage

  // Ajouter l'événement de filtrage sur les catégories
  categorie__ul__li.forEach(li => {
    li.addEventListener('click', function() {
      categoryId = li.dataset.id; // Mettre à jour l'ID de la catégorie
      fetchAndDisplayArticles(categoryId); // Charger et afficher uniquement les articles de cette catégorie
    });
  });

})();
