<?php

namespace Taller\RutaMicroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Taller\RutaMicroBundle\Entity\Horario;
use Taller\RutaMicroBundle\Form\HorarioType;

/**
 * Horario controller.
 *
 */
class HorarioController extends Controller
{

    /**
     * Lists all Horario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RutaMicroBundle:Horario')->findAll();

        return $this->render('RutaMicroBundle:Horario:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Horario entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Horario();
        $form = $this->createForm(new HorarioType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('horario_show', array('id' => $entity->getId())));
        }

        return $this->render('RutaMicroBundle:Horario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Horario entity.
     *
     */
    public function newAction()
    {
        $entity = new Horario();
        $form   = $this->createForm(new HorarioType(), $entity);

        return $this->render('RutaMicroBundle:Horario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Horario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Horario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Horario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Horario:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Horario entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Horario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Horario entity.');
        }

        $editForm = $this->createForm(new HorarioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Horario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Horario entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Horario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Horario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new HorarioType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('horario_edit', array('id' => $id)));
        }

        return $this->render('RutaMicroBundle:Horario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Horario entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RutaMicroBundle:Horario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Horario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('horario'));
    }

    /**
     * Creates a form to delete a Horario entity by id.
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
