<?php

namespace PI\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIUserBundle:Default:index.html.twig');
    }
}
