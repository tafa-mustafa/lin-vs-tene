<?php

namespace biblioBundle\Controller;

use biblioBundle\Entity\Pret;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Pret controller.
 *
 * @Route("pret")
 */
class PretController extends Controller
{
    /**
     * Lists all pret entities.
     *
     * @Route("/", name="pret_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $prets = $em->getRepository('biblioBundle:Pret')->findAll();

        return $this->render('pret/index.html.twig', array(
            'prets' => $prets,
        ));
    }

    /**
     * Creates a new pret entity.
     *
     * @Route("/new", name="pret_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pret = new Pret();
        $form = $this->createForm('biblioBundle\Form\PretType', $pret);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pret);
            $em->flush();

            return $this->redirectToRoute('pret_show', array('id' => $pret->getId()));
        }

        return $this->render('pret/new.html.twig', array(
            'pret' => $pret,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pret entity.
     *
     * @Route("/{id}", name="pret_show")
     * @Method("GET")
     */
    public function showAction(Pret $pret)
    {
        $deleteForm = $this->createDeleteForm($pret);

        return $this->render('pret/show.html.twig', array(
            'pret' => $pret,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pret entity.
     *
     * @Route("/{id}/edit", name="pret_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Pret $pret)
    {
        $deleteForm = $this->createDeleteForm($pret);
        $editForm = $this->createForm('biblioBundle\Form\PretType', $pret);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pret_edit', array('id' => $pret->getId()));
        }

        return $this->render('pret/edit.html.twig', array(
            'pret' => $pret,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pret entity.
     *
     * @Route("/{id}", name="pret_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Pret $pret)
    {
        $form = $this->createDeleteForm($pret);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pret);
            $em->flush();
        }

        return $this->redirectToRoute('pret_index');
    }

    /**
     * Creates a form to delete a pret entity.
     *
     * @param Pret $pret The pret entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pret $pret)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pret_delete', array('id' => $pret->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
