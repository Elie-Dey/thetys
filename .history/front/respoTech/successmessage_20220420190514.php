<?php 
//Definition du titre de la page 
$titre = "Message";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>


<div class="container-fluid">
      <div class="row">
    <?php  @include "../respoTech/respoTech-navbar.php"; 
    
     @require '../../back/admin.php';

     if ($_SERVER["REQUEST_METHOD"] == "POST"){

      $tva = $_POST['tva'];
      $totalTTc = $_POST['totalttc'];

      echo $tva." ".$totalTTc;

     }

        // if(!empty($_GET['id'])){

        //       $sql = "UPDATE `devis` 
        //               SET `statut` = 'Validé'
        //               WHERE `devis`.`iddevis` = $_GET[id]";

        //       $requete = $db->query($sql);

        // }

    
    ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">

<div class="card cardMessage text-center mt-5 border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded">
  <div class="card-header">
    Message
  </div>
  <div class="card-body p-5">
    
    <h5 class="card-text text-success">Votre action a bien été prise en compte <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h5>
    <a href="../respoTech/listedemandedevis.php" class="btn btn-primary mt-5">Retour</a>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>

</main>
      </div>
    </div>

<?php  
@include "../includes/footer.php";