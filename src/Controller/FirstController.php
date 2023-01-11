<?php

namespace App\Controller;

use Nelmio\ApiDocBundle\Annotation\Operation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class FirstController extends AbstractController
{

    #[
        Route('/first', name: 'app_first', methods: ['GET']),
        Operation(tags: ['First']),
        Se
    ]
    public function index(): JsonResponse
    {
        return $this->json([
                               'message' => 'Welcome to your new controller!',
                               'path'    => 'src/Controller/FirstController.php',
                           ]);
    }
}
