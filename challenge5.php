<?php


$weapons = ['poings', 'fouet', 'pistolet'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

if($opponentWeapon == 'poings'){
    $stevensonWeapon = 'pistolet';
}
elseif($opponentWeapon == 'fouet'){
    $stevensonWeapon = 'poings';
}
else{
    $stevensonWeapon = 'fouet';
}
echo "l'arme de l'adversaire est $opponentWeapon et l'arme de stevenson est $stevensonWeapon ";









