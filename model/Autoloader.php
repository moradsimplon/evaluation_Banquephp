<?php

require("AccountManager.php");

function chargerClasse($classe)
{



        require '../entities/' . $classe . '.php'; // On inclut la classe correspondante au paramètre passé.

}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

$manager = new AccountManager($bdd);
 ?>
