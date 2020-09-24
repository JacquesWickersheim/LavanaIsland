<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil/{user}", name="profil")
     */
    public function index()
    {

        $user = $this->getUser('username');

        $monaie = "SELECT `users_money` WHERE users_name='$user'";
        var_dump($monaie);

//        $monaie = $requeteMonaie->fetchAll();

        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
            'argent' => $monaie
        ]);
    }
}
