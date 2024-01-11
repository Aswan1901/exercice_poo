<?php

namespace App\Models;

use App\Models\Livre;

class LivreSpecialise extends Livre {

    private $genre = [];
    public function __construct($titre, $auteur, $anneePublication, $genre){
        parent::__construct($titre, $auteur, $anneePublication);
        $this->genre = $genre;
    }
    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
        return $this;
    }
}