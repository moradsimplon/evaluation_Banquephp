<!doctype html>
<?php
  include("template/header.php")
 ?>
    <!--main page -->
    <section class="container">
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

    <form class="form-group" action="account.php?id=<?php echo $account->getId();?>" method="post">
      <input name="id" type="hidden" value="<?= $account->getId();?>"/>
      <input type="number" name="sum" value="">
      <input type="submit" name="addcash" value="ajouter">
    </form>
    <form class="form-group" action="account.php?id=<?php echo $account->getId();?>" method="post">
      <input name="id" type="hidden" value="<?= $account->getId();?>"/>
      <input type="number" name="lowsum" value="">
      <input type="submit" name="lowcash" value="retrait">
    </form>


    </section>
    <!--main pdate -->

    <?php
      include("template/footer.php")
     ?>
