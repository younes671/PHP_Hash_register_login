<?php  ob_start(); ?>
    <h1>S'inscrire</h1>
    <form action="traitement.php?action=register" method="post">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo"><br>

        <label for="email">Mail</label>
        <input type="email" name="email" id="email"><br>

        <label for="pass1">Mot de passe</label>
        <input type="password" name="pass1" id="pass1"><br>

        <label for="pass2">Pseudo</label>
        <input type="password" name="pass2" id="pass2"><br>

       
        <input type="submit" name="submit" value="S'enregistrer">
    </form>
<?php
$content = ob_get_clean();
require "Template.php";