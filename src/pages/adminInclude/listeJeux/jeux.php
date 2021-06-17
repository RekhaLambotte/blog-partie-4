<?php

// Gestion du formulaire $nameGame, $consoleGame, $gameCat, $devGame, $editGame, $dateGame, $coverGame
if(isset($_SESSION["user"]["role"]) && $_SESSION["user"]["role"] == "admin"){ 
    // valeurs envoyé pour créer un jeu
    if(
        isset($_POST["fname"]) && !empty($_POST["fname"]) 
        && isset($_POST["console"]) && !empty($_POST["console"]) 
        && isset($_POST["gameCat"]) && !empty($_POST["gameCat"])  
        && isset($_POST["developpeur"]) && !empty($_POST["developpeur"])  
        && isset($_POST["editeur"]) && !empty($_POST["editeur"])  
        && isset($_POST["dateDeSortie"]) && !empty($_POST["dateDeSortie"])  
        && isset($_POST["cover"]) && !empty($_POST["cover"])  
        ){
        $nameGame = htmlspecialchars($_POST["fname"]);
        $consoleGame = htmlspecialchars($_POST["console"]);
        $gameCat = htmlspecialchars($_POST["gameCat"]);
        $devGame = htmlspecialchars($_POST["developpeur"]);
        $editGame = htmlspecialchars($_POST["editeur"]);
        $dateGame = htmlspecialchars($_POST["dateDeSortie"]);
        $coverGame = htmlspecialchars($_POST["cover"]);

        addGame($nameGame, $consoleGame, $gameCat, $devGame, $editGame, $dateGame, $coverGame);
        }

    // supprimer un jeu
    if(isset($_GET["deleteGame"]) && $_GET["deleteGame"] == true){
        $deleteGame = htmlspecialchars($_GET["valueDelete"]);
        $intDeleteGame = intval($deleteGame);
        deleteGame($intDeleteGame);
    }
}

// fonction pour afficher tous les jeux
$listeGame = getListGame();

// fonction pour la création d'un jeu pour le input select de console
$listeGameHardware = getHard();
// var_dump($listeGameHardware);

// fonction pour la création d'un jeu pour le input select de la catégorie de jeu
$listeGameGenre = getGenre();
// var_dump($listeGameGenre);

?>

<h5> Ajouter un type d'article</h3>
<div class="ta-c tc-g"> <a href="../../src/pages/admin.php?choix=listeJeux&createGame=true/#typeArticle"><i class="far fa-plus-square"> </i> </a> </div>

<?php   
    if(isset($_SESSION["user"]["role"]) && $_SESSION["user"]["role"] == "admin" ){
        if(isset($_GET["createGame"]) && $_GET["createGame"] == true ){
?>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="fname">Nom du jeux : </label></td>
                <td><input type="text" id="fname" name="fname" required></td>
            </tr>
            <tr>
                <td><label for="console"> Console : </label></td>
                <td>
                    <select name="console" id="console">
                    <?php
                        foreach($listeGameHardware as $value): 
                    ?>
                        <option value=" <?= $value["hardId"] ?> "> <?= $value["console"] ?>   </option>
                        
                    <?php   
                        endforeach;
                    ?>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="gameCat"> Catégorie du jeu : </label></td>
                <td>
                    <select name="gameCat" id="gameCat">
                    <?php
                        foreach($listeGameGenre as $value): 
                    ?>
                        <option value=" <?= $value["gameCategoryId"] ?> "> <?= $value["genre"] ?>   </option>
                        
                    <?php   
                        endforeach;
                    ?>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="developpeur"> Développeur : </label></td>
                <td><input type="text" id="developpeur" name="developpeur" required></td>
            </tr>
            <tr>
                <td><label for="editeur"> Editeur : </label></td>
                <td><input type="text" id="editeur" name="editeur" required ></td>
            </tr>
            <tr>
                <td><label for="dateDeSortie"> Date de sortie : </label></td>
                <td><input type="date" id="dateDeSortie" name="dateDeSortie"></td>
            </tr>
            <tr>
                <td><label for="cover"> Cover : </label></td>
                <td><input type="text" id="cover" name="cover" holdplace="Entrez le chemin du cover" required></td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" value="Ajouter votre jeu" required></td>
            </tr>
        
        </table>
    </form>
<?php
        }
    }
?>


<table class="mlr-a mt-3 p-1">
    <thead>
        <tr>
            <th colspan="2"> liste des Jeux</th>
        </tr>
    </thead>
    <tbody>
        

        <tr>
            <td>Nom </td>
            <td>Console </td>
            <td>Game categorie </td>
            <td>Développeur </td>
            <td>Editeur </td>
            <td>Date de sortie </td>
            <td>Cover </td>
            <td>Supprimer</td>
        </tr>

        <?php
            foreach($listeGame as $value): 
        ?>
            <tr> 
                <td> <?= $value["nom"]?> </td>
                <td> <?= $value["console"]?> </td>
                <td> <?= $value["genre"]?> </td>
                <td> <?= $value["developpeur"]?> </td>
                <td> <?= $value["editeur"]?> </td>
                <td> <?= $value["dateDeSortie"]?> </td>
                <td> <?= $value["cover"]?> </td>
                
                <td class="ta-c tc-r"> <a href=" ../../src/pages/admin.php?choix=listeJeux&deleteGame=true&valueDelete=<?=$value["gameId"]?> "> <i class="far fa-plus-square">  </i> </a> </td>
            </tr>
            
        <?php   
            endforeach;
        ?>

        

    </tbody>

</table>