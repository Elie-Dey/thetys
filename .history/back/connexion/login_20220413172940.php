
<?php

@require "../admin.php";
session_start();

if(!empty($_POST)){

    // $id2 = stripslashes($_REQUEST['identifiant']);
    $identifiant = stripslashes($_POST["identifiant"]);
    $mdp = stripslashes($_POST["motdepasse"]);

    if(empty($identifiant)){
        die("Entrez votre identifiant");
    }
    if(empty($mdp)){
        die("Entrez votre mot de passe");
    }

    $sql = "SELECT * 
              FROM utilisateurs 
              WHERE idConnexion = '$identifiant'";

    $requete = $db->query($sql);
    $rows = $requete->rowCount();

}
?>