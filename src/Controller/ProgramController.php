<?php

// src/Controller/ProgramController.php
namespace App\Controller;

use App\Entity\Program;
use App\Entity\Season;
use App\Entity\Episode;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ProgramType;

class ProgramController extends AbstractController
{
    /**
     * The controller for the program add form
     * 
     * @Route("/program/new", name="program_new")
     */
    public function new(Request $request): Response
    {
        //create new program Object
        $program = new Program();
        //Create the associated Form
        $form = $this->createForm(ProgramType::class, $program);
        // Get data from HTTP request
        $form->handleRequest($request);
        // Was the form submitted ?
        if ($form->isSubmitted()) {
            // Deal with the submitted data
            // Get the Entity Manager
            $entityManager = $this->getDoctrine()->getManager();
            // Persist Category Object
            $entityManager->persist($program);
            // Flush the persisted object
            $entityManager->flush();
            // Finally redirect to categories list
            return $this->redirectToRoute('program_index');
        }
        // Render the form
        return $this->render('Program/new.html.twig', ["form" => $form->createView()]);
    }

    /**
     * @Route("/program/", name="program_index")
     */
    public function index(): Response
    {
        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findAll();

        return $this->render(
            'Program/index.html.twig',
            ['programs' => $programs]
        );
    }

    /**
     * @Route("/program/{id}", methods={"GET"}, name="program_show", requirements={"id"="\d+"})
     */
    public function show(Program $program): Response
    {
        $seasons = $program->getSeasons();

        return $this->render('Program/show.html.twig', [
            'program' => $program, 'seasons' => $seasons,
        ]);
    }

    /**
     * @Route("/program/{programId}/season/{seasonId}", methods={"GET"}, name="program_season_show", requirements={"programId"="\d+","seasonId"="\d+"})
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"programId": "id"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     */
    public function showSeason(Program $program, Season $season): Response
    {
        $episodes = $season->getEpisodes();

        return $this->render('Program/season_show.html.twig', [
            'program' => $program, 'season' => $season, 'episodes' => $episodes,
        ]);
    }

    /**
     * @Route("/program/{programId}/season/{seasonId}/episode/{episodeId}", methods={"GET"}, name="program_episode_show", requirements={"programId"="\d+","seasonId"="\d+","episodeId"="\d+"})
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"programId": "id"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     * @ParamConverter("episode", class="App\Entity\Episode", options={"mapping": {"episodeId": "id"}})
     */
    public function showEpisode(Program $program, Season $season, Episode $episode): Response
    {
        return $this->render('Program/episode_show.html.twig', [
            'program' => $program, 'season' => $season, 'episode' => $episode,
        ]);
    }
}
