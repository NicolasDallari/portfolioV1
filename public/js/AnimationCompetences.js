// ANIMATION AFFICHAGE LIBRAIRIE PAGE ACCUEIL https://gsap.com///
document.addEventListener("DOMContentLoaded", () => {
    document.body.classList.add("anim-ready");
});
const logo = document.querySelector('.logo');
const accueil = document.querySelector('.page-en-cour1');
const h2 = document.querySelector('h2');
const front = document.querySelectorAll('.front');
const back = document.querySelectorAll('.back');
const outils = document.querySelectorAll('.outils');
const cv = document.querySelectorAll('.cv');
const allItems = document.querySelectorAll('.li-nav');


const TL1 = new TimelineMax({paused: true});


const mediaQuery = window.matchMedia("(max-width: 900px)");

// Fonction pour ajuster les animations selon la taille de l'écran
function handleScreenChange(e) {
    if (e.matches) {
        TL1
        .from(accueil, 3, {y: -30, opacity: 0},)
        .from(h2, 2, { y: 100, opacity: 0},'-=2.5')
        .from(front, 2, {y: 100, opacity: 0},'-=1.7')
        .from(back, 2, { y: 100, opacity: 0},'-=1.3')
        .from(outils, 2, {y: 100, opacity: 0},'-=1.3')
        .from(cv, 1, {y: 100, opacity: 0},'-=1.7')
        TL1.play();
       
    } else {
        TL1
        .from(logo, 1.7, {y: -150, opacity: 0}, )
        .from(accueil, 1.7, { y: 150, opacity: 0},'-=1.7')
        .from(h2, 2, {  opacity: 0},'-=1.2')
        .from(front, 2, { opacity: 0},'-=1.7')
        .from(back, 2, { opacity: 0},'-=1.3')
        .from(outils, 2, { opacity: 0},'-=1.3')
        .from(cv, 1, { y: 100, opacity: 0},'-=1.7')
        .staggerFrom(allItems, 1, {y: -100, opacity: 0}, 0.20, '-=1.7')
        TL1.play();
        
    }
}

// Écouteur d'événement pour surveiller les changements de taille d'écran
mediaQuery.addEventListener("change", handleScreenChange);

// Initialisation de l'animation lors du chargement de la page
handleScreenChange(mediaQuery);