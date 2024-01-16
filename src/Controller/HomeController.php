<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{

    #[Route('/home', name: 'app_nome')]
    public function new(): Response{

        return $this->render('home/home.html.twig');

    }
}