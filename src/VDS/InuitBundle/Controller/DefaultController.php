<?php

namespace VDS\InuitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VDSInuitBundle:Default:index.html.twig', array('name' => $name));
    }
}
