<?php 

function getListGame(){
    $bdd = dbAccess();
    $requete = $bdd->query("SELECT * 
                            FROM jeux j
                            INNER JOIN gamecategory g
                            ON j.gameCategoryId = g.gameCategoryId 
                            INNER JOIN hardware h
                            ON j.consoleId = h.hardId
                            ORDER BY j.gameId DESC");
    while ($donnees = $requete->fetch()){
        $listeGame[] = $donnees;
    }
    $requete->closeCursor();
    return $listeGame;
}

?>