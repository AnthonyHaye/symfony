<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GecolaControleurController extends AbstractController
{
    /**
     * @Route("/gecola/controleur", name="app_gecola_controleur")
     */
    public function index(): Response
    {
        return $this->render('gecola_controleur/index.html.twig', [
            'controller_name' => 'GecolaControleurController',
        ]);
    }
}
