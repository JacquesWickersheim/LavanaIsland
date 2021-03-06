<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionConcessController extends AbstractController
{
    /**
     * @Route("/staff/gestionConcess", name="gestionConcess")
     */
    public function index()
    {
        $user = $this->getUser('username');
        return $this->render('gestion_concess/index.html.twig', [
            'controller_name' => 'GestionConcessController',
            'user' => $user
        ]);
    }
}
