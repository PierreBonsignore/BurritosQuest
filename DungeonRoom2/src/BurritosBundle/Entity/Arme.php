<?php

/**
 * Created by PhpStorm.
 * User: tmarechal2016
 * Date: 07/02/2017
 * Time: 18:18
 */
class Arme extends Tresor
{
    private $degat;
    private $description;

    /**
     * Arme constructor.
     * @param $degat
     * @param $description
     */
    public function __construct($id, $nom, $degat)
    {parent::__construct($id,$nom);
        $this->degat = $degat;
    }

    function __toString()
    {
        return parent::__toString().$this->getDegat();
    }

    /**
     * @return mixed
     */
    public function getDegat()
    {
        return $this->degat;
    }

    /**
     * @param mixed $degat
     */
    public function setDegat($degat)
    {
        $this->degat = $degat;
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



}