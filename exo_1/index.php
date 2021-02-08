<?php
## Exercice 13
// Créer un fichier **index.php** sur lequel devront être appelés les fichiers **Character.php**, **Hero.php** et **Orc.php**.  
// Sur ce fichier, créer 2 objets :
// * **hero**, faisant appel à la classe Hero, celui-ci doit avoir 2000 points de vie, 0 points de rage, 600 points d'armure, 250 points de dégâts pour l'arme, les noms de l'arme et de l'armure vous revient,
// * **orc**, faisant appel à la classe Orc, celui-ci doit avoir 500 points de vie et 0 points de rage.
## Exercice 14
// Faites attaquer l'Orc **jusqu'à** ce que le Héros tombe à court de points de vie.*(Pour l'instant seul l'orc attaque.)*  
// Pour chaque attaque de l'Orc, une phrase contenant toutes les informations de l'assaut doit être affichée (dégâts de l'Orc, dégâts absorbés par le bouclier, dégâts non absorbés, rage actuelle du Héros et santé restante du Héros)
// ## BONUS (la revanche du Héros)
// Faire en sorte que lorsque le Héros arrive à 100 points de rage, déclencher une attaque faisant le nombre de dégâts de l'arme !

require "Models/Character.php";
require "Models/Hero.php";
require "Models/Orc.php";

$hero = new Hero(2000, 0, 600, 250, "Lame des Titans", "Bouclier de Thor");

$orc = new Orc(500, 0);

// var_dump($hero);
// var_dump($orc);

while ($hero->getHealth() >= 0 && $orc->getHealth() > 0) {
    $orc->orcAttacked();
    $hero->attacked($orc->getDamage());
    // var_dump($hero);
    // var_dump($orc);
    if ($hero->getRage() >= 100) {
        $orc->setHealth($orc->getHealth() - $hero->getWeaponDamage());
        echo "<p>A l'attaque<p>";
        $hero->setRage(0);
    }

    if ($hero->getHealth() <= 0) {
        echo "Après une lutte acharnée, le héros, bien que fort et vaillant, succombe à ses blessures";
    } else {
        echo "<p>Orc, est apparu et inflige " . $orc->getDamage() . " points de dégats à notre courageux Héros, 
        mais celui-ci grâce à son bouclier parvint à absorber " . $hero->getShieldValue() . " points de dégats, mais malgré cela, l'attaque
        lui inflige " . ($orc->getDamage() - $hero->getShieldValue()) . " points de vie en moins. Aprés cette attaque, la rage du héros monte et se trouve
        maintenant à " . $hero->getRage() . "points de rage, mais il lui reste encore " . $hero->getHealth() . "points de vie pour continuer le combat.</p>";
    }
    if ($orc->getHealth() <= 0) {
        echo "YOU WIN";
    }
}


