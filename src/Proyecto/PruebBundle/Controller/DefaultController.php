<?php

namespace Proyecto\PruebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PruebaBundle:Default:index.html.twig');
    }
}
