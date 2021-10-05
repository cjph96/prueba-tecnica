<?php

namespace App\Controller;

use App\Service\Processes\Application\GetAllProcesess;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GetAllProcessController
{
    private $getAllProcesess;

    public function __construct(GetAllProcesess $getAllProcesess )
    {
        $this->getAllProcesess = $getAllProcesess;
    }

    /**
     * @Route("/api/process", methods={"GET"})
    */
    public function __invoke(): Response
    {
        $all = $this->getAllProcesess->__invoke();

        return new JsonResponse($all);
    }
}