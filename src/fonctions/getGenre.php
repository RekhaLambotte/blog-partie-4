<?php

function getGenre(){
    $bdd = dbAccess();
    $requete = $bdd->query("SELECT * 
                            FROM gamecategory");
    while ($donnees = $requete->fetch()){
        $listeGameGenre[] = $donnees;
    }
    $requete->closeCursor();
    return $listeGameGenre;
}

?>