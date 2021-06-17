<?php

function deleteGame($gameId){
    $bdd = dbAccess();
    $requete = $bdd->prepare("DELETE FROM jeux WHERE gameId=?");
    $requete->execute(array($gameId)) or die(print_r($requete->errorInfo(), TRUE));
    $requete->closeCursor();

}

?>