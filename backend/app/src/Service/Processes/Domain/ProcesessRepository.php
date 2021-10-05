<?php

namespace App\Service\Processes\Domain;

use App\Service\Processes\Domain\Process;

interface ProcesessRepository
{
    public function getAll();
    
    public function add(Process $process);
}