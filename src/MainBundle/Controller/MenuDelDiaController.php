<?php

namespace MainBundle\Controller;

use MainBundle\Entity\MenuDelDia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Menudeldium controller.
 *
 * @Route("menudeldia")
 */
class MenuDelDiaController extends Controller
{
    /**
     * Lists all menuDelDium entities.
     *
     * @Route("/", name="menudeldia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $menuDelDias = $em->getRepository('MainBundle:MenuDelDia')->findAll();

        return $this->render('menudeldia/index.html.twig', array(
            'menuDelDias' => $menuDelDias,
        ));
    }

    /**
     * Creates a new menuDelDium entity.
     *
     * @Route("/new", name="menudeldia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $menuDelDium = new Menudeldium();
        $form = $this->createForm('MainBundle\Form\MenuDelDiaType', $menuDelDium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($menuDelDium);
            $em->flush($menuDelDium);

            return $this->redirectToRoute('menudeldia_show', array('id' => $menuDelDium->getId()));
        }

        return $this->render('menudeldia/new.html.twig', array(
            'menuDelDium' => $menuDelDium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a menuDelDium entity.
     *
     * @Route("/{id}", name="menudeldia_show")
     * @Method("GET")
     */
    public function showAction(MenuDelDia $menuDelDium)
    {
        $deleteForm = $this->createDeleteForm($menuDelDium);

        return $this->render('menudeldia/show.html.twig', array(
            'menuDelDium' => $menuDelDium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing menuDelDium entity.
     *
     * @Route("/{id}/edit", name="menudeldia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, MenuDelDia $menuDelDium)
    {
        $deleteForm = $this->createDeleteForm($menuDelDium);
        $editForm = $this->createForm('MainBundle\Form\MenuDelDiaType', $menuDelDium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('menudeldia_edit', array('id' => $menuDelDium->getId()));
        }

        return $this->render('menudeldia/edit.html.twig', array(
            'menuDelDium' => $menuDelDium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a menuDelDium entity.
     *
     * @Route("/{id}", name="menudeldia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, MenuDelDia $menuDelDium)
    {
        $form = $this->createDeleteForm($menuDelDium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($menuDelDium);
            $em->flush($menuDelDium);
        }

        return $this->redirectToRoute('menudeldia_index');
    }

    /**
     * Creates a form to delete a menuDelDium entity.
     *
     * @param MenuDelDia $menuDelDium The menuDelDium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MenuDelDia $menuDelDium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('menudeldia_delete', array('id' => $menuDelDium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
