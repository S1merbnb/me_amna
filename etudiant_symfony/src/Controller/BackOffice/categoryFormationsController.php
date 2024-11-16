<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class categoryFormationsController extends AbstractController
{
    #[Route('/back/office/category/formations', name: 'app_back_category_formations')]
    public function index(): Response
    {
        return $this->render('back_office/category_formations/index.html.twig', [
            'controller_name' => 'categoryFormationsController',
        ]);
    }
}
