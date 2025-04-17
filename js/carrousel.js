(function () {
  console.log("carrousel.js");

  const radios = document.querySelectorAll(".hero__radio__input");
  const slides = document.querySelectorAll(".hero__carrousel");
  let currentIndex = 0; // Index de l'image actuellement affichée
  const intervalTime = 5000; // Temps en millisecondes (5 secondes)

  console.log("Nombre de boutons radio :", radios.length);
  console.log("Nombre de slides :", slides.length);

  // Fonction pour activer un slide
  function activateSlide(index) {
    // Désactiver tous les slides
    slides.forEach((slide) => {
      slide.style.opacity = "0";
      slide.style.zIndex = "-1";
    });

    // Activer le slide correspondant
    slides[index].style.opacity = "1";
    slides[index].style.zIndex = "1";

    // Mettre à jour le bouton radio correspondant
    radios.forEach((radio, i) => {
      radio.checked = i === index;
    });

    currentIndex = index; // Mettre à jour l'index actuel
  }

  // Ajouter un événement pour chaque bouton radio
  radios.forEach((radio, index) => {
    radio.addEventListener("click", () => {
      activateSlide(index);
    });
  });

  // Changer automatiquement les slides toutes les 5 secondes
  setInterval(() => {
    const nextIndex = (currentIndex + 1) % slides.length; // Passer au slide suivant
    activateSlide(nextIndex);
  }, intervalTime);

  // Initialiser le carrousel avec le premier slide
  activateSlide(currentIndex);
})();
