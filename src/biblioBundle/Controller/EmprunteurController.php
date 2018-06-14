<?php

namespace biblioBundle\Controller;

use biblioBundle\Entity\Emprunteur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Emprunteur controller.
 *
 * @Route("emprunteur")
 */
class EmprunteurController extends Controller
{
    /**
     * Lists all emprunteur entities.
     *
     * @Route("/", name="emprunteur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $emprunteurs = $em->getRepository('biblioBundle:Emprunteur')->findAll();

        return $this->render('emprunteur/index.html.twig', array(
            'emprunteurs' => $emprunteurs,
        ));
    }

    /**
     * Creates a new emprunteur entity.
     *
     * @Route("/new", name="emprunteur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $emprunteur = new Emprunteur();
        $form = $this->createForm('biblioBundle\Form\EmprunteurType', $emprunteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($emprunteur);
            $em->flush();

            return $this->redirectToRoute('emprunteur_show', array('id' => $emprunteur->getId()));
        }

        return $this->render('emprunteur/new.html.twig', array(
            'emprunteur' => $emprunteur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a emprunteur entity.
     *
     * @Route("/{id}", name="emprunteur_show")
     * @Method("GET")
     */
    public function showAction(Emprunteur $emprunteur)
    {
        $deleteForm = $this->createDeleteForm($emprunteur);

        return $this->render('emprunteur/show.html.twig', array(
            'emprunteur' => $emprunteur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing emprunteur entity.
     *
     * @Route("/{id}/edit", name="emprunteur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Emprunteur $emprunteur)
    {
        $deleteForm = $this->createDeleteForm($emprunteur);
        $editForm = $this->createForm('biblioBundle\Form\EmprunteurType', $emprunteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('emprunteur_edit', array('id' => $emprunteur->getId()));
        }

        return $this->render('emprunteur/edit.html.twig', array(
            'emprunteur' => $emprunteur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a emprunteur entity.
     *
     * @Route("/{id}", name="emprunteur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Emprunteur $emprunteur)
    {
        $form = $this->createDeleteForm($emprunteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($emprunteur);
            $em->flush();
        }

        return $this->redirectToRoute('emprunteur_index');
    }

    /**
     * Creates a form to delete a emprunteur entity.
     *
     * @param Emprunteur $emprunteur The emprunteur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Emprunteur $emprunteur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('emprunteur_delete', array('id' => $emprunteur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
