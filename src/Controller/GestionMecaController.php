<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionMecaController extends AbstractController
{
    /**
     * @Route("/gestionMeca", name="gestionMeca")
     */
    public function index()
    {
        return $this->render('gestion_meca/index.html.twig', [
            'controller_name' => 'GestionMecaController',
        ]);
    }
}
