<?php

namespace PI\AppelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@PIAppel/Default/index.html.twig');
    }
}
