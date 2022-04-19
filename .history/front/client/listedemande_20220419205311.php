<?php 
//Definition du titre de la page 
$titre = "Liste des demandes";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>


<div class="container-fluid">
      <div class="row">
      <?php  @include "../client/client-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
        <table class="table border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom client</th>
      <th scope="col">N°demande</th>
      <th scope="col">Date de demande</th>
      <th scope="col">Statut</th>
    <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    
   <?php 
      @require '../../back/admin.php';

      $sql = "SELECT * 
              FROM equipes 
              INNER JOIN membreequipe
              ON equipes.idequipes = membreequipe.equipe_id
              WHERE nomEquipe = membreequipe.nom";

     $requete = $db->query($sql);
      $count = 0;

     if($requete != FALSE ){
        $equipes = $requete->fetchAll(PDO::FETCH_ASSOC);
        foreach($equipes as $equipe) : 
         $count++;
    ?>
    <tr>
      <th scope="row">1</th>
      <td>Marky Ocean</td>
      <td>25</td>
      <td>10/03/2022</td>
      <td>Non traitée</td>
      <td>
          <a href="../client/detaildemande.php" class="text-dark m-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
        </a>

      </td>
      
    </tr>

     <?php endforeach; 
     }
     ?>
    <tr>
      <th scope="row">2</th>
      <td>Marky Ocean</td>
      <td>25</td>
      <td>10/03/2022</td>
      <td>traitée</td>
      <td>
          <a href="../client/detaildemande.php" class="text-dark m-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
        </a>

      </td>
      
    </tr>
   
  </tbody>
</table>
</main>
      </div>
    </div>
<?php  
@include "../includes/footer.php";