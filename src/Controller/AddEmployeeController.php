<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddEmployeeController extends AbstractController
{
    #[Route('/add_employee', name: 'app_add_employee')]
    public function index(): Response
    {
        return $this->render('add_employee/index.html.twig', [
            'controller_name' => 'AddEmployeeController',
        ]);
    }
}
