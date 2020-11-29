<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonfrontController extends AbstractController
{
    /**
     * @Route("/monfront", name="monfront")
     */
    public function index(): Response
    {
        return $this->render('monfront/index.html.twig', [
            'controller_name' => 'MonfrontController',
        ]);
    }
}
