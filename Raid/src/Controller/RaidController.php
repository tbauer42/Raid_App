<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RaidController extends AbstractController
{
    /**
     * @Route("/raid", name="raid")
     */
    public function index()
    {
        return $this->render('raid/index.html.twig', [
            'controller_name' => 'RaidController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */

    public function home()
    {
        return $this->render('raid/home.html.twig', [
            'title' => "Raid helper",
            'age' => 31
        ]);
    }
}