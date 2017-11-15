<?php
include '../model/Autoloader.php';

$accounts = $manager->getAccounts();
if (isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['balance'])){
if(isset($_POST['Submit'])){
$account = new Account($_POST);
$manager->addAccount($account);
header('Location: index.php');

}
}

include "../views/indexVue.php";
