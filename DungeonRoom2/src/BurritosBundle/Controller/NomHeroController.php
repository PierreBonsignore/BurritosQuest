<?php

namespace BurritosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NomHeroController extends Controller
{
    public function nomHeroAction()
    {
        return $this->render('BurritosBundle:NomHero:nomHero.php.twig');
    }
}
