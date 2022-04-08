<?php 
//Definition du titre de la page 
$titre = "Nouvelle demande";
@include "../includes/head-style.php";
@include "../includes/header.php";
@include "../client/client-navbar.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../client/client-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
          <form class="row g-3">
            <div class="col-md-6">
              <label for="nom" class="form-label">Client</label>
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
  <textarea class="form-control" placeholder="Leave a comment here" id="besoins" style="height: 100px"></textarea>
  <label for="besoins">Besoins</label>
</div>
            
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip" />
            </div>
            <div class="col-12">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="gridCheck"
                />
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
        </main>
      </div>
    </div>









<?php  
@include "../includes/footer.php";