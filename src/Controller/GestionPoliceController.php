<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionPoliceController extends AbstractController
{
    /**
     * @Route("/gestionPolice", name="gestionPolice")
     */
    public function index()
    {
        $user = $this->getUser('username');
        return $this->render('gestion_police/index.html.twig', [
            'controller_name' => 'GestionPoliceController',
            'user' => $user
        ]);
    }
}
