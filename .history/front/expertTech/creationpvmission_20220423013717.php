<?php 
//Definition du titre de la page 
$titre = "Création PV";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../expertTech/expertTech-navbar.php"; 

         @require '../../back/admin.php';


             if(!empty($_GET['id'])){

              $sql = "SELECT * 
              FROM missioninterventions
              INNER JOIN commandes
              ON commandes.idcommandes = missioninterventions.commande_id
              INNER JOIN demandes
              ON commandes.demande_id = demandes.iddemandes
              INNER JOIN clients
              ON clients.idclients = demandes.client_id
              INNER JOIN equipes
              ON missioninterventions.equipe_id = equipes.idequipes
              WHERE idmissionIntervention = $_GET[id]";
                

                $requete = $db->query($sql);
                $demande = $requete->fetch(PDO::FETCH_ASSOC);

                 $sqlMateriel = "SELECT idmateriels, nom
                           FROM materiels ";
                           
                  $requeteMateriel = $db->query($sqlMateriel);
                  $materiels = $requeteMateriel->fetchAll(PDO::FETCH_ASSOC);

                
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


          <form class="row g-3 border border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded"  method="POST" action="../expertTech/succesmessage.php?idMission=<?=$demande['idmissionIntervention']?>">
            <legend class="text-center"> Formulaire PV</legend>

            <div class="col-md-6">
              <label for="nom" class="form-label">Nom Client</label>
              <input  readonly type="text" class="form-control" name="nom" value="<?= $demande['nom'];?>" />
            </div>
            <div class="col-md-6">
              <label for="reference" class="form-label">reference</label>
              <input readonly type="text" class="form-control" name="reference"  value="<?= $demande['reference'];?>" />
            </div>
            <div class="col-12">
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
                value=" <?=  $demande['dateFin']?>"
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
            <div> Information équipes :</div>
            <?php

                $sqlMembreEquipes = "SELECT * 
                                    FROM membreequipe
                                    INNER JOIN nbheures
                                    ON membreequipe.nbheure_id = nbheures.idNbHeures
                                    INNER JOIN equipes
                                    ON membreequipe.equipe_id = equipes.idequipes
                                    WHERE equipe_id = $demande[idequipes]  ";

              $requeteMembreEquipe = $db->query($sqlMembreEquipes);

              if($requete != FALSE ){
                  $requeteMembreEquipe = $db->query($sqlMembreEquipes);
               foreach($membres as $membre) : 
            ?>
            <div class="col-6">
              <input
              readonly
                type="text"
                class="form-control"
                name="nomMembre"
                value=" <?=  $membre['nom']." ".$membre['prenom']?>"
              />
            </div>
            <div class="col-6">
              <input
                type="text"
                class="form-control"
                name="nombreHeureMembre"
                value=" <?=  $membre['nbheures']?>"
              />
            </div>
              <?php endforeach; 
     }
  ?>
              

            <div> Type de mission :</div>
            <div class="form-check form-switch ms-5">
                <input class="form-check-input" type="checkbox" name="assistanceMission" role="switch" id="assistanceMission">
                <label class="form-check-label" for="assistanceMission"> Assistance</label>
            </div>
            <div class="form-check form-switch ms-5">
                 <input class="form-check-input" type="checkbox" role="switch" name="interventionMission" id="interventionMission">
                 <label class="form-check-label" for="interventionMission">Intervention</label>
            </div>

            <div class="col-md-4">
              <label for="dureeReelle" class="form-label">Durée</label>
              <input type="text" class="form-control" name="dureeReelle" />
            </div>
            <div class="col-md-4">
              <label for="dateDebutReelle" class="form-label">Date de début</label>
              <input type="date" class="form-control" name="dateDebutReelle" />
            </div>
            <div class="col-4">
              <label for="dateFinReelle" class="form-label"
                >Date de fin</label
              >
              <input
                type="date"
                class="form-control"
                name="dateFinReelle"
              />
            </div>

             <div class="col-md-6">
              <?php 
                @require '../../back/admin.php';
                   $sql = "SELECT idmateriels, nom
                           FROM materiels ";

                  $requete = $db->query($sql);
                  $materiels = $requete->fetchAll(PDO::FETCH_ASSOC);

              ?>
              <label for="materiel1" class="form-label">Matériel 1</label>
              <select name="materiel1" class="form-select">
                <option selected>Choisissez..</option>
                <?php 
                  foreach ($materiels as $materiel) {
                   echo "<option value=$materiel[idmateriels]> $materiel[nom]</option>"; 
                  }

                ?>
              </select>
            </div>
            <div class="col-md-6">
              <label for="materiel2" class="form-label">Matériel 2</label>
              <select name="materiel2" class="form-select">
                <option selected>Choisissez...</option>
                <?php 
                  foreach ($materiels as $materiel) {
                   echo "<option value=$materiel[idmateriels]> $materiel[nom]</option>"; 
                  }

                ?>
              </select>
            </div>

            <div class="form-floating">
  <textarea class="form-control"  name="descriptions" style="height: 100px"></textarea>
  <label for="descriptions">Descriptions</label>
</div>
              
              <div class="col-6">
              <a href="../expertTech/listefichemissions.php" class="text-light btn btn-danger m-3 d-grid gap-2 col-6 mx-auto">Annuler </a>
            </div>
            <div class="col-6">
              <input class="btn btn-primary m-3 d-grid gap-2 col-6 mx-auto" type="submit" name="validationPV" value="Ajouter PV"> 
            </div>
          </form>
        </main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";