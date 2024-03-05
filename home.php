<?php session_start(); 
      ob_start(); 
      ?>

        <?php

            if(isset($_SESSION["user"]))
            { ?>
                <a href="traitement.php?action=logout">Se déconnecter</a>
                <a href="traitement.php?action=profile">Mon profil</a>
           <?php }else
           { ?>
                <a href="traitement.php?action=login">Se connecter</a>
                <a href="traitement.php?action=register">S'inscrire</a>
          <?php } ?>
    <h1>ACCUEIL</h1>
    <?php 
        if(isset($_SESSION["user"]))
        {
            echo "<p>Bienvenue " .$_SESSION["user"]["pseudo"] . "</p>";
        }

$content = ob_get_clean();
require "Template.php";