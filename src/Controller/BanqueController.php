<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BanqueController extends AbstractController
{
    /**
     * @Route("/civil/banque", name="banque")
     */
    public function index()
    {
        return $this->render('banque/index.html.twig', [
            'controller_name' => 'BanqueController',
        ]);
    }
}
