<?php

namespace App\Controller;

use App\Repository\ConcessRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConcessController extends AbstractController
{
    /**
     * @Route("/civil/concess", name="concess")
     */
    public function index(ConcessRepository $concessRepository)
    {
        $titreSite = 'Lavana Island';

        $voiture = $concessRepository->createQueryBuilder('gne')
            ->orderBy('gne.type', 'ASC')
            ->getQuery()
            ->getResult();
        return $this->render('concess/index.html.twig', [
            'titreSite' => $titreSite,
            'affichageTuture' => $voiture
        ]);
    }
}
