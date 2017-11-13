<?php  // on crée le manager
require '../model/AccountManager.php';

$manager = new AccountManager($bdd);

if (isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['balance']) && isset($_GET['id'])) {
    // update an account


    header("Location: account.php?id=".$_GET['id']);

} else if (isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['balance'])) {
    // create an account

    header("Location: index.php");
} else if (isset($_POST['delete'])) {
    $account = $manager->getAccount($_POST['delete']);
    $manager->deleteAccount($account);
    header("Location: index.php");
}

if (isset($_GET['id'])) {

    //utilisation du model et recupere account
$account= $manager->getAccount($_GET['id']);

    //affichage de la vue avec binding de users
    require 'View/account.php';
} else echo 'veuillez selectionner un compte';
