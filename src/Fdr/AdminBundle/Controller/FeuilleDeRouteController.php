<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\Client;
use Fdr\AdminBundle\Entity\FeuilleDeRoute;
use Fdr\AdminBundle\Form\FeuilleDeRouteType;
use \Symfony\Component\HttpFoundation\Response;

/**
 * FeuilleDeRoute controller.
 *
 */
class FeuilleDeRouteController extends Controller
{

    /**
     * Lists all FeuilleDeRoute entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->findAll();

        return $this->render('FdrAdminBundle:FeuilleDeRoute:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new FeuilleDeRoute entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new FeuilleDeRoute();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('feuillederoute_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:FeuilleDeRoute:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a FeuilleDeRoute entity.
     *
     * @param FeuilleDeRoute $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FeuilleDeRoute $entity)
    {
        $form = $this->createForm(new FeuilleDeRouteType(), $entity, array(
            'action' => $this->generateUrl('feuillederoute_create'),
            'method' => 'POST',
        ));
        
        $form->add('submit', 'submit', array('label' => 'Create'));
        
        return $form;
    }

    /**
     * Displays a form to create a new FeuilleDeRoute entity.
     *
     */
    public function newAction()
    {
        $entity = new FeuilleDeRoute();
        $form   = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:FeuilleDeRoute:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    public function clientsAction($secteurId)
    {
       $em = $this->getDoctrine()->getManager();
       //$client = $em->getRepository('FdrAdminBundle:Client')->findByClientaffret(true);
       $clients = $em->getRepository('FdrAdminBundle:Client')->findAll();
      
       foreach ($clients as $client) {
            
           if($client->getClientramass()!=null)
           {
               $secteursClient=$client->getSecteurs();
               foreach ( $secteursClient  as $secteur) {
                 $sect=$this->getDoctrine()
                            ->getManager()
                            ->getRepository('FdrAdminBundle:Secteur')
                            ->find($secteurId);  
                   if ($secteur=== $sect)
                   {
                       $clientsRamassage[]=$client;
                       
                       
                   }
               }
              
               
               
           }
       }
      
         return $this->render('FdrAdminBundle:FeuilleDeRoute:client.html.twig', array(
            'clients' => $clientsRamassage ));
    }

    /**
     * Finds and displays a FeuilleDeRoute entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FeuilleDeRoute entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:FeuilleDeRoute:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FeuilleDeRoute entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FeuilleDeRoute entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:FeuilleDeRoute:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FeuilleDeRoute entity.
    *
    * @param FeuilleDeRoute $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FeuilleDeRoute $entity)
    {
        $form = $this->createForm(new FeuilleDeRouteType(), $entity, array(
            'action' => $this->generateUrl('feuillederoute_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FeuilleDeRoute entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FeuilleDeRoute entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('feuillederoute_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:FeuilleDeRoute:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a FeuilleDeRoute entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FeuilleDeRoute entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('feuillederoute'));
    }

    /**
     * Creates a form to delete a FeuilleDeRoute entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('feuillederoute_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
