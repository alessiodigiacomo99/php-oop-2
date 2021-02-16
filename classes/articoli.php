<?php 
class Articolo {
    public $id;
    public $testo;
    public $titolo;
    public function __construct(int $id, string $titolo, string $testo) {
        $this->id = $id;
        $this->titolo = $titolo;
        $this->testo = $testo;
    }
}