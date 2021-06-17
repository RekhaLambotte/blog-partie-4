
<?php

function getHard(){
    $bdd = dbAccess();
    $requete = $bdd->query("SELECT * 
                            FROM hardware ");
    while ($donnees = $requete->fetch()){
        $listeGameHardware[] = $donnees;
    }
    $requete->closeCursor();
    return $listeGameHardware;
}

?>
