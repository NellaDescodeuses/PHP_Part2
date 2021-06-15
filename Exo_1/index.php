<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_1 Part_2</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 1  Partie 2</h1>
    <h2>
        Créez une boucle qui affiche les nombres de 0 à 10.
    </h2>
    <?php
        function showNumbers(){
            for ($numbers = 0; $numbers <= 10; $numbers ++){
                echo 'Le nombres est: ' . $numbers. '</br>'; 
            }
        }
    ?>
    <p class="text-center mt-4"><?= showNumbers() ?></p>

    <!-- autre affichage possible dans un <p> -->
    <?php
      $number = 0;
      while($number <= 10){
        ?>
        <p><?= 'Le nombres est: ' . $number ?></p>
        <?php $number++;
      }
    ?>
  </div>
</html>