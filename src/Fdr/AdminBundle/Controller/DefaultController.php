<?php

namespace Fdr\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FdrAdminBundle:Default:index.html.twig', array('name' => $name));
    }
    public function testAction(Request $request)
    {
        $defaultData = array('message' => 'Type your message here','name'=>'nom par defautt');
        $form = $this->createFormBuilder($defaultData, array(
            'action' => $this->generateUrl('test'),
            'method' => 'POST',
        ))
        ->add('name', 'text')
        ->add('email', 'email')
        ->add('message', 'textarea')
        ->add('send', 'submit')
        ->getForm();
        $form->handleRequest($request);
        $data = "null";
    if ($form->isValid()) {
        // data is an array with "name", "email", and "message" keys
        $data = $form->getData();
        return $this->render('FdrAdminBundle:Default:testrep.html.twig', array('data' => $data));
    }

        return $this->render('FdrAdminBundle:Default:test.html.twig', array('data' => $data,
            'form'   => $form->createView()));
    }
    
    public function testrepAction()
    {
        return $this->render('FdrAdminBundle:Default:testrep.html.twig');
    }
}
