<?php

namespace Httpi\Maritime\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HttpiMaritimeCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
