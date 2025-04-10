(function(){
  console.log("vive java script");

  let idCategorie = null;

  const domaine = window.location.href; 
  const listeCategories = document.querySelectorAll('.categorie__ul__li');
  const listeDestinations = document.querySelector('.destination__list');

  function recupererEtAfficherArticles(idCategorie) {
    if (!idCategorie) return;

    let urlApi = `${domaine}wp-json/wp/v2/posts?categories=${idCategorie}`;

    fetch(urlApi)
      .then(response => response.json())
      .then(donnees => {
        listeDestinations.innerHTML = '';

        donnees.forEach(article => {
          const elementArticle = document.createElement('div');
          elementArticle.classList.add('article');

          const contenuComplet = document.createElement('div');
          contenuComplet.innerHTML = article.content.rendered;
          contenuComplet.style.display = 'none';

          const extrait = document.createElement('p');
          const textOnly = contenuComplet.textContent || contenuComplet.innerText || "";
          const mots = textOnly.trim().split(/\s+/).slice(0, 20).join(' ') + '...';
          extrait.textContent = mots;

          const boutonLireSuite = document.createElement('button');
          boutonLireSuite.textContent = 'Lire la suite';
          boutonLireSuite.style.cursor = 'pointer';


          const lienVersArticle = document.createElement('a');
          lienVersArticle.href = article.link;
          lienVersArticle.textContent = 'Lire plus';
          lienVersArticle.style.marginLeft = '10px';

          boutonLireSuite.addEventListener('click', () => {
            contenuComplet.style.display = 'block';
            boutonLireSuite.style.display = 'none';
            extrait.style.display = 'none';
          });

          const titre = document.createElement('h3');
          titre.innerHTML = article.title.rendered;

          elementArticle.appendChild(titre);
          elementArticle.appendChild(extrait);
          elementArticle.appendChild(boutonLireSuite);
          elementArticle.appendChild(lienVersArticle);
          elementArticle.appendChild(contenuComplet);
          listeDestinations.appendChild(elementArticle);
        });
      })
      .catch(erreur => console.error('Erreur lors de la récupération des articles :', erreur));
  }

  listeCategories.forEach(categorie => {
    categorie.addEventListener('click', function() {
      idCategorie = categorie.dataset.id;
      console.log('ID de la catégorie sélectionnée :', idCategorie);
      recupererEtAfficherArticles(idCategorie);
    });
  });

})();
  