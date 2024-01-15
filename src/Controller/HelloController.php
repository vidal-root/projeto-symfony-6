<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController{

    #[Route('/')]
    public function index(): Response{
        return new Response('Ola mundo');
    }

    #[Route('/contato')]
    public function contato(): Response{
        return new Response('luisvidal.felipe@gmail.com');
    }


    #[Route('/animal/{slug}')]
    public function animal(string $slug = null): Response{
        return new Response("Ola {$slug}");
    }


}