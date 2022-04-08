<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.84.0" />
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.0/examples/dashboard/"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"
      integrity="sha512-24XP4a9KVoIinPFUbcnjIjAjtS59PUoxQj3GNVpWc86bCqPuy3YxAcxJrxFCxXe4GHtAumCbO2Ze2bddtuxaRw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- Bootstrap core CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      /* header {
        height: 100px;
      } */
      .card,
      .navbar-dark {
        background-color: rgb(21, 81, 170);
      }
      /* .bi-arrow-right-circle-fill {
        margin-left: 90px;
      } */
      .bi-arrow-right-circle-fill:hover {
        color: black;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet" />
    <link href="/css/fonctions.css" rel="stylesheet" />
  </head>
  <body>
    <header
      class="navbar navbar-dark h-50 sticky-top flex-md-nowrap p-0 shadow"
    >
      <a class="navbar-brand col-md-3 col-lg-2 me-1 px-3" href="#"
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
          <a class="nav-link px-3 mt-4" href="#">28/03/2021 21:46</a>
        </div>
      </div>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap d-flex">
          <a class="nav-link px-3 text-uppercase" href="#">Nouvelle demande </a>
        </div>
      </div>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap d-flex">
          <a class="nav-link px-3 mt-4" href="#">Gagnat Paul</a>
        </div>
      </div>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap d-flex">
          <a class="nav-link px-3" href="index.html">Déconnexion</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav
          id="sidebarMenu"
          class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
        >
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="dashboard.html"
                >
                  <span data-feather="home"></span>
                  Accueil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="creationFacture.html">
                  <span data-feather="file-plus"></span>
                  Nouvelle demande
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mesfactures.html">
                  <span data-feather="list"></span>
                  Mes Demandes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="interventions.html">
                  <span data-feather="list"></span>
                  Mes Devis
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="interventions.html">
                  <span data-feather="list"></span>
                  Mes PV
                </a>
              </li>
            </ul>
          </div>
        </nav>

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
            <div class="col-6">
              <label for="latitude" class="form-label">Latitude </label>
              <input
                type="text"
                class="form-control"
                id="latitude"
                placeholder=""
                value=""
              />
            </div>
            <div class="col-6">
              <label for="longitude" class="form-label"> Longitude</label>
              <input
                type="text"
                class="form-control"
                id="longitude"
                placeholder="Apartment, studio, or floor"
              />
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity" />
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
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/dashboard.js"></script>
  </body>
</html>
