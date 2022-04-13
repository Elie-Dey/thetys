<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Connexion THETYS</title>

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
      body {
        background-color: white;
        background-image: url("images/indexBg.jpg");
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/connexion.css" rel="stylesheet" />
  </head>
  <body class="text-center">

    <main class="form-signin">
      <form action="../thetys/back/connexion/login.php" method="POST">
        <h1 class="h3 mb-5 fw-bold fst-italic text-white">AIRBLIO - THETYS</h1>

        <div class="form-floating mb-3">
          <input
            type="text"
            class="form-control"
            id="identifiant"
            name="identifiant"
            placeholder="AD6-AB"
          />
          <label for="floatingInput">Identifiant</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            name="motdepasse"
            id="motdepasse"
            placeholder="Password"
          />
          <label for="motdepasse">Mot de passe</label>
        </div>

        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Connexion">
          
        </input>

        <p class="mt-5 pt-5 mb-3 text-white">Powered By SMART CONSULTING</p>
      </form>
    </main>
  </body>
</html>
