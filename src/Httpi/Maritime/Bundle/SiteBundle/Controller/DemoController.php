<?php

namespace Httpi\Maritime\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DemoController extends Controller
{
    public function indexAction()
    {
        return $this->render('HttpiMaritimeSiteBundle:Demo:index.html.twig');
    }

    public function lexiconAction()
    {
        return $this->render('HttpiMaritimeSiteBundle:Demo:lexicon-listing.html.twig');
    }
}
