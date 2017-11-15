<!doctype html>
<?php
  include 'template/header.php';
// include 'model/Autoloader.php';
  $accounts = $manager->getAccounts();
?>
    <!--main page -->
    <section class="container">

      <!-- ***********account selected*********************  -->

      <table class="table">
	<thead>
          <tr>
            <th>id</th>
            <th>name</th>
	    <th>firstname</th>
            <th>balance</th>
          </tr>
	</thead>

	<tbody>

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

	    <td><button class="btn btn-danger" id="supprimer">Supprimer</button></td>
	  </tr>

	</tbody>
      </table>

<!--****************** form for add money in account selected  **************-->

    <form class="form-group" action="account.php?id=<?php echo $account->getId();?>" method="post">
      <input name="id" type="hidden" value="<?= $account->getId();?>"/>
      <input type="number" min='0' name="sum" value="">
      <input type="submit" class='btn btn-primary' name="addcash" value="ajouter">
    </form>

    <!--*************** form for remove money in account selected  *************-->

    <form class="form-group" action="account.php?id=<?php echo $account->getId();?>" method="post">
      <input name="id" type="hidden" value="<?= $account->getId();?>"/>
      <input type="number" min='0' name="lowsum" value="">
      <input type="submit" class"btn btn-danger" name="lowcash" value="retrait">
    </form>

    <!--************** form for transfer money from account to account  *******************-->

    <form class="form-group" action="account.php?id=<?php echo $account->getId();?>" method="post">
    <label for="exampleSelect1">Compte</label>
    <select class="" name="Client">

      <?php
      foreach ($accounts as $key => $value)
      {
        ?>

        <option><?php echo  $value->getId();?></option>


        <?php
      }

      ?>
    </select>
    <input type="number" min='0' name="sumTransfer" value="value in €">
    <input type="submit" name="transfer" value="transfer">
  </form>


    </section>
    <!--main pdate -->

    <?php
      include("template/footer.php")
     ?>
