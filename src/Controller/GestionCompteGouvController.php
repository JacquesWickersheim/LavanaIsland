<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionCompteGouvController extends AbstractController
{
    /**
     * @Route("/gestionCompteGouv", name="gestionCompteGouv")
     */
    public function index()
    {
        return $this->render('gestion_compte_gouv/index.html.twig', [
            'controller_name' => 'GestionCompteGouvController',
        ]);
    }
}
