<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="app_admin_index")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', []);
    }
    
    /**
     * @Route("/admin/index", name="app_admin_index2")
     */
    public function index2(): Response
    {
        return $this->index();
    }

}
