<?php

namespace Taller\RutaMicroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Taller\RutaMicroBundle\Entity\Entidad;
use Taller\RutaMicroBundle\Form\EntidadType;

/**
 * Entidad controller.
 *
 */
class EntidadController extends Controller
{

    /**
     * Lists all Entidad entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RutaMicroBundle:Entidad')->findAll();

        return $this->render('RutaMicroBundle:Entidad:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Entidad entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Entidad();
        $form = $this->createForm(new EntidadType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entidad_show', array('id' => $entity->getId())));
        }

        return $this->render('RutaMicroBundle:Entidad:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Entidad entity.
     *
     */
    public function newAction()
    {
        $entity = new Entidad();
        $form   = $this->createForm(new EntidadType(), $entity);

        return $this->render('RutaMicroBundle:Entidad:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Entidad entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Entidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entidad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Entidad:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Entidad entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Entidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entidad entity.');
        }

        $editForm = $this->createForm(new EntidadType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Entidad:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Entidad entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Entidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entidad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EntidadType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entidad_edit', array('id' => $id)));
        }

        return $this->render('RutaMicroBundle:Entidad:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Entidad entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RutaMicroBundle:Entidad')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Entidad entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('entidad'));
    }

    /**
     * Creates a form to delete a Entidad entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
