<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GenreRepository::class)
 */
class Genre
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tag;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SubGenre", mappedBy="genre")
     */
    private $sub_genres;

    public function __construct()
    {
        $this->sub_genres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return Collection|SubGenre[]
     */
    
    public function getSubGenres(): Collection
    {
        return $this->sub_genres;
    }

    public function addSubGenre(SubGenre $sub_genre): self
    {
        if (!$this->sub_genres->contains($sub_genre)) {
            $this->sub_genres[] = $sub_genre;
            $sub_genre->setGenre($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
    
    public function removeSubGenre(SubGenre $subGenre): self
    {
        if ($this->sub_genres->removeElement($subGenre)) {
            // set the owning side to null (unless already changed)
            if ($subGenre->getGenre() === $this) {
                $subGenre->setGenre(null);
            }
        }

        return $this;
    }
}
