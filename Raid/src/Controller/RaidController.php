<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class RaidController extends AbstractController
{
    /**
     * @Route("/actualités", name="actualités")
     */
    public function index(ArticleRepository $repo)
    {
        $articles = $repo->findAll();

        return $this->render('raid/index.html.twig', [
            'controller_name' => 'RaidController',
            'articles' => $articles
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
     * @Route("/actualités/{id}", name="actualités_show")
     */

    public function show($id){
        $repo = $this->getDoctrine()->getRepository(Article::class);

        $article = $repo->find($id);
        return $this->render('raid/show.html.twig', [
            'article' => $article
        ]);
    }

    /**
     * @Route("/factions", name="factions_show")
     */
    public function factions(){
        return $this->render("raid/factions.html.twig");
    }

     /**
     * @Route("/arene", name="arene_show")
     */
    public function arene(){
        return $this->render("raid/arene.html.twig");
    }

     /**
     * @Route("/donjons", name="donjons_show")
     */
    public function donjons(){
        return $this->render("raid/donjons.html.twig");
    }

     /**
     * @Route("/clanboss", name="clanboss_show")
     */
    public function clanboss(){
        return $this->render("raid/clanboss.html.twig");
    }
}
