<?php

    //Definition de constante d'environnement

      define("DBHOST", "localhost");
      define("DBUSER", "root");
      define("DBPASS", "");
      define("DBNAME", "airblio");


    //DSN de connexion

      $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST.";port=3308";

    //On va se connecter à la base 
      try{
        //On instancie PDO

          $db = new PDO($dsn, DBUSER, DBPASS);

          //On s'assure d'envoyer les données en utf8

          $db->exec("SET NAMES utf8");
      }catch(PDOException $e){
          die($e->getMessage());
      }
?>
