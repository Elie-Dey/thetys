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
      <th scope="col">Nom client</th>
      <th scope="col">Lieu intervention </th>
      <th scope="col">Expert Technique</th>
    <th scope="col">Signature</th>
    <th scope="col">Signature client</th>
    <th scope="col">Actions</th>
   
    </tr>
  </thead>
  <tbody>
    <?php 
      @require '../../back/admin.php';

      $sql = "SELECT * 
              FROM pvinterventions
              INNER JOIN  missioninterventions
              ON pvinterventions.missionIntervention_id = missioninterventions.idmissionIntervention
              INNER JOIN commandes
              ON commandes.idcommandes = missioninterventions.commande_id
              INNER JOIN demandes
              ON commandes.demande_id = demandes.iddemandes
              INNER JOIN clients
              ON clients.idclients = demandes.client_id
              INNER JOIN equipes
              ON missioninterventions.equipe_id = equipes.idequipes ";

     $requete = $db->query($sql);
      $count = 0;

     if($requete != FALSE ){
        $pvmissions = $requete->fetchAll(PDO::FETCH_ASSOC);
        foreach($pvmissions as $pvmission) : 
         $count++;
    ?>
    <tr>
      <th scope="row"><?= $count ?></th>
      <td><?= $pvmission['nom'] ?></td>
      <td><?= $pvmission['localisationIntervention'] ?></td>
      <td><?= "Expert ".$pvmission['nomEquipe'] ?></td>
      
      <td>
             <!-- <a href="../client/detailpv.php" class="text-dark m-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
        </a> -->

         <a href="../client/signaturepv.php" class="text-dark m-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
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