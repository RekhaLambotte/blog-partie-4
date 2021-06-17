<?php
    $titre = "Espace d'administration";
    require "../../src/common/template.php";
    require "../../src/fonctions/dbAccess.php";
    require "../../src/fonctions/dbFonction.php";
    require "../../src/fonctions/mesFonctions.php";
    require "../../src/fonctions/getListGame.php";
    require "../../src/fonctions/getHard.php";
    require "../../src/fonctions/getGenre.php";
    require "../../src/fonctions/addGame.php";
    require "../../src/fonctions/deleteGame.php";

    if($_SESSION["user"]["role"] != "admin"){
        header("location: ../../index.php");
        exit();
    }

    $choixMenu ="adminContenu";

    ?>

    <section class="gestionAdmin mb-5 p-3">
        <div class="template p-2">
            <div class="menu mt-5">
                <a href="../../src/pages/admin.php?choix=listeCategorie">Gérer les catégories</a>
                <a href="../../src/pages/admin.php?choix=listeJeux">Gérer les jeux</a>
                <a href="../../src/pages/admin.php?choix=listeUser">Gérer les Users</a>
                <a href="../../src/pages/admin.php?choix=listeCommentaire">Gérer les commentaires</a>
                <a href="../../src/pages/admin.php?choix=listeArticle">Gérer les articles</a>
            </div>
            <div class="<?= $choixMenu ?>">
                <?php
                    // quand l'admin sélectionne les catégories 
                    if(isset($_GET["choix"]) && $_GET["choix"] == "listeCategorie" ){
                    require "../../src/pages/adminInclude/categorie/listeCategorie.php";
                    }

                    // quand l'admin sélectionne les jeux 
                    if(isset($_GET["choix"]) && $_GET["choix"] == "listeJeux" ){
                    require "../../src/pages/adminInclude/listeJeux/listeJeux.php";
                    }
                ?>
            </div>
        </div>
    </section>



    <?php

    require "../../src/common/footer.php";
    ?>