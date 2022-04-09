
<?php 
//Definition du titre de la page 
$titre = "Données";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../respoTech/respoTech-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
           
<div>
  <canvas id="myChart"></canvas>
</div>
 
        </main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";