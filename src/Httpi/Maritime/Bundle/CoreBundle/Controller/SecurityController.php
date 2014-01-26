<?php

namespace Httpi\Maritime\Bundle\CoreBundle\Controller;

use Httpi\Bundle\CoreBundle\Controller\SecurityController as CoreSecurityController;

class SecurityController extends CoreSecurityController
{
    protected $loginTemplate = 'HttpiMaritimeCoreBundle:Security:login.html.twig';

    protected $extendsTemplate = 'HttpiMaritimeAdminBundle:Default:layout_loggedout.html.twig';
}