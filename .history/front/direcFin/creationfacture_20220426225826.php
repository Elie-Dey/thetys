<?php 
//Definition du titre de la page 
$titre = "Détails intervention";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../direcFin/direcfin-navbar.php"; 
      
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


          <form class="row g-3 border border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded">
            <legend class="text-center"> Details de l'intervention</legend>
              <div class="col-md-6">
              <label for="nom" class="form-label">Nom Client</label>
              <input  readonly type="text" class="form-control" id="nom" value="<?= $demande['nom'];?>" />
            </div>
            <div class="col-md-6">
              <label for="reference" class="form-label">reference</label>
              <input readonly type="text" class="form-control" id="reference"  value="<?= $demande['reference'];?>" />
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
            <div class="col-4">
              <label for="latitude" class="form-label">Latitude </label>
              <input
              readonly
                type="text"
                class="form-control"
                name="latitude"
                placeholder=""
                value=" <?=  $demande['latitude']?>"
              />
            </div>
            <div class="col-4">
              <label for="longitude" class="form-label"> Longitude</label>
              <input
              readonly
                type="text"
                class="form-control"
                name="longitude"
                value="<?=$demande['longitude']?>"
              />
            </div>
            <div class="col-4">
              <label for="profondeur" class="form-label"> Profondeur</label>
              <input
                readonly
                type="text"
                class="form-control"
                name="profondeur"
                value="<?=$demande['profondeur']?>"
              />
            </div>
           <div class="col-6">
              <label for="dateDebut" class="form-label"> Date de début</label>
              <input
              readonly
                type="text"
                class="form-control"
                name="dateDeDebut"
                value=" <?=$demande['dateDebut']?>"
              />
            </div>
             <div class="col-6">
              <label for="dateDeFin" class="form-label"> Date de fin</label>
              <input
              readonly
                type="text"
                class="form-control"
                name="dateDeFin"
                value=" <?=  $demande['dateFin']?>"
              />
            </div>

            <div class="form-floating">
               <?php

                $sqlMembreEquipes = "SELECT * 
                                    FROM membreequipe
                                    INNER JOIN nbheures
                                    ON membreequipe.nbheure_id = nbheures.idNbHeures
                                    INNER JOIN equipes
                                    ON membreequipe.equipe_id = equipes.idequipes
                                    WHERE equipe_id = $demande[idequipes]  ";

              $requeteMembreEquipe = $db->query($sqlMembreEquipes);
               $membres = $db->query($sqlMembreEquipes);

             
            ?>
           <textarea class="form-control fst-italic "  id="equipeMobilisee" style="height: 100px" readonly > <?php
                if($requeteMembreEquipe != FALSE ){
                  $count = 0;
                  foreach ($membres as $membre) {

                    $count++;
                    $heureSup = $membre['nbheures'] - $membre['nbheures'];
                    if($count == 1) {
                         echo "Responsable Equipe : ".$membre['nom']."    ".$membre['prenom']."    ( ".$membre['nbheures']."  h)"."   facturé  ".$membre['prixParHeure']." euros/H    "."Heures sup : ". " $heureSup "."h". "\n"."\n";
                    // echo "Paul";
                    } else{
                         echo " Ingénieur : ".$membre['nom']."    ".$membre['prenom']."    ( ".$membre['nbheures']."  h)"."   facturé  ".$membre['prixParHeure']." euros/H    "."Heures sup : ". " $heureSup "."h"."\n";

                    }
                   
                  }

                }
              ?></textarea>
        
                <label for="equipeMobilisee">Equipe mobilisée</label>
            </div>



            <div class="form-floating">
                 <textarea class="form-control fst-italic" id="materielSupport" style="height: 100px">
                   <?php 
                  foreach ($materielsDemandes as $materielDemande) {
                   echo $materielDemande['nom']. "\n"."\n"; 
                  }
                ?>
                </textarea>

                 <label for="materielSupport">Matériel supports</label>
            </div>



            
            <div class="col-4">
              <label for="interventionHumaine" class="form-label">Intervention Humaine </label>
              <input
                type="text"
                class="form-control"
                id="interventionHumaine"
                placeholder=""
                value=""
              />
            </div>
            <div class="col-4">
              <label for="materiel" class="form-label"> Matériel</label>
              <input
                type="text"
                class="form-control"
                id="materiel"
              />
            </div>
            <div class="col-4">
              <label for="tva" class="form-label"> TVA</label>
              <input
                type="text"
                class="form-control"
                id="tva"
              />
            </div>
            <div class="col-6">
              <label for="totalttc" class="form-label"> Total TTC</label>
              <input
                type="text"
                class="form-control"
                id="totalttc"
              />
            </div>
            <div class="col-12">
              <input class="btn btn-primary m-3 d-grid gap-2 col-6 mx-auto align-center" type="submit" name="genererFactutre" value="Générer"> 
            </div>
          </form>
        </main>
      </div>
    </div>


<?php  
@include "../includes/footer.php";