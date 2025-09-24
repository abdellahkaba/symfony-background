<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RecipeController extends AbstractController
{
    #[Route('/recette', name: 'recipe.index')]
    public function index(Request $request): Response
    {
       return $this->render('recipe/index.html.twig');
    }

    #[Route('/recette/{slug}-{id}', name: 'recipe.show', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'] )]
    public function show(Request $request, $slug, $id): Response
    {
        return $this->render('recipe/show.html.twig', [
            'id' => $id,
            'slug' => $slug,
            'person' => [
                'name' => 'Kaba',
                'age' => 30
            ]
        ]);

    }
}
