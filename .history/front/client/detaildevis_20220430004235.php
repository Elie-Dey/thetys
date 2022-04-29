<?php 
//Definition du titre de la page 
$titre = "Détails devis";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../client/client-navbar.php";  
       @require '../../back/admin.php';


      if(!empty($_GET['id'])){

              $sql = "SELECT * FROM devis
                      INNER JOIN demandes 
                      ON devis.demande_id = demandes.iddemandes 
                      INNER JOIN clients ON clients.idclients = $_SESSION[idClient]
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


          <form class="row g-3 border border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded" method="POST" action="../client/successmessage.php?idDevis=<?=$demande['iddevis']?>&idDemande=<?=$demande['iddemandes']?>">


            <legend class="text-center"> Formulaire détails devis</legend>


           <div class="col-md-6">
              <label for="nom" class="form-label">Nom Client</label>
              <input  readonly type="text" class="form-control" id="nom" value="<?= $_SESSION['nom'];?>" />
            </div>
            <div class="col-md-6">
              <label for="reference" class="form-label">Réference</label>
              <input readonly type="text" class="form-control" id="reference"  value="<?= $_SESSION['reference'];?>" />
            </div>
            <div class="col-12">
              <label for="lieuIntervention" class="form-label" 
                >Lieu Intervention</label
              >
              <input
              readonly
                type="text"
                class="form-control"
                id="lieuIntervention"
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
                id="latitude"
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
                id="longitude"
                value="<?=$demande['longitude']?>"
              />
            </div>
            <div class="col-4">
              <label for="profondeur" class="form-label"> Profondeur</label>
              <input
                readonly
                type="text"
                class="form-control"
                id="profondeur"
                value="<?=$demande['profondeur']?>"
              />
            </div>
            <div class="col-6">
              <label for="dateDebut" class="form-label"> Date de début</label>
              <input
              readonly
                type="text"
                class="form-control"
                id="dateDeFin"
                value=" <?=$demande['dateDebut']?>"
              />
            </div>
             <div class="col-6">
              <label for="dateDeFin" class="form-label"> Date de fin</label>
              <input
              readonly
                type="text"
                class="form-control"
                id="dateDeFin"
                value=" <?=  $demande['dateFin']?>"
              />
            </div>
            <div class="form-floating">
  <textarea class="form-control"  id="besoins" style="height: 100px" readonly ><?= $demande['besoins'] ?> </textarea>
  <label for="besoins">Besoins</label>
</div>
<div class="form-floating">
  <textarea class="form-control" id="conditionsParticulieres" style="height: 100px" readonly> <?= $demande['conditionsParticulieres']  ?> </textarea>
  <label for="conditionsParticulieres">Conditions particulières</label>
</div>
            
            <div class="col-md-6">
              <label for="materiel1" class="form-label">Matériels </label>
                <br>
                 <?php 
                  foreach ($materielsDemandes as $materielDemande) {
                   echo $materielDemande['nom']. "</br> </br>"; 
                  }
                ?>
            </div>


          <div class=" col-12 fw-bold text-decoration-underline fst-italic">  Coûts </div>



        <div class="col-md-4">
              <label for="interventionHumaine" class="form-label">Coût Intervention Humaine</label>
              <input type="text" class="form-control" id="interventionHumaine" value="<?= $demande['CoutIH']?>" readonly />
            </div>
            <div class="col-md-4">
              <label for="coutMateriels" class="form-label">Coût Matériels </label>
              <input type="text" class="form-control" id="coutMateriels"value="<?=  $demande['coutMateriel'] ?>" readonly />
            </div>
            <div class="col-md-4">
              <label for="tva" class="form-label">TVA</label>
              <input type="text" class="form-control" id="tva"value="<?= $demande['tva'] ?>" readonly />
            </div>
            <div class="col-md-12">
              <label for="totalttc" class="form-label">Total TTC</label>
              <input type="text" class="form-control" id="totalttc"value="<?=  $demande['coutTotal'] ?>" readonly />
            </div>

             <div class="col-6">
              <a href="../client/listedevis.php" class="btn btn-danger m-3 d-grid gap-2 col-6 mx-auto"> Annuler  </a>
            </div>
            <!-- <div class="col-6">
              <input class="btn btn-success m-3 d-grid gap-2 col-6 mx-auto" name="validerDevis" type="submit" value="Valider le devis">
            </div> -->
           
            <div class="col-6">
              <input  type="submit" class="btn btn-success m-3 d-grid gap-2 col-6 mx-auto" value="Valider">
            </div>
          </form>
        </main>
      </div>
    </div>









<?php  
@include "../includes/footer.php";