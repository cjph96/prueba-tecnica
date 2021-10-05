<?php

namespace App\Controller;

use App\Service\Processes\Application\AddProcess;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddProcessController
{
    private $addProcess;

    public function __construct(AddProcess $addProcess )
    {
        $this->addProcess = $addProcess;
    }

    /**
     * @Route("/api/process", methods={"POST"})
    */
    public function __invoke(Request $request): Response
    {
        $data = json_decode($request->getContent());
        
        $process_obj = $this->addProcess->__invoke($data->type, $data->input);

        if($process_obj === false){
            $error = (object) array(
                "error" => true,
                "code" => 400,
                "message" => "Invalid Parameters"
            );
            return new JsonResponse($error,$error->code);
        }
        
        return new JsonResponse($process_obj);
    }
}