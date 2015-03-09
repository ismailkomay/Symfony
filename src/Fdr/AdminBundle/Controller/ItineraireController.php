<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fdr\AdminBundle\Entity\Itineraire;
use Fdr\AdminBundle\Form\ItineraireType;

/**
 * Itineraire controller.
 *
 */
class ItineraireController extends Controller
{

    /**
     * Lists all Itineraire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Itineraire')->findAll();

        return $this->render('FdrAdminBundle:Itineraire:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Itineraire entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Itineraire();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('itineraire_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:Itineraire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Itineraire entity.
     *
     * @param Itineraire $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Itineraire $entity)
    {
        $form = $this->createForm(new ItineraireType(), $entity, array(
            'action' => $this->generateUrl('itineraire_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Itineraire entity.
     *
     */
    public function newAction()
    {
        $entity = new Itineraire();
        $form   = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:Itineraire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Itineraire entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Itineraire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Itineraire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:Itineraire:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Itineraire entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Itineraire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Itineraire entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:Itineraire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Itineraire entity.
    *
    * @param Itineraire $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Itineraire $entity)
    {
        $form = $this->createForm(new ItineraireType(), $entity, array(
            'action' => $this->generateUrl('itineraire_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Itineraire entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Itineraire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Itineraire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('itineraire_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:Itineraire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Itineraire entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Itineraire')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Itineraire entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('itineraire'));
    }

    /**
     * Creates a form to delete a Itineraire entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('itineraire_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
