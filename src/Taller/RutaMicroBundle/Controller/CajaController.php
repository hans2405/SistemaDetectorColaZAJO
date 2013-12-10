<?php

namespace Taller\RutaMicroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Taller\RutaMicroBundle\Entity\Caja;
use Taller\RutaMicroBundle\Form\CajaType;

/**
 * Caja controller.
 *
 */
class CajaController extends Controller
{

    /**
     * Lists all Caja entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RutaMicroBundle:Caja')->findAll();

        return $this->render('RutaMicroBundle:Caja:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Caja entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Caja();
        $form = $this->createForm(new CajaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('caja_show', array('id' => $entity->getId())));
        }

        return $this->render('RutaMicroBundle:Caja:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Caja entity.
     *
     */
    public function newAction()
    {
        $entity = new Caja();
        $form   = $this->createForm(new CajaType(), $entity);

        return $this->render('RutaMicroBundle:Caja:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Caja entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Caja')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caja entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Caja:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Caja entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Caja')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caja entity.');
        }

        $editForm = $this->createForm(new CajaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Caja:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Caja entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Caja')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caja entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CajaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('caja_edit', array('id' => $id)));
        }

        return $this->render('RutaMicroBundle:Caja:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Caja entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RutaMicroBundle:Caja')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Caja entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('caja'));
    }

    /**
     * Creates a form to delete a Caja entity by id.
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
