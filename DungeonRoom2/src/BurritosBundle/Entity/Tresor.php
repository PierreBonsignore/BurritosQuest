<?php

/**
 * Created by PhpStorm.
 * User: tmarechal2016
 * Date: 07/02/2017
 * Time: 18:04
 */
abstract class Tresor
{
    private $id;
    private  $nom;

    function __toString()
    {
        return $this->getNom();
    }

    /**
     * Tresor constructor.
     * @param $id
     * @param $nom
     */
    public function __construct($id, $nom)
    {
        $this->id = $id;
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }


}

