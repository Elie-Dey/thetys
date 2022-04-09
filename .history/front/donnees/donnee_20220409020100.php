<?php 
//Definition du titre de la page 
$titre = "Données";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../respoTech/respoTech-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">

<div class="container">
    <div class="row my-3">
        <div class="col">
            <h4>Bootstrap 4 Chart.js - Line Chart</h4>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <canvas id="chLine" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


        </main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";