<?php 
//Definition du titre de la page 
$titre = "Liste des factures";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>


<div class="container-fluid">
      <div class="row">
      <?php  @include "../direcFin/direcfin-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
        <table class="table border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom client</th>
      <th scope="col">Lieu d'intervention</th>
      <th scope="col">Prix total TTC</th>
    <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
      @require '../../back/admin.php';

      $sql = "SELECT * 
              FROM fichefacturations 
              INNER JOIN missioninterventions
              ON fichefacturactions.missionIntervention_id = missioninterventions.idmissionIntervention
              INNER JOIN commandes
              ON commandes.idcommandes = missioninterventions.commande_id
              INNER JOIN demandes
              ON commandes.demande_id = demandes.iddemandes
              INNER JOIN clients
              ON clients.idclients = demandes.client_id
              INNER JOIN equipes
              ON missioninterventions.equipe_id = equipes.idequipes
              INNER JOIN pvinterventions 
              ON pvinterventions.missionIntervention_id = missioninterventions.idmissionIntervention";

     $requete = $db->query($sql);
      $count = 0;

     if($requete != FALSE ){
        $factures = $requete->fetchAll(PDO::FETCH_ASSOC);
        foreach($factures as $facture) : 
         $count++;
    ?>
    <tr>
      <th scope="row"><?= $count ?></th>
      <td><?= $count ?></td>
      <td><?= $facture['nom'] ?></td>
      <td><?= $facture['prixTotalTTC'] ?></td>
      <td>
          <a href="../direcFin/detailfacture.php" class="text-dark m-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
</a>
<a href="../direcFin/messagesuppression.php"  class="text-dark m-2"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg>
</a>
      </td>
      
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Marky Ocean</td>
      <td>Marseille</td>
      <td>10/03/2022</td>
       <td>20/03/2022</td>
      <td>25 000 €</td>
      <td>
          <a href="../direcFin/detailfacture.php" class="text-dark m-3">
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