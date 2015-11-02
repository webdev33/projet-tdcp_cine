<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 21/10/15
 * Time: 17:33
 */

namespace CineSearch\TdcpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('CineSearchTdcpBundle:Accueil:index.html.twig');
    }
}