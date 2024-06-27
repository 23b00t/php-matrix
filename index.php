<?php include_once "controller.php" ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Matrix</title>
    <meta name="" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="mt-4 text-center"> Matrix </h2>

    <!-- Schalter und Button um eine von zwei Funktionalitäten zu wählen -->
    <div class="container mt-4 d-flex justify-content-center align-items-center" >
      <form method="POST" action="controller.php">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="switch" value="all" checked>
          <label class="form-check-label" for="flexRadioDefault1">
            Alle Duplikate anzeigen 
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="switch" value="2x2">
          <label class="form-check-label" for="flexRadioDefault2">
            Nur Duplikate in 2x2 Matrix anzeigen
          </label>
        </div>
        <input type="submit" value="Anzeigen" name="submit" class="btn btn-outline-primary m-2">
      </form>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
