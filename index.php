<?php
require 'include/header.php';

$films = $dbh->prepare("SELECT film.nom as Titre, genre, annee, r.nom, r.prenom
FROM film
         LEFT JOIN genre g on film.genre_id = g.id
         LEFT JOIN année a on film.annee_id= a.id
         LEFT JOIN realisateur r on film.realisateur_id = r.id");
$films->execute();

echo '<div class="row">';

if ($films->rowCount() == 1) {

    $films = $films->fetch(PDO::FETCH_ASSOC);


    echo '<div class="accordion" id="accordionExample">';
    echo '<div class="accordion-item">';
    echo '<h2 class="accordion-header" id="headingOne">';
    echo '<button class="accordion-button" type = "button" data - bs - toggle = "collapse" data - bs - target = "#collapseOne" aria - expanded = "true" aria - controls = "collapseOne" >' . $films['Titre'] .'</button >';
    echo '</h2 >';
    echo '<div id = "collapseOne" class="accordion-collapse collapse show" aria - labelledby = "headingOne" data - bs - parent = "#accordionExample" >';
    echo '<div class="accordion-body" >';
    echo '<ul>';
    echo '<li>Genre: ' . $films['genre'] . '</li>';
    echo '<li>Année: ' . $films['annee'] . '</li>';
    echo '<li>Réalisateur: ' . $films['nom'] . ' ' . $films['prenom'] . '</li>';
    echo '</ul>';
    echo '</div >';
    echo '</div >';
    echo '</div >';

}

echo '</div>';

require 'include/footer.php';
