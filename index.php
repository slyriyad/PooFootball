<?php

spl_autoload_register(function ($class_name) {
    require  $class_name . '.php';
});


// Exemple d'utilisation
$france = new Pays('France');
$espagne = new Pays('Espagne');

$psg = new Equipe('Paris Saint-Germain',2020, $france);
$om = new Equipe('Marseille',2020, $france);
$barca = new Equipe('FC Barcelone',2020, $espagne);

$neymar = new Joueur('Neymar', 'Jr', '1992-02-05', $france);
$messi = new Joueur('Messi', 'Lionel', '1987-06-24', $espagne);
$mbappe = new Joueur('Kylian', 'Mbappé', '2001-12-20', $france);



$contrat = new Contrat($neymar, $psg, 2017);
$contrat = new Contrat($neymar, $barca, 2018);
$contrat = new Contrat($messi, $psg, 2016);



echo "<div style='display:flex;flex-direction:row;'>";
$france->listerEquipes();
$espagne->listerEquipes();
echo "</div>";

echo "<div style='display:flex;flex-direction:row;'>";
$psg->listerJoueurs();
$barca->listerJoueurs();
echo "</div>";

echo "<div style='display:flex;flex-direction:row;'>";
$neymar->listerEquipes();
$messi->listerEquipes();
echo "</div>";