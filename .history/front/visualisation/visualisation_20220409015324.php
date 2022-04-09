<?php 
//Definition du titre de la page 
$titre = "Signature PV";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../respoTech/respoTech-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
            <iframe src="https://snazzymaps.com/embed/385852" width="100%" height="600px" style="border:none;"></iframe>
        </main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";