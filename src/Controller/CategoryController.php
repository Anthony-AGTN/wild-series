<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/category', name: 'category_')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();


        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/show/{categoryName}', name: 'show', methods: ['GET'])]
    public function show(string $categoryName, CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findOneBy(['name' => $categoryName]);

        if (!$categories) {
            throw $this->createNotFoundException(
                'No category with id : '.$categoryName.' found in category\'s table.'
            );
        }

        return $this->render('category/show.html.twig', [
            'categoryName' => $categoryName,
            'categories' => $categories,
        ]);
    }
}
