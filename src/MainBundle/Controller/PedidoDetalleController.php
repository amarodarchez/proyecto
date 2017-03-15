<?php

namespace MainBundle\Controller;

use MainBundle\Entity\PedidoDetalle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Pedidodetalle controller.
 *
 * @Route("pedidodetalle")
 */
class PedidoDetalleController extends Controller
{
    /**
     * Lists all pedidoDetalle entities.
     *
     * @Route("/", name="pedidodetalle_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pedidoDetalles = $em->getRepository('MainBundle:PedidoDetalle')->findAll();

        return $this->render('pedidodetalle/index.html.twig', array(
            'pedidoDetalles' => $pedidoDetalles,
        ));
    }

    /**
     * Creates a new pedidoDetalle entity.
     *
     * @Route("/new", name="pedidodetalle_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pedidoDetalle = new Pedidodetalle();
        $form = $this->createForm('MainBundle\Form\PedidoDetalleType', $pedidoDetalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pedidoDetalle);
            $em->flush($pedidoDetalle);

            return $this->redirectToRoute('pedidodetalle_show', array('id' => $pedidoDetalle->getId()));
        }

        return $this->render('pedidodetalle/new.html.twig', array(
            'pedidoDetalle' => $pedidoDetalle,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pedidoDetalle entity.
     *
     * @Route("/{id}", name="pedidodetalle_show")
     * @Method("GET")
     */
    public function showAction(PedidoDetalle $pedidoDetalle)
    {
        $deleteForm = $this->createDeleteForm($pedidoDetalle);

        return $this->render('pedidodetalle/show.html.twig', array(
            'pedidoDetalle' => $pedidoDetalle,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pedidoDetalle entity.
     *
     * @Route("/{id}/edit", name="pedidodetalle_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PedidoDetalle $pedidoDetalle)
    {
        $deleteForm = $this->createDeleteForm($pedidoDetalle);
        $editForm = $this->createForm('MainBundle\Form\PedidoDetalleType', $pedidoDetalle);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pedidodetalle_edit', array('id' => $pedidoDetalle->getId()));
        }

        return $this->render('pedidodetalle/edit.html.twig', array(
            'pedidoDetalle' => $pedidoDetalle,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pedidoDetalle entity.
     *
     * @Route("/{id}", name="pedidodetalle_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PedidoDetalle $pedidoDetalle)
    {
        $form = $this->createDeleteForm($pedidoDetalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pedidoDetalle);
            $em->flush($pedidoDetalle);
        }

        return $this->redirectToRoute('pedidodetalle_index');
    }

    /**
     * Creates a form to delete a pedidoDetalle entity.
     *
     * @param PedidoDetalle $pedidoDetalle The pedidoDetalle entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PedidoDetalle $pedidoDetalle)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pedidodetalle_delete', array('id' => $pedidoDetalle->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
