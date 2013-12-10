<?php

namespace Taller\RutaMicroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Taller\RutaMicroBundle\Entity\Sucursal;
use Taller\RutaMicroBundle\Form\SucursalType;

/**
 * Sucursal controller.
 *
 */
class SucursalController extends Controller
{

    /**
     * Lists all Sucursal entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RutaMicroBundle:Sucursal')->findAll();

        return $this->render('RutaMicroBundle:Sucursal:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Sucursal entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Sucursal();
        $form = $this->createForm(new SucursalType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sucursal_show', array('id' => $entity->getId())));
        }

        return $this->render('RutaMicroBundle:Sucursal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Sucursal entity.
     *
     */
    public function newAction()
    {
        $entity = new Sucursal();
        $form   = $this->createForm(new SucursalType(), $entity);

        return $this->render('RutaMicroBundle:Sucursal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sucursal entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Sucursal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sucursal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Sucursal:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Sucursal entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Sucursal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sucursal entity.');
        }

        $editForm = $this->createForm(new SucursalType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Sucursal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Sucursal entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Sucursal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sucursal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SucursalType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sucursal_edit', array('id' => $id)));
        }

        return $this->render('RutaMicroBundle:Sucursal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Sucursal entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RutaMicroBundle:Sucursal')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sucursal entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sucursal'));
    }

    /**
     * Creates a form to delete a Sucursal entity by id.
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
