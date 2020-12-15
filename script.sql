-- ajoute le genre
INSERT INTO videoclub.genre (genre)
    VALUE ('Fantastique');

-- ajoute un film
INSERT INTO videoclub.film(id, nom, realisateur_id, genre_id, annee_id)
VALUES ('1', 'Spider-man', '1', '1', '1');

-- ajoute l'année
INSERT INTO année VALUES ( '2002');

-- ajoute le realisateur
INSERT INTO realisateur(id, nom, prenom)
VALUES ('1','Ian','Bryce');

-- affiche le film
SELECT film.nom, genre, annee, r.nom, r.prenom
FROM film
LEFT JOIN genre g on film.genre_id = g.id
LEFT JOIN année a on film.annee_id= a.id
LEFT JOIN realisateur r on film.realisateur_id = r.id