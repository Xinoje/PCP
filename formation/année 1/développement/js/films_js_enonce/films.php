<?php
// Vérifie la présence des paramètres GET start et end
if (!(isset($_GET['start']) || !(isset($_GET['end'])))){
    // envoie une erreur 400 si non présents
    http_response_code(400);
    exit();
}


$start = $_GET['start'];
$end = $_GET['end'];

// se connecte à la base de donnée
include('connexion_bdd.php');

// Récupère les films correspondants
$requete = 'SELECT titre,
                   resume,
                   annee,
                   genre,
                   code_pays,
                   pays.nom as nom_pays,
                   AVG(note) as note,
                   realisateur.nom as nom_realisateur,
                   realisateur.prenom as prenom_realisateur
    FROM film
    JOIN notation
    ON notation.id_film = film.id_film
    JOIN artiste as realisateur
    ON film.id_realisateur = realisateur.id_artiste
    JOIN role
    ON role.id_film = film.id_film
    JOIN artiste as acteur
    ON role.id_acteur = acteur.id_artiste
    JOIN pays
    ON pays.code = film.code_pays

    WHERE annee > ?
    AND annee < ?
    GROUP BY titre;';

$films = $bdd -> prepare($requete);

$films -> execute([$start, $end]);

$tableau_films = $films -> fetchAll(PDO::FETCH_ASSOC);

// spécifie la réponse de type JSON
header('Content-Type: application/json; charset=utf-8');
// retourne les données JSON
echo json_encode($tableau_films);