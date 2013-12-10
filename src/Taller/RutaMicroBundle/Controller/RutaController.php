<?php

namespace Taller\RutaMicroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Taller\RutaMicroBundle\Entity\Ruta;
use Taller\RutaMicroBundle\Form\RutaType;

/**
 * Ruta controller.
 *
 */
class RutaController extends Controller
{

    /**
     * Lists all Ruta entities.
     *
     */
    public function indexAction()
    {
        $peticion = $this->getRequest();
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 3600);
        $em = $this->getDoctrine()->getManager();

        // $entities = $em->getRepository('RutaMicroBundle:Ruta')->findAll();
        $entities = $em->getRepository('RutaMicroBundle:Ruta')->findRutaMicro("Linea 103");
        $lineaMicros = $em->getRepository('RutaMicroBundle:LineaMicro')->findAll();

        if ($peticion->getMethod() == 'POST') {
            $linea = $peticion->request->get('linea');
            $entities = $em->getRepository('RutaMicroBundle:Ruta')->findRutaMicro($linea);
        }

        return $this->render('RutaMicroBundle:Ruta:index.html.twig', array(
            'entities' => $entities,
            'lineaMicros' => $lineaMicros,
            ));
    }
    /**
     * Creates a new Ruta entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Ruta();
        $form = $this->createForm(new RutaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ruta_show', array('id' => $entity->getId())));
        }

        return $this->render('RutaMicroBundle:Ruta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            ));
    }

    /**
     * Displays a form to create a new Ruta entity.
     *
     */
    public function newAction()
    {
        $entity = new Ruta();
        $form   = $this->createForm(new RutaType(), $entity);

        return $this->render('RutaMicroBundle:Ruta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            ));
    }

    /**
     * Finds and displays a Ruta entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Ruta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ruta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Ruta:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Ruta entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Ruta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ruta entity.');
        }

        $editForm = $this->createForm(new RutaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RutaMicroBundle:Ruta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Edits an existing Ruta entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RutaMicroBundle:Ruta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ruta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new RutaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ruta_edit', array('id' => $id)));
        }

        return $this->render('RutaMicroBundle:Ruta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            ));
    }
    /**
     * Deletes a Ruta entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RutaMicroBundle:Ruta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ruta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ruta'));
    }

    /**
     * Creates a form to delete a Ruta entity by id.
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
