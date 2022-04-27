<?php 
//Definition du titre de la page 
$titre = "PV mission";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../direcFin/direcfin-navbar.php"; 
        @require '../../back/admin.php';
      
             if(!empty($_GET['id'])){

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
                      ON missioninterventions.equipe_id = equipes.idequipes
                      WHERE idPVIntervention = $_GET[id]";
                

                $requete = $db->query($sql);
                $demande = $requete->fetch(PDO::FETCH_ASSOC);

                //  $sqlMateriel = "SELECT idmateriels, nom
                //            FROM materiels ";
                           
                //   $requeteMateriel = $db->query($sqlMateriel);
                //   $materiels = $requeteMateriel->fetchAll(PDO::FETCH_ASSOC);

                
                  $sqlMaterielDemandes = "SELECT * 
                                          FROM materiels 
                                          INNER JOIN materielsdemandes 
                                          ON materiels.idmateriels = materielsdemandes.materiel_id
                                          WHERE demande_id = $_GET[idDemande]";

                $requeteMaterielDemande = $db->query($sqlMaterielDemandes);
                $materielsDemandes = $requeteMaterielDemande->fetchAll(PDO::FETCH_ASSOC);
             }
      ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">


          <form class="row g-3 border border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded" method="POST" action="../respoTech/successValidationPV.php?idPV=<?=$demande['idPVIntervention']?>">
            <legend class="text-center"> Formulaire PV</legend>
            <div class="col-md-6">
              <label for="nom" class="form-label">Nom Client</label>
              <input  readonly type="text" class="form-control" name="nom" value="<?= $demande['nom'];?>" />
            </div>
            <div class="col-md-6">
              <label for="reference" class="form-label">reference</label>
              <input readonly type="text" class="form-control" name="reference"  value="<?= $demande['reference'];?>" />
            </div>
            <div class="col-6">
              <label for="lieuIntervention" class="form-label" 
                >Lieu Intervention</label
              >
              <input
              readonly
                type="text"
                class="form-control"
                name="lieuIntervention"
                placeholder="Nice"
                value=" <?=  $demande['LieuIntervention']?>"

              />
            </div>
              
            <div class="col-6">
              <label for="typeMission" class="form-label" 
                >Type mission</label
              >
              <input
              readonly
                type="text"
                class="form-control"
                name="typeMiddion"
                
                value=" <?=  $demande['typeMission']?>"

              />
            </div>
              
            <div class="fw-bold text-decoration-underline text-center h4"> Prévus </div>
             <div class="col-4">
              <label for="dateDebut" class="form-label"> Date de début</label>
              <input
              readonly
                type="text"
                class="form-control"
                name="dateDeDebut"
                value=" <?=$demande['dateDebut']?>"
              />
            </div>
             <div class="col-4">
              <label for="dateDeFin" class="form-label"> Date de fin</label>
              <input
              readonly
                type="text"
                class="form-control"
                name="dateDeFin"
                value=" <?=$demande['dateFin']?>"
              />
            </div>
             <div class="col-4">
              <label for="duree" class="form-label"> Durée (en jours)</label>
              <input
              readonly
                type="text"
                class="form-control"
                name="duree"
                <?php
                    $date1=date_create($demande['dateDebut']);
                    $date2=date_create($demande['dateFin']);
                    $diff=date_diff($date1,$date2);
                    $val =  $diff->format("%R%a jours")
                ?>
                value=" <?= substr($val, 1,2) ?>"
              /> 
            </div>
             <div class="col-md-12">
              <label for="materiel1" class="form-label">Matériels </label>
                <br>
                 <?php 
                  foreach ($materielsDemandes as $materielDemande) {
                   echo $materielDemande['nom']. "</br> </br>"; 
                  }
                ?>
            </div>
             <div class="form-floating">
          <textarea class="form-control"  id="besoins" style="height: 100px" readonly ><?= $demande['besoins'] ?> </textarea>
          <label for="besoins">Besoins client</label> 
        
            </div>       

            <div class="fw-bold text-decoration-underline text-center h4"> Réels</div>


            <div> Type de mission :</div>
            <div class="form-check form-switch ms-5">
                <input class="form-check-input" type="checkbox" name="assistanceMission" role="switch" id="assistanceMission" 
                <?php 
                if( $demande['typeMission'] == "Assistance"){
                  echo "checked";
                }
                ?>
                >
                <label class="form-check-label" for="assistanceMission"> Assistance</label>
            </div>
            <div class="form-check form-switch ms-5">
                 <input class="form-check-input" type="checkbox" role="switch" name="interventionMission" id="interventionMission"
                 <?php 
                if( $demande['typeMission'] == "Intervention"){
                  echo "checked";
                }
                ?>>
                 <label class="form-check-label" for="interventionMission">Intervention</label>
            </div>

            <div class="col-md-4">
              <label for="dureeReelle" class="form-label">Durée réelle (en jours) </label>
              <input type="text" class="form-control" name ="dureeReelle" value="<?= $demande['dureeReelle'] ?>" readonly/>
            </div>
            <div class="col-md-4">
              <label for="dateDebutReelle" class="form-label">Date de début</label>
              <input type="text" class="form-control" name="dateDebutReelle" value="<?= $demande['dateDebutRelle'] ?>" readonly/>
            </div>
            <div class="col-4">
              <label for="dateFinReelle" class="form-label"
                >Date de fin</label
              >
              <input
                type="text"
                class="form-control"
                name="dateFinReelle"
                value="<?= $demande['dateFinReelle'] ?>" 
                readonly
              />
            </div>

              <div class="col-md-12">
              <label for="materielReels" class="form-label">Matériels réels </label>
                <br>
                 <?php 
                  foreach ($materielsDemandes as $materielDemande) {
                   echo $materielDemande['nom']. "</br> </br>"; 
                  }
                ?>
            </div>
            <div class="form-floating">
  <textarea class="form-control"  id="descriptions" style="height: 100px" readonly> <?= $demande['description'] ?></textarea>
  <label for="descriptions">Descriptions de l'equipe</label>
</div>
          <div class="col-6">
              <input class="btn btn-danger m-3 d-grid gap-2 col-6 mx-auto" type="submit" name="annulerValidation" value="Annuler la validataion "> 
            </div>
            <div class="col-6">
              <input class="btn btn-primary m-3 d-grid gap-2 col-6 mx-auto" type="submit" name="validationPV" value="Valider le PV"> 
            </div>
          </form>
        </main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";