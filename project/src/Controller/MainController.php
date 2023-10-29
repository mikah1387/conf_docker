<?php

namespace App\Controller;

use App\Repository\TestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(TestRepository $test): Response
    {
         $tests= $test->findAll();
        return $this->render('main/index.html.twig', [
            'tests' => $tests,
        ]);
    }
}
