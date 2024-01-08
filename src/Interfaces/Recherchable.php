<?php

namespace App\Interfaces;

interface Recherchable {
    public function rechercheParTitre($rechercheTitre);
    public function rechercheParAuteur($rechercheAuteur);
    public function rechercheParAnnee($rechercheAnnee);
}
