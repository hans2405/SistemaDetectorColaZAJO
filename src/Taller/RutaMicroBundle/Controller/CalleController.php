<?php

namespace Taller\RutaMicroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Taller\RutaMicroBundle\Entity\Calle;
use Taller\RutaMicroBundle\Form\CalleType;

/**
 * Calle controller.
 *
 */
class CalleController extends Controller
{

    /**
     * Lists all Calle entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RutaMicroBundle:Calle')->findAll();

        return $this->render('RutaMicroBundle:Calle:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Calle entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Calle();
        $form = $this->createForm(new CalleType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('calle_show', array('id' => $entity->getId())));
        }

        return $this->render('RutaMicroBundle:Calle:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Calle entity.
     *
     */
    public function newAction()
    {
        $entity = new Calle();
        $form   = $this->createForm(new CalleType(), $entity);

        return $this->render('RutaMicroBundle:Calle:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Calle entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Calle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Calle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Calle:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Calle entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Calle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Calle entity.');
        }

        $editForm = $this->createForm(new CalleType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Calle:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Calle entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Calle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Calle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CalleType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('calle_edit', array('id' => $id)));
        }

        return $this->render('RutaMicroBundle:Calle:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Calle entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RutaMicroBundle:Calle')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Calle entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('calle'));
    }

    /**
     * Creates a form to delete a Calle entity by id.
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
