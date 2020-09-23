<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionCompteAmbuController extends AbstractController
{
    /**
     * @Route("/staff/gestionCompteAmbu", name="gestionCompteAmbu")
     */
    public function index()
    {
        return $this->render('gestion_compte_ambu/index.html.twig', [
            'controller_name' => 'GestionCompteAmbuController',
        ]);
    }
}
