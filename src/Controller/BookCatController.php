<?php

namespace App\Controller;

use App\Entity\BookCat;
use App\Form\BookCatType;
use App\Repository\BookCatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


#[Route('/book/cat')]

/**
 * @Route("/book/item")
 * @IsGranted("ROLE_USER")
 */

class BookCatController extends AbstractController
{
    #[Route('/', name: 'book_cat_index', methods: ['GET'])]
    public function index(BookCatRepository $bookCatRepository): Response
    {
        return $this->render('book_cat/index.html.twig', [
            'book_cats' => $bookCatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'book_cat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $bookCat = new BookCat();
        $form = $this->createForm(BookCatType::class, $bookCat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bookCat);
            $entityManager->flush();

            return $this->redirectToRoute('book_cat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('book_cat/new.html.twig', [
            'book_cat' => $bookCat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'book_cat_show', methods: ['GET'])]
    public function show(BookCat $bookCat): Response
    {
        return $this->render('book_cat/show.html.twig', [
            'book_cat' => $bookCat,
        ]);
    }

    #[Route('/{id}/edit', name: 'book_cat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, BookCat $bookCat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BookCatType::class, $bookCat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('book_cat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('book_cat/edit.html.twig', [
            'book_cat' => $bookCat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'book_cat_delete', methods: ['POST'])]
    public function delete(Request $request, BookCat $bookCat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bookCat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($bookCat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('book_cat_index', [], Response::HTTP_SEE_OTHER);
    }
}
