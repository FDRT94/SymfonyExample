<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already! WOOO!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            "the air is tasty here",
            "one does not simply walk into a mirage spot",
            "Lightyears isnt time.. It measures distance",
        ];

       return $this->render("article/show.html.twig",[
            'title' => ucwords(str_replace('-','',$slug)),
            'comments' => $comments,
       ]);
    }
}