<?php

namespace App\Entity;

use App\Repository\ShelvesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ShelvesRepository::class)
 */
class Shelves
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SubGenre", inversedBy="shelves")
     * @Assert\NotBlank()
     */
    private $subGenre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getSubGenre(): ?SubGenre
    {
        return $this->subGenre;
    }

    public function setSubGenre(?SubGenre $subGenre): self
    {
        $this->subGenre = $subGenre;

        return $this;
    }
}
