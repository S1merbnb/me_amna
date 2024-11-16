<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class eventsController extends AbstractController
{
    #[Route('/back/office/events', name: 'app_back_events')]
    public function index(): Response
    {
        return $this->render('back_office/events/index.html.twig', [
            'controller_name' => 'eventsController',
        ]);
    }
}
