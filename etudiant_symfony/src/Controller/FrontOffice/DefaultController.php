<?php

namespace App\Controller\FrontOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/home', name: 'app_default')]
    public function index(): Response
    {
        return $this->render('front_office.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
