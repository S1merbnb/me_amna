<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class dashController extends AbstractController
{
    #[Route('/dashmin', name: 'app_dash')]
    public function index(): Response
    {
        return $this->render('back_office.html.twig', [
            'controller_name' => 'dashController',
        ]);
    }
}
