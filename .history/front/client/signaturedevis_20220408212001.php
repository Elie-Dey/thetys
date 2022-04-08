<?php 
//Definition du titre de la page 
$titre = "Signature PV";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../client/client-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">


          <form class="row g-3 border border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded">
            <legend class="text-center"> Formulaire PV</legend>
            <div class="col-md-4">
              <label for="nom" class="form-label">Nom Client</label>
              <input type="text" class="form-control" id="nom" />
            </div>
            <div class="col-md-4">
              <label for="reference" class="form-label">reference</label>
              <input type="text" class="form-control" id="reference" />
            </div>
            <div class="col-4">
              <label for="lieuIntervention" class="form-label"
                >Lieu Intervention</label
              >
              <input
                type="text"
                class="form-control"
                id="lieuIntervention"
                placeholder="Nice"
              />

              <div class="fw-bold text-decoration-underline"> Prévus</div>
            </div>
            <div class="col-4">
              <label for="duree" class="form-label">Durée </label>
              <input
                type="text"
                class="form-control"
                id="duree"
                placeholder=""
                value=""
              />
            </div>
            <div class="col-4">
              <label for="dateDebut" class="form-label"> Date de début</label>
              <input
                type="date"
                class="form-control"
                id="dateDebut"
              />
            </div>
            <div class="col-4">
              <label for="dateFin" class="form-label"> Date de Fin</label>
              <input
                type="date"
                class="form-control"
                id="dateFin"
              />
            </div>
            <div class="col-md-6">
              <label for="materiel1" class="form-label">Matériel 1</label>
              <select id="materiel1" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="materiel2" class="form-label">Matériel 2</label>
              <select id="materiel2" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-floating">
                 <textarea class="form-control"  id="besoins" style="height: 100px"></textarea>
                <label for="besoins">Besoins</label>
            </div>      

            <div class="fw-bold text-decoration-underline"> Réels</div>
            <div> Type de mission :</div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="assistanceMission" role="switch" id="assistanceMission">
                <label class="form-check-label" for="assistanceMission"> Assistance</label>
            </div>
            <div class="form-check form-switch">
                 <input class="form-check-input" type="checkbox" role="switch" name="interventionMission" id="interventionMission" checked>
                 <label class="form-check-label" for="interventionMission">Intervention</label>
            </div>

            <div class="col-md-4">
              <label for="dureeReelle" class="form-label">Durée</label>
              <input type="text" class="form-control" id="dureeReelle" />
            </div>
            <div class="col-md-4">
              <label for="dateDebutReelle" class="form-label">Date de début</label>
              <input type="date" class="form-control" id="dateDebutReelle" />
            </div>
            <div class="col-4">
              <label for="dateFinReelle" class="form-label"
                >Date de fin</label
              >
              <input
                type="date"
                class="form-control"
                id="dateFinReelle"
              />

          <div class="col-6">
              <input class="btn btn-danger m-3 d-grid gap-2 col-6 mx-auto" type="submit" name="annulerValidation" value="Annuler la validataion "> 
            </div>
            <div class="col-6">
              <input class="btn btn-primary m-3 d-grid gap-2 col-6 mx-auto" type="submit" name="validationPV" value="Valider le PV "> 
            </div>
          </form>
        </main>
      </div>
    </div>









<?php  
@include "../includes/footer.php";