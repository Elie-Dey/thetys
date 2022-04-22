
<?php 
//Definition du titre de la page 
$titre = "Création fiche mission";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../respoTech/respoTech-navbar.php";  

         @require '../../back/admin.php';


      if(!empty($_GET['id'])){

              $sql = "SELECT * FROM devis
                      INNER JOIN demandes 
                      ON devis.demande_id = demandes.iddemandes 
                      INNER JOIN clients ON clients.idclients = demandes.client_id
                      WHERE iddevis = $_GET[id]";


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
                                          WHERE demande_id = $_GET[id]";

                $requeteMaterielDemande = $db->query($sqlMaterielDemandes);
                $materielsDemandes = $requeteMaterielDemande->fetchAll(PDO::FETCH_ASSOC);
      }
      ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
<form class="row g-3 border border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded">
            <legend class="text-center"> Formulaire fiche mission</legend>
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
            <div class="col-4">
              <label for="dateDebut" class="form-label"> Date de début</label>
              <input
                type="date"
                class="form-control"
                id="dateDeFin"
              />
            </div>
             <div class="col-4">
              <label for="dateDeFin" class="form-label"> Date de fin</label>
              <input
                type="date"
                class="form-control"
                id="dateDeFin"
              />
            </div>
            <div class="col-4">
              <label for="duree" class="form-label"> Durée</label>
              <input
                type="text"
                class="form-control"
                id="duree"
              />
            </div>
            <div class="form-floating">
  <textarea class="form-control"  id="besoins" style="height: 100px"></textarea>
  <label for="besoins">Besoins client</label>
</div>
<div class="form-floating">
  <textarea class="form-control" id="conditionsParticulieres" style="height: 100px"></textarea>
  <label for="conditionsParticulieres">Condition particulières de la mission</label>
</div>
            
            <div class="col-md-4">
              <label for="materiel1" class="form-label">Choix matériel 1</label>
              <select id="materiel1" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="materiel2" class="form-label">Choix matériel 2</label>
              <select id="materiel2" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="equipe" class="form-label">Choix équipe</label>
              <select id="equipe" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
          </form>
         </main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";