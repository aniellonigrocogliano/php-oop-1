<?php 
class movie {
    private string $name;
    private string $regia;
    private string $date;
    public Genere $genere;
    private string $lingua;
    private int $durata;
    private string $poster;
    private string $trama;
    public array $attori;

public function __construct(string $name, string $regia, string $date, Genere $genere, array $attori, string $lingua, int $durata, string $poster, string $trama,) {

   $this->name =  $name;
   $this->regia =  $regia;
   $this->date =   $date;
   $this->genere =   $genere;
   $this->lingua =  $lingua;
   $this->durata =  $durata;
   $this->poster = $poster;
   $this->trama = $trama ;       
   $this->attori = $attori;
}

public function getMovie() {
    $attori = array_map(function($attore) {
        return $attore->getAttori();
    }, $this->attori);

    $movie = [
        'name' => $this->name,
        'regia' => $this->regia,
        'date' => $this->date,
        'genere' => $this->genere->getGenere(),
        'attori' => $attori,
        'lingua' => $this->lingua,
        'durata' => $this->durata,
        'poster' => $this->poster,
        'trama' => $this->trama,
    ];

    return $movie;
}

}
?>