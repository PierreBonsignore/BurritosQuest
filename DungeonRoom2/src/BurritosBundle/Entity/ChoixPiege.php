<?php

/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/02/2017
 * Time: 10:51
 */
class ChoixPiege
{
private $id;
    private $description;
    private $bonChoix;

    /**
     * ChoixPiege constructor.
     * @param $id
     * @param $description
     * @param $bonChoix
     */
    public function __construct($id, $description, $bonChoix)
    {
        $this->id = $id;
        $this->description = $description;
        $this->bonChoix = $bonChoix;
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
    public function getBonChoix()
    {
        return $this->bonChoix;
    }

    /**
     * @param mixed $bonChoix
     */
    public function setBonChoix($bonChoix)
    {
        $this->bonChoix = $bonChoix;
    }


}