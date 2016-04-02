<?php

namespace Core\PersonalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CorePersonalBundle:Default:index.html.twig');
    }
}
