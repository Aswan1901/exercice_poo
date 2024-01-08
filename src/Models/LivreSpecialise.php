<?php

namespace App\Models;

use App\Models\Livre;

class LivreSpecialise extends Livre {
    public $domaine;


    public function __construct($domaine){
    $this->domaine = $domaine;
    }

    /**
     * Get the value of domaine
     */ 
    public function getDomaine()
    {
        return $this->domaine;
        
    }

    /**
     * Set the value of domaine
     *
     * @return  self
     */ 
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }
}