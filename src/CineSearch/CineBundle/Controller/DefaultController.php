<?php

namespace CineSearch\CineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        return $this->render('CineSearchCineBundle:Default:'. $id .'.html.twig');
    }
}
