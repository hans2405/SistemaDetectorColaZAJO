<?php

namespace Taller\RutaMicroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Taller\RutaMicroBundle\Entity\LineaMicro;
use Taller\RutaMicroBundle\Form\LineaMicroType;

/**
 * LineaMicro controller.
 *
 */
class LineaMicroController extends Controller
{

    /**
     * Lists all LineaMicro entities.
     *
     */
    public function listarAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RutaMicroBundle:LineaMicro')->findAll();

        return $this->render('RutaMicroBundle:LineaMicro:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new LineaMicro entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new LineaMicro();
        $form = $this->createForm(new LineaMicroType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lineamicro_show', array('id' => $entity->getId())));
        }

        return $this->render('RutaMicroBundle:LineaMicro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new LineaMicro entity.
     *
     */
    public function newAction()
    {
        $entity = new LineaMicro();
        $form   = $this->createForm(new LineaMicroType(), $entity);

        return $this->render('RutaMicroBundle:LineaMicro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a LineaMicro entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:LineaMicro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LineaMicro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:LineaMicro:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing LineaMicro entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:LineaMicro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LineaMicro entity.');
        }

        $editForm = $this->createForm(new LineaMicroType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:LineaMicro:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing LineaMicro entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:LineaMicro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LineaMicro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new LineaMicroType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lineamicro_edit', array('id' => $id)));
        }

        return $this->render('RutaMicroBundle:LineaMicro:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a LineaMicro entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RutaMicroBundle:LineaMicro')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LineaMicro entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lineamicro'));
    }

    /**
     * Creates a form to delete a LineaMicro entity by id.
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
