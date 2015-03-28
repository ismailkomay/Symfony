<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fdr\AdminBundle\Entity\Manutentionnaire;
use Fdr\AdminBundle\Form\ManutentionnaireType;

/**
 * Manutentionnaire controller.
 *
 */
class ManutentionnaireController extends Controller
{

    /**
     * Lists all Manutentionnaire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Manutentionnaire')->findAll();
        
        //--
        $form = array();
        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }     
        //--
        return $this->render('FdrAdminBundle:Manutentionnaire:index.html.twig', array(
            'entities' => $entities,
            'form'=>$form
        ));
    }
    /**
     * Creates a new Manutentionnaire entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Manutentionnaire();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('manutentionnaire_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:Manutentionnaire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Manutentionnaire entity.
     *
     * @param Manutentionnaire $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Manutentionnaire $entity)
    {
        $form = $this->createForm(new ManutentionnaireType(), $entity, array(
            'action' => $this->generateUrl('manutentionnaire_create'),
            'method' => 'POST',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Enregistrer','attr'=>array('class'=>'btn-default span2 offset5')));
       
        return $form;
    }

    /**
     * Displays a form to create a new Manutentionnaire entity.
     *
     */
    public function newAction()
    {
        $entity = new Manutentionnaire();
        $form   = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:Manutentionnaire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Manutentionnaire entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Manutentionnaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Manutentionnaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

         //---
        $form =  $this->createForm(new ManutentionnaireType(), $entity);
        //---

        return $this->render('FdrAdminBundle:Manutentionnaire:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            //--
            'form' => $form->createView(),
            //--
        ));
    }

    /**
     * Displays a form to edit an existing Manutentionnaire entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Manutentionnaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Manutentionnaire entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:Manutentionnaire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Manutentionnaire entity.
    *
    * @param Manutentionnaire $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Manutentionnaire $entity)
    {
        $form = $this->createForm(new ManutentionnaireType(), $entity, array(
            'action' => $this->generateUrl('manutentionnaire_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Modifier','attr'=>array('class'=>'btn-primary span2 offset5')));
         //--
        return $form;
    }
    /**
     * Edits an existing Manutentionnaire entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Manutentionnaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Manutentionnaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('manutentionnaire_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:Manutentionnaire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Manutentionnaire entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Manutentionnaire')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Manutentionnaire entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('manutentionnaire'));
    }

    /**
     * Creates a form to delete a Manutentionnaire entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('manutentionnaire_delete', array('id' => $id)))
            ->setMethod('DELETE')
                //--
            ->add('submit', 'submit', array('label' => ' ','attr'=>array('class'=>'btn-supp','title'=>'Supprimer')))
                //--
            ->getForm()
        ;
    }
}
