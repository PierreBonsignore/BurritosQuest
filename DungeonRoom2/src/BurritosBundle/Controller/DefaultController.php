<?php

namespace BurritosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BurritosBundle:Default:index.html.twig');
    }
}
