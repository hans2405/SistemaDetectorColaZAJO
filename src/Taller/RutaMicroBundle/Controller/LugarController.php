<?php

namespace Taller\RutaMicroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Taller\RutaMicroBundle\Entity\Lugar;
use Taller\RutaMicroBundle\Form\LugarType;

/**
 * Lugar controller.
 *
 */
class LugarController extends Controller
{

    /**
     * Lists all Lugar entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RutaMicroBundle:Lugar')->findAll();

        return $this->render('RutaMicroBundle:Lugar:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Lugar entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Lugar();
        $form = $this->createForm(new LugarType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lugar_show', array('id' => $entity->getId())));
        }

        return $this->render('RutaMicroBundle:Lugar:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Lugar entity.
     *
     */
    public function newAction()
    {
        $entity = new Lugar();
        $form   = $this->createForm(new LugarType(), $entity);

        return $this->render('RutaMicroBundle:Lugar:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Lugar entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Lugar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Lugar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Lugar:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Lugar entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Lugar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Lugar entity.');
        }

        $editForm = $this->createForm(new LugarType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Lugar:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Lugar entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Lugar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Lugar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new LugarType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lugar_edit', array('id' => $id)));
        }

        return $this->render('RutaMicroBundle:Lugar:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Lugar entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RutaMicroBundle:Lugar')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Lugar entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lugar'));
    }

    /**
     * Creates a form to delete a Lugar entity by id.
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
