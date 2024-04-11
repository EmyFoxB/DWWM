// START

const clickStartBtn = document.querySelector(".start-btn");
const main = document.querySelector(".main");
const sectionJoueurs = document.querySelector(".section-joueurs");

clickStartBtn.addEventListener("click", () => {
    main.style.display = "none";
    sectionJoueurs.style.display = "flex";
})

// TUTO 

const clickTuto = document.querySelector(".tuto-btn");
const modal = document.querySelector(".div-modal");

clickTuto.addEventListener("click", () => {
    modal.style.display = "flex";
})

const closeBtn = document.querySelector(".close-btn");
closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
})

// SELECTION PERSONNAGE JOUEUR A

const selectBlueP1 = document.querySelector(".bluep1");
const selectBabyP1 = document.querySelector(".babyp1");
const selectOjiiP1 = document.querySelector(".ojiip1");
const selectPinkP1 = document.querySelector(".pinkp1");

selectBlueP1.addEventListener("click", () => {
    selectBlueP1.style.borderColor = "red";
    selectBabyP1.style.borderColor = "transparent";
    selectOjiiP1.style.borderColor = "transparent";
    selectPinkP1.style.borderColor = "transparent";
})

selectBabyP1.addEventListener("click", () => {
    selectBabyP1.style.borderColor = "red";
    selectBlueP1.style.borderColor = "transparent";
    selectOjiiP1.style.borderColor = "transparent";
    selectPinkP1.style.borderColor = "transparent";
})

selectOjiiP1.addEventListener("click", () => {
    selectOjiiP1.style.borderColor = "red";
    selectBlueP1.style.borderColor = "transparent";
    selectBabyP1.style.borderColor = "transparent";
    selectPinkP1.style.borderColor = "transparent";
})

selectPinkP1.addEventListener("click", () => {
    selectPinkP1.style.borderColor = "red";
    selectBlueP1.style.borderColor = "transparent";
    selectBabyP1.style.borderColor = "transparent";
    selectOjiiP1.style.borderColor = "transparent";
})

// SELECTION PERSONNAGE JOUEUR B 

const selectBlueP2 = document.querySelector(".bluep2");
const selectBabyP2 = document.querySelector(".babyp2");
const selectOjiiP2 = document.querySelector(".ojiip2");
const selectPinkP2 = document.querySelector(".pinkp2");

selectBlueP2.addEventListener("click", () => {
    selectBlueP2.style.borderColor = "red";
    selectBabyP2.style.borderColor = "transparent";
    selectOjiiP2.style.borderColor = "transparent";
    selectPinkP2.style.borderColor = "transparent";
})

selectBabyP2.addEventListener("click", () => {
    selectBabyP2.style.borderColor = "red";
    selectBlueP2.style.borderColor = "transparent";
    selectOjiiP2.style.borderColor = "transparent";
    selectPinkP2.style.borderColor = "transparent";
})

selectOjiiP2.addEventListener("click", () => {
    selectOjiiP2.style.borderColor = "red";
    selectBlueP2.style.borderColor = "transparent";
    selectBabyP2.style.borderColor = "transparent";
    selectPinkP2.style.borderColor = "transparent";
})

selectPinkP2.addEventListener("click", () => {
    selectPinkP2.style.borderColor = "red";
    selectBlueP2.style.borderColor = "transparent";
    selectBabyP2.style.borderColor = "transparent";
    selectOjiiP2.style.borderColor = "transparent";
})

// LANCEMENT COMBAT 

const validerP1 = document.querySelector(".validerP1");
const validerP2 = document.querySelector(".validerP2");
const startBattle = document.querySelector(".sectionCombat");

validerP1.addEventListener("click", () => {
    validerP1.style.backgroundColor = "red";
})

validerP2.addEventListener("click", () => {
    validerP2.sytle.backgroundColor = "red";
})
