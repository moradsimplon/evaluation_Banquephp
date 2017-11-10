<?php
require 'model/bddconnect.php';

function chargerClasse($classe)
{
    if ($classe == 'AccountManager') {

        require 'model/' . $classe . '.php';
    } else {

        require 'entities/' . $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
    }
}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

$manager = new AccountManager($bdd);

$accounts = $manager->getAccounts();


include "views/indexVue.php";
 ?>
