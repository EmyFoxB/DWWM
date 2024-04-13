let data = {
    "Blue": { "nom": "Blue", "HP": 75, "ATK": 15 },
    "Baby": { "nom": "Baby", "HP": 150, "ATK": 8 },
    "Ojii": { "nom": "Ojii", "HP": 85, "ATK": 12 },
    "Pinky": { "nom": "Pinky", "HP": 120, "ATK": 10 },
}

let joueur1;
let joueur2;



// START

const clickStartBtn = document.querySelector(".start-btn");
const main = document.querySelector(".main");
const sectionJoueurs = document.querySelector(".section-joueurs");
const startBattle = document.querySelector(".sectionCombat");
const imgP1 = document.querySelector(".imgP1");
const imgP2 = document.querySelector(".imgP2");
const valeurAtkP1 = document.querySelector(".valeurAtkP1");
const valeurAtkP2 = document.querySelector(".valeurAtkP2");
const valeurHPP1 = document.querySelector(".valeurHPP1");
const valeurHPP2 = document.querySelector(".valeurHPP2");
const nomJ1 = document.querySelector(".nomJ1");
const nomJ2 = document.querySelector(".nomJ2");
const nomP1 = document.querySelector(".nomP1");
const nomP2 = document.querySelector(".nomP2");

clickStartBtn.addEventListener("click", () => {
    main.style.display = "none";
    startBattle.style.display = "none";
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
    selectP1 = "Blue";
    console.log(selectP1);
    
})

selectBabyP1.addEventListener("click", () => {
    selectBabyP1.style.borderColor = "red";
    selectBlueP1.style.borderColor = "transparent";
    selectOjiiP1.style.borderColor = "transparent";
    selectPinkP1.style.borderColor = "transparent";
    selectP1 = "Baby";
})

selectOjiiP1.addEventListener("click", () => {
    selectOjiiP1.style.borderColor = "red";
    selectBlueP1.style.borderColor = "transparent";
    selectBabyP1.style.borderColor = "transparent";
    selectPinkP1.style.borderColor = "transparent";
    selectP1 = "Ojii";
})

selectPinkP1.addEventListener("click", () => {
    selectPinkP1.style.borderColor = "red";
    selectBlueP1.style.borderColor = "transparent";
    selectBabyP1.style.borderColor = "transparent";
    selectOjiiP1.style.borderColor = "transparent";
    selectP1 = "Pinky";
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
    selectP2 = "Blue";
})

selectBabyP2.addEventListener("click", () => {
    selectBabyP2.style.borderColor = "red";
    selectBlueP2.style.borderColor = "transparent";
    selectOjiiP2.style.borderColor = "transparent";
    selectPinkP2.style.borderColor = "transparent";
    selectP2 = "Baby";
})

selectOjiiP2.addEventListener("click", () => {
    selectOjiiP2.style.borderColor = "red";
    selectBlueP2.style.borderColor = "transparent";
    selectBabyP2.style.borderColor = "transparent";
    selectPinkP2.style.borderColor = "transparent";
    selectP2 = "Ojii";
})

selectPinkP2.addEventListener("click", () => {
    selectPinkP2.style.borderColor = "red";
    selectBlueP2.style.borderColor = "transparent";
    selectBabyP2.style.borderColor = "transparent";
    selectOjiiP2.style.borderColor = "transparent";
    selectP2 = "Pinky";
})

// LANCEMENT COMBAT 

let player1Validated = false;
let player2Validated = false;
let selectP1 = "";
let selectP2 = "";


const validerP1 = document.querySelector(".validerP1");
const validerP2 = document.querySelector(".validerP2");


validerP1.addEventListener("click", () => {
    validerP1.style.backgroundColor = "red";
    player1Validated = true;
    checkValidation();
})

validerP2.addEventListener("click", () => {
    validerP2.style.backgroundColor = "red";
    player2Validated = true;
    checkValidation();
})

function checkValidation() {
    const pseudoP1 = document.querySelector(".username1").value;
    const pseudoP2 = document.querySelector(".username2").value;
    if (player1Validated && player2Validated) {
        main.style.display = "none";
        sectionJoueurs.style.display = "none";
        startBattle.style.display = "flex";
        if (selectP1 === "Blue") {
            nomJ1.textContent = pseudoP1;
            imgP1.style.backgroundImage = 'url("./images/Dango Blue.png")';
            joueur1 = data.Blue;
            nomP1.textContent = joueur1.nom;
            valeurAtkP1.textContent = joueur1.ATK;
            valeurHPP1.textContent = joueur1.HP;
            
        }

        if (selectP1 === "Baby") {
            nomJ1.textContent = pseudoP1;
            imgP1.style.backgroundImage = 'url("./images/Baby Dango.png")';
            joueur1 = data.Baby;
            nomP1.textContent = joueur1.nom;
            valeurAtkP1.textContent = joueur1.ATK;
            valeurHPP1.textContent = joueur1.HP;
            
        }

        if (selectP1 === "Ojii") {
            nomJ1.textContent = pseudoP1;
            imgP1.style.backgroundImage = 'url("./images/Ojii Dango.png")';
            joueur1 = data.Ojii;
            nomP1.textContent = joueur1.nom;
            valeurAtkP1.textContent = joueur1.ATK;
            valeurHPP1.textContent = joueur1.HP;
            
        }

        if (selectP1 === "Pinky") {
            nomJ1.textContent = pseudoP1;
            imgP1.style.backgroundImage = 'url("./images/Dango Pink.png")';
            joueur1 = data.Pinky;
            nomP1.textContent = joueur1.nom;
            valeurAtkP1.textContent = joueur1.ATK;
            valeurHPP1.textContent = joueur1.HP;
            
        }

        if (selectP2 === "Blue") {
            nomJ2.textContent = pseudoP2;
            imgP2.style.backgroundImage = 'url("./images/Dango Blue.png")';
            joueur2 = data.Blue;
            nomP2.textContent = joueur2.nom;
            valeurAtkP2.textContent = joueur2.ATK;
            valeurHPP2.textContent = joueur2.HP;
            
        }

        if (selectP2 === "Baby") {
            nomJ2.textContent = pseudoP2;
            imgP2.style.backgroundImage = 'url("./images/Baby Dango.png")';
            joueur2 = data.Baby;
            nomP2.textContent = joueur2.nom;
            valeurAtkP2.textContent = joueur2.ATK;
            valeurHPP2.textContent = joueur2.HP;
            
        }

        if (selectP2 === "Ojii") {
            nomJ2.textContent = pseudoP2;
            imgP2.style.backgroundImage = 'url("./images/Ojii Dango.png")';
            joueur2 = data.Ojii;
            nomP2.textContent = joueur2.nom;
            valeurAtkP2.textContent = joueur2.ATK;
            valeurHPP2.textContent = joueur2.HP;
            
        }

        if (selectP2 === "Pinky") {
            nomJ2.textContent = pseudoP2;
            imgP2.style.backgroundImage = 'url("./images/Dango Pink.png")';
            joueur2 = data.Pinky;
            nomP2.textContent = joueur2.nom;
            valeurAtkP2.textContent = joueur2.ATK;
            valeurHPP2.textContent = joueur2.HP;
            
        }

    }
}

// ATTAQUE 

const btnAtkP1 = document.querySelector(".btnAtkP1");
const HPP2 = document.querySelector(".valeurHPP2");

btnAtkP1.addEventListener("click", () => {
    joueur2.HP = joueur2.HP - joueur1.ATK;
    HPP2.textContent = joueur2.HP;
    btnAtkP1.disabled = true;
    btnAtkP2.disabled = false;
    btnAtkP2.style.borderColor = "yellow";
    btnAtkP2.style.borderWidth = "7px";
    btnAtkP1.style.borderColor ="transparent";
    

    if (joueur2.HP <=0) {
        btnAtkP1.disabled = true;
        btnAtkP2.disabled = true;
        alert("JOUEUR 1 GAGNE");
    }
})

const btnAtkP2 = document.querySelector(".btnAtkP2");
const HPP1 = document.querySelector(".valeurHPP1");

btnAtkP2.addEventListener("click", () => {
    joueur1.HP = joueur1.HP - joueur2.ATK;
    HPP1.textContent = joueur1.HP;
    btnAtkP2.disabled = true;
    btnAtkP1.disabled = false;
    btnAtkP1.style.borderColor = "yellow";
    btnAtkP1.style.borderWidth = "7px";
    btnAtkP2.style.borderColor ="transparent";
    

    if (joueur1.HP <=0) {
        btnAtkP2.disabled = true;
        btnAtkP1.disabled = true;
        alert("JOUEUR 2 GAGNE");
    }
})
