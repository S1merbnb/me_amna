<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class clubsController extends AbstractController
{
    #[Route('/back/office/clubs', name: 'app_back_clubs')]
    public function index(): Response
    {
        return $this->render('back_office/clubs/index.html.twig', [
            'controller_name' => 'clubsController',
        ]);
    }
}
