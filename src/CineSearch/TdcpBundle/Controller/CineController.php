<?php

namespace CineSearch\TdcpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CineController extends Controller
{
    public function indexAction($id)
    {
        return $this->render('CineSearchTdcpBundle:Cine:'. $id .'.html.twig');
    }
}
