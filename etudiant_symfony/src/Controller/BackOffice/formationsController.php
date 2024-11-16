<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class formationsController extends AbstractController
{
    #[Route('/back/office/formations', name: 'app_back_formations')]
    public function index(): Response
    {
        return $this->render('back_office/formations/index.html.twig', [
            'controller_name' => 'formationsController',
        ]);
    }
}
