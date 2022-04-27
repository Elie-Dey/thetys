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


          <form class="row g-3 border border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded" method="POST" action="">
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
            <div class="form-floating col-md-6">
  <textarea class="form-control "  id="descriptions" style="height: 100px" readonly> <?= $demande['description'] ?></textarea>
  <label for="descriptions">Descriptions de l'equipe</label>
</div>
     <div class="form-floating col-md-6">
  <textarea class="form-control"  id="commentaires" style="height: 100px" readonly> <?= $demande['commentaires'] ?></textarea>
  <label for="descriptions">Commentaires du client </label>
</div>


            
            <div class="d-grid gap-5 d-md-block mx-auto">
                    <button type="button" class="btn 
                    <?php 
                       if($demande['signatureClient']==NULL){
                            echo "btn-danger";
                       } else {
                           echo "  btn-success";
                       }
                    ?>col-4 ms-5 me-2">Validation client
                    
                        <?php if($demande['signatureClient']==NULL){
             echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-repeat ms-3" viewBox="0 0 16 16">
                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                  </svg>';
      } else {
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                        </svg>';
      }?>
                        
                </button>
          
                <button type="button" class="btn btn-success col-4">Validation responsable <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                    </svg>
                </button>
            </div>
            
          </form>
        </main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";