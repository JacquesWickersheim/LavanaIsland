<?php

namespace App\Controller;

use App\Entity\Concess;
use App\Form\ConcessType;
use App\Repository\ConcessRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PatronConcessController extends AbstractController
{
    /**
     * @Route("/patronConcess", name="patronConcess")
     */
    public function index(Request $request, ConcessRepository $concessRepository)
    {

        $voiture = new Concess();
        $formulaireVoiture = $this->createForm(ConcessType::class, $voiture);
        $formulaireVoiture->handleRequest($request);
        if($formulaireVoiture->isSubmitted() && $formulaireVoiture->isValid()){
            $voiture = $formulaireVoiture->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($voiture);
            $em->flush();

            return $this->redirectToRoute('accueil');
            $this->addFlash('success', 'Le Véhicule à bien été enregistré');
        }


        return $this->render('patron_concess/index.html.twig', [
            'controller_name' => 'PatronConcessController',
            'voiture' => $formulaireVoiture->createView(),
        ]);
    }
}
