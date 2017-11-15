<?php

include '../model/Autoloader.php';


//show account
if(isset($_GET['id'])){
$account= $manager->getAccount($_GET['id']);
$account = new Account($account);
}
if (empty($_GET['id'])) {

  echo 'veuillez selectionner un compte';
}

//change balance in string on int
// $obj_balance = (int) $account->getBalance();
// $account->setBalance($obj_balance);

//delete account in db
if (isset($_POST['delete'])) {
$accountSupp = $manager->getAccount($_POST['delete']);

$accountSupp = new Account ($accountSupp);
  $manager->deleteAccount($accountSupp);
  header("Location: index.php");
}


//addcash in account
if(isset($_POST['addcash']) ){
if($_POST['sum']>0){
$post = (int) $_POST['sum'];
$account->addBalance($post);
$manager->updateAccount($account);
 }
 else echo ' ajouter une valeur positive';
  }


//withdrawal cash in account
 if(isset($_POST['lowcash'])  ){
   if($_POST['lowsum']>0){

 $post = (int) $_POST['lowsum'];
 $account->lowBalance($post);
 $manager->updateAccount($account);
 }
 else echo ' ajouter une valeur positive';
  }


//transfer cash by account on other account
if (isset($_POST['transfer'])) {
  $Sunder= $manager->getAccount($_POST["Client"]);
  $Sunder = new Account($Sunder);
  $account->lowBalance($_POST['sumTransfer']);
  $Sunder->addBalance($_POST['sumTransfer']);
  $LowcashAccount = $manager->updateAccount($account);
  $AddcashAccount =  $manager->updateAccount($Sunder);
}


//views for once account
  require '../views/accountView.php';
