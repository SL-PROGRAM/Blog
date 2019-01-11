<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListArticleController extends AbstractController
{
    /**
     * @Route("/list/article", name="list_article")
     */
    public function index()
    {
        return $this->render('list_article/index.html.twig', [
            'controller_name' => 'ListArticleController',
        ]);
    }
}
