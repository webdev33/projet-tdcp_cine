<?php

namespace CineSearch\TdcpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeolocController extends Controller
{

    public function geolocAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CineSearchTdcpBundle:Cinema')->findAll();

        return $this->render('CineSearchTdcpBundle:Geoloc:geoloc.html.twig', array(
            'entities' => $entities,
        ));

    }


}
