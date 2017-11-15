<?php

function chargerClasse($classe)
{



        require '../entities/' . $classe . '.php'; // On inclut la classe correspondante au paramètre passé.

}

spl_autoload_register('chargerClasse');
require '../model/AccountManager.php';


$manager = new AccountManager($bdd);

if(isset($_GET['id'])){
$account= $manager->getAccount($_GET['id']);
$account = new Account($account);
}
if (empty($_GET['id'])) {

  echo 'veuillez selectionner un compte';
}

$obj_balance = (int) $account->getBalance();
$account->setBalance($obj_balance);

if (isset($_POST['delete'])) {
$accountSupp = $manager->getAccount($_POST['delete']);

$accountSupp = new Account ($accountSupp);
  $manager->deleteAccount($accountSupp);
  header("Location: index.php");
}

if(isset($_POST['addcash'])){

$post = (int) $_POST['sum'];
$account->addBalance($post);
$manager->updateAccount($account);
 }
 if(isset($_POST['lowcash'])){

 $post = (int) $_POST['lowsum'];
 $account->lowBalance($post);
 $manager->updateAccount($account);
  }


  require '../views/accountView.php';
