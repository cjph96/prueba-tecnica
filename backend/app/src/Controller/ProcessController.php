<?php

/*
Antigua clase, (refactorizandose a hexagonal)
*/

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity;
use Doctrine\ORM\EntityManagerInterface;
use \Datetime;

use App\Service\ProcessService;

/**
  * @Route("/api/process_old")
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
      /*
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
    */
    }

    /**
      * @Route("/{id_process}/finished", methods={"POST"})
    */
    public function finished(Request $request, $id_process): Response
    {
      $process = $this->getDoctrine()
        ->getRepository(Process::class)
        ->find($id_process);

      $error = (object) array(
        "error" => true,
        "code" => 404,
        "message" => "Not Found"
      );

      if( empty($process) ){  //Comprobación de si existe el proceso
        return $this->json($error,$error->code);
      }

      if( $process->status != 2){
        $error->code = 500;
        $error->message = "The process was already started";
        return $this->json($error,$error->code);
      }
      
      $data = json_decode($request->getContent()); 
      try {
        $process->setOutput($data->output);
        $process->setStatus(3);
        $process->setFinishedAt(new DateTime('NOW'));
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();
      } catch (\Throwable $th) {
        //throw $th;
        $process->setOutput('Error message foo');
        $process->setStatus(4);
        $process->setFinishedAt(new DateTime('NOW'));
        $error->code = 400;
        $error->message = "Invalid Parameters";
        return $this->json($error,$error->code);
      }
      return $this->json('ok');
    }

    /**
      * @Route("/{id_process}/start", methods={"POST"})
    */
    public function start(Request $request, $id_process, ProcessService $process_service): Response
    {
      $process = $this->getDoctrine()
        ->getRepository(Process::class)
        ->find($id_process);

      $error = (object) array(
        "error" => true,
        "code" => 404,
        "message" => "Not Found"
      );

      if( empty($process) ){  //Comprobación de si existe el proceso
        return $this->json($error,$error->code);
      }
      if( $process->status != 1){
        $error->code = 500;
        $error->message = "The process was already started";
        return $this->json($error,$error->code);
      }

      $process->setStatus(2);
      $process->setStartedAt(new DateTime('NOW'));
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->flush();

      /*$msg =*/ $process_service->start($process->id,$process->input);

      //return $this->json($msg);
      return $this->json('ok');
    }
}