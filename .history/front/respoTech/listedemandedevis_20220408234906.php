<?php 
//Definition du titre de la page 
$titre = "Liste des demande devis";
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
      <th scope="col">Nom Equipe</th>
      <th scope="col">Responsable Equipe</th>
      <th scope="col">Localisation </th>
      <th scope="col">Statut</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Equipe 3 </td>
       <td>TOUB Aziz</td>
      <td>Maeseille</td>
      <td>Non disponible</td>
    </tr>
   
  </tbody>
</table>
</main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";