<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Process;
use Doctrine\ORM\EntityManagerInterface;

/**
  * @Route("/api/process")
*/

class ProcessController extends AbstractController
{
    /**
      * @Route("/add")
    */
    public function number(Request $request): Response
    {

      $entityManager = $this->getDoctrine()->getManager();
      
      $process = new Process();

      $entityManager->persist($process);
      $entityManager->flush();

      return $this->json($process->getId());
    }
}