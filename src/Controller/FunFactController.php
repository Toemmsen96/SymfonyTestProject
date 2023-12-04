<?php
// src/Controller/FunFactController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FunFactController
{
    /**
     * @Route("/funfact")
     */
    #[Route('/funfact')]
    public function index()
    {
        $funFacts = [
            'Symfony is a set of reusable PHP components and a PHP framework for web projects.',
            'Symfony was published as free software in October 2005.',
            'Symfony is used by the open-source Q&A service Askeet.',
            // Add more fun facts here...
        ];

        $funFact = $funFacts[array_rand($funFacts)];

        return new Response(
            '<html><body>Fun fact about Symfony: '.$funFact.'</body></html>'
        );
    }
}