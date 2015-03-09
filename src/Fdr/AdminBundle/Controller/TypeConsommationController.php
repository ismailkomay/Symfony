<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fdr\AdminBundle\Entity\TypeConsommation;
use Fdr\AdminBundle\Form\TypeConsommationType;

/**
 * TypeConsommation controller.
 *
 */
class TypeConsommationController extends Controller
{

    /**
     * Lists all TypeConsommation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:TypeConsommation')->findAll();

        return $this->render('FdrAdminBundle:TypeConsommation:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TypeConsommation entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TypeConsommation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('typeconsommation_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:TypeConsommation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TypeConsommation entity.
     *
     * @param TypeConsommation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TypeConsommation $entity)
    {
        $form = $this->createForm(new TypeConsommationType(), $entity, array(
            'action' => $this->generateUrl('typeconsommation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TypeConsommation entity.
     *
     */
    public function newAction()
    {
        $entity = new TypeConsommation();
        $form   = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:TypeConsommation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypeConsommation entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:TypeConsommation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeConsommation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:TypeConsommation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypeConsommation entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:TypeConsommation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeConsommation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:TypeConsommation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TypeConsommation entity.
    *
    * @param TypeConsommation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TypeConsommation $entity)
    {
        $form = $this->createForm(new TypeConsommationType(), $entity, array(
            'action' => $this->generateUrl('typeconsommation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TypeConsommation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:TypeConsommation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeConsommation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('typeconsommation_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:TypeConsommation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TypeConsommation entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:TypeConsommation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TypeConsommation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('typeconsommation'));
    }

    /**
     * Creates a form to delete a TypeConsommation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typeconsommation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
