<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class categoryEventsController extends AbstractController
{
    #[Route('/back/office/category/events', name: 'app_back_category_events')]
    public function index(): Response
    {
        return $this->render('back_office/category_events/index.html.twig', [
            'controller_name' => 'categoryEventsController',
        ]);
    }
}
