<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FdrAdminBundle:Default:index.html.twig', array('name' => $name));
    }
    public function komayAction($name)
    {
        return $this->render('FdrAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
