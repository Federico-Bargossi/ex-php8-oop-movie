<?php

//creazione genere
$crime_genre = new Genre('Crime' , 'Un genere di narrativa su i crimini');

//creazione movies
$movies = [
    new Movie('Il padrino', 1972, 9.2, $crime_genre),
    new Movie('Il cavaliere oscuro', 2008, 9.0, new Genre('Azione', 'Un genere che mira sull azione')),
    new Movie('Tre uomini e una gamba', 1997, 7.2, new Genre('Commedia', 'un Genere che mira a fare ridere il pubblico'))
];

//impostiamo le descrizioni
$movies[0]->description = 'La storia epica della famiglia mafiosa Corleone, simbolo della criminalità organizzata negli USA.';
$movies[1]->description = 'Batman affronta Joker in un duello psicologico e morale, in un Gotham cupo e intenso.';
$movies[2]->description = 'Tre amici partono per un viaggio on the road, pieno di disavventure e comicità surreale.';



?>
