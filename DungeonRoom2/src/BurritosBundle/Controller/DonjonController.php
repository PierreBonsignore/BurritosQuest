<?php

namespace BurritosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DonjonController extends Controller
{
    public function donjonAction()
    {
        return $this->render('BurritosBundle:Donjon:donjon.php.twig');
    }
}
