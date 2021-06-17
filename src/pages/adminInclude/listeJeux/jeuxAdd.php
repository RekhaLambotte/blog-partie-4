<?php

require "../../../../src/fonctions/getHard.php";

$listeGameHardware = getHard();
// var_dump($listeGameHardware);

?>

<form>
    <table>
        <tr>
            <td><label for="fname">Nom du jeux : </label></td>
            <td><input type="text" id="fname" name="fname"></td>
        </tr>
        <tr>
            <td><label for="console"> Console : </label></td>
            <td>
                <select name="console" id="console">
                    <option value=""> </option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="console"> Catégorie du jeu : </label></td>
            <td><input type="text" id="console" name="console"></td>
        </tr>
        <tr>
            <td><label for="console"> Développeur : </label></td>
            <td><input type="text" id="console" name="console"></td>
        </tr>
        <tr>
            <td><label for="console"> Editeur : </label></td>
            <td><input type="text" id="console" name="console"></td>
        </tr>
        <tr>
            <td><label for="console"> Date de sortie : </label></td>
            <td><input type="text" id="console" name="console"></td>
        </tr>
        <tr>
            <td><label for="console"> Cover : </label></td>
            <td><input type="text" id="console" name="console"></td>
        </tr>
    
    </table>
</form>