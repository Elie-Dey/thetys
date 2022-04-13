
<?php

@require "../admin.php";
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $identifiant = $_POST["identifiant"];
    $mdp = $_POST["motdepasse"];

    if(!isset($identifiant)){
        die("Entrez votre identifiant");
    }
}
?>