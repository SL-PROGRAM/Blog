<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Article2Controller extends AbstractController
{
    /**
     * @Route("/article/two", name="article2")
     */
    public function index()
    {
        return $this->render('article2/index.html.twig', [
            'controller_name' => 'Article2Controller',
        ]);
    }
}
