<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Bonus Part_2</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Bonus Partie 2</h1>
    <h2>
        Créez un tableau contenant les 12 mois de l'année. Afficher ces mois dans un "select".
    </h2>
    <select class="mt-4">
        <?php
            $monthsTab = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
            $monthsTablength =  count($monthsTab);
            for($i = 0; $i < $monthsTablength; $i++){
                ?>
                <option><?= $monthsTab[$i] ?></option>
                <?php
            }
        ?>
    </select>
    <?php
        $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
      ?>
      <select>
        <?php
        foreach ($tab as $value) {
          ?>
          <option><?= $value ?></option>
          <?php
        }
        ?>
      </select>
  </div>
</html>