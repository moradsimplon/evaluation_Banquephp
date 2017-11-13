<?php

class AccountManager  {


      //  private $db; // Instance de PDO.


      // public function __construct($db)
      // {
      //     $this->setDb($db);
      // }


      function addAccount(Account $account)
      {
        $db = $this->getDb();
        $q = $db->prepare("INSERT INTO Compte_client SET name = ?, firstname = ? , balance = ?");
        $q->execute([
           $account->getName(),
           $account->getFirstname(),
           $account->getBalance()
        ]);

          return "account Added";
      }



      function getAccount($id)
      {

        $q = $this->getDb()->prepare('SELECT * FROM Compte_client WHERE id = :id');
        $q->execute(Array('id'=> $id));
        $account = $q->fetch();
        $account=new Account($account);

        return $account;
      }


      /**
       * get all user in database
       *
       * @param {int} id
       * @returns {array} users
       */
      function getAccounts()
      {
        $res = $this->getDb()->query('SELECT * FROM Compte_client');

         $accounts = $res->fetchAll();

         foreach ($accounts as $key => $value){

           $accounts[$key] = new Account($value);


         }

          return $accounts;
      }

      /**
       * delete the user of database.
       *
       * @param {int} id.
       */
      function deleteAccount($account)
      {

      }

      function updateAccount($account)
      {
          ;
      }

      /**
       * @return mixed
       */
      public function getDb()
      {
        $bdd = new PDO('mysql:host=localhost;dbname=evaluation;charset=utf8', 'root', 'zekri59100');
               $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
               $this->db = $bdd;
               return $bdd;
                     // return $this->db;
      }

      /**
       * @param mixed $db
       */
      public function setDb($db)
      {
          $this->db = $db;
      }
  }









 ?>
