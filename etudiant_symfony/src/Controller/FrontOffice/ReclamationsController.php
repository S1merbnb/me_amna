<?php

namespace App\Controller\FrontOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ReclamationsController extends AbstractController
{
    #[Route('/reclamations', name: 'app_reclamations')]
    public function index(): Response
    {
        return $this->render('front_office/reclamations/index.html.twig', [
            'controller_name' => 'ReclamationsController',
        ]);
    }
}
