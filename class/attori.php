<?php

class Attori {

    private string $nome;
    private string $cognome;
    private string $data_di_nascita;

    public function __construct(array $attori) {
        $this->nome        = $attori[0];
        $this->cognome      = $attori[1];
        $this->data_di_nascita =  $attori[2];
    }

    

        public function getAttori() {
            return [
                'nome' => $this->nome,
                'cognome' => $this->cognome,
                'data_di_nascita' => $this->data_di_nascita,
            ];
        }

}
?>