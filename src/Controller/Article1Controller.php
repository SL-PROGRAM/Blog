<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Article1Controller extends AbstractController
{
    /**
     * @Route("/article/one", name="article1")
     */
    public function index()
    {
        return $this->render('article1/index.html.twig', [
            'controller_name' => 'Article1Controller',
        ]);
    }
}
