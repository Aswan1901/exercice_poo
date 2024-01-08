<?php

require __DIR__ .'/../vendor/autoload.php';

use App\Models\Livre;
use App\Models\LivreSpecialise;

$lePetitPrince = new Livre("le petit prince", "Antoine de Saint-Exupery","1943");
$laGuerreDuPavot = new Livre("la guerre du pavot", "R. F. Kuang ","2020");
$crimeEtChatiment = new Livre("crime et châtiment", "Fiodor Dostoïevski","1866");
$empireUltime = new Livre("l'Empire ultime", "Brandon Sanderson","2006");

// echo "livre par defaut : \n";
// echo "Titre : " . $livreDefaut->getTitre() . "\n";
// echo "Auteur : " . $livreDefaut->getAuteur() . "\n";
// echo "Année de publication : " . $livreDefaut->getAnneePublication() . "\n";

$livres = [$lePetitPrince, $laGuerreDuPavot, $crimeEtChatiment, $empireUltime];

$horreur = new LivreSpecialise("horreur");
$fantastique = new LivreSpecialise("fantastique");
$aventure = new LivreSpecialise("aventure");
$amour = new LivreSpecialise("amour");

// echo $horreur->getDomaine();

echo "Quel livre recherchez-vous ? ";
$recherche = strtolower(readline());
$bookFound = false;


foreach($livres as $livre){
    if($livre->rechercheParTitre(strtolower($recherche))){
        echo "Informations sur le livre :\n";
        echo "Titre: " . $livre->getTitre() . "\n" ;
        echo "Auteur: " . $livre->getAuteur() . "\n";
        echo "Année: " . $livre->getAnneePublication() . "\n";
        $bookFound = true;
        break;
  
    }

    if(!$bookFound){
        echo "Livres non trouvé \n";
    }



}