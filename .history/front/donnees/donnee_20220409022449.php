
<?php 
//Definition du titre de la page 
$titre = "Données";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<script>
var ctx = document.getElementById('kt_chartjs_1');

// Define colors
var primaryColor = KTUtil.getCssVariableValue('--bs-primary');
var dangerColor = KTUtil.getCssVariableValue('--bs-danger');
var successColor = KTUtil.getCssVariableValue('--bs-success');

// Define fonts

const data = {
  labels: [
    'Red',
    'Blue',
    'Yellow'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};

const config = {
  type: 'doughnut',
  data: data,
};

// Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
var myChart = new Chart(ctx, config);
</script>
<div class="container-fluid">
      <div class="row">
      <?php  @include "../respoTech/respoTech-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
            <canvas id="kt_chartjs_1" class="mh-400px"></canvas>
        </main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";