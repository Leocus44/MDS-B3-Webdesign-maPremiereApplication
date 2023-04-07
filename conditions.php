<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    //Je définis ma vitesse max
    define('VITESSE_MAXIMUM', 50);
    //Je définis ma vitesse
    $vitesse = 50;

    if ($vitesse > VITESSE_MAXIMUM) {
      echo 'Vous roulez trop vite !';
    } else {
      echo 'Vous roulez tranquilement';
    }
  
    echo'<br /> Enchainement de conditions <br />';
    echo'<br />';

    $classePerso = 'nain';
    //Avec des elseif
    if ($classePerso === 'elfe') {
      echo 'Vous êtes un elfe !';
      echo '<br />';
      echo 'J\'ai de grandes oreilles !';
    } elseif ($classePerso === 'humain') {
      echo 'Je suis un humain !';
      echo '<br />';
      echo 'J\'ai le pieds léger !';
    } elseif ($classePerso === 'nain') {
      echo 'Je suis un nain !';
      echo '<br />';
      echo 'J\'aime la bière!';
    } else {
      echo 'Je n\'existe pas!';
    }

    echo '<br />';

    switch ($classePerso) {
      //Avec des switch
      case 'elfe':
        echo 'Vous êtes un elfe !';
        echo '<br />';
        echo 'J\'ai de grandes oreilles !';
      case 'humain':
        echo 'Je suis un humain !';
        echo '<br />';
        echo 'J\'ai le pieds léger !';
      case 'nain':
        echo 'Je suis un nain !';
        echo '<br />';
        echo 'J\'aime la bière!';
      default:
        echo 'Je n\'existe pas!';
    }

  ?>
  
</body>
</html>