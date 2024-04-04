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

// function nombreJoursDansMois(mois, annee) {
//     switch (mois) {
//         case 1: 
//         case 3: 
//         case 5: 
//         case 7: 
//         case 8: 
//         case 10: 
//         case 12: 
//             return 31;
//         case 4: 
//         case 6: 
//         case 9: 
//         case 11: 
//             return 30;
//         case 2: 
//             if ((annee % 4 == 0 && annee % 100 != 0) || annee % 400 == 0) {
//                 return 29; // Année bissextile
//             } else {
//                 return 28; // Année non bissextile
//             }
//         default:
//             return -1; // Valeur invalide pour le mois
//     }
// }

// console.log("Le nombre de jours dans le mois de Février est de :" + nombreJoursDansMois(2))


// function nombreDeJours(num){
//     let nombreDeJours;
//     let annee = new Date().getFullYear()

//     switch (num) {
//         case 1:
//             nombreDeJours = 31;
//             break;
//         case 2:
//             if (annee % 4 == 0) nombreDeJours = 29;
//             else nombreDeJours = 28;
//             break;
//         case 3:
//             nombreDeJours = 31;
//             break;
//         case 4:
//             nombreDeJours = 30;
//             break;
//         case 5:
//             nombreDeJours = 31;
//             break;
//         case 6:
//             nombreDeJours = 30;
//             break;
//         case 7:
//             nombreDeJours = 31;
//             break;
//         case 8:
//             nombreDeJours = 31;
//             break;
//         case 9:
//             nombreDeJours = 30;
//             break;
//         case 10:
//             nombreDeJours = 31;
//             break;
//         case 11:
//             nombreDeJours = 30;
//             break;
//         case 12:
//             nombreDeJours = 31;
//             break
//     }
//     console.log("nombre de jours :" + nombreDeJours);
// }

// nombreDeJours(2);

// ### Exercice 1 : Modification du contenu d'un élément

// Ajoutez un bouton à votre page HTML et un paragraphe vide. Lorsque vous cliquez sur le bouton, le texte "Hello, world!" doit être ajouté au paragraphe.


// let bouton = document.getElementById("bouton");
// let paragraphe = document.getElementById("paragraphe")

// document.addEventListener("click", function() {
//     document.getElementById("textP").textContent="Hello World!"
//     console.log("Hello World!");
// });

// ### Exercice 2 : Modification de style

// Ajoutez un bouton à votre page HTML et un paragraphe avec du texte. Lorsque vous cliquez sur le bouton, changez la couleur du texte du paragraphe en rouge.

// let bouton = document.getElementById("bouton");
// let element = document.getElementById("textP");

// document.addEventListener("click", function(){
//     element.style.color = "red";
//     console.log("click");
// })


// ### Exercice 3 : Création d'éléments

// Ajoutez un bouton à votre page HTML. Lorsque vous cliquez sur ce bouton, un nouvel élément de type `<li>` doit être créé et ajouté à une liste `<ul>` existante sur la page avec le texte "Nouvel élément".

// let bouton =document.getElementById("bouton")
// let ul =document.getElementById("ul")

// bouton.addEventListener("click", function() {
//     let li = document.createElement("li")
//     let txtli = document.createTextNode("lorem loremloremlorem")
//     li.appendChild(txtli)
//     ul.appendChild(li)

// })



// ### Exercice 4 : Suppression d'éléments

// Ajoutez plusieurs éléments de type `<li>` à une liste `<ul>` sur votre page HTML. Ajoutez un bouton à la page. Lorsque vous cliquez sur ce bouton, le premier élément de la liste doit être supprimé.

// let bouton = document.getElementById("bouton");
// let ul = document.getElementById("ul");

// bouton.addEventListener("click", function() {
//     let li = document.remove("li");
//     ul.appendChild(li);
// })



// let btn4 = document.getElementById("btn4");
// let li = document.getElementById("li2")
// let del = false; // Variable pour suivre l'état de suppression

// btn4.addEventListener("click", function() {
//     if (!del) {
//         li2.remove();
//         del = true; // Met à jour l'état de suppression
//         console.log("List  1 supprimer!");
//     } else {
//         console.log("Stop tu l'as déjà supprimé");
//     }
// });




let btn5 = document.getElementById('btn5');
let btn6 = document.getElementById('btn6');
let btn7 = document.getElementById('btn7');
btn5.addEventListener('click', handleButtonClick);
btn6.addEventListener('click', handleButtonClick);
btn7.addEventListener('click', handleButtonClick);
function handleButtonClick(event) {
    let buttonId = event.target.id;
    console.log("Vous avez cliqué sur le bouton : ", buttonId);
  }