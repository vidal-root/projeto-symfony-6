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

}