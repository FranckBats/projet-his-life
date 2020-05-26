<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="testpage")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
