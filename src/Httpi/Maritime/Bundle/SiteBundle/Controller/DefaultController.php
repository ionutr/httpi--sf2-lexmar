<?php

namespace Httpi\Maritime\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HttpiMaritimeSiteBundle:Default:index.html.twig');
    }
}
