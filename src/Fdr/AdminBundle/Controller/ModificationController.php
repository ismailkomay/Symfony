<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fdr\AdminBundle\Entity\Modification;
use Fdr\AdminBundle\Form\ModificationType;

/**
 * Modification controller.
 *
 */
class ModificationController extends Controller
{

    /**
     * Lists all Modification entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Modification')->findAll();
        
        //--
        $form = array();
        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }     
        //--
        return $this->render('FdrAdminBundle:Modification:index.html.twig', array(
            'entities' => $entities,
            'form'=>$form
        ));
    }
    /**
     * Creates a new Modification entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Modification();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('modification_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:Modification:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Modification entity.
     *
     * @param Modification $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Modification $entity)
    {
        $form = $this->createForm(new ModificationType(), $entity, array(
            'action' => $this->generateUrl('modification_create'),
            'method' => 'POST',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Enregistrer','attr'=>array('class'=>'btn-default span2 offset5')));
       
        return $form;
    }

    /**
     * Displays a form to create a new Modification entity.
     *
     */
    public function newAction()
    {
        $entity = new Modification();
        $form   = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:Modification:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Modification entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Modification')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Modification entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

         //---
        $form =  $this->createForm(new ModificationType(), $entity);
        //---

        return $this->render('FdrAdminBundle:Modification:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            //--
            'form' => $form->createView(),
            //--
        ));
    }

    /**
     * Displays a form to edit an existing Modification entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Modification')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Modification entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:Modification:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Modification entity.
    *
    * @param Modification $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Modification $entity)
    {
        $form = $this->createForm(new ModificationType(), $entity, array(
            'action' => $this->generateUrl('modification_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Modifier','attr'=>array('class'=>'btn-primary span2 offset5')));
         //--
        return $form;
    }
    /**
     * Edits an existing Modification entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Modification')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Modification entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('modification_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:Modification:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Modification entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Modification')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Modification entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('modification'));
    }

    /**
     * Creates a form to delete a Modification entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('modification_delete', array('id' => $id)))
            ->setMethod('DELETE')
                //--
            ->add('submit', 'submit', array('label' => ' ','attr'=>array('class'=>'btn-supp','title'=>'Supprimer')))
                //--
            ->getForm()
        ;
    }
}
