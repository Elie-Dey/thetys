<?php 
//Definition du titre de la page 
$titre = "Message";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>


<div class="container-fluid">
      <div class="row">
    <?php  @include "../respoTech/respoTech-navbar.php"; 
    
     @require '../../back/admin.php';

     if ($_SERVER["REQUEST_METHOD"] == "POST"){

      $dureeReelle= $_REQUEST['dureeRelle'];
      $dateDebutRelle = $_REQUEST['dateDebutRelle'];
      $dateFinReelle = $_REQUEST['dateFinReelle'];
      $materiel1 = $_REQUEST['materiel1'];
      $materiel2 = $_REQUEST['materiel2'];


      $totalTTc = $_REQUEST['totalttc'];

      $idMission = $_GET['idMission'];
      $idClient = $_GET['idclient'];


      $sqlVerif = "SELECT * FROM devis INNER JOIN clients ON clients.idclients = devis.client_id INNER JOIN demandes ON demandes.iddemandes = devis.demande_id";
      $r = $db->query($sqlVerif);
      $values = $r->fetchAll(PDO::FETCH_ASSOC);

      //Requete d'insertion des valeurs si c'est la premiere fois qu"elles sont saisies

       $sql = "INSERT INTO devis (iddevis, CoutIH, coutMateriel,tva, coutTotal, client_id, statutDevis, demande_id) 
              VALUES (NULL, '$coutInterventionHumaine', '$coutMateriels', '$tva', '$totalTTc', '$idClient', 'Traité', '$idDemande')";

        $requete = $db->query($sql);

      //Requete de mise à jour statut de la demande 

        $updateDemande = "UPDATE demandes SET statut = 'Devis effectué' WHERE demandes.iddemandes = $idDemande AND demandes.client_id = $idClient";

         $updating = $db->query($updateDemande);

      //Requete de mise à jour des valeurs du devis si elles sont modifiées 

      // $updateDevis = "UPDATE devis SET coutMateriel = 30000' WHERE `devis`.`iddevis` = 2";
      
      // $count = 0;
      // foreach ($values as $value) {
      //     if($value['client_id'] == $idClient && $value['demande_id'] == $idDemande){
      //       $count++;
      //     }
      // } 
      // if($count == 1){
      //    $updating = $db->query($updateDemande);
      // } else{
      //   $requete = $db->query($sql);
      // }

      
      if($requete || $updating) {
            $var = "success";
      } else{
         $var = "error";
      }
    
     } 
     // <?= $var." ".$idClient." ".$idDemande." ".$totalTTc
    ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">

<div class="card cardMessage text-center mt-5 border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="card-header">
      Message   
    

    </div>
  <div class="card-body p-5">
      <h5 class="card-text text-success">Votre action a bien été prise en compte <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
          </svg>
      </h5>
    <a href="../respoTech/listedemandedevis.php" class="btn btn-primary mt-5">Retour</a>
  </div>
  <div class="card-footer text-muted">
  </div>
  <p>
  </p>
</div>

</main>
      </div>
    </div>

<?php  
@include "../includes/footer.php";