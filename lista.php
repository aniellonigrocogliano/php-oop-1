<?php
$arraymovie = [];

// Tarantella (1989)
$attoriTarantella = [
    ['Christopher', 'Nolan', '30/07/1970'],
    ['Roko', 'Belic', '08/09/1971' ],
];
$tarantellaGenere = new Genere('Corto, Drammatico');
$tarantellaAttori = [];
foreach ($attoriTarantella as $attoreData) {
    $tarantellaAttori[] = new Attori($attoreData);
}
$tarantella = new movie(
    'Tarantella',
    'Christopher Nolan',
    '01/01/1989',
    $tarantellaGenere,
    $tarantellaAttori,
    'en',
    '9',
    'https://image.tmdb.org/t/p/w600_and_h900_bestv2/eqFhruWEIRwjkvqgJN48VPuR50Q.jpg',
    'Un breve film sperimentale.'
);
$arraymovie[] = $tarantella->getMovie();

// Doodlebug (1997)
$attoriDoodlebug = [
    ['Jeremy', 'Theobald', '12/11/1972']
];
$doodlebugGenere = new Genere('Corto, Drammatico, Fantascienza');
$doodlebugAttori = [];
foreach ($attoriDoodlebug as $attoreData) {
    $doodlebugAttori[] = new Attori($attoreData);
}
$doodlebug = new movie(
    'Doodlebug',
    'Christopher Nolan',
    '05/01/1997',
    $doodlebugGenere,
    $doodlebugAttori,
    'en',
    '3',
    'https://image.tmdb.org/t/p/w600_and_h900_bestv2/cXDFFv6yZNW3vUHOKKUPJNnL0So.jpg',
    'Un uomo è tormentato da una piccola creatura nel suo appartamento. Mentre tenta di ucciderla, si rende conto di una sconvolgente verità.'
);
$arraymovie[] = $doodlebug->getMovie();

// Larceny (1996)
$attoriLarceny = [
    ['John', 'Nolan', '05/22/1938'],
    ['Mark', 'Deighton', 'Sconosciuta'],
    ['Dave', 'Savva', 'Sconosciuta']
];
$larcenyGenere = new Genere('Corto, Thriller');
$larcenyAttori = [];
foreach ($attoriLarceny as $attoreData) {
    $larcenyAttori[] = new Attori($attoreData);
}
$larceny = new movie(
    'Larceny',
    'Christopher Nolan',
    '01/01/1996',
    $larcenyGenere,
    $larcenyAttori,
    'en',
    '5',
    'https://image.tmdb.org/t/p/w600_and_h900_bestv2/uL0iqPb4dtICVCCMKYem2yRPBRX.jpg',
    'Un breve film che segue le conseguenze di un furto d\'ufficio.'
);

// Following (1998)
$attoriFollowing = [
    ['Jeremy', 'Theobald', '01/01/0001'],
    ['Alex', 'Haw', '01/01/0001'],
    ['Lucy', 'Russell', '01/01/0001'],
    ['John', 'Nolan', '05/22/1938']
];
$followingGenere = new Genere('Crime, Mystery, Thriller');
$followingAttori = [];
foreach ($attoriFollowing as $attoreData) {
    $followingAttori[] = new Attori($attoreData);
}
$following = new movie(
    'Following',
    'Christopher Nolan',
    '11/06/1998',
    $followingGenere,
    $followingAttori,
    'en',
    '69',
    'https://image.tmdb.org/t/p/w600_and_h900_bestv2/fmls6kOMCfKWrJaq43PLCWVr6ve.jpg',
    'Un giovane scrittore senza ispirazione inizia a seguire sconosciuti per le strade di Londra alla ricerca di storie, finché non si imbatte in un ladro che lo introduce al mondo del crimine.'
);
$arraymovie[] = $following->getMovie();

// Memento (2000)
$attoriMemento = [
    ['Guy', 'Pearce', '10/05/1967'],
    ['Carrie-Anne', 'Moss', '08/21/1967'],
    ['Joe', 'Pantoliano', '09/12/1951'],
    ['Mark', 'Boone Junior', '03/17/1955'],
    ['Stephen', 'Tobolowsky', '05/30/1951']
];
$mementoGenere = new Genere('Mystery, Thriller');
$mementoAttori = [];
foreach ($attoriMemento as $attoreData) {
    $mementoAttori[] = new Attori($attoreData);
}
$memento = new movie(
    'Memento',
    'Christopher Nolan',
    '03/16/2001',
    $mementoGenere,
    $mementoAttori,
    'en',
    '113',
    'https://image.tmdb.org/t/p/w600_and_h900_bestv2/dCCsDcMeJFVOUN0mt9QYGHZDquq.jpg',
    'Leonard è affetto da un disturbo della memoria a breve termine a seguito di un trauma subito durante l\'omicidio di sua moglie. Per vendicarsi, inizia a investigare, ma la sua condizione lo costringe a usare polaroid e tatuaggi per ricordare.'
);
$arraymovie[] = $memento->getMovie();

// Insomnia (2002)
$attoriInsomnia = [
    ['Al', 'Pacino', '04/25/1940'],
    ['Robin', 'Williams', '07/21/1951'],
    ['Hilary', 'Swank', '07/30/1974'],
    ['Maura', 'Tierney', '02/03/1965'],
    ['Martin', 'Donovan', '08/19/1957']
];
$insomniaGenere = new Genere('Mystery, Thriller');
$insomniaAttori = [];
foreach ($attoriInsomnia as $attoreData) {
    $insomniaAttori[] = new Attori($attoreData);
}
$insomnia = new movie(
    'Insomnia',
    'Christopher Nolan',
    '05/24/2002',
    $insomniaGenere,
    $insomniaAttori,
    'en',
    '118',
    'https://image.tmdb.org/t/p/w600_and_h900_bestv2/riVXh3EimGO0y5dgQxEWPRy5Itg.jpg',
    'Due detective di Los Angeles sono inviati in una piccola città dell\'Alaska per investigare sull\'omicidio di una ragazza di 17 anni. Ma il caso diventa una lotta contro la coscienza per uno dei detective, che accidentalmente uccide il suo partner.'
);
$arraymovie[] = $insomnia->getMovie();

// Batman Begins (2005)
$attoriBatmanBegins = [
    ['Christian', 'Bale', '01/30/1974'],
    ['Michael', 'Caine', '03/14/1933'],
    ['Liam', 'Neeson', '06/07/1952'],
    ['Katie', 'Holmes', '12/18/1978'],
    ['Gary', 'Oldman', '03/21/1958'],
    ['Cillian', 'Murphy', '05/25/1976'],
    ['Tom', 'Wilkinson', '12/12/1948'],
    ['Rutger', 'Hauer', '01/23/1944']
];
$batmanBeginsGenere = new Genere('Action, Crime, Drama');
$batmanBeginsAttori = [];
foreach ($attoriBatmanBegins as $attoreData) {
    $batmanBeginsAttori[] = new Attori($attoreData);
}
$batmanBegins = new movie(
    'Batman Begins',
    'Christopher Nolan',
    '06/15/2005',
    $batmanBeginsGenere,
    $batmanBeginsAttori,
    'en',
    '140',
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/53lvq1hrL8NcFW1VXEhfXH0UmWt.jpg',
    'Dopo aver viaggiato per il mondo alla ricerca dei mezzi per combattere l\'ingiustizia, Bruce Wayne ritorna a Gotham City e adotta l\'identità del suo alter ego mascherato, Batman, per combattere le forze del male.'
);
$arraymovie[] = $batmanBegins->getMovie();

// The Prestige (2006)
$attoriPrestige = [
    ['Christian', 'Bale', '01/30/1974'],
    ['Hugh', 'Jackman', '10/12/1968'],
    ['Scarlett', 'Johansson', '11/22/1984'],
    ['Michael', 'Caine', '03/14/1933'],
    ['Rebecca', 'Hall', '05/03/1982'],
    ['Andy', 'Serkis', '04/20/1964'],
    ['David', 'Bowie', '01/08/1947']
];
$prestigeGenere = new Genere('Drama, Mystery, Thriller');
$prestigeAttori = [];
foreach ($attoriPrestige as $attoreData) {
    $prestigeAttori[] = new Attori($attoreData);
}
$prestige = new movie(
    'The Prestige',
    'Christopher Nolan',
    '10/20/2006',
    $prestigeGenere,
    $prestigeAttori,
    'en',
    '130',
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xKsiJimxRa44FArhlfGHnylrT0i.jpg',
    'Due maghi rivali nell\'Inghilterra vittoriana si sfidano per creare l\'illusione perfetta, ma la loro ossessione li porta a sacrificare tutto ciò che hanno di caro.'
);
$arraymovie[] = $prestige->getMovie();

// The Dark Knight (2008)
$attoriDarkKnight = [
    ['Christian', 'Bale', '01/30/1974'],
    ['Heath', 'Ledger', '04/04/1979'],
    ['Aaron', 'Eckhart', '03/12/1968'],
    ['Michael', 'Caine', '03/14/1933'],
    ['Maggie', 'Gyllenhaal', '11/16/1977'],
    ['Gary', 'Oldman', '03/21/1958'],
    ['Morgan', 'Freeman', '06/01/1937']
];
$darkKnightGenere = new Genere('Action, Crime, Drama');
$darkKnightAttori = [];
foreach ($attoriDarkKnight as $attoreData) {
    $darkKnightAttori[] = new Attori($attoreData);
}
$darkKnight = new movie(
    'Il cavaliere oscuro',
    'Christopher Nolan',
    '07/18/2008',
    $darkKnightGenere,
    $darkKnightAttori,
    'en',
    '152',
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qIhsgno1mjbzUbs4H6DaRjhskAR.jpg',
    'Batman alza la posta nella sua guerra al crimine. Con l\'aiuto del tenente Jim Gordon e del procuratore distrettuale Harvey Dent, Batman si propone di smantellare le organizzazioni criminali rimanenti che infestano le strade. La collaborazione si dimostra efficace, ma ben presto i tre si ritrovano preda di una mente criminale in rapida ascesa conosciuta dai cittadini terrorizzati come Joker.'
);
$arraymovie[] = $darkKnight->getMovie();

// Inception (2010)
$attoriInception = [
    ['Leonardo', 'DiCaprio', '11/11/1974'],
    ['Joseph', 'Gordon-Levitt', '02/17/1981'],
    ['Ellen', 'Page', '02/21/1987'],
    ['Tom', 'Hardy', '09/15/1977'],
    ['Ken', 'Watanabe', '10/21/1959'],
    ['Dileep', 'Rao', '07/29/1973'],
    ['Cillian', 'Murphy', '05/25/1976'],
    ['Tom', 'Berenger', '05/31/1949'],
    ['Marion', 'Cotillard', '09/30/1975'],
    ['Michael', 'Caine', '03/14/1933']
];
$inceptionGenere = new Genere('Azione, Avventura, Fantascienza');
$inceptionAttori = [];
foreach ($attoriInception as $attoreData) {
    $inceptionAttori[] = new Attori($attoreData);
}
$inception = new movie(
    'Inception',
    'Christopher Nolan',
    '07/16/2010',
    $inceptionGenere,
    $inceptionAttori,
    'en',
    '148',
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/5QHWgqaBxZI1eM5e3YhyKzY5o3z.jpg',
    'Dom Cobb possiede una capacità particolare: grazie alla condivisione del sogno riesce a introdursi nella mente altrui per prelevare informazioni riservate. La sua abilità lo ha fatto diventare uno degli uomini più ricercati al mondo, ma gli ha anche fatto perdere tutto ciò che amava. Cobb riceve una possibilità di redenzione: dovrà eseguire un\'inception, un\'operazione non di estrazione ma di impianto di un\'idea nella mente di una persona.'
);
$arraymovie[] = $inception->getMovie();

// The Dark Knight Rises (2012)
$attoriDarkKnightRises = [
    ['Christian', 'Bale', '01/30/1974'],
    ['Michael', 'Caine', '03/14/1933'],
    ['Gary', 'Oldman', '03/21/1958'],
    ['Anne', 'Hathaway', '11/12/1982'],
    ['Tom', 'Hardy', '09/15/1977'],
    ['Marion', 'Cotillard', '09/30/1975'],
    ['Joseph', 'Gordon-Levitt', '02/17/1981'],
    ['Morgan', 'Freeman', '06/01/1937']
];
$darkKnightRisesGenere = new Genere('Action, Crime, Drama');
$darkKnightRisesAttori = [];
foreach ($attoriDarkKnightRises as $attoreData) {
    $darkKnightRisesAttori[] = new Attori($attoreData);
}
$darkKnightRises = new movie(
    'Il cavaliere oscuro - Il ritorno',
    'Christopher Nolan',
    '07/20/2012',
    $darkKnightRisesGenere,
    $darkKnightRisesAttori,
    'en',
    '164',
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4Op2hWPNa5JygwbmLs1O1pDAm7L.jpg',
    'Otto anni dopo la scomparsa di Batman, Gotham City è in pace. Ma tutto cambia con l\'arrivo di Bane, un terrorista mascherato con piani oscuri per Gotham. Bruce Wayne deve tornare in azione come Batman per salvare la città.'
);
$arraymovie[] = $darkKnightRises->getMovie();

// Interstellar (2014)
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
$interstellarGenere = new Genere('Avventura, Dramma, Fantascienza');
$interstellarAttori = [];
foreach ($attoriInterstellar as $attoreData) {
    $interstellarAttori[] = new Attori($attoreData);
}
$interstellar = new movie(
    'Interstellar',
    'Christopher Nolan',
    '06/11/2014',
    $interstellarGenere,
    $interstellarAttori,
    'en',
    '169',
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/c8lJWsjbrZ0sEjHc7dGh1yOagRK.jpg',
    'In seguito alla scoperta di un cunicolo spazio-temporale, un gruppo di esploratori si avventura in una eroica missione per tentare di superare i limiti della conquista spaziale e oltrepassare le distanze che fino a quel momento avevano reso impraticabili i viaggi interstellari. L\'obiettivo è quello di trovare nuovi luoghi dove coltivare il granoturco, l\'unica coltivazione rimasta dopo un drastico cambiamento climatico che ha colpito soprattutto l\'agricoltura.'
);
$arraymovie[] = $interstellar->getMovie();

// Dunkirk (2017)
$attoriDunkirk = [
    ['Fionn', 'Whitehead', '07/18/1997'],
    ['Tom', 'Glynn-Carney', '02/07/1995'],
    ['Jack', 'Lowden', '06/02/1990'],
    ['Harry', 'Styles', '02/01/1994'],
    ['Aneurin', 'Barnard', '05/08/1987'],
    ['James', 'D\'Arcy', '08/24/1975'],
    ['Barry', 'Keoghan', '10/18/1992'],
    ['Kenneth', 'Branagh', '12/10/1960'],
    ['Cillian', 'Murphy', '05/25/1976'],
    ['Mark', 'Rylance', '01/18/1960'],
    ['Tom', 'Hardy', '09/15/1977']
];
$dunkirkGenere = new Genere('Azione, Dramma, Storia');
$dunkirkAttori = [];
foreach ($attoriDunkirk as $attoreData) {
    $dunkirkAttori[] = new Attori($attoreData);
}
$dunkirk = new movie(
    'Dunkirk',
    'Christopher Nolan',
    '07/21/2017',
    $dunkirkGenere,
    $dunkirkAttori,
    'en',
    '106',
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/sInkpq76Q9L3JOEXEOVEQeJTjGl.jpg',
    'Durante la seconda guerra mondiale, soldati alleati di Belgio, Regno Unito e Francia sono circondati dall\'esercito tedesco e devono essere evacuati durante una feroce battaglia.'
);
$arraymovie[] = $dunkirk->getMovie();

// Tenet (2020)
$attoriTenet = [
    ['John', 'David Washington', '07/28/1984'],
    ['Robert', 'Pattinson', '05/13/1986'],
    ['Elizabeth', 'Debicki', '08/24/1990'],
    ['Dimple', 'Kapadia', '06/08/1957'],
    ['Michael', 'Caine', '03/14/1933'],
    ['Kenneth', 'Branagh', '12/10/1960']
];
$tenetGenere = new Genere('Azione, Fantascienza, Thriller');
$tenetAttori = [];
foreach ($attoriTenet as $attoreData) {
    $tenetAttori[] = new Attori($attoreData);
}
$tenet = new movie(
    'Tenet',
    'Christopher Nolan',
    '08/26/2020',
    $tenetGenere,
    $tenetAttori,
    'en',
    '150',
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/iKXqUiLFDgeIGozRR6JYRvFmD5A.jpg',
    'Armato solo di una parola - Tenet - il protagonista combatte per la sopravvivenza del mondo intero, viaggiando attraverso un crepuscolare mondo di spionaggio internazionale in una missione che si svolgerà in qualcosa oltre il tempo reale.'
);
$arraymovie[] = $tenet->getMovie();

// Oppenheimer (2023)
$attoriOppenheimer = [
    ['Cillian', 'Murphy', '05/25/1976'],
    ['Emily', 'Blunt', '02/23/1983'],
    ['Matt', 'Damon', '10/08/1970'],
    ['Robert', 'Downey Jr.', '04/04/1965'],
    ['Florence', 'Pugh', '01/03/1996'],
    ['Rami', 'Malek', '05/12/1981'],
    ['Benny', 'Safdie', '02/24/1986'],
    ['Josh', 'Hartnett', '07/21/1978'],
    ['Kenneth', 'Branagh', '12/10/1960'],
    ['Michael', 'Angarano', '12/03/1987'],
    ['Gary', 'Oldman', '03/21/1958']
];
$oppenheimerGenere = new Genere('Biografia, Dramma, Storia');
$oppenheimerAttori = [];
foreach ($attoriOppenheimer as $attoreData) {
    $oppenheimerAttori[] = new Attori($attoreData);
}
$oppenheimer = new movie(
    'Oppenheimer',
    'Christopher Nolan',
    '07/21/2023',
    $oppenheimerGenere,
    $oppenheimerAttori,
    'en',
    '180',
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fRtaxfyynWMJI6DhejyA6JOzVTB.jpg',
    'La storia del fisico J. Robert Oppenheimer e del suo ruolo cruciale nella creazione della bomba atomica durante la seconda guerra mondiale.'
);
$arraymovie[] = $oppenheimer->getMovie();

?>