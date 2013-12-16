<?php

namespace Httpi\Maritime\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Column\ActionsColumn;

class DefaultController extends Controller
{
    public function indexAction()
    {
		return $this->render('HttpiMaritimeAdminBundle:Default:dashboard.html.twig', array(
			
		));
    }
}
