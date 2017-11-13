<?php

function chargerClasse($classe)
{



        require '../entities/' . $classe . '.php'; // On inclut la classe correspondante au paramètre passé.

}

spl_autoload_register('chargerClasse'); 
require '../model/AccountManager.php';


$manager = new AccountManager($bdd);




  if (isset($_POST['delete'])) {
    $account = $manager->getAccount($_POST['delete']);
    $manager->deleteAccount($account);
    header("Location: index.php");
}


if (isset($_GET['id'])) {

    //utilisation du model et recupere account
$account= $manager->getAccount($_GET['id']);
$account = new Account($account);

    //affichage de la vue
    require '../views/accountView.php';
} else echo 'veuillez selectionner un compte';
