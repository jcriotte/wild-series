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
use App\Form\SearchProgramFormType;
use App\Repository\ProgramRepository;
use App\Service\Slugify;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class ProgramController extends AbstractController
{
    /**
     * The controller for the program add form
     * 
     * @Route("/program/new", name="program_new")
     */
    public function new(Request $request, Slugify $slugify, MailerInterface $mailer): Response
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
            $slug = $slugify->generate($program->getTitle());
            $program->setSlug($slug);
            // Set the program's owner
            $program->setOwner($this->getUser());
            // Persist Category Object
            $entityManager->persist($program);
            // Flush the persisted object
            $entityManager->flush();
            $this->addFlash('success', 'Une nouvelle série a bien été enregistrée');
            $email = (new Email())
                ->from($this->getParameter('mailer_from'))
                ->to('341c488238-075447@inbox.mailtrap.io')
                ->subject('Une nouvelle série vient d\'être publiée !')
                ->html($this->renderView('Program/newProgramEmail.html.twig', ['program' => $program]));

            $mailer->send($email);
            // Finally redirect to categories list
            return $this->redirectToRoute('program_index');
        }
        // Render the form
        return $this->render('Program/new.html.twig', ["form" => $form->createView()]);
    }

    /**
     * @Route("/program/", name="program_index")
     */
    public function index(Request $request, ProgramRepository $programRepository): Response
    {
        $form = $this->createForm(SearchProgramFormType::class,);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $search = $form->getData()['search'];
            $programs = $programRepository->findLikeName($search);
        } else {
            $programs = $programRepository->findAll();
        }

        return $this->render(
            'Program/index.html.twig',
            [
                'programs' => $programs,
                'form' => $form->createView()
            ]
        );
    }

    /**
     * @Route("/program/{slug}", methods={"GET"}, name="program_show")
     */
    public function show(Program $program): Response
    {
        $seasons = $program->getSeasons();
        $reviews = $program->getReviews();

        return $this->render('Program/show.html.twig', [
            'program' => $program, 'seasons' => $seasons, 'reviews' => $reviews,
        ]);
    }

    /**
     * @Route("/program/{programSlug}/season/{seasonId}", methods={"GET"}, name="program_season_show")
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"programSlug": "slug"}})
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
     * @Route("/program/{programSlug}/season/{seasonId}/episode/{episodeSlug}", methods={"GET"}, name="program_episode_show", requirements={"sessionId"="\d+"})
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"programSlug": "slug"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     * @ParamConverter("episode", class="App\Entity\Episode", options={"mapping": {"episodeSlug": "slug"}})
     */
    public function showEpisode(Program $program, Season $season, Episode $episode): Response
    {
        return $this->render('Program/episode_show.html.twig', [
            'program' => $program, 'season' => $season, 'episode' => $episode,
        ]);
    }

    /**
     * @Route("/program/{slug}/edit", name="program_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Program $program, EntityManagerInterface $entityManager): Response
    {
        // Check wether the logged in user is the owner of the program
        if (!($this->getUser() == $program->getOwner())) {
            // If not the owner, throws a 403 Access Denied exception
            throw new AccessDeniedException('Only the owner can edit the program!');
        }

        $form = $this->createForm(ProgramType::class, $program);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'La série a bien été mise à jour');

            return $this->redirectToRoute('program_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Program/edit.html.twig', [
            'program' => $program,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/program/{id}/watchlist", name="program_watchlist", methods={"GET", "POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function addToWatchlist(Request $request, Program $program, EntityManagerInterface $entityManager): Response
    {
        if ($program == $this->getUser()->getWatchlist()) {
            $this->getUser()->removeWatchlist($program);
        } else {
            $this->getUser()->addWatchlist($program);
        }
        $entityManager->flush();

        $seasons = $program->getSeasons();
        $reviews = $program->getReviews();

        return $this->render('Program/show.html.twig', [
            'program' => $program, 'seasons' => $seasons, 'reviews' => $reviews,
        ]);
    }
}
