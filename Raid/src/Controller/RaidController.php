<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RaidController extends AbstractController
{
    /**
     * @Route("/actualités", name="actualités")
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

    /**
     * @Route("/actualités/12", name="actualités_show")
     */

    public function show(){
        return $this->render('raid/show.html.twig');
    }
}
