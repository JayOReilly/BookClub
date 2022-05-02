<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{



    #[Route('/', name: 'default')]
    public function index(): Response
    {
        $template = 'default/index.html.twig';
        $argsArray = [];

        return $this->render($template, $argsArray);
    }

    #[Route('/books', name: 'books')]
    public function books(): Response
    {
        $template = 'default/books.html.twig';
        $argsArray = [];

        return $this->render($template, $argsArray);
    }

    #[Route('/book/details', name: 'bookList')]
    public function bookList(): Response
    {
        $template = 'bookDetails.html.twig';
        $argsArray = [];

        return $this->render($template, $argsArray);
    }









}
