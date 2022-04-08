<?php 
//Definition du titre de la page 
$titre = "Liste des PV";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>


<div class="container-fluid">
      <div class="row">
      <?php  @include "../client/client-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
       <table class="table border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">N°commande</th>
      <th scope="col">Date de création </th>
      <th scope="col">Statut</th>
    <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>25</td>
      <td>10/03/2022</td>
      <td>20 000 €</td>
      <td>Non signé</td>
      <td>
          <a href="../client/detaildevis.php" class="text-light  btn btn-primary">
            Valider
        </a>
      </td>
      
    </tr>

   
  </tbody>
</table>
</main>
      </div>
    </div>
<?php  
@include "../includes/footer.php";