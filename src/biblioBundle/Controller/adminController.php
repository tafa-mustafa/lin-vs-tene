<?php

namespace biblioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class adminController extends Controller
{
       /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return $this->render('@biblio/admin.html.twig', array(
            // ...
        ));
    }
    
    /**
     * @Route("/add", name="ajouter")
     */
    public function addAction()
    {
        return $this->render('@biblio/admin/add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/list" , name="list")
     */
    public function listAction()
    {
        return $this->render('@biblio/admin/list.html.twig', array(
            // ...
        ));
    }

}
