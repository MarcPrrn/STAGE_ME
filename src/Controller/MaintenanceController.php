<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MaintenanceController extends AbstractController
{
    /**
     * @Route("/maintenance", name="maintenance")
     */
    public function index()
    {
        return $this->render('maintenance/index.html.twig', [
            'controller_name' => 'MaintenanceController',
        ]);
    }
}
