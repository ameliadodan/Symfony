<?php 
// src/Controller/DefaultController.php
namespace App\Controller;

use App\GreetingGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
 {    
   /**
     * @Route("/salut/{name}")
     */
    public function index($name, LoggerInterface $logger)
    {
       

        $logger->info("Saying hello to $name!");

        return $this->render('default/index.html.twig', ['name'=> $name,]);
    }
}
     
  








/* 
      *
      * @Route("/hello/{name}")
      */
    /* public function index($name)
     {
       
       return $this->render('default/index.html.twig', [
           'name' => $name,
       ]);
   }
       /**
 * @Route("/api/hello/{name}")
 
public function apiExample($name)
{
    return $this->json([
        'name' => $name,
        'symfony' => 'rocks',
    ]);
}
     } */
 