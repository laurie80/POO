<?php

## Exercice 9
// Dans un nouveau fichier **Orc.php**, créer la classe **Orc héritant de Character** et ayant pour attribut **damage**.  
// Cet attribut ne doit être accessible **pour personne !**
## Exercice 10
// Créer les **méthodes** permettant d'accéder aux attributs de la classe **Orc** et permettant également de les définir.
## Exercice 11
// Créer la **méthode magique construct** de la classe **Orc**.  
// Cette méthode devra permettre le déclenchement de la **méthode construct de la classe mère (Character)**.  
// Elle doit **retourner** une phrase contenant toutes les informations sur l'Orc nouvellement créé.
## Exercice 12
// Créer une **méthode attack** dans la classe **Orc** permettant d initialiser la valeur de **damage** 
// avec un nombre aléatoire compris entre 600 et 800.

class Orc extends Character
{

    //ATTRIBUTS
    private $damage;

    //METHODES
    /**
     * Get the value of damage
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set the value of damage
     *
     * @return  self
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    public function orcAttacked()
    {
        $this->damage = rand(600, 800);
         
        return $this;
           }

    public function __construct($health, $rage)
    {
        parent::__construct($health, $rage);
        echo " Un nouvel ennemi, Orc, est apparu et inflige " . $this->getDamage() . " points de dégats à notre héros. 
        Ce dernier posséde " . parent::getHealth()  . " points de vie et " . parent::getRage() . " points de rage.";
    }
}
