// // Variables et opérations mathématiques de base :

// // Exo 1

// const nombre1 = 5;
// const nombre2 = 3;

// const resultatAddition = nombre1 + nombre2;

// console.log(resultatAddition);

// Exo 2

const nombre3 = 10;
const nombre4 = 7;

const resultatSoustraction = nombre3 - nombre4;

console.log(resultatSoustraction);

// Exo 3

const nombre5 = 4;
const nombre6 = 6;

const resultatMultiplication = nombre5 * nombre6;

console.log(resultatMultiplication);

// Concaténation de chaînes :

// Exo 1

const prenom = "John";
const nom = "Doe";

console.log(prenom + " " + nom);

// Exo 2

const sujet = "Le chat";
const verbe = "mange";
const objet = "la souris";

console.log(sujet + " " + verbe + " " + objet);

// Création de tableaux et manipulation :

// Exo 1

let tableau = [1, 2, 3, 4, 5];
tableau.forEach(element => {
console.log(element)});


// Exo 2

const tab = [];
tab.push(10,20,50);
console.log(tab);
tab.shift();
console.log(tab);

// // Démo

// let prenom = "Emy";
// let nom = "Fox";

// // Je m'appelle Emy Fox

// console.log('Je m'\'appelle' + prenom + ' ' + nom);
// console.log(`Je m'appelle ${prenom}`);
// console.log("Je m'appelle" + prenom + " " + nom);

// // Démo 2

// let personne = {
//     nom: 'John',
//     age: 30,
//     ville: 'New York',
// };

// Création d'objets et manipulation

// Exo 1

// let personne = {
//     nom: 'Alice',
//     age: 25,
//     ville: 'Paris',
// };
// console.log(personne);



// Exo 2

// let compte = {
//     solde: 1000,
//     titulaire: "John Doe"
// };
// // console.log(compte);

// // const solde = 1000;
// // const ajout = 500;
// // const resultatAddition = solde + ajout;

// // console.log(resultatAddition);



// const compte = ['1000', '1500'];
// compte.splice()

const banque = {
    solde: 1000,
    titulaire: 'John Doe'
}

banque.solde = banque.solde + 500;

console.log(banque)