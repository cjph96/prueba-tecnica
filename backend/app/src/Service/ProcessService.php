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
        $process = new Process(['sh','script.sh',$id,$host,$text]);
        //$process->run();
        $process->start();

        /*
        if(! $process->isSuccessful()){
            throw new ProcessFailedException($process);
        }
        */
        //$process->wait();
        //return $process->getOutput();
        
    }
}