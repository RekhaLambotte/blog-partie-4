<?php

function addGame($nameGame, $consoleGame, $gameCat, $devGame, $editGame, $dateGame, $coverGame){
    $bdd = dbAccess();
    $requete = $bdd->prepare("INSERT INTO jeux(nom,consoleId, gameCategoryId, developpeur, editeur, dateDeSortie, cover) VALUES(?, ?, ?, ?, ?, ?, ?)");
    $requete->execute(array($nameGame, $consoleGame, $gameCat, $devGame, $editGame, $dateGame, $coverGame));
    $requete->closeCursor();
}

?>