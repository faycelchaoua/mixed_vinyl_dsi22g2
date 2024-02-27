<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


class VinylController
{
    #[Route("/")]
    function homepage(): Response
    {
        return new Response("Bonjour <strong>DSI22G2</strong>!<br><img src='https://besttech.tn/wp-content/uploads/2021/01/formation-symfony.png' width='200'>");
    }
    #[Route("/browse/{slug}")]
    function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = "Genre: " . u(str_replace("-", " ", $slug))->title(true);
        } else {
            $title = "All Genre";
        }

        return new Response($title);
    }
}
