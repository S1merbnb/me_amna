<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class livresController extends AbstractController
{
    #[Route('/back/office/livres', name: 'app_back_livres')]
    public function index(): Response
    {
        return $this->render('back_office/livres/index.html.twig', [
            'controller_name' => 'livresController',
        ]);
    }
}
