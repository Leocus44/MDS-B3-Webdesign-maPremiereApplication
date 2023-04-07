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
  
  function afficherLeTexte($texte) {
    echo $texte;
    echo '<br />';
  }

  function additionner($nombre1,$nombre2) {
    return $nombre1 + $nombre2;
  }

  function toUppercase($texte) {
    return strtoupper($texte);
  }

  function afficherLaTable($nombre) {
    $resultat = '';
    for ($i = 1; $i <= 10; $i++) {
      $resultat = $resultat . $i . 'x' .$nombre . '=' . $i * $nombre . '<br />';
    }

    return $resultat;
  }

  afficherLeTexte('TOTO');
  afficherleTexte(additionner(1,2));
  afficherLeTexte(toUppercase('super !!!'));
  afficherLeTexte(afficherLaTable(5));

  ?>
  
  
</body>
</html>