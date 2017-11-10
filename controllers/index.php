<?php
require 'model/bddconnect.php';
function chargerClasse($classe)
{
    if ($classe == 'AccountManager') {

        require 'Model/' . $classe . '.php';
    } else {

        require 'Model/entities/' . $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
    }
}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.


include "views/indexVue.php";
 ?>
