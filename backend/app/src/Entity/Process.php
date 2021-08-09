<?php

namespace App\Entity;

use App\Repository\ProcessRepository;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use \Datetime;

/**
 * @ORM\Entity(repositoryClass=ProcesssRepository::class)
 */
class Process
{
    /**
        * @ORM\Id
        * @ORM\Column(type="string", length=36)
    */
    private $id;

    /**
        * @ORM\Column(type="integer", nullable=true)
    */
    private $type;

    /**
        * @ORM\Column(type="string", length=100, nullable=true)
    */
    private $text;

    /**
        * @ORM\Column(type="integer", nullable=true)
    */
    private $status;

    /**
        * @ORM\Column(type="datetime")
    */
    private $created_at;

    /**
        * @ORM\Column(type="datetime", nullable=true)
    */
    private $started_at;

    /**
        * @ORM\Column(type="datetime", nullable=true)
    */
    private $finished_at;

    public function __construct() {
        $this->id = Uuid::uuid4();

        $date = new DateTime('NOW');
        $this->created_at = $date;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getType(): ?int
    {
        return $this->type;
    }
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function getStartedAt(): ?\DateTimeInterface
    {
        return $this->started_at;
    }

    public function setStartedAt(?\DateTimeInterface $started_at): self
    {
        $this->started_at = $started_at;

        return $this;
    }

    public function getFinishedAt(): ?\DateTimeInterface
    {
        return $this->finished_at;
    }

    public function setFinishedAt(?\DateTimeInterface $finished_at): self
    {
        $this->finished_at = $finished_at;

        return $this;
    }

}