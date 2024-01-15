<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PessoaController{

    #[Route('/pessoa')]
    public function index(): Response {
        return new Response('Ola controller pessoa');
    }

}