<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionComptePoliceController extends AbstractController
{
    /**
     * @Route("/staff/gestionComptePolice", name="gestionComptePolice")
     */
    public function index()
    {
        return $this->render('gestion_compte_police/index.html.twig', [
            'controller_name' => 'GestionComptePoliceController',
        ]);
    }
}
