<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Compra;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Compra controller.
 *
 * @Route("compra")
 */
class CompraController extends Controller
{
    /**
     * Lists all compra entities.
     *
     * @Route("/", name="compra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $compras = $em->getRepository('MainBundle:Compra')->findAll();

        return $this->render('compra/index.html.twig', array(
            'compras' => $compras,
        ));
    }

    /**
     * Creates a new compra entity.
     *
     * @Route("/new", name="compra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $compra = new Compra();
        $form = $this->createForm('MainBundle\Form\CompraType', $compra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($compra);
            $em->flush($compra);

            return $this->redirectToRoute('compra_show', array('id' => $compra->getId()));
        }

        return $this->render('compra/new.html.twig', array(
            'compra' => $compra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a compra entity.
     *
     * @Route("/{id}", name="compra_show")
     * @Method("GET")
     */
    public function showAction(Compra $compra)
    {
        $deleteForm = $this->createDeleteForm($compra);

        return $this->render('compra/show.html.twig', array(
            'compra' => $compra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing compra entity.
     *
     * @Route("/{id}/edit", name="compra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Compra $compra)
    {
        $deleteForm = $this->createDeleteForm($compra);
        $editForm = $this->createForm('MainBundle\Form\CompraType', $compra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('compra_edit', array('id' => $compra->getId()));
        }

        return $this->render('compra/edit.html.twig', array(
            'compra' => $compra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a compra entity.
     *
     * @Route("/{id}", name="compra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Compra $compra)
    {
        $form = $this->createDeleteForm($compra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($compra);
            $em->flush($compra);
        }

        return $this->redirectToRoute('compra_index');
    }

    /**
     * Creates a form to delete a compra entity.
     *
     * @param Compra $compra The compra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Compra $compra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('compra_delete', array('id' => $compra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
