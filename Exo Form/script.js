const formulaire = document.getElementById("formulaire");

formulaire.addEventListener("submit", (event) => {
    event.preventDefault();
    const name = document.getElementById("name").value;
    const firstName = document.getElementById("firstName").value;
    const telNumber = document.getElementById("telNumber").value;
    const message = document.getElementById("message").value;

    const objet = {
        "nom" : name,
        "prénom" : firstName,
        "numéro" : telNumber,
        "message" : message,
    }

    console.log(objet);
})