import React from "react";

const agePersonne = (props) =>{
    let now = new Date;
    let annee = now.getFullYear();
    return <div>Age : {props.age} - ({annee - props.age})</div>
}

export default Personne;