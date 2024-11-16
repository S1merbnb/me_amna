<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class categoryClubsController extends AbstractController
{
    #[Route('/back/office/category/clubs', name: 'app_back_category_clubs')]
    public function index(): Response
    {
        return $this->render('back_office/category_clubs/index.html.twig', [
            'controller_name' => 'categoryClubsController',
        ]);
    }
}
