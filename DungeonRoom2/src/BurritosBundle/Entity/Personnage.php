<?php

/**
 * Created by PhpStorm.
 * User: tmarechal2016
 * Date: 07/02/2017
 * Time: 18:46
 */
class Personnage
{
    private $id;
    private $nom;
    private $force;
    private $astuce;
    private $pointDeVie;
    private $rapidite;
    private $experience;
    private $niveau;

    /**
     * Personnage constructor.
     * @param $id
     * @param $nom
     * @param $force
     * @param $astuce
     * @param $pointDeVie
     * @param $rapidite
     * @param $experience
     * @param $niveau
     */
    public function __construct($id, $nom, $force, $astuce, $pointDeVie, $rapidite, $experience, $niveau)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->force = $force;
        $this->astuce = $astuce;
        $this->pointDeVie = $pointDeVie;
        $this->rapidite = $rapidite;
        $this->experience = $experience;
        $this->niveau = $niveau;
    }

    function __toString()
    {
        return $this->getId();
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

    /**
     * @return mixed
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @param mixed $force
     */
    public function setForce($force)
    {
        $this->force = $force;
    }

    /**
     * @return mixed
     */
    public function getAstuce()
    {
        return $this->astuce;
    }

    /**
     * @param mixed $astuce
     */
    public function setAstuce($astuce)
    {
        $this->astuce = $astuce;
    }

    /**
     * @return mixed
     */
    public function getPointDeVie()
    {
        return $this->pointDeVie;
    }

    /**
     * @param mixed $pointDeVie
     */
    public function setPointDeVie($pointDeVie)
    {
        $this->pointDeVie = $pointDeVie;
    }

    /**
     * @return mixed
     */
    public function getRapidite()
    {
        return $this->rapidite;
    }

    /**
     * @param mixed $rapidite
     */
    public function setRapidite($rapidite)
    {
        $this->rapidite = $rapidite;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * @param mixed $niveau
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

}