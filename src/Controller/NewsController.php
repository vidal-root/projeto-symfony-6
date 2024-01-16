<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController{

    #[Route('api/news/{id}')]
    public function getNew(string $id = null): Response{

        // TODO - criar uma query real

        $new = [
            "id" => $id,
            "titulo" => "Eu sou o mr olimpia",
            "categoria" => "Cultura",
            "Descricao" => "Depois de um treinamento duro, realizado por 9 meses, o atleta se encontra em grande densidade e chances de vencer ramon dino",
            "data" => "2024-01-16",
            "imagem" => "https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2023/11/Ramon-Dino-no-Mr-Olympia-2023.jpg?w=720&h=412&crop=1"
        ];

        return new JsonResponse($new);
    }
}