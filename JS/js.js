// // // Variables et opérations mathématiques de base :

// // // Exo 1

// // const nombre1 = 5;
// // const nombre2 = 3;

// // const resultatAddition = nombre1 + nombre2;

// // console.log(resultatAddition);

// // Exo 2

// const nombre3 = 10;
// const nombre4 = 7;

// const resultatSoustraction = nombre3 - nombre4;

// console.log(resultatSoustraction);

// // Exo 3

// const nombre5 = 4;
// const nombre6 = 6;

// const resultatMultiplication = nombre5 * nombre6;

// console.log(resultatMultiplication);

// // Concaténation de chaînes :

// // Exo 1

// const prenom = "John";
// const nom = "Doe";

// console.log(prenom + " " + nom);

// // Exo 2

// const sujet = "Le chat";
// const verbe = "mange";
// const objet = "la souris";

// console.log(sujet + " " + verbe + " " + objet);

// // Création de tableaux et manipulation :

// // Exo 1

// let tableau = [1, 2, 3, 4, 5];
// tableau.forEach(element => {
// console.log(element)});


// // Exo 2

// const tab = [];
// tab.push(10,20,50);
// console.log(tab);
// tab.shift();
// console.log(tab);

// // // Démo

// // let prenom = "Emy";
// // let nom = "Fox";

// // // Je m'appelle Emy Fox

// // console.log('Je m'\'appelle' + prenom + ' ' + nom);
// // console.log(`Je m'appelle ${prenom}`);
// // console.log("Je m'appelle" + prenom + " " + nom);

// // // Démo 2

// // let personne = {
// //     nom: 'John',
// //     age: 30,
// //     ville: 'New York',
// // };

// // Création d'objets et manipulation

// // Exo 1

// // let personne = {
// //     nom: 'Alice',
// //     age: 25,
// //     ville: 'Paris',
// // };
// // console.log(personne);



// // Exo 2

// // let compte = {
// //     solde: 1000,
// //     titulaire: "John Doe"
// // };
// // // console.log(compte);

// // // const solde = 1000;
// // // const ajout = 500;
// // // const resultatAddition = solde + ajout;

// // // console.log(resultatAddition);



// // const compte = ['1000', '1500'];
// // compte.splice()

// const banque = {
//     solde: 1000,
//     titulaire: 'John Doe'
// }

// banque.solde = banque.solde + 500;

// console.log(banque)


// // Création de fonctions

// // Exo 1



// function saluer(Alice) {
//     return "Bonjour" + " " + Alice;
// }

// console.log(saluer("Alice"));


// Exo 2


// function multiplication(chiffre1, chiffre2) {
// console.log(chiffre1 * chiffre2);
// }

// multiplication(7, 8);


// Conditions et boucles

// Exo 1

// let age=18

// if (age >= 18) {
//     console.log("Majeur");
// }

// else {
//     console.log("Mineur");
// }

// // Exo 2

// for (let i=2; i<=20; i+=2) {
//     console.log(i);
// }

// Exo 3

// let nombre = prompt("Entrez un nombre entre 1 et 100 :");

// while (nombre !== "69") {
//     console.log("Raté boule de pus.");
//     nombre = prompt("Try again.");
// }
// console.log("C'était pourtant évident.");

// Exo 4

function nombreJoursDansMois(mois, annee) {
    switch (mois) {
        case 1: // Janvier
        case 3: // Mars
        case 5: // Mai
        case 7: // Juillet
        case 8: // Août
        case 10: // Octobre
        case 12: // Décembre
            return 31;
        case 4: // Avril
        case 6: // Juin
        case 9: // Septembre
        case 11: // Novembre
            return 30;
        case 2: // Février
            if ((annee % 4 == 0 && annee % 100 != 0) || annee % 400 == 0) {
                return 29; // Année bissextile
            } else {
                return 28; // Année non bissextile
            }
        default:
            return -1; // Valeur invalide pour le mois
    }
}