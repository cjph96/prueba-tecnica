<?php

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
      * @Route("", methods={"GET"})
    */
    public function all(Request $request): Response
    {

      $processes = $this->getDoctrine()
        ->getRepository(Process::class)
        ->findAll();

      return $this->json($processes);
    }

    /**
      * @Route("", methods={"POST"})
    */
    public function add(Request $request): Response
    {
      $entityManager = $this->getDoctrine()->getManager();
      $process = new Process();

      $data = json_decode($request->getContent());
      $types = ["","VOWELS_COUNT"];
      try {
        $process->setType($data->type);
        $process->setInput($data->input);
      } catch (\Throwable $th) {
        //throw $th;
        $error = (object) array(
          "error" => true,
          "code" => 400,
          "message" => "Invalid Parameters"
        );
        return $this->json($error,400);
      }

      $entityManager->persist($process);
      $entityManager->flush();

      $resp = (object) array(
        "id" => $process->id,
        "type" => $types[$process->type],
        "input" => $process->input
      );

      return $this->json($resp);
    }
}