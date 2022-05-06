<?php 
//Definition du titre de la page 
$titre = "Visualisation";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
    <?php  @include "../visualisation/visu-navbar.php"; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 pt-0">
          
      <div class="cont">
    <iframe src="https://www.google.com/maps/d/embed?mid=1LgjOCaPVwVH_O5YGXkxhBrHHALO2M_1Z&ehbc=2E312F" width="1500" height="750"></iframe>
        </div>
   
        </main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";
