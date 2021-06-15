<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_3 Part_2</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 3  Partie 2</h1>
    <h2>
        Créez une variable initialisé à 1. Tant que cette variable n'a pas atteint 15, affichez 'On y est presque'.
    </h2>
    
    <?php
      for($gray=1; $gray <=15; $gray++){
        if($gray != 15){
          ?>
          <p class="text-center"><?= 'On y est presque.' ?></p>
          <?php
        }else{
          ?>
          <p class="text-center"><?= 'On y est' ?></p>
          <?php
        }
      }
    ?>
   
  </div>
</html>