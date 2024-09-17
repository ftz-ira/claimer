<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class homeController{
    
    #[Route('/')]
    public function home(): Response 
    {
        return new Response('hello world');
    }

}
