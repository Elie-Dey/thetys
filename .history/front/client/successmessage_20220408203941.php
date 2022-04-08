<?php 
//Definition du titre de la page 
$titre = "Détails devis";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>


<div class="container-fluid">
      <div class="row">
      <?php  @include "../client/client-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">

<div class="card cardMessage text-center mt-5">
  <div class="card-header">
    Message
  </div>
  <div class="card-body p-5">
    
    <h5 class="card-text">With supporting text below as a natural lead-in to additional content.</h5>
    <a href="../client/listedevis.php" class="btn btn-primary mt-5">Retour</a>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>

</main>
      </div>
    </div>

<?php  
@include "../includes/footer.php";