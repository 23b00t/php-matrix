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
    <h2 class="mt-4 text-center"> Matrix Auswertung </h2>

    <!-- Generiere eine zufällige Matrix und gib sie aus -->
    <div class="container mt-4 d-flex justify-content-center align-items-center">
      <?php 
      $matrix = generateMatrix(); 
      printArray($matrix);
      ?>
    </div>

    <!-- Zeichne eine Tabelle und rufe run mit der generierten Matrix als Argument auf -->
    <div class="container mt-4 d-flex justify-content-center align-items-center">
      <table class="table">
        <tr>
          <th scope="col"> Zahl </th>
          <th scope="col"> Koordinaten </th>
        </tr>
        <?php run($matrix); ?>
      </table>
    </div>

    <!-- Rücksetzbutton -->
    <div class="container d-flex justify-content-center align-items-center">
        <form name="form" action="controller.php" method="post" id="reset">
            <input type="hidden" id="reset-field" name="unset" value="true">
            <button class="btn btn-outline-success m-4" type="submit" form="reset" value="Submit">Neu starten</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
