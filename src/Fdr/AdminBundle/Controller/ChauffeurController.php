<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fdr\AdminBundle\Entity\Chauffeur;
use Fdr\AdminBundle\Form\ChauffeurType;

/**
 * Chauffeur controller.
 *
 */
class ChauffeurController extends Controller
{

    /**
     * Lists all Chauffeur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Chauffeur')->findAll();
		
		$form = array();
        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
		
        return $this->render('FdrAdminBundle:Chauffeur:index.html.twig', array(
            'entities' => $entities,
			'form'=>$form
        ));
    }
    /**
     * Creates a new Chauffeur entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Chauffeur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('chauffeur_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:Chauffeur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Chauffeur entity.
     *
     * @param Chauffeur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Chauffeur $entity)
    {
        $form = $this->createForm(new ChauffeurType(), $entity, array(
            'action' => $this->generateUrl('chauffeur_create'),
            'method' => 'POST',
        ));

        //--
        $form->add('submit', 'submit', array('label' => 'Enregistrer','attr'=>array('class'=>'btn-default span2 offset5')));
       //--

        return $form;
    }

    /**
     * Displays a form to create a new Chauffeur entity.
     *
     */
    public function newAction()
    {
        $entity = new Chauffeur();
        $form   = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:Chauffeur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Chauffeur entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Chauffeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chauffeur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
		 //---
        $form =  $this->createForm(new BonCarburantHuileType(), $entity);
        //---
		
        return $this->render('FdrAdminBundle:Chauffeur:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
			//--
            'form' => $form->createView(),
            //--
        ));
    }

    /**
     * Displays a form to edit an existing Chauffeur entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Chauffeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chauffeur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:Chauffeur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Chauffeur entity.
    *
    * @param Chauffeur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Chauffeur $entity)
    {
        $form = $this->createForm(new ChauffeurType(), $entity, array(
            'action' => $this->generateUrl('chauffeur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //--
        $form->add('submit', 'submit', array('label' => 'Modifier','attr'=>array('class'=>'btn-primary span2')));
         //--

        return $form;
    }
    /**
     * Edits an existing Chauffeur entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Chauffeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chauffeur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('chauffeur_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:Chauffeur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Chauffeur entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Chauffeur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Chauffeur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('chauffeur'));
    }

    /**
     * Creates a form to delete a Chauffeur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chauffeur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => ' ','attr'=>array('class'=>'btn-supp','title'=>'Supprimer')))
            ->getForm()
        ;
    }
}
