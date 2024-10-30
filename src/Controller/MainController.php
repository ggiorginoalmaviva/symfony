<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[/* Symfony\Component\Routing\Attribute\ */ Route('/')]
    public function index(): Response
    {
        // Method 1
        //return new Response('<h1>hello world!</h1>');
        
         // The convention wants that the folder name is the name of
         // the controller, and the name of the template is the method name
         return $this->render('main/index.html.twig');
        
    }
}
