<?php

namespace App\Entity;

use App\Repository\DbSeriesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DbSeriesRepository::class)]

/**
 * @ORM\Entity(repositoryClass="DbSeriesRepository")
 */
class DbSeries
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer',length: 4)]
    private $anno;

    #[ORM\Column(type: 'string', length: 255)]
    private $creador;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnno(): ?int
    {
        return $this->anno;
    }

    public function setAnno(int $anno): self
    {
        $this->anno = $anno;

        return $this;
    }

    public function getCreador(): ?string
    {
        return $this->creador;
    }

    public function setCreador(string $creador): self
    {
        $this->creador = $creador;

        return $this;
    }
}
