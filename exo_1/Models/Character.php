<?php
// PARTIE 1
// Vous allez créer votre propre script de combat entre un Orc et un Héros en PHP !  
// Le principe est simple : l'Orc attaque le Héros de façon répétée et fait augmenter la valeur de rage de celui-ci.  
// Lorsque la valeur de rage du Héros atteint un certain seuil, il peut alors se défendre !
// ## Exercice 1
// Créer un fichier **Character.php**, dans ce fichier créer une classe **Character** ayant pour attributs **health** et **rage**.  
// Les attributs ne doivent être accessibles **pour personne !**
## Exercice 2
// Créer les **méthodes** permettant d'accéder aux attributs de la classe **Character** et permettant également de les définir.
## Exercice 3
// Créer la **méthode magique construct** de la classe **Character**.  
// Celle-ci doit permettre la création d'un nouveau personnage et doit donc définir les valeurs de **health** et de **rage**.

class Character
{
    //ATTRIBUTS
    private $health;
    private $rage;

    //METHODES
      public function setHealth($healthValue)
    {
        $this->health = $healthValue;
        return $this->health;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setRage($rageValue)
    {
        $this->rage = $rageValue;
        return $this;
    }

    public function getRage()
    {
        return $this->rage;
    }

    public function __construct($health, $rage)
    {
        $this -> setHealth($health);
        $this -> setRage($rage);
    }
}



