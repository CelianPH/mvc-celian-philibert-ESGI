<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use App\Utils\SessionManager;
use Doctrine\ORM\EntityManager;

class IndexController extends AbstractController
{
    #[Route('/', 'home')]
    public function home(): string
    {
        return $this->twig->render('index/home.html.twig');
    }

    #[Route('/contact', 'contact')]
    public function contact(): string
    {
        return $this->twig->render('index/contact.html.twig');
    }

    #[Route('/about', 'about')]
    public function about(EntityManager $em): string
    {

        return $this->twig->render('index/about.html.twig');
    }

    #[Route('/login', 'login', 'GET')]
    public function loginForm(): string
    {
        return $this->twig->render('security/login.html.twig');
    }

    #[Route('/login', 'login', 'POST')]
    public function login(): string
    {
        // Vérifiez les informations d'authentification ici
        $username = $_POST['_username'];
        $password = $_POST['_password'];

        // Exemple de vérification (à remplacer par votre logique)
        if ($username === 'utilisateur' && $password === 'motdepasse') {
            $sessionManager = new RemoveUnusedSessionMarshallingHandlerPassagernageranager();
            $sessionManager->set('user', $username);

            // Redirigez vers la page d'accueil ou une autre page après l'authentification réussie
            // Utilisez $this->redirect('/accueil') ou une autre méthode de redirection
            return $this->twig->render('index/home.html.twig');
        } else {
            // Gestion de l'échec d'authentification
            return $this->twig->render('security/login.html.twig', ['error' => true]);
        }
    }
    public function logout(): void
    {
        $this->redirect('/login');
    }


}
