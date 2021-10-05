<?php

namespace App\Service\Processes\Application;

use App\Service\Processes\Domain\ProcesessRepository;
use App\Service\Processes\Domain\Process;

class AddProcess
{
    private $repository;

    public function __construct(ProcesessRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($type, $input)
    {
        $process = new Process();
        $types = ["","VOWELS_COUNT"];

        try {
            $process->setType($type);
            $process->setInput($input);
        } catch (\Throwable $th) {
            return false;
        }

        $this->repository->add($process);
        
        return (object) array(
            "id" => $process->id,
            "type" => $types[$process->type],
            "input" => $process->input
        );
        
    }
}