<?php 
    require_once 'class/movie.php';
    require_once 'class/genere.php';
    require_once 'class/attori.php';

    $interstellarGenere = new Genere('Avventura, Dramma, Fantascienza');
    $interstellar = new movie('Interstellar', 'Christopher Nolan', '06/11/2014', $interstellarGenere, 'en', '169', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/c8lJWsjbrZ0sEjHc7dGh1yOagRK.jpg', 'In seguito alla scoperta di un cunicolo spazio-temporale, un gruppo di esploratori si avventura in una eroica missione per tentare di superare i limiti della conquista spaziale e oltrepassare le distanze che fino a quel momento avevano reso impraticabili i viaggi interstellari. L\'obiettivo è quello di trovare nuovi luoghi dove coltivare il granoturco, l\'unica coltivazione rimasta dopo un drastico cambiamento climatico che ha colpito soprattutto l\'agricoltura.'); 

    var_dump($interstellar->getMovie());
?>