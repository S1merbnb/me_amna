<?php

namespace App\Controller\FrontOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LivresController extends AbstractController
{
    #[Route('/livres', name: 'app_livres')]
    public function index(): Response
    {
        return $this->render('front_office/livres/index.html.twig', [
            'controller_name' => 'LivresController',
        ]);
    }
}
