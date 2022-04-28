 <?php
 
 session_start();
 
 //Reload la page chaque une minute pour avoir l'heure à jour
    $url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 60; URL=$url1");
?>
 
 <header
      class="navbar navbar-dark h-50 sticky-top flex-md-nowrap p-2 shadow"
    >
      <a class="navbar-brand col-md-3 col-lg-2 me-1 px-3 fw-bold" href="../accueil/accueil.php"
        >AIRBLIO - Téthys</a
      >
      <button
        class="navbar-toggler position-absolute d-md-none collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap d-flex">
          <a class="text-decoration-none text-light px-3 mt-4">

          <?php
              date_default_timezone_set('Europe/Paris');
              setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
             echo strftime('%A %d %B %Y %H:%M'). '<br>';

            ?>

          </a>
        </div>
      </div>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap d-flex">
          <a class=" text-decoration-none text-light pb-3 mt-2 text-uppercase h3" href="#"
            ><?= $titre ?> </a
          >
          
        </div>
      </div>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap d-flex">
          <a class="text-decoration-none text-light px-3 mt-4" href="#"><?= $_SESSION['nom']." ".$_SESSION['prenom'] ?></a>
        </div>
      </div>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap d-flex">
          <a class="nav-link px-3" href="../../back/deconnexion/logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
  <path d="M7.5 1v7h1V1h-1z"/>
  <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
</svg></a>
        </div>
      </div>
    </header>