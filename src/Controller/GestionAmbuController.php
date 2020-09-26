<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionAmbuController extends AbstractController
{
    /**
     * @Route("/gestionAmbu", name="gestionAmbu")
     */
    public function index()
    {
        return $this->render('gestion_ambu/index.html.twig', [
            'controller_name' => 'GestionAmbuController',
        ]);
    }
}
