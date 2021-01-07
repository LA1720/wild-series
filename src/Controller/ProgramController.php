<?php

// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;  // this use is for @Route
use Symfony\Component\HttpFoundation\Response;  // this use is for Response ()
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //this use is for AbstractController

class ProgramController extends AbstractController  //here it's my first class extends by abstractController
{
    
     /**
     * @Route("/programs/", name="program_index")  // http://localhost:8000/programs/ doit renvoyer une page blanche avec écrit "Wild Series index". //
     */


    public function index(): Response  //c'est un objet qui représente une réponse HTTP complète. //
    {
         // To write html inside the method index()//

        // return new Response(
        //     '<html><body>Wild Series Index</body></html>'
        // ); 


        //make the view program/index.html.twig in templates 
        return $this->render('program/index.html.twig', [

            'website' => 'wild series',
            'wild' => 'code school'

        ]);


    }
}










