<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    // Affiche la liste des livres
    //Index
    /**
     * @Route("/books", name="book")
     */
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [

        ]);
    }

    //Création d'un livre dans la bdd
    //Create
    //...

    //Afficher le détail d'un livre
    //Read/Retrieve

    //Mofier un livre
    //Update
    //...

    //Supprimer un livre
    //Delete
    //...



}
