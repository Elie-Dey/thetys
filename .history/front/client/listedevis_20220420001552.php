<?php 
//Definition du titre de la page 
$titre = "Liste des devis";
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
      <th scope="col">Nom client</th>
      <th scope="col">N°demande</th>
      <th scope="col">Prix</th>
      <th scope="col">Statut</th>
    <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>

   <?php 
      @require '../../back/admin.php';

      $sql = "SELECT * 
              FROM demandes
              WHERE client_id = $_SESSION[idClient]";

      $requete = $db->query($sql);
      $count = 0;

     if($requete != FALSE ){
        $demandes = $requete->fetchAll(PDO::FETCH_ASSOC);
        foreach($demandes as $demande) : 
        $count++;
      

    <tr>
      <th scope="row">1</th>
      <td>Marky Ocean</td>
      <td>25</td>
      <td>20 000 €</td>
      <td>Non traitée</td>
      <td>
          <a href="../client/detaildevis.php" class="text-light  btn btn-primary">
            Valider
        </a>
      </td>
      
    </tr>
     <?php endforeach; 
     }
     ?>
   
  </tbody>
</table>
</main>
      </div>
    </div>
<?php  
@include "../includes/footer.php";