<?php
    
    namespace App\Controller\Api;
    
    use App\Model\User;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;
    
    class UserController extends AbstractController {
        
        #[Route("/api/users")]
        public function index(): Response {
            return $this->json([new User("Gregorio", "Giorgino", 27)]);
        }
    }