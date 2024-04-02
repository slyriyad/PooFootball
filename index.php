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
$messi = new Joueur('Lionel', 'Messi', '1987-06-24', $espagne);
$mbappe = new Joueur('Kylian', 'Mbappé', '2001-12-20', $france);

$psg->ajouterJoueur($neymar, 2017);
$psg->ajouterJoueur($messi, 2021);
$psg->ajouterJoueur($mbappe, 2018);
$barca->ajouterJoueur($neymar, 2018);

$barca->ajouterJoueur($messi, 2004);





echo $france->listerEquipes();
echo $psg->listerJoueurs();
echo $neymar->listerEquipes();