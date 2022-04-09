<?php 
//Definition du titre de la page 
$titre = "Données";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>
<script>

    /* chart.js chart examples */

// chart colors
var colors = ['#007bff','#28a745','#333333','#c3e6cb','#dc3545','#6c757d'];

/* large line chart */
var chLine = document.getElementById("chLine");
var chartData = {
  labels: ["S", "M", "T", "W", "T", "F", "S"],
  datasets: [{
    data: [589, 445, 483, 503, 689, 692, 634],
    backgroundColor: 'transparent',
    borderColor: colors[0],
    borderWidth: 4,
    pointBackgroundColor: colors[0]
  },
  {
    data: [639, 465, 493, 478, 589, 632, 674],
    backgroundColor: colors[3],
    borderColor: colors[1],
    borderWidth: 4,
    pointBackgroundColor: colors[1]
  }]
};

</script>
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