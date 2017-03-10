<?php

namespace SiteoneGeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteoneGeneralBundle:Default:index.html.twig');
    }
}
