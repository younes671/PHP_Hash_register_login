<?php  ob_start(); ?>
    <h1>Mon profil</h1>
    <?php
            if(isset($_SESSION["user"]))
            {
                $infosSession = $_SESSION["user"];
            }
    ?>

    <p>Pseudo : <?= $infosSession["pseudo"] ?></p>
    <p>Email : <?= $infosSession["email"] ?></p>

<?php
$content = ob_get_clean();
require "Template.php";