(function(){
  console.log("vive java script");

  let categoryId = null; // aucune catégorie sélectionnée au départ

  const domaine = window.location.href; 
  const categorie__ul__li = document.querySelectorAll('.categorie__ul__li');
  const destinationList = document.querySelector('.destination__list');

  function fetchAndDisplayArticles(categoryId) {
    if (!categoryId) return;

    let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;

    fetch(apiUrl)
      .then(response => response.json())
      .then(data => {
        destinationList.innerHTML = ''; // Nettoyer les articles existants
        data.forEach(article => {
          const articleElement = document.createElement('div');
          articleElement.innerHTML = `
            <h3>${article.title.rendered}</h3>
            <p>${article.content.rendered}</p>
            <a href="${article.link}">Lire plus</a>
          `;
          destinationList.appendChild(articleElement);
        });
      })
      .catch(error => console.error('Erreur lors de la récupération des articles :', error));
  }

  // Ajouter l'événement de filtrage sur les catégories
  categorie__ul__li.forEach(li => {
    li.addEventListener('click', function() {
      categoryId = li.dataset.id;
      console.log('ID de la catégorie sélectionnée :', categoryId); // Log ID de la catégorie

      fetchAndDisplayArticles(categoryId);
    });
  });

})();
