<?php

@require "../admin.php";
session_start();

if (isset($_POST['identifiant'])){
  $identifiant = stripslashes($_REQUEST['identifiant']);
//   $username = mysqli_real_escape_string($conn, $username);
//   $password = stripslashes($_REQUEST['password']);
//   $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `utilisateurs` WHERE login='$identifiant'";
//   $result = mysqli_query($conn,$query) or die(mysql_error());
     $requete = $db->query($sql);
     $rows = $requete->rowCount();
//   $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['identifiant'] = $username;
      header("Location: index.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
