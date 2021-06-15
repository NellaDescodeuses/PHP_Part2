<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_5 Part_2</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 5  Partie 2</h1>
    <h2>
        Initialisez une variable à 200. Tant que cette variable est supérieure à 0, décrémentez avec un pas de 12.
    </h2>
    <?php
            $firstVar = 200;
            for ( $firstVar; $firstVar > 0; $firstVar -=12){
              ?>
              <p><?= 'Le nombre est le suivant : ' . $firstVar ?></p>
              <?php
            }        

    ?>
  </div>
</html>