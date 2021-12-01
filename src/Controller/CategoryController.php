<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Program;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/category", name = "category_")
 */
class CategoryController extends AbstractController
{
    /**
     * Show all rows from Category’s entity
     * 
     * @Route("/", name="index")
     * @return Response A response instance
     */
    public function index(): Response
    {
        $categorys = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();

        return $this->render(
            'Category/index.html.twig',
            ['categorys' => $categorys]
        );
    }

    /**
     * @Route("/{categoryName}", methods={"GET"}, name="show")
     */
    public function show(string $categoryName): Response
    {
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy(['name' => $categoryName]);

        if (!$category) {
            throw $this->createNotFoundException(
                'No category with name : ' . $categoryName . ' found in category\'s table.'
            );
        }
        
        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findBy(['category' => $category->getId()],
            ['id' => 'ASC'],3);

        return $this->render('Category/show.html.twig', [
            'category' => $category, 'programs' => $programs,
        ]);
    }
}
