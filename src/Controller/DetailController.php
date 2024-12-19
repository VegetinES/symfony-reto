<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    #[Route('/detail/{id}', name: 'app_detail')]
    public function show(int $id): Response
    {
        // Simulamos algunos datos para mostrar
        $details = [
            'id' => $id,
            'title' => 'Detalle #' . $id,
            'description' => 'Esta es la página de detalles para el elemento ' . $id
        ];

        return $this->render('detail/show.html.twig', [
            'details' => $details
        ]);
    }
}