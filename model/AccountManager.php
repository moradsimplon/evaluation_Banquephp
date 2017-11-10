<?php

class AccountManager  {


      private $db; // Instance de PDO.


      public function __construct($db)
      {
          $this->setDb($db);
      }


      function addAccount($account)
      {


          return "account Added";
      }



      function getAccount($id)
      {

        $q = $this->db->prepare('SELECT * FROM Compte_client WHERE id = :id');
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
        $res = $this->db->query('SELECT * FROM Compte_client');

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
          return $this->db;
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
