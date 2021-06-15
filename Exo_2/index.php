<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_2 Part_2</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 2  Partie 2</h1>
    <h2>
        Créez deux variables. L'une initialisée à 0 et l'autre avec un nombre aléatoire de 1 à 100.
        Tant que la variable n'a pas atteint 20, multiplier la première variable par la deuxième est afficher le résultat.
    </h2>
    <?php
      function showNumbers(){
        $firstVar = 0;
        $randomVar = rand(1,100);
        echo 'Le nombre aléatoire est: ' .$randomVar. '</br>';
        while ($firstVar <= 20){
          echo 'Le nombres est: ' . $firstVar * $randomVar .'</br>';
          $firstVar++;
        }
      }
    ?>
   <p class="text-center mt-4"><?= showNumbers() ?></p>
  </div>
</html>