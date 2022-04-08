<?php 
//Definition du titre de la page 
$titre = "Liste des équipes";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../respoTech/respoTech-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
        <table class="table border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom client</th>
      <th scope="col">Lieu d'intervention</th>
      <th scope="col">Date de début </th>
      <th scope="col">Date de fin </th>
      <th scope="col">Statut</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>DRASSM </td>
      <td>Mareille</td>
      <td>Date de début</td>
      <td>Date de fin </td>
       <td>Non traitée</td>
       <td>
           <a href="../respoTech/validationpvequipe.php" class="text-light  btn btn-primary">
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