<?php

require __DIR__ .'/../vendor/autoload.php';

use App\Models\Livre;
use App\Models\LivreSpecialise;

$lePetitPrince = new LivreSpecialise("le petit prince", "Antoine de Saint-Exupery","1943",["enfant"]);
$laGuerreDuPavot = new LivreSpecialise("la guerre du pavot", "R.F Kuang","2020",["fantasy"]);
$crimeEtChatiment = new LivreSpecialise("crime et châtiment", "Fiodor Dostoïevski","1866",["Classiques"]);
$empireUltime = new LivreSpecialise("l'Empire ultime", "Brandon Sanderson","2006",["fantasy"]);
$puitAscension = new LivreSpecialise("le puit de l'ascension", "Brandon Sanderson","2007",["fantasy"]);
$Simetierre = new LivreSpecialise("Simetierre","Stephen King", "1983",["horreur"]);


$livres = [
    $lePetitPrince, 
    $laGuerreDuPavot,
    $crimeEtChatiment,
    $empireUltime,
    $puitAscension,
    $simetierre
];

echo "rechercher un livre par titre (1) \n";
echo "rechercher un titre par auteur (2) \n";
echo "rechercher un livre par auteur(3) \n";
echo "rechercher un livre par genre(4)";
$recherche = strtolower(readline());
// $bookFound = false;

if($recherche === "1"){
 
echo "rechercher un livre par titre ?";
$rechercheTitre = strtolower(readline());
$bookFound = false;

foreach($livres as $livre){
    if($livre->rechercheParTitre($rechercheTitre)){
        echo "Titre: " . $livre->getTitre() . "\n" ;
        echo "Auteur: " . $livre->getAuteur() . "\n";
        echo "Année: " . $livre->getAnneePublication() . "\n";
        $bookFound = true;
    }else{
        if(!$bookFound){
        echo "Livre non trouvé \n";
    }
}
}
}elseif($recherche === "2"){

        echo "rechercher un livre par auteur ? ";
        $rechercheAuteur = readline();
        $bookFound = false;

    foreach($livres as $livre){
        if($livre->rechercheParAuteur($rechercheAuteur)){
            echo "Titre: " . $livre->getTitre() . "\n" ;
            echo "Auteur: " . $livre->getAuteur() . "\n";
            echo "Année: " . $livre->getAnneePublication() . "\n";
            $bookFound = true;
        }else{
        if(!$bookFound){
        echo "Livre non trouvé \n";
        }

    }
}
}elseif($recherche === "3"){
    echo "recherche un livre par annee ?";
    $rechercheAnnee = readline();
    $bookFound = false;
    foreach($livres as $livre){
        if($livre->rechercheParAnnee($rechercheAnnee)){
            echo "Titre: " . $livre->getTitre() . "\n" ;
            echo "Auteur: " . $livre->getAuteur() . "\n";
            echo "Année: " . $livre->getAnneePublication() . "\n";
            $bookFound = true;
        }else{
        if(!$bookFound){
        echo "Livre non trouvé \n";
    }
    }
}

}elseif($recherche === '4'){
    echo "rechercher un livre par genre(4)";
    $rechercheAnnee = readline();
    $bookFound = false;
    // foreach($livres->getGenre as $livre){

    // }
}


