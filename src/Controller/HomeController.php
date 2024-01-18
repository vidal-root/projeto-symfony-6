<?php

namespace App\Controller;

use App\Service\StringManipulationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{

    private $param = [
        'tituloPagina' => 'Sistema de Noticias',
        'categories' => [
            ['title' => 'Mundo',      'text' => 'Notícias sobre o Mundo'],
            ['title' => 'Brasil',     'text' => 'Notícias sobre o Brasil'],
            ['title' => 'Tecnologia', 'text' => 'Notícias sobre Tecnologia'],
            ['title' => 'Design',     'text' => 'Notícias sobre Design'],
            ['title' => 'Cultura',    'text' => 'Notícias sobre Cultura'],
            ['title' => 'Negócios',   'text' => 'Notícias sobre Negócios'],
            ['title' => 'Política',   'text' => 'Notícias sobre Política'],
            ['title' => 'Opinião',    'text' => 'Notícias sobre Opinião'],
            ['title' => 'Ciência',    'text' => 'Notícias sobre Ciência'],
            ['title' => 'Saúde',      'text' => 'Notícias sobre Saúde'],
            ['title' => 'Estilo',     'text' => 'Notícias sobre Estilo de vida'],
            ['title' => 'Viagens',    'text' => 'Notícias sobre Viagens'],
        ]
    ];


    #[Route('/home', name: 'app_home')]
    public function new(): Response{

        $slug = 'teste-teste';
        return $this->render('home/home.html.twig', $this->param);

    }

    #[Route('/categoria/{slug}', name: 'app_categoria')]
    public function getCategoria(string $slug = null): Response{
       
        $tituloPagina = "Notícias sobre {$slug}";
        
        $this->param['tituloPagina'] = $slug;

        return $this->render('home/categoria.html.twig', $this->param);
    }
}