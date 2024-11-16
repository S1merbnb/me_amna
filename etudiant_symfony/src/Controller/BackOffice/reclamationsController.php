<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class reclamationsController extends AbstractController
{
    #[Route('/back/office/reclamations', name: 'app_back_reclamations')]
    public function index(): Response
    {
        return $this->render('back_office/reclamations/index.html.twig', [
            'controller_name' => 'reclamationsController',
        ]);
    }
}
