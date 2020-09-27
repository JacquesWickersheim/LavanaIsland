<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReglementController extends AbstractController
{
    /**
     * @Route("/reglement", name="reglement")
     */
    public function index()
    {
        $user = $this->getUser('username');
        return $this->render('reglement/index.html.twig', [
            'user' => $user
        ]);
    }
}
