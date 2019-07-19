<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', []);
    }
    
    /**
     * @Route("/carro", name="app_carro")
     */
    public function carro(): Response
    {
        return $this->render('index.html.twig', ['productos' => ['polera', 'gorro']]);
    }
    
    /**
     * @Route("/pagar", name="app_pagar")
     */
    public function pagar(): Response
    {
        return $this->render('index.html.twig', ['monto' => 10990]);
    }

}
