<?php

namespace App\Entity;

use App\Repository\CrudRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CrudRepository::class)
 */
class Crud
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
     * @ORM\Column(type="string", length=255)
     */
    private $imageName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageAlt;

    /**
     * @ORM\Column(type="string", length=1200)
     */
    private $body;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $publish;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $delSwitch;

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

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getImageAlt(): ?string
    {
        return $this->imageAlt;
    }

    public function setImageAlt(string $imageAlt): self
    {
        $this->imageAlt = $imageAlt;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getPublish(): ?string
    {
        return $this->publish;
    }

    public function setPublish(string $publish): self
    {
        $this->publish = $publish;

        return $this;
    }

    public function getDelSwitch(): ?string
    {
        return $this->delSwitch;
    }

    public function setDelSwitch(string $delSwitch): self
    {
        $this->delSwitch = $delSwitch;

        return $this;
    }
}
