 <header
      class="navbar navbar-dark h-50 sticky-top flex-md-nowrap p-2 shadow"
    >
      <a class="navbar-brand col-md-3 col-lg-2 me-1 px-3 fw-bold" href="#"
        >AIRBLIO - Thétys</a
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
              setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
             echo strftime('%A %d %B %Y %H:%M:%S'). '<br>';

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
          <a class="text-decoration-none text-light px-3 mt-4" href="#">Gagnat Paul</a>
        </div>
      </div>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap d-flex">
          <a class="nav-link px-3" href="../../index.html">Déconnexion</a>
        </div>
      </div>
    </header>