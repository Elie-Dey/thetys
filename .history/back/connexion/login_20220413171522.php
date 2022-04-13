
<?php

@require "../admin.php";
session_start();

if(!empty($_POST)){
    
    $identifiant = $_POST["identifiant"];
    $mdp = $_POST["motdepasse"];

    if(isset($identifiant)){
        die("Entrez votre identifiant");
    }
    if(isset($mdp)){
        die("Entrez votre mot de passe");
    }

    print "Les valeurs :".$identifiant." ".$mdp; 

}
?>