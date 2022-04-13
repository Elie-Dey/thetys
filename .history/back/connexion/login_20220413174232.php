
<?php
session_start();
@require "../admin.php";


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
    $utilisateur = $requete->fetchAll(PDO::FETCH_ASSOC);

    $rows = $requete->rowCount();
    $_SESSION['utilisateur'] = $identifiant;
    echo $rows;
   print_r($_SESSION);
//     if($rows==1){
//       $_SESSION['identifiant'] = $username;
//       header("Location: index.php");
//   }

}
?>