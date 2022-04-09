
<?php 
//Definition du titre de la page 
$titre = "Données";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
</script>
 <script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</scrip

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