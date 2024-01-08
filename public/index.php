<?php

require __DIR__ .'/../vendor/autoload.php';

use App\Models\Livre;
use App\Models\LivreSpecialise;

$lePetitPrince = new Livre("Le petit prince", "Antoine de Saint-Exupery","1943");
$laGuerreDuPavot = new Livre("La guerre du pavot", "R. F. Kuang ","2020");
$crimeEtChatiment = new Livre("Crime et Châtiment", "Fiodor Dostoïevski","1866");
$empireUltime = new Livre("L'Empire ultime", "Brandon Sanderson","2006");

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
$recherche = readline();

foreach($livres as $livre){
    if($livre->rechercheParTitre($recherche)){
        echo "Informations sur le livre :\n";
        echo "Titre: " . strtolower($livre->getTitre()) . "\n" ;
        echo "Auteur: " . $livre->getAuteur() ;
        echo "Année: " . $livre->getAnneePublication() . "\n";
    }else{
        echo "livre non trouvé \n";
    }



}