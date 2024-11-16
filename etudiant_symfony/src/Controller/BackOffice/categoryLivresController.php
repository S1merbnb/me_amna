<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class categoryLivresController extends AbstractController
{
    #[Route('/back/office/category/livres', name: 'app_back_category_livres')]
    public function index(): Response
    {
        return $this->render('back_office/category_livres/index.html.twig', [
            'controller_name' => 'categoryLivresController',
        ]);
    }
}
