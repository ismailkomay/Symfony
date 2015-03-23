<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fdr\AdminBundle\Entity\MissionAffretement;
use Fdr\AdminBundle\Form\MissionAffretementType;

/**
 * MissionAffretement controller.
 *
 */
class MissionAffretementController extends Controller
{

    /**
     * Lists all MissionAffretement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:MissionAffretement')->findAll();

        return $this->render('FdrAdminBundle:MissionAffretement:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new MissionAffretement entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new MissionAffretement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('missionaffretement_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:MissionAffretement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a MissionAffretement entity.
     *
     * @param MissionAffretement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MissionAffretement $entity)
    {
        $form = $this->createForm(new MissionAffretementType(), $entity, array(
            'action' => $this->generateUrl('missionaffretement_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));
        $form->add('submit', 'submit', array('label' => 'Enregistrer','attr'=>array('class'=>'btn btn-primary span2 offset4')));
        return $form;
    }

    /**
     * Displays a form to create a new MissionAffretement entity.
     *
     */
    public function newAction()
    {
        $entity = new MissionAffretement();
        $form   = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:MissionAffretement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a MissionAffretement entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:MissionAffretement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MissionAffretement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:MissionAffretement:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing MissionAffretement entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:MissionAffretement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MissionAffretement entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:MissionAffretement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a MissionAffretement entity.
    *
    * @param MissionAffretement $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(MissionAffretement $entity)
    {
        $form = $this->createForm(new MissionAffretementType(), $entity, array(
            'action' => $this->generateUrl('missionaffretement_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing MissionAffretement entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:MissionAffretement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MissionAffretement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('missionaffretement_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:MissionAffretement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a MissionAffretement entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:MissionAffretement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MissionAffretement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('missionaffretement'));
    }

    /**
     * Creates a form to delete a MissionAffretement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('missionaffretement_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
