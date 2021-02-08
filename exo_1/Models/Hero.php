<?php

// ## Exercice 4
// Dans un nouveau fichier **Hero.php**, créer la classe **Hero héritant de Character** et ayant pour attributs **weapon**, **weaponDamage**, **shield** et **shieldValue**.  
// * L'attribut **weapon** permettra de définir le nom de l'arme équipée,  
// * **weaponDamage** indiquera les dégâts basiques de l'arme,  
// * **shield** définira le nom du bouclier équipée,
// * **shieldValue** idiquera la nombre de dégâts que le bouclier encaisse à la place du héros.
// Les attributs ne doivent être accessibles **pour personne !**
// ## Exercice 5
// Créer les **méthodes** permettant d'accéder aux attributs de la classe **Hero** et permettant également de les définir.
## Exercice 6
// Créer la **méthode magique construct** de la classe **Hero**.  
// Cette méthode devra permettre le déclenchement de la **méthode construct de la classe mère (Character)** et devra également permettre de défnir les valeurs de **weapon**, **weaponDamage**, **shield** et **shieldValue**.  
// **Pour finir**, cette méthode doit **retourner** une phrase contenant toutes les informations sur le Héros nouvellement créé.
## Exercice 7
// Créer une **méthode attacked** dans la classe **Hero** permettant au Héros de prendre des dégâts **en considérant la valeur du bouclier**.
## Exercice 8
// Pour chaque coup reçu, il faudra faire gagner de la rage à notre Héros.  
// Créer une méthode permettant d'augmenter la valeur de **rage** de 30.

class Hero extends Character
{
    //ATTRIBUTS 
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;


    //METHODES

    /**
     * Get the value of weapon
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * Set the value of weapon
     *
     * @return  self
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    /**
     * Get the value of weaponDamage
     */
    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }

    /**
     * Set the value of weaponDamage
     *
     * @return  self
     */
    public function setWeaponDamage($weaponDamage)
    {
        $this->weaponDamage = $weaponDamage;

        return $this;
    }

    /**
     * Get the value of shield
     */
    public function getShield()
    {
        return $this->shield;
    }

    /**
     * Set the value of shield
     *
     * @return  self
     */
    public function setShield($shield)
    {
        $this->shield = $shield;

        return $this;
    }

    /**
     * Get the value of shieldValue
     */
    public function getShieldValue()
    {
        return $this->shieldValue;
    }

    /**
     * Set the value of shieldValue
     *
     * @return  self
     */
    public function setShieldValue($shieldValue)
    {
        $this->shieldValue = $shieldValue;

        return $this;
    }

    public function attacked($orcDamage)
    {
        $attack = $orcDamage - $this->getShieldValue();
        parent::setHealth(parent::getHealth() - $attack);
        $this->addRage();
        return $this;
    }

    public function addRage()
    {
        parent::setRage(parent::getRage() + 30);
        return $this;
    }

    public function __construct($health, $rage,  $shieldValue, $weaponDamage, $weapon, $shield)
    {
        parent::__construct($health, $rage);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);
        echo "Notre héros posséde " . parent::getHealth() . " points de vie, ainsi que de " . parent::getRage() . " points de rage, il est aussi équipé d'une " . $this->getWeapon() . " infligeant "
            . $this->getWeaponDamage() . " points d'attaque, mais grâce à son " . $this->getShield() . "," . $this->getShieldValue() . " points de dégats seront absorbés.";
    }
}
