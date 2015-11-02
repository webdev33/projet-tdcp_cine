<?php

namespace CineSearch\TdcpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CineSearchTdcpBundle:Default:index.html.twig', array('name' => $name));
    }
}
