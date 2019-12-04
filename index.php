<?php
//déclaration des variables
$min = 0;
$max = 300;
$evenNumber = '';
/*  Création d'une boucle qui va calculer la valeur de $i pour ensuite l'afficher.

La première expression ($i = $min;) est évaluée (exécutée),
quoi qu'il arrive au début de la boucle.

Au début de chaque itération, l'expression ($i <= $max;) est évaluée.
Si l'évaluation vaut TRUE, la boucle continue et les commandes sont
exécutées. Si l'évaluation vaut FALSE, l'exécution de la boucle
s'arrête.

À la fin de chaque itération, l'expression ($i++) est évaluée
(exécutée): $i++ est la version simplifiée de $i = $i+1 */
for ($i = $min; $i <= $max; $i++) {
  /* Si la division de $i par 2 est belle et bien égale à 0, alors
  cela vérifie que $i est un nombre pair */
  if ($i % 2 == 0) {
    /* '.=' concaténation de la valeur précédente de $evenNumber à
    sa valeur actuelle, ce qui a pour effet d'afficher à l'écran tous les chiffres pairs souhaités */
    $evenNumber .= $i .' ';
    }
};
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP partie4 exo5</title>
  </head>
  <body>
    <p><?php echo $evenNumber; ?></p>
  </body>
</html>
