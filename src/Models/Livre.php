<?php

namespace App\Models;

use App\Interfaces\Recherchable;

class Livre implements Recherchable{
    private $titre;
    private $auteur;
    private $anneePublication;


    public function __construct($titre, $auteur, $anneePublication){
    $this->titre = $titre;
    $this->auteur = $auteur;
    $this->anneePublication = $anneePublication;

    }
// GETTERS 
    public function getTitre(){
        return $this->titre;
    }
    
    public function getAuteur(){
        return $this->auteur;
    }
    public function getAnneePublication(){
        return $this->titre;
    }
    public function setTitre($titre){
        return $this->titre = $titre;
    }

    public function setAuteur($auteur){
        return $this->auteur;
    }
    public function setAnneePublication($AnneePublication){
        return $this->anneePublication;
    }

    public function rechercheParTitre($rechercheTitre){
        if($this->titre === $rechercheTitre){
            return $this->titre;
        }else{
            return null;
        }

    }
    public function rechercheParAuteur($rechercheAuteur){
        if($this->auteur === $rechercheAuteur){
            return $this->auteur;
        }else{
            return null;
        }
    }
    public function rechercheParAnnee($rechercheAnnee){
        if($this->anneePublication === $rechercheAnnee){
            return $this->anneePublication;
        }else{
            return null;
        }
    }
}