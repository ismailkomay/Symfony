<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fdr\AdminBundle\Entity\BonCarburantHuile;
use Fdr\AdminBundle\Form\BonCarburantHuileType;

/**
 * BonCarburantHuile controller.
 *
 */
class BonCarburantHuileController extends Controller
{

    /**
     * Lists all BonCarburantHuile entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:BonCarburantHuile')->findAll();

        return $this->render('FdrAdminBundle:BonCarburantHuile:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new BonCarburantHuile entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new BonCarburantHuile();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('boncarburanthuile_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:BonCarburantHuile:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a BonCarburantHuile entity.
     *
     * @param BonCarburantHuile $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(BonCarburantHuile $entity)
    {
        $form = $this->createForm(new BonCarburantHuileType(), $entity, array(
            'action' => $this->generateUrl('boncarburanthuile_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new BonCarburantHuile entity.
     *
     */
    public function newAction()
    {
        $entity = new BonCarburantHuile();
        $form   = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:BonCarburantHuile:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a BonCarburantHuile entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:BonCarburantHuile')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BonCarburantHuile entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:BonCarburantHuile:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing BonCarburantHuile entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:BonCarburantHuile')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BonCarburantHuile entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:BonCarburantHuile:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a BonCarburantHuile entity.
    *
    * @param BonCarburantHuile $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(BonCarburantHuile $entity)
    {
        $form = $this->createForm(new BonCarburantHuileType(), $entity, array(
            'action' => $this->generateUrl('boncarburanthuile_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing BonCarburantHuile entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:BonCarburantHuile')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BonCarburantHuile entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('boncarburanthuile_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:BonCarburantHuile:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a BonCarburantHuile entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:BonCarburantHuile')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BonCarburantHuile entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('boncarburanthuile'));
    }

    /**
     * Creates a form to delete a BonCarburantHuile entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('boncarburanthuile_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
