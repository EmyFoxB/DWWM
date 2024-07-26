import React from "react";

function Personne(props){
    return(
        <>
            <h1>{props.nom}</h1>
            <div>Age : {props.age} | Année(s) : {new Date().getFullYear() - props.age}</div>
            <div>{props.sexe}</div>
        </>
    );
}

export default Personne;