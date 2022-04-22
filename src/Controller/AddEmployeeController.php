<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Form\EmployeeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AddEmployeeController extends AbstractController
{
    #[Route('/add_employee', name: 'app_add_employee')]
    public function index(Request $request): Response
    {
        $employee = new Employee();
        // $employee->setTask('try');
        // $employee->setArrivalDate(new \DateTime('tomorrow'));
        $form = $this->createForm(EmployeeType::class, $employee);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $employee = $form->getData();

            // ... perform some action, such as saving the task to the database
            return $this->redirectToRoute('app_home');
        }

        return $this->render('add_employee/index.html.twig', [
            'controller_name' => 'AddEmployeeController',
            'form' => $form->createView(),
        ]);
    }
}
