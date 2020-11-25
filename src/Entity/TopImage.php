<?php

namespace App\Entity;

use App\Repository\TopImageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TopImageRepository::class)
 */
class TopImage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $caption_1;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $caption_2;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $caption_3;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $imageName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCaption1(): ?string
    {
        return $this->caption_1;
    }

    public function setCaption1(string $caption_1): self
    {
        $this->caption_1 = $caption_1;

        return $this;
    }

    public function getCaption2(): ?string
    {
        return $this->caption_2;
    }

    public function setCaption2(string $caption_2): self
    {
        $this->caption_2 = $caption_2;

        return $this;
    }

    public function getCaption3(): ?string
    {
        return $this->caption_3;
    }

    public function setCaption3(string $caption_3): self
    {
        $this->caption_3 = $caption_3;

        return $this;
    }

    public function getImageName()
    {
        return $this->imageName;
    }

    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }
}
