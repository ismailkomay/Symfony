<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fdr\AdminBundle\Entity\Peage;
use Fdr\AdminBundle\Form\PeageType;

/**
 * Peage controller.
 *
 */
class PeageController extends Controller
{

    /**
     * Lists all Peage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Peage')->findAll();
        
        //--
        $form = array();
        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }     
        //--
        return $this->render('FdrAdminBundle:Peage:index.html.twig', array(
            'entities' => $entities,
            'form'=>$form
        ));
    }
    /**
     * Creates a new Peage entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Peage();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('peage_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:Peage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Peage entity.
     *
     * @param Peage $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Peage $entity)
    {
        $form = $this->createForm(new PeageType(), $entity, array(
            'action' => $this->generateUrl('peage_create'),
            'method' => 'POST',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Enregistrer','attr'=>array('class'=>'btn-default span2 offset5')));
       
        return $form;
    }

    /**
     * Displays a form to create a new Peage entity.
     *
     */
    public function newAction()
    {
        $entity = new Peage();
        $form   = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:Peage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Peage entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Peage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Peage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

         //---
        $form =  $this->createForm(new PeageType(), $entity);
        //---

        return $this->render('FdrAdminBundle:Peage:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            //--
            'form' => $form->createView(),
            //--
        ));
    }

    /**
     * Displays a form to edit an existing Peage entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Peage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Peage entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:Peage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Peage entity.
    *
    * @param Peage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Peage $entity)
    {
        $form = $this->createForm(new PeageType(), $entity, array(
            'action' => $this->generateUrl('peage_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Modifier','attr'=>array('class'=>'btn-primary span2 offset5')));
         //--
        return $form;
    }
    /**
     * Edits an existing Peage entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Peage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Peage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('peage_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:Peage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Peage entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Peage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Peage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('peage'));
    }

    /**
     * Creates a form to delete a Peage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('peage_delete', array('id' => $id)))
            ->setMethod('DELETE')
                //--
            ->add('submit', 'submit', array('label' => ' ','attr'=>array('class'=>'btn-supp','title'=>'Supprimer')))
                //--
            ->getForm()
        ;
    }
}
