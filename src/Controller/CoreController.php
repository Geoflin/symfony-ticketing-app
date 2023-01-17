<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoreController extends AbstractController
{
    
 #[Route('/', name: 'app_core')]
    public function homepage(): Response
    {
        return new Response("
            <h1>Hello toi dev Symfony,</h1>
            <h2>Bienvenue sur Kaherecode!</h2>
        ");
    }

    public function about()
    {
        return new Response("<h1>About Symfony Ticketing App</h1>");
    }
}
