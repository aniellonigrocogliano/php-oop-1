<?php 
class movie {
    private string $name;
    private string $regia;
    private string $date;
    // public genere $genere;
    private string $lingua;
    private int $durata;
    private string $poster;
    private string $trama;

public function __construct(string $name, string $regia, string $date, string $lingua, int $durata, string $poster, string $trama,) {

   $this->name =  $name;
   $this->regia =  $regia;
   $this->date =   $date;
   $this->lingua =  $lingua;
   $this->durata =  $durata;
   $this->poster = $poster;
   $this->poster = $trama ;
}

public function getMovie() {

  return  $movie=[$this->name, $this->regia, $this->date, $this->lingua, $this->durata, $this->poster, $this->poster, ];
}  

}
?>