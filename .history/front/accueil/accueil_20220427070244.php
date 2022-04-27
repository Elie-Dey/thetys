<?php 
//Definition du titre de la page 
$titre = "Accueil";
@include "../includes/head-style.php";
@include "../includes/header.php";
?>

<div class="container-fluid">
      <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5
        position-absolute top-50 start-50 translate-middle">

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          
          <div class="col">
            <div
              class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-lg 
              <?php 
                if($_SESSION['codeIdentification'] != "FI"){
                  echo "bg-dark";
                }
              ?>
              
              "
            >
              <div
                class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="60"
                  height="60"
                  fill="currentColor"
                  class="bi bi-receipt"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"
                  />
                  <path
                    d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"
                  />
                </svg>
                <h2 class="pt-3 mb-4 display-10 lh-1 fw-bold">
                  FACTURES 

                </h2>
                <a href="../direcFin/listefacture.php"
                <?php 
                    if($_SESSION['codeIdentification'] != "FI"){
                        echo 'style: pointer-events: none"';
                    }
                 ?>>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="50"
                  height="50"
                  fill="white"
                  class="bi bi-arrow-right-circle-fill ml-3"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"
                  />
                </svg>
              </a>
              </div>
            </div>
          </div>
          

          <div class="col">
            <div
              class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-lg
               <?php 
                if($_SESSION['codeIdentification'] != "CO"){
                  echo "bg-dark";
                }
              ?>
              "
            >
              <div
                class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 mt-5"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="50"
                  height="50"
                  fill="currentColor"
                  class="bi bi-cart-check"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"
                  />
                  <path
                    d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"
                  />
                </svg>
                <h2 class="pt-3 mb-4 display-10 lh-1 fw-bold">
                   COMMANDES

                </h2>
                <a href="../RespoCom/listedemandes.php"  
                <?php 
                if($_SESSION['codeIdentification'] != "CO"){
                     echo 'style="pointer-events: none"';
                  }
                 ?>>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="50"
                  height="50"
                  fill="white"
                  class="bi bi-arrow-right-circle-fill ml-3"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"
                  />
                </svg>
                </a>
              </div>
            </div>
          </div>

          <div class="col">
            <div
              class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-lg
               <?php 
                if($_SESSION['codeIdentification'] != "EQ"){
                  echo "bg-dark";
                }
              ?>"
            >
              <div
                class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 mt-5"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>
                <h2 class="pt-3 mb-4 display-10 lh-1 fw-bold">
                  EQUIPES
                </h2>
                <a href="../expertTech/listefichemissions.php"
                <?php 
                if($_SESSION['codeIdentification'] != "EQ"){
                     echo 'style="pointer-events: none"';
                }
              ?>
                >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="50"
                  height="50"
                  fill="currentColor"
                  class="bi bi-arrow-right-circle-fill ml-3"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"
                  />
                </svg>
                 </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div
              class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-lg
               <?php 
                if($_SESSION['codeIdentification'] != "TE"){
                  echo "bg-dark";
                }
              ?>
              
              
              "
            >
              <div
                class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
</svg>
                <h2 class="pt-3 mb-4 display-10 lh-1 fw-bold">
                  INTERVENTIONS
                </h2>
                <a  href="../respoTech/listedemandedevis.php"
                  <?php 
                if($_SESSION['codeIdentification'] != "TE"){
                     echo 'style="pointer-events: none"';
                }
              ?>
                >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="50"
                  height="50"
                  fill="currentColor"
                  class="bi bi-arrow-right-circle-fill ml-3 "
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"
                  />
                </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div
              class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-lg
               <?php 
                if($_SESSION['codeIdentification'] != "EQ" || $_SESSION['codeIdentification'] != "CO" || $_SESSION['codeIdentification'] != "TE"){
                  echo "bg-dark";
                }
              ?>
              
              "
            >
              <div
                class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg>
                <h2 class="pt-3 mb-4 display-10 lh-1 fw-bold">
                  VISUALISATIONS
                </h2>
                <a href="../visualisation/visualisation2.php"
                <?php 
                if($_SESSION['codeIdentification'] != "EQ" || $_SESSION['codeIdentification'] != "CO" || $_SESSION['codeIdentification'] != "TE"){
                     echo 'style="pointer-events: none"';
                }
              ?>
                
                >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="50"
                  height="50"
                  fill="currentColor"
                  class="bi bi-arrow-right-circle-fill ml-3"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"
                  />
                </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div
              class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-lg
               <?php 
                if($_SESSION['codeIdentification'] != "TE"){
                  echo "bg-dark";
                }
              ?>
              "
            >
              <div
                class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
  <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"/>
</svg>
                <h2 class="pt-3 mb-4 display-10 lh-1 fw-bold">
                  DONNEES
                </h2>
                <a href="../donnees/donnee.php"
                <?php 
                if($_SESSION['codeIdentification'] != "TE"){
                     echo 'style="pointer-events: none"';
                }
              ?>
                
                >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="50"
                  height="50"
                  fill="currentColor"
                  class="bi bi-arrow-right-circle-fill ml-3"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"
                  />
                </svg>
                </a>
              </div>
            </div>
          </div>
           <!-- <div class="col">
            <div
              class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-lg
               <?php 
                if($_SESSION['codeIdentification'] != "CL"){
                  echo "bg-dark";
                }
              ?>"
            >
              <div
                class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg>
                <h2 class="pt-3 mb-4 display-10 lh-1 fw-bold">
                  CLIENTS
                </h2>
                 <a href="../client/creationdemande.php" 
                 
                 <?php 
                if($_SESSION['codeIdentification'] != "CL"){
                     echo 'style="pointer-events: none"';
                }
              ?>>  
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="50"
                  height="50"
                  fill="white"
                  class="bi bi-arrow-right-circle-fill ml-3"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"
                  />
                </svg>
                </a>
              </div>
            </div>
          </div> -->
          
          <!-- <div class="col">
            <div
              class="card  card-cover h-100 overflow-hidden text-white rounded-5 shadow-lg
               <?php 
                if($_SESSION['codeIdentification'] != "TE"){
                  echo "bg-dark";
                }
              ?>
              
              
              "
            >
              <div
                class="d-flex  disabled flex-column h-100 p-5 pb-3 text-white text-shadow-1"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
</svg>
                <h2 class="pt-3 mb-4 display-10 lh-1 fw-bold">
                  INTERVENTIONS
                </h2>
                <a  href="../respoTech/listedemandedevis.php"
                  <?php 
                if($_SESSION['codeIdentification'] != "TE"){
                     echo 'style="pointer-events: none"';
                }
              ?>
                >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="50"
                  height="50"
                  fill="currentColor"
                  class="bi bi-arrow-right-circle-fill ml-3 "
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"
                  />
                </svg>
                </a>
              </div>
            </div>
          </div> -->



          
        </div>
      </div>
    </div>

<?php  
@include "../includes/footer.php";