<?php 
//Definition du titre de la page 
$titre = "Liste des matériels";
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
      <th scope="col">Nom matériel</th>
      <th scope="col">Localisation </th>
      <th scope="col">Coût location</th>
      <th scope="col">Coût expedition</th>
    <th scope="col">Stock</th>
    <th scope="col">Statut</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      @require '../../back/admin.php';

      $sql = "SELECT *  FROM `materiels`";

     $requete = $db->query($sql);
     $materiels = $requete->fetchAll();
    $count = 0;

    foreach($materiels as $materiel) : 
         $count++;
    ?>
    <tr>
      <th scope="row"><?= $count ?></th>
      <td><?= $materiel['nom'] ?> </td>
      <td>Marseille</td>
       <td><?= $materiel['coutLocation'] ?></td>
       <td><?=  $materiel['coutExpedition'] ?></td>
       <td><?= $materiel['stock'] ?></td>
      <td><?= $materiel['statut'] ?></td>
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>
</main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";