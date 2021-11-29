<?php

// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgramController extends AbstractController
{
    /**
     * @Route("/program/", name="program_index")
     */
    public function index(): Response
    {
        return $this->render('Program/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }
    /**
     * @Route("/program/{page}", methods={"GET"}, name="progrem_show", requirements={"page"="\d+"})
     */
    public function show(int $page): Response
    {
        return $this->render('Program/show.html.twig', [
            'page' => $page,
        ]);
    }
}
