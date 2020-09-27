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
     * @Route("/patronConcess/{id}", name="patronConcess")
     */
    public function index($id, Request $request, ConcessRepository $concessRepository)
    {

        $user = $this->getUser('username');

        if($id){
            $voiture = $concessRepository->find($id);
            $nouveau = false;
        }else{
            $voiture = new Concess();
            $nouveau = true;
        }

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
            'nouveau' => $nouveau,
            'user' => $user
        ]);
    }
}
