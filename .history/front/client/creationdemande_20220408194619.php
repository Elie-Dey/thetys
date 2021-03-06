<?php 
//Definition du titre de la page 
$titre = "Nouvelle demande";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../client/client-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">


          <form class="row g-3 border border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded">
            <legend class="text-center"> Formulaire nouvelle demande</legend>
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
              <label for="dateDebut" class="form-label"> Date de d??but</label>
              <input
                type="text"
                class="form-control"
                id="dateDeFin"
              />
            </div>
             <div class="col-6">
              <label for="dateDeFin" class="form-label"> Date de fin</label>
              <input
                type="text"
                class="form-control"
                id="dateDeFin"
              />
            </div>
            <div class="form-floating">
  <textarea class="form-control"  id="besoins" style="height: 100px"></textarea>
  <label for="besoins">Besoins</label>
</div>
<div class="form-floating">
  <textarea class="form-control" id="conditionsParticulieres" style="height: 100px"></textarea>
  <label for="conditionsParticulieres">Condition particuli??res</label>
</div>
            
            <div class="col-md-6">
              <label for="materiel1" class="form-label">Mat??riel 1</label>
              <select id="materiel1" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="materiel2" class="form-label">Mat??riel 2</label>
              <select id="materiel2" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
          
            <div class="col-12">
              <input type="submit" class="btn btn-primary m-3 d-grid gap-2 col-6 mx-auto">Envoyer ma demande</input>
              <input class="btn btn-primary m-3 d-grid gap-2 col-6 mx-auto" type="submit" value="Envoyer ma demande">
            </div>
          </form>
        </main>
      </div>
    </div>









<?php  
@include "../includes/footer.php";