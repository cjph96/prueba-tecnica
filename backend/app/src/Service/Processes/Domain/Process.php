<?php

namespace App\Service\Processes\Domain;

use App\Service\Processes\Infraestructure\ProcessDoctrineRepository;
use Doctrine\ORM\Mapping as ORM;
use \Datetime;
use \Exception;
use App\Shared\UuidGenerator;

/**
 * @ORM\Entity(repositoryClass=ProcessDoctrineRepository::class)
 * @ORM\Table(name="Process")
 */
class Process
{
    /**
        * @ORM\Id
        * @ORM\Column(type="string", length=36)
    */
    public $id;

    /**
        * @ORM\Column(type="integer")
    */
    public $type;

    /**
        * @ORM\Column(type="string", length=100)
    */
    public $input;

    /**
        * @ORM\Column(type="string", length=100, nullable=true)
    */
    public $output;

    /**
        * @ORM\Column(type="integer")
    */
    public $status;

    /**
        * @ORM\Column(type="datetime")
    */
    public $created_at;

    /**
        * @ORM\Column(type="datetime", nullable=true)
    */
    public $started_at;

    /**
        * @ORM\Column(type="datetime", nullable=true)
    */
    public $finished_at;

    public function __construct() {
        $this->id = UuidGenerator::uuid4();
        $this->status = 1;

        $date = new DateTime('NOW');
        $this->created_at = $date;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function setInput(?string $input): self
    {
        if($input == "")
            throw new Exception("Input can not be empty", 1);

        $this->input = $input;
        
        return $this;
    }

    public function setOutput(?string $output): self
    {
        $this->output = $output;

        return $this;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function setStartedAt(?\DateTimeInterface $started_at): self
    {
        $this->started_at = $started_at;

        return $this;
    }

    public function setFinishedAt(?\DateTimeInterface $finished_at): self
    {
        $this->finished_at = $finished_at;

        return $this;
    }

}