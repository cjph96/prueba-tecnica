<?php

namespace App\Service\Processes\Application;

use App\Service\Processes\Domain\ProcesessRepository;

class GetAllProcesess
{
    private $repository;

    public function __construct(ProcesessRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        return $this->repository->getAll();
    }
}