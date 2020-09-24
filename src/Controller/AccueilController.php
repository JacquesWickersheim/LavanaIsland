<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        $user = $this->getUser('username');

        return $this->render('accueil/index.html.twig', [
            'titrePage' => 'Lavana Island',
            'user' => $user
        ]);
    }
}
