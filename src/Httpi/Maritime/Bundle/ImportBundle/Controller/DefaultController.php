<?php

namespace Httpi\Maritime\Bundle\ImportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HttpiMaritimeImportBundle:Default:index.html.twig', array('name' => $name));
    }
}
