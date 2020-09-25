<?php

namespace App\Controller;


use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil/{user}", name="profil")
     */
    public function index(UsersRepository $UsersRepository)
    {

        $user = $this->getUser()->getUsername();

        $profile = $UsersRepository->findBy([
            'name' => $user
        ]);

        dump($profile);

        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
            'user' => $profile
        ]);
    }
}
