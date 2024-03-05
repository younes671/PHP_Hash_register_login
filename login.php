<?php  ob_start(); ?>

    <h1>Se connecter</h1>
    <form action="traitement.php?action=login" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password"><br>
       
        <input type="submit" name="submit" value="Se connecter">
    </form>

<?php

$content = ob_get_clean();
require "Template.php";