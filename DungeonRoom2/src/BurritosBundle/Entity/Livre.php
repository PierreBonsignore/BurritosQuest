<?php

/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 07/02/2017
 * Time: 18:14
 */
class Livre extends Tresor
{
private $bonusAstuce;
    private $description;

    /**
     * Livre constructor.
     * @param $bonusAstuce
     */
    public function ___construct($id, $nom, $bonusAstuce)
    {
        parent::__construct($id,$nom);

        $this->bonusAstuce = $bonusAstuce;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getBonusAstuce()
    {
        return $this->bonusAstuce;
    }

    /**
     * @param mixed $bonusAstuce
     */
    public function setBonusAstuce($bonusAstuce)
    {
        $this->bonusAstuce = $bonusAstuce;
    }

    function __toString()
    {
        return parent::__toString() . ' ' . $this->getBonusAstuce();
    }


}