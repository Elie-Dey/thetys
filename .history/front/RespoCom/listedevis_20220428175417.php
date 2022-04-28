<?php 
//Definition du titre de la page 
$titre = "Liste des devis";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>


<div class="container-fluid">
      <div class="row">
      <?php  @include "../RespoCom/respoCom-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
        <table class="table border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom client</th>
      <th scope="col">Lieu d'intervention </th>
       <th scope="col">Montant</th>
      <th scope="col">Statut</th>
    <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>

   <?php 
      @require '../../back/admin.php';

      $sql = "SELECT * FROM devis
              INNER JOIN demandes 
              ON devis.demande_id = demandes.iddemandes
              INNER JOIN clients 
              ON clients.idclients = demandes.client_id";

      $requete = $db->query($sql);
      $count = 0;

     if($requete != FALSE ){
        $devis = $requete->fetchAll(PDO::FETCH_ASSOC);
        foreach($devis as $de) : 
        $count++;
      ?>
    <tr>
      <th scope="row"><?= $count ?></th>
      <td><?= $de['nom'] ?></td>
      <td><?= $de['LieuIntervention'] ?></td>
      <td><?= $de['coutTotal']. " €" ?></td>
      <td><?= $de['statutDevis'] ?></td>
      <td>
          <a href="../RespoCom/detaildevis.php?id=<?=$de['iddevis']?>" class="text-dark m-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
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