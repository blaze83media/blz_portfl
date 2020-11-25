<?php

namespace App\Entity;

use App\Repository\AboutRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AboutRepository::class)
 */
class About
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $Title1;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Body1;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $Title2;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Body2;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $Title3;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Body3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageName;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ImageTitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageBody;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle1(): ?string
    {
        return $this->Title1;
    }

    public function setTitle1(string $Title1): self
    {
        $this->Title1 = $Title1;

        return $this;
    }

    public function getBody1(): ?string
    {
        return $this->Body1;
    }

    public function setBody1(string $Body1): self
    {
        $this->Body1 = $Body1;

        return $this;
    }

    public function getTitle2(): ?string
    {
        return $this->Title2;
    }

    public function setTitle2(string $Title2): self
    {
        $this->Title2 = $Title2;

        return $this;
    }

    public function getBody2(): ?string
    {
        return $this->Body2;
    }

    public function setBody2(string $Body2): self
    {
        $this->Body2 = $Body2;

        return $this;
    }

    public function getTitle3(): ?string
    {
        return $this->Title3;
    }

    public function setTitle3(string $Title3): self
    {
        $this->Title3 = $Title3;

        return $this;
    }

    public function getBody3(): ?string
    {
        return $this->Body3;
    }

    public function setBody3(string $Body3): self
    {
        $this->Body3 = $Body3;

        return $this;
    }

    public function getImageName()
    {
        return $this->ImageName;
    }

    public function setImageName($ImageName)
    {
        $this->ImageName = $ImageName;

        return $this;
    }

    public function getImageTitle(): ?string
    {
        return $this->ImageTitle;
    }

    public function setImageTitle(string $ImageTitle): self
    {
        $this->ImageTitle = $ImageTitle;

        return $this;
    }

    public function getImageBody(): ?string
    {
        return $this->ImageBody;
    }

    public function setImageBody(string $ImageBody): self
    {
        $this->ImageBody = $ImageBody;

        return $this;
    }
}
