<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_4 Part_2</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 4  Partie 2</h1>
    <h2>
        Initialisez une variable à 1. Tant que cette variable est inférieure à 100, incrémentez avec un pas de 15.
    </h2>
    <?php
        function forLoop(){
            $firstVar = 1;
            for ( $firstVar; $firstVar <= 100; $firstVar +=15){
                echo  'Le nombre est le suivant : ' .$firstVar . '</br>';
            }        

        }
    ?>
   <p class="text-center mt-4"><?= forLoop() ?></p>
  </div>
</html>