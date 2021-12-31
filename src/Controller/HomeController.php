<?php

namespace App\Controller;

use App\Repository\ActorRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function navbarTopCategory(CategoryRepository $categoryRepository): Response
    {
        return $this->render('layout/navbartopcategory.html.twig', [
            'categories' => $categoryRepository->findBy([], ['id' => 'DESC'])
        ]);
    }

    public function navbarTopActor(ActorRepository $actorRepository): Response
    {
        return $this->render('layout/navbartopactor.html.twig', [
            'actors' => $actorRepository->findBy([], ['id' => 'DESC'])
        ]);
    }
}
