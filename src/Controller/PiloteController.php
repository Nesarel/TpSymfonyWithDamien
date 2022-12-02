<?php

namespace App\Controller;

use App\Repository\PiloteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PiloteController extends AbstractController
{
    #[Route('/pilote', name: 'app_pilote')]
    public function index(PiloteRepository $repo): Response
    {
        return $this->render('pilote/index.html.twig', [
            'pilotes' => $repo->findAll(),
        ]);
    }
}
