<?php

namespace App\Controller;

use App\Entity\Actor;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ActorController extends AbstractController
{
    /**
     * @Route("/actor/{id}", methods={"GET"}, name="actor_show", requirements={"id"="\d+"})
     */
    public function show(Actor $actor):Response
    {
        $programs = $actor->getPrograms();

        return $this->render('Actor/show.html.twig', [
            'programs' => $programs, 'actor' => $actor,
        ]);
    }

    /**
     * @Route("/actor/", name="actor_index")
     */
    public function index(): Response
    {
        $actors = $this->getDoctrine()
            ->getRepository(Actor::class)
            ->findAll();

        return $this->render(
            'Actor/index.html.twig',
            ['actors' => $actors]
        );
    }
}