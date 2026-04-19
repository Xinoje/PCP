<?php
$var = 'coucou';
$mon_html = "<!DOCTYPE html> <html>
  <head>
  <title>Bienvenu, entrez l'année pour retrouver votre</title>
  </head>
  <php

$annee = readline('Année: ');
$genre = readline('Genre: ');

$bdd = new PDO(
    'mysql:host=localhost;dbname=films',
    'root',
    ''
);

$requete = 'SELECT titre FROM films;

$films = $bdd -> prepare($requete)
$films -> execute([
    'annee'
]);
 

  <body></body>
</html>";


































//Structure affichage

$requete = 'SELECT * FROM film;';
$reponse = $bdd -> query($requete);

foreach ($reponse as $ligne){
    echo $ligne['titre']. PHP_EOL;
}
//