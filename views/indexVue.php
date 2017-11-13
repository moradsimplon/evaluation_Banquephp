<?php
  include("template/header.php")
 ?>

  <button class="btn btn-success" id="addAccount">Add Account</button>

 <form action="index.php" method="post" id="formAddAccount" class="form-group" style="display:hidden">

<input name="name" type="text" value="" placeholder="name account" class="form-control" /> <br/>
<input name="firstname" type="text" value="" placeholder="firstname account" class="form-control" /> <br/>
<input name="balance" type="text" value="" placeholder="balance €" class="form-control" /> <br/>


<input type="submit" value="Create" class="btn btn-primary" >
 </form>
 <table class="table">
<thead>
     <tr>
       <th>id</th>
       <th>Name</th>
       <th>Firstname</th>
 <th>Balance</th>
 <th>Action</th>
     </tr>
</thead>

<tbody>
<?php
foreach ($accounts as $key => $account)
{
?>
 <tr>

   <td>
<a href="account.php?id=<?= $account->getId(); ?>"><?= $account->getId(); ?> </a>
   </td>
   <td>
<a href="account.php?id=<?= $account->getId(); ?>"><?= $account->getName(); ?> </a>
   </td>
   <td>
<a href="account.php?id=<?= $account->getId();?>" class="" title=""><?= $account->getFirstname(); ?></a>
   </td>
   <td>
<a href="account.php?id=<?= $account->getId();?>" class="" title=""><?= $account->getBalance(); ?></a>
   </td>
   <td>
<form action="account.php" method="post" class="" style="">
 <input name="delete" type="hidden" value="<?= $account->getId();?>"/>
 <input class="btn btn-danger" id="" type="Submit" name="" value="Supprimer"/>
</form>
   </td>

 </tr>
<?php
}

?>
</tbody>
 </table>


 <!--main page -->


 <?php
   include("template/footer.php")
  ?>
