
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
        $referenceClient = $client['reference'];
        $rows = $requete->rowCount();

        if($rows==1){
            $_SESSION['nom'] = $nomClient;
            header("Location:../../front\client\creationdemande.php ");
        }
    }
    if($codeIdentification == "FI"){
        $sql = "SELECT * 
              FROM utilisateurs
              WHERE idConnexion = '$identifiant'";

        $requete = $db->query($sql);
        $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);
        $nomUtilisateur = $utilisateur['nom'];
        $prenomUtilisateur = $utilisateur['prenom'];
        $rows = $requete->rowCount();

        if($rows==1){
            $_SESSION['nom'] = $nomUtilisateur;
            $_SESSION['prenom'] = $prenomUtilisateur;
            header("Location:../../front\direcFin\creationfacture.php ");
        }
    }

    if($codeIdentification == "CO"){
        $sql = "SELECT * 
              FROM utilisateurs
              WHERE idConnexion = '$identifiant'";

        $requete = $db->query($sql);
        $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);
        $nomUtilisateur = $utilisateur['nom'];
        $prenomUtilisateur = $utilisateur['prenom'];
        $rows = $requete->rowCount();

        if($rows==1){
            $_SESSION['nom'] = $nomUtilisateur;
            $_SESSION['prenom'] = $prenomUtilisateur;
            header("Location:../../front\RespoCom\listedemandes.php ");
        }
    }

    if($codeIdentification == "EQ"){
        $sql = "SELECT * 
              FROM utilisateurs
              WHERE idConnexion = '$identifiant'";

        $requete = $db->query($sql);
        $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);
        $nomUtilisateur = $utilisateur['nom'];
        $prenomUtilisateur = $utilisateur['prenom'];
        $rows = $requete->rowCount();

        if($rows==1){
            $_SESSION['nom'] = $nomUtilisateur;
            $_SESSION['prenom'] = $prenomUtilisateur;
            header("Location:../../front/expertTech\listefichemissions.php ");
        }
    }

    if($codeIdentification == "TE"){
        $sql = "SELECT * 
              FROM utilisateurs
              WHERE idConnexion = '$identifiant'";

        $requete = $db->query($sql);
        $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);
        $nomUtilisateur = $utilisateur['nom'];
        $prenomUtilisateur = $utilisateur['prenom'];
        $rows = $requete->rowCount();

        if($rows==1){
            $_SESSION['nom'] = $nomUtilisateur;
            $_SESSION['prenom'] = $prenomUtilisateur;
            header("Location:../../front/respoTech\listedemandedevis.php ");
        }
    }

}
?>