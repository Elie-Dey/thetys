
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
                      WHERE iddemandes = $_GET[id]";


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
<form class="row g-3 border border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded" action="../respoTech/succesfichemission.php?idCom=<?=$_GET['idCommande']?>" method="POST">
            <legend class="text-center"> Formulaire fiche mission</legend>
           <div class="col-md-6">
              <label for="nom" class="form-label">Nom Client</label>
              <input  readonly type="text" class="form-control" id="nom" value="<?= $demande['nom'];?>" />
            </div>
            <div class="col-md-6">
              <label for="reference" class="form-label">Réference</label>
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
            <div class="col-4">
              <label for="duree" class="form-label"> Durée (en jours)</label>
              <input
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
         <div class="form-floating">
  <textarea class="form-control"  id="besoins" style="height: 100px" readonly ><?= $demande['besoins'] ?> </textarea>
  <label for="besoins">Besoins client</label>
</div>
<div class="form-floating">
  <textarea class="form-control" id="conditionsParticulieres" style="height: 100px" readonly> <?= $demande['conditionsParticulieres']  ?> </textarea>
  <label for="conditionsParticulieres">Condition particulières</label>
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
            <div class="col-md-6">
               <?php 
                @require '../../back/admin.php';
                   $sql = "SELECT *
                           FROM equipes ";

                  $requete = $db->query($sql);
                  $equipes = $requete->fetchAll(PDO::FETCH_ASSOC);

              ?>
              <label for="equipe" class="form-label">Choix équipe</label>
              <select name="equipe" class="form-select">
                <option selected>Choisissez..</option>
                <?php 
                  foreach ($equipes as $equipe) {
                   echo "<option value=$equipe[idequipes]> Equipe $equipe[nomEquipe] - $equipe[statut]</option>"; 
                  }

                ?>
                
              </select>
            </div>
            <div class="col-md-6">
               
            </div>
        
            <div class="col-6">
              <a href="../respoTech/listecommande.php" class="text-light btn btn-danger m-3 d-grid gap-2 col-6 mx-auto">Annuler </a>
            </div>
            <div class="col-6">
              <input class="btn btn-primary m-3 d-grid gap-2 col-6 mx-auto" type="submit" name="envoiDemande" value="Valider"> 
            </div>

          </form>
         </main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";