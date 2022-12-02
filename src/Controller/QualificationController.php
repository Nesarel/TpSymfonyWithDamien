<?php

namespace App\Controller;

use App\Repository\QualificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QualificationController extends AbstractController
{
    #[Route('/', name: 'home')]
    #[Route('/qualification', name: 'app_qualification')]
    public function index(QualificationRepository $repo): Response
    {

        $qualifications = $repo->findAll();

        return $this->render('qualification/index.html.twig', [
            'qualifications' => $qualifications,
        ]);
    }

    #[Route('/qualification/add', name: 'add_qualification')]
    public function add(): Response
    {
        return $this->render('qualification/index.html.twig', [
            'controller_name' => 'QualificationController',
        ]);
    }

    #[Route('/qualification/{id}', name: 'show_qualification')]
    public function show(): Response
    {
        return $this->render('qualification/show.html.twig', [
            'controller_name' => 'QualificationController',
        ]);
    }
}
