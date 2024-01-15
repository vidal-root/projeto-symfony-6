<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PessoaController extends AbstractController{

    #[Route('/pessoa')]
    public function index(): Response {
        
        $pessoas = [
            [
                'nome' => 'João',
                'telefone' => '123-456-7890',
            ],
            [
                'nome' => 'Maria',
                'telefone' => '987-654-3210',
            ],
            [
                'nome' => 'Pedro',
                'telefone' => '555-123-4567',
            ],
            [
                'nome' => 'Ana',
                'telefone' => '777-888-9999',
            ],
            [
                'nome' => 'Carlos',
                'telefone' => '111-222-3333',
            ],
        ];

        return $this->render('pessoa/homepage.html.twig', ['pessoas' => $pessoas]);
    }

    #[Route('/pessoa/info/{nome_pessoa}')]
    public function info(string $nome_pessoa): Response {
        dump(['ola']);
        return $this->render('pessoa/pessoa.html.twig', ['nome_pessoa' => $nome_pessoa]);
    }

}