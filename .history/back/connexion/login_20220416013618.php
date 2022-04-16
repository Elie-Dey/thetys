
<?php
session_start();
@require "../admin.php";


if(!empty($_POST)){

    // $id2 = stripslashes($_REQUEST['identifiant']);
    $identifiant = stripslashes($_POST["identifiant"]);
    $mdp = stripslashes($_POST["motdepasse"]);

    $codeIdentification = substr($identifiant, 0,2);
    if($codeIdentification == "CL"){
        $sql = "SELECT * 
              FROM clients 
              WHERE idConnexion = '$identifiant'";
        $requete = $db->query($sql);
        $client = $requete->fetch(PDO::FETCH_ASSOC);
        $nomClient = $client['nom'];
        $rows = $requete->rowCount();

        if($rows==1){
        $_SESSION['nom'] = $nomClient;
        header("Location:../../front\client\creationdemande.php ");
  }
    }

    $sql = "SELECT * 
              FROM utilisateurs 
              WHERE idConnexion = '$identifiant'";

    $requete = $db->query($sql);
    $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);
    //print_r($utilisateur['nom']);
    $nomUtilisateur = $utilisateur['nom'];
    $prenomUtilisateur = $utilisateur['prenom'];

    // echo $nomUtilisateur." ".$prenomUtilisateur;
    
    $rows = $requete->rowCount();

    if($rows==1){
      $_SESSION['nom'] = $nomUtilisateur;
      $_SESSION['prenom'] = $prenomUtilisateur;
      header("Location:../../front\accueil\accueil.php ");
  }

}
?>