<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionCompteMecaController extends AbstractController
{
    /**
     * @Route("/staff/gestionCompteMeca", name="gestionCompteMeca")
     */
    public function index()
    {
        return $this->render('gestion_compte_meca/index.html.twig', [
            'controller_name' => 'GestionCompteMecaController',
        ]);
    }
}
