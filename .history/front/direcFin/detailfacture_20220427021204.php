<?php 
//Definition du titre de la page 
$titre = "Détails facture";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../direcFin/direcfin-navbar.php";
      
       @require '../../back/admin.php';


      if(!empty($_GET['id'])){

              $sql = "SELECT * 
                      FROM fichefacturations
                      INNER JOIN missioninterventions
                      ON fichefacturations.missionIntervention_id = missioninterventions.idmissionIntervention
                      INNER JOIN commandes
                      ON commandes.idcommandes = missioninterventions.commande_id
                      INNER JOIN demandes
                      ON commandes.demande_id = demandes.iddemandes
                      INNER JOIN clients
                      ON clients.idclients = demandes.client_id
                      INNER JOIN equipes
                      ON missioninterventions.equipe_id = equipes.idequipes
                      INNER JOIN pvinterventions 
                      ON pvinterventions.missionIntervention_id = missioninterventions.idmissionIntervention
                      WHERE idfiche = $_GET[id]";


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
            <legend class="text-center"> Details de la facture</legend>
            <div class="col-md-6">
              <label for="nom" class="form-label">Nom Client</label>
              <input type="text" class="form-control" id="nom" />
            </div>
            <div class="col-md-6">
              <label for="reference" class="form-label">reference</label>
              <input type="text" class="form-control" id="reference" />
            </div>
            <div class="col-12">
              <label for="lieuIntervention" class="form-label"
                >Lieu Intervention</label
              >
              <input
                type="text"
                class="form-control"
                id="lieuIntervention"
                placeholder="Nice"
              />
            </div>
            <div class="col-4">
              <label for="latitude" class="form-label">Latitude </label>
              <input
                type="text"
                class="form-control"
                id="latitude"
                placeholder=""
                value=""
              />
            </div>
            <div class="col-4">
              <label for="longitude" class="form-label"> Longitude</label>
              <input
                type="text"
                class="form-control"
                id="longitude"
              />
            </div>
            <div class="col-4">
              <label for="profondeur" class="form-label"> Profondeur</label>
              <input
                type="text"
                class="form-control"
                id="profondeur"
              />
            </div>
            <div class="col-6">
              <label for="dateDebut" class="form-label"> Date de début</label>
              <input
                type="date"
                class="form-control"
                id="dateDeFin"
              />
            </div>
             <div class="col-6">
              <label for="dateDeFin" class="form-label"> Date de fin</label>
              <input
                type="date"
                class="form-control"
                id="dateDeFin"
              />
            </div>
            <div class="form-floating">
            <textarea class="form-control"  id="equipeMobilisee" style="height: 100px"></textarea>
                <label for="equipeMobilisee">Equipe mobilisée</label>
            </div>
            <div class="form-floating">
                 <textarea class="form-control" id="materielSupport" style="height: 100px"></textarea>
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