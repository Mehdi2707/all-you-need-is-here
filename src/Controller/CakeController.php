<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'app_cake_')]
class CakeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('cake/index.html.twig', [
        ]);
    }

    #[Route('/apropos', name: 'about')]
    public function about(): Response
    {
        return $this->render('cake/about.html.twig', [
        ]);
    }

    #[Route('/menu', name: 'menu')]
    public function menu(): Response
    {
        return $this->render('cake/menu.html.twig', [
        ]);
    }

    #[Route('/equipe', name: 'team')]
    public function team(): Response
    {
        return $this->render('cake/team.html.twig', [
        ]);
    }

    #[Route('/services', name: 'services')]
    public function services(): Response
    {
        return $this->render('cake/services.html.twig', [
        ]);
    }

    #[Route('/temoignages', name: 'testimonial')]
    public function testimonial(): Response
    {
        return $this->render('cake/testimonial.html.twig', [
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('cake/contact.html.twig', [
        ]);
    }
}
