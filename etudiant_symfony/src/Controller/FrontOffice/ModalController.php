<?php

namespace App\Controller\FrontOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ModalController extends AbstractController
{
    #[Route('/modal', name: 'app_modal')]
    public function index(): Response
    {
        return $this->render('front_office/modal/index.html.twig', [
            'controller_name' => 'ModalController',
        ]);
    }
}
