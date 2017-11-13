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
<?php

var_dump($account);
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

	    <td><button class="btn btn-primary" id="edit">Editer</button></td>
	  </tr>

	</tbody>
      </table>

      
    </section>
    <!--main pdate -->

    <?php
      include("template/footer.php")
     ?>
