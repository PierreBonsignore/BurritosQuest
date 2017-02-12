<?php
include ("ChoixPiege.php");
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/02/2017
 * Time: 10:51
 */
class Piege extends Secret
{
private $description;
    private $degats;
    private $complexité;
    private $listeChoix;
    private $recompense;

    /**
     * Piege constructor.
     * @param $degats
     * @param $complexité
     * @param $listeChoix
     * @param $recompense
     */
    public function __construct($id, $nom, $degats, $complexité, $listeChoix, $recompense)
    {
        parent::__construct($id,$nom);
        $this->degats = $degats;
        $this->complexité = $complexité;
        $this->listeChoix = $listeChoix;
        $this->recompense = $recompense;
    }


    /**
     * @return mixed
     */
    public function getDegats()
    {
        return $this->degats;
    }

    /**
     * @param mixed $degats
     */
    public function setDegats($degats)
    {
        $this->degats = $degats;
    }

    /**
     * @return mixed
     */
    public function getComplexité()
    {
        return $this->complexité;
    }

    /**
     * @param mixed $complexité
     */
    public function setComplexité($complexité)
    {
        $this->complexité = $complexité;
    }

    /**
     * @return mixed
     */
    public function getListeChoix()
    {
        return $this->listeChoix;
    }

    /**
     * @param mixed $listeChoix
     */
    public function setListeChoix($listeChoix)
    {
        $this->listeChoix = $listeChoix;
    }

    /**
     * @return mixed
     */
    public function getRecompense()
    {
        return $this->recompense;
    }

    /**
     * @param mixed $recompense
     */
    public function setRecompense($recompense)
    {
        $this->recompense = $recompense;
    }

    private function choixDefault($nombre)
    {
        $listeChoix=null;
        for($i=1;$i<=10;$i++)
        {
            $choix = new ChoixPiege($i,'description',false);
            $listeChoix[$i]=$choix;
        }

        $random = random_int(1,6);
        $bonChoixDefini = false;
        $compteur=0;

        do
        {
            foreach($listeChoix as $choix)
            {
                /* @var $choix ChoixPiege*/
                if($random<4&&$compteur<50)
                {
                    $choix->setBonChoix(false);
                }
                else
                {
                    $choix->setBonChoix(true);
                    $bonChoixDefini=true;
                }
                $compteur++;
            }
        }
        while($bonChoixDefini==false);
var_dump($listeChoix);
        return $listeChoix;
    }

}