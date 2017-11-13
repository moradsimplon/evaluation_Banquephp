<?php
require("../model/AccountManager.php");

function chargerClasse($classe)
{



        require '../entities/' . $classe . '.php'; // On inclut la classe correspondante au paramètre passé.

}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

$manager = new AccountManager($bdd);

$accounts = $manager->getAccounts();
if (isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['balance'])){
if(isset($_POST['Submit'])){
$account = new Account($_POST);
$manager->addAccount($account);
header('Location: index.php');

}
}

include "../views/indexVue.php";
