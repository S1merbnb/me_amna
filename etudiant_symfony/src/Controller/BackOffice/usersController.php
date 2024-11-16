<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class usersController extends AbstractController
{
    #[Route('/back/office/users', name: 'app_back_users')]
    public function index(): Response
    {
        return $this->render('back_office/users/index.html.twig', [
            'controller_name' => 'usersController',
        ]);
    }
}
