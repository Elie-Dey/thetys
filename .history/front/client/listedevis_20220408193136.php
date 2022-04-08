<?php 
//Definition du titre de la page 
$titre = "Liste des demandes";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>


<div class="container-fluid">
      <div class="row">
      <?php  @include "../client/client-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom client</th>
      <th scope="col">N°demande</th>
      <th scope="col">Prix</th>
      <th scope="col">Statut</th>
    <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Marky Ocean</td>
      <td>25</td>
      <td>20 000 €</td>
      <td>Non traitée</td>
      <td>
          <a href="../client/detaildevis.php" class="text-dark m-3">
              <button type="submit">Valider</button>
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