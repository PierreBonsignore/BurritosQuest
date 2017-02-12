<?php

/**
 * Created by PhpStorm.
 * User: tmarechal2016
 * Date: 07/02/2017
 * Time: 18:13
 */
class Objet extends Tresor
{
    private $caracteristique;
    private $bonus;

    /**
     * Objet constructor.
     * @param $id
     * @param $caracteristique
     * @param $bonus
     */
    public function __construct($id,$nom,$caracteristique, $bonus)
    {
        parent::__construct($id,$nom);
        $this->caracteristique = $caracteristique;
        $this->bonus = $bonus;
    }

    function __toString()
    {
        return parent::__toString() . " " . $this->getBonus() . " " . $this->getCaracteristique();
    }


    /**
     * @return mixed
     */
    public function getCaracteristique()
    {
        return $this->caracteristique;
    }

    /**
     * @param mixed $caracteristique
     */
    public function setCaracteristique($caracteristique)
    {
        $this->caracteristique = $caracteristique;
    }

    /**
     * @return mixed
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * @param mixed $bonus
     */
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }


}