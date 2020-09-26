<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionGouvController extends AbstractController
{
    /**
     * @Route("/gestionGouv", name="gestionGouv")
     */
    public function index()
    {
        return $this->render('gestion_gouv/index.html.twig', [
            'controller_name' => 'GestionGouvController',
        ]);
    }
}
