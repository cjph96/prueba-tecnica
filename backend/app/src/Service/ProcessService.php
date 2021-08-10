<?php

namespace App\Service;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\ExecutableFinder;
use Symfony\Component\Process\PhpExecutableFinder;

class ProcessService
{
    public function start($id,$text)
    {
        $host = $_SERVER['HTTP_HOST'];
        $process = new Process(['./script.sh',$id,$text,$host]);
        //$process->run();
        $process->start();

        /*
        if(! $process->isSuccessful()){
            throw new ProcessFailedException($process);
        }
        
        return $process->getOutput();
        */
    }
}