<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PessoaController extends AbstractController{

    #[Route('/pessoa')]
    public function index(): Response {
        return new Response('Ola controller pessoa');
    }

    #[Route('/pessoa/info/{nome_pessoa}')]
    public function info(string $nome_pessoa): Response {
        return $this->render('pessoa/pessoa.html.twig', ['nome_pessoa' => $nome_pessoa]);
    }

}