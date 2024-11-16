<?php

namespace App\Controller;

// Base controller class
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
// HTTP response class
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    // Method to handle requests to the root URL
    public function index(): Response
    {
        // Renders the Twig template base.html.twig and passes the message to it
        return $this->render('base.html.twig', ['message' => 'Hello Symfony World!']);
    }
}