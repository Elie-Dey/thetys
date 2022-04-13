<?php 
//Definition du titre de la page 
$titre = "Liste des matériels";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
      <?php  @include "../respoTech/respoTech-navbar.php";  ?>
      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
        <table class="table border-2 rounded mb-3 shadow-lg p-3 mb-5 bg-body rounded table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom matériel</th>
      <th scope="col">Localisation </th>
      <th scope="col">Coût location</th>
      <th scope="col">Coût expedition</th>
    <th scope="col">Stock</th>
    <th scope="col">Statut</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      // @require '../../back/admin.php';

        //Definition de constante d'environnement

      define("DBHOST", "localhost");
      define("DBUSER", "root");
      define("DBPASS", "");
      define("DBNAME", "airblio");


    //DSN de connexion

      $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

    //On va se connecter à la base 
      try{
        //On instancie PDO

          $db = new PDO($dsn, DBUSER, DBPASS);

          //On s'assure d'envoyer les données en utf8

          $db->exec("SET NAMES utf8");
      }catch(PDOException $e){
          die($e->getMessage());
      }
      $sql = "SELECT *  FROMè `materiels` 
              INNER JOIN `siteStockages`
              ON materiels.siteStockages_id = siteStockages.id";
      $requete = $db->query($sql);
      //On recupere les données (fetch ou fetchAll)

       $materiels = $requete->fetch(PDO::FETCH_ASSOC);
      // $clients = $requete->fetchAll(PDO::FETCH_ASSOC);
  
      $count = 0;

      while($materiels = $statement->fetch()){
        $count++;
        echo " <tr>";
        echo '<th scope="row">'.$count.'</th>';
        echo "<td>".$materiels['materiels.nom']."<td>";
        echo "<td>".$materiels['coutLocation']."<td>";
        echo "<td>".$materiels['coutExpedition']."<td>";
        echo "<td>".$materiels['stock']."<td>";
        echo "<td>".$materiels['status']."<td>";
        echo "</tr>";
      
      }
    ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>AIRBLIOBASE  </td>
      <td>Marseille</td>
       <td>8 000 €</td>
       <td>8 000 €</td>
       <td>50</td>
      <td>Non disponible</td>
    </tr> -->
   
  </tbody>
</table>
</main>
      </div>
    </div>



<?php  
@include "../includes/footer.php";