<?php 
//Definition du titre de la page 
$titre = "Liste des commandes";
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
      <?php 
      @require '../../back/admin.php';

      // $sql = "SELECT * FROM devis
      //         INNER JOIN demandes 
      //         ON devis.demande_id = demandes.iddemandes
      //         INNER JOIN clients 
      //         ON clients.idclients = demandes.client_id
      //         WHERE statutDevis = 'Validé' ";

      $sql =  "SELECT * 
              FROM commandes
              INNER JOIN demandes 
              ON demandes.iddemandes = commandes.demande_id
              INNER JOIN clients 
              ON clients.idclients = demandes.client_id
              INNER JOIN devis
              ON devis.demande_id = demandes.iddemandes";

      $requete = $db->query($sql);
      $count = 0;

     if($requete != FALSE ){
        $commandes = $requete->fetchAll(PDO::FETCH_ASSOC);
        foreach($commandes as $commande) : 
        $count++;
      ?>
    <tr>
      <th scope="row"><?= $count ?></th>
      <td><?= $commande['nom'] ?> </td>
      <td><?= $commande['LieuIntervention'] ?></td>
      <td><?= $commande['dateDebut'] ?></td>
      <td><?= $commande['dateFin']  ?> </td>
       <td><?=$commande['statut']?></td>
       <td>
           <a href="../respoTech/fichemission.php?id=<?=$commande['iddemandes']?>" class="text-light  btn <?php  if($commande['statut']=='') {
             echo "btn-secondary";
        } else {
          echo "btn-primary";
        } ?>"  <?php  
        if($commande['statut']=='') 
             echo 'style="pointer-events: none"'; 
        ?>>
            Etablir fiche
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