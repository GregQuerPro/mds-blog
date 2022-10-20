<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category/{slug}', name: 'category')]
    public function index(string $slug, CategoryRepository $repository): Response
    {
        $category = $repository->findOneBy(['slug' => $slug]);

        return $this->render('category/category.html.twig', [
            'category' => $category,
        ]);
    }
}
