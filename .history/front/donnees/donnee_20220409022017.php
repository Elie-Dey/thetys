
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
var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

// Chart labels
const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// Chart data
const data = {
    labels: labels,
    data: [10, 20, 30]
};

// Chart config
const config = {
    type: 'bar',
    data: data,
    options: {
        plugins: {
            title: {
                display: false,
            }
        },
        responsive: true,
        interaction: {
            intersect: false,
        },
        scales: {
            x: {
                stacked: true,
            },
            y: {
                stacked: true
            }
        }
    },
    defaults:{
        global: {
            defaultFont: fontFamily
        }
    }
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