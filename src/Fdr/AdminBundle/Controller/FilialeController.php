<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fdr\AdminBundle\Entity\Filiale;
use Fdr\AdminBundle\Form\FilialeType;

/**
 * Filiale controller.
 *
 */
class FilialeController extends Controller
{

    /**
     * Lists all Filiale entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Filiale')->findAll();
        
        //--
        $form = array();
        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }     
        //--
        return $this->render('FdrAdminBundle:Filiale:index.html.twig', array(
            'entities' => $entities,
            'form'=>$form
        ));
    }
    /**
     * Creates a new Filiale entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Filiale();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('filiale_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:Filiale:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Filiale entity.
     *
     * @param Filiale $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Filiale $entity)
    {
        $form = $this->createForm(new FilialeType(), $entity, array(
            'action' => $this->generateUrl('filiale_create'),
            'method' => 'POST',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Enregistrer','attr'=>array('class'=>'btn-default span2 offset5')));
       
        return $form;
    }

    /**
     * Displays a form to create a new Filiale entity.
     *
     */
    public function newAction()
    {
        $entity = new Filiale();
        $form   = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:Filiale:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Filiale entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Filiale')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filiale entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

         //---
        $form =  $this->createForm(new FilialeType(), $entity);
        //---

        return $this->render('FdrAdminBundle:Filiale:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            //--
            'form' => $form->createView(),
            //--
        ));
    }

    /**
     * Displays a form to edit an existing Filiale entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Filiale')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filiale entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:Filiale:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Filiale entity.
    *
    * @param Filiale $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Filiale $entity)
    {
        $form = $this->createForm(new FilialeType(), $entity, array(
            'action' => $this->generateUrl('filiale_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Modifier','attr'=>array('class'=>'btn-primary span2 offset5')));
         //--
        return $form;
    }
    /**
     * Edits an existing Filiale entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Filiale')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filiale entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('filiale_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:Filiale:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Filiale entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Filiale')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Filiale entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('filiale'));
    }

    /**
     * Creates a form to delete a Filiale entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('filiale_delete', array('id' => $id)))
            ->setMethod('DELETE')
                //--
            ->add('submit', 'submit', array('label' => ' ','attr'=>array('class'=>'btn-supp','title'=>'Supprimer')))
                //--
            ->getForm()
        ;
    }
}
