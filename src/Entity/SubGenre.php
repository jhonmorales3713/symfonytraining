<?php

namespace App\Entity;

use App\Repository\SubGenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubGenreRepository::class)
 */
class SubGenre
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Genre", inversedBy="sub_genres")
     */
    private $genre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Shelves", mappedBy="subGenre")
     */
    private $shelves;

    public function __construct()
    {
        $this->shelves = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubGenre(): ?string
    {
        return $this->subGenre;
    }

    public function setSubGenre(string $subGenre): self
    {
        $this->subGenre = $subGenre;

        return $this;
    }

    /**
     * @return Collection<int, Shelves>
     */
    
    public function getShelves(): Collection
    {
        return $this->shelves;
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

    public function getGenre(): ?Genre
    {
        return $this->genre;
    }

    public function setGenre(?Genre $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function addShelf(Shelves $shelf): self
    {
        if (!$this->shelves->contains($shelf)) {
            $this->shelves[] = $shelf;
            $shelf->setSubGenre($this);
        }

        return $this;
    }

    public function removeShelf(Shelves $shelf): self
    {
        if ($this->shelves->removeElement($shelf)) {
            // set the owning side to null (unless already changed)
            if ($shelf->getSubGenre() === $this) {
                $shelf->setSubGenre(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->name;
    }

}
