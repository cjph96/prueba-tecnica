<?php

namespace App\Service\Processes\Infraestructure;

use App\Service\Processes\Domain\ProcesessRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

use App\Service\Processes\Domain\Process;


class ProcesessDoctrineProxyRepository  implements ProcesessRepository
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    protected function repository(string $entityClass): EntityRepository
    {
        return $this->entityManager->getRepository($entityClass);
    }

    public function getAll()
    {
        return $this->repository(Process::class)->findAll();
    }

    public function add(Process $process)
    {
        $this->entityManager->persist($process);
        $this->entityManager->flush();
    }
}