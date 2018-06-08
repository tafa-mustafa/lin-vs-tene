<?php

namespace biblioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontController extends Controller
{
    /**
     * @Route("/Front/accueil")
     */
    public function accueilAction()
    {
        return $this->render('@biblio/front/accueil.html.twig', array(
            // ...
        ));
    }

 
      /**
     * @Route("/home")
     */
    public function homeAction()
    {
        return $this->render('@biblio/home.html.twig', array(
            // ...
        ));
    }


    /**
     * @Route("Front/Apropo")
     */
    public function ApropoAction()
    {
        return $this->render('@biblio/Front/apropo.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Front/Programme")
     */
    public function ProgrammeAction()
    {
        return $this->render('@biblio/Front/programme.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Front/Blog")
     */
    public function BlogAction()
    {
        return $this->render('@biblio/Front/blog.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Front/Contact")
     */
    public function ContactsAction()
    {
        return $this->render('@biblio/Front/contacts.html.twig', array(
            // ...
        ));
    }

    // /**
    //  * @Route("/404")
    //  */
    // public function 404Action()
    // {
    //     return $this->render('@biblio/Front/404.html.twig', array(
    //         // ...
    //     ));
    // }

    /**
     * @Route("/Enconstruction")
     */
    public function EnconstructionAction()
    {
        return $this->render('biblio/Front/enconstruction.html.twig', array(
            // ...
        ));
    }

}
