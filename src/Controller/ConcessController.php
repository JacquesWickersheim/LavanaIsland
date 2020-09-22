<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConcessController extends AbstractController
{
    /**
     * @Route("/concess", name="concess")
     */
    public function index()
    {
        return $this->render('concess/index.html.twig', [
            'controller_name' => 'ConcessController',
        ]);
    }
}
