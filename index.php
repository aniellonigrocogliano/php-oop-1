<?php 
    require_once 'class/movie.php';
    require_once 'class/genere.php';
    require_once 'class/attori.php';

    $attoriInterstellar = [
        ['Matthew', 'McConaughey', '04/11/1969'],
        ['Anne', 'Hathaway', '12/11/1982'],
        ['Jessica', 'Chastain', '03/24/1977'],
        ['Mackenzie', 'Foy', '11/10/2000'],
        ['John', 'Lithgow', '10/19/1945'],
        ['Michael', 'Caine', '03/14/1933'],
        ['Casey', 'Affleck', '08/12/1975'],
        ['Topher', 'Grace', '07/12/1978'],
        ['David', 'Gyasi', '01/02/1980'],
        ['Wes', 'Bentley', '09/04/1978'],
        ['Matt', 'Damon', '10/08/1970']
    ];
    $attoriOppenheimer = [
        ['Cillian', 'Murphy', '05/25/1976'],
        ['Emily', 'Blunt', '02/23/1983'],
        ['Matt', 'Damon', '10/08/1970'],
        ['Robert', 'Downey Jr.', '04/04/1965'],
        ['Florence', 'Pugh', '01/03/1996'],
        ['Rami', 'Malek', '05/12/1981'],
        ['Benny', 'Safdie', '02/24/1986'],
        ['Josh', 'Hartnett', '07/21/1978'],
        ['Dane', 'DeHaan', '02/06/1986'],
        ['Alden', 'Ehrenreich', '11/22/1989'],
        ['Kenneth', 'Branagh', '12/10/1960']
    ];

    $interstellarGenere = new Genere('Avventura, Dramma, Fantascienza');
    foreach ($attoriInterstellar as $attoreData) {
        $interstellarAttori[] = new Attori($attoreData);
    }
    $interstellar = new movie('Interstellar', 'Christopher Nolan', '06/11/2014', $interstellarGenere, $interstellarAttori, 'en', '169', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/c8lJWsjbrZ0sEjHc7dGh1yOagRK.jpg', 'In seguito alla scoperta di un cunicolo spazio-temporale, un gruppo di esploratori si avventura in una eroica missione per tentare di superare i limiti della conquista spaziale e oltrepassare le distanze che fino a quel momento avevano reso impraticabili i viaggi interstellari. L\'obiettivo è quello di trovare nuovi luoghi dove coltivare il granoturco, l\'unica coltivazione rimasta dopo un drastico cambiamento climatico che ha colpito soprattutto l\'agricoltura.',  ); 

    $OppenheimerGenere = new Genere('Dramma, Storia');
    foreach ($attoriOppenheimer as $attoreData) {
        $oppenheimerAttori[] = new Attori($attoreData);
    }
    $Oppenheimer = new movie('Oppenheimer', 'Christopher Nolan', '23/08/2023', $OppenheimerGenere, $oppenheimerAttori, 'en', '189', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/fRtaxfyynWMJI6DhejyA6JOzVTB.jpg','La storia del ruolo di J. Robert Oppenheimer, i quali studi condussero alle scoperte legate alla bomba atomica, con il conseguente utilizzo durante le stragi di Hiroshima e Nagasaki durante la Seconda Guerra Mondiale.', );
    
    $arraymovie=[];
    $arraymovie= $interstellar->getMovie();
    $arraymovie= $Oppenheimer->getMovie();
    var_dump($arraymovie);

?>