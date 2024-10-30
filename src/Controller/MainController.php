<?php
    
    declare(strict_types=1);
    
    namespace App\Controller;
    
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;
    
    class MainController extends AbstractController {
        #[/* Symfony\Component\Routing\Attribute\ */Route('/')]
        public function index(): Response {
             return new \Symfony\Component\HttpFoundation\Response("<h1>hello world!</h1>");
            //return $this->render('main/index.html.twig');
        }
    }
