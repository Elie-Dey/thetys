<?php 
//Definition du titre de la page 
$titre = "Message";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>


<div class="container-fluid">
      <div class="row">
      <?php  @include "../direcFin/direcfin-navbar.php";  
      
      ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">

<div class="card cardMessage text-center mt-5 border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded">
  <div class="card-header">
    Message
  </div>
  <div class="card-body p-5">
    
    <h5 class="card-text text-danger">Êtes-vous sur de vouloir supprimer la facture? <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
  <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
</svg></h5>
    <a href="../direcFin/successSuppression.php?idfiche=<?=$_GET['id']?>&idMission=<?=$_GET['idMission']?>" class="btn btn-danger mt-5">Oui</a>
    <a href="../direcFin/listefacture.php" class="btn btn-success mt-5">Non</a>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>

</main>
      </div>
    </div>

<?php  
@include "../includes/footer.php";