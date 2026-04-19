<?php
include('db.php');
if (isset($_GET['annee'])){
    $requete = 'SELECT titre, AVG(note) as note_moyenne
                FROM film
                JOIN notation
                ON notation.id_film = film.id_film
                WHERE annee = :annee
                GROUP BY titre';

    $films = $bdd -> prepare($requete);
    $films -> execute([
            'annee' => $_GET['annee'],
            ]);

    
    include('view/films_view.php');
    
}