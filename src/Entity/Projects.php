<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectsRepository::class)
 */
class Projects
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
    private $Title;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $Body;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ProjectGroup;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ImageName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->Body;
    }

    public function setBody(string $Body): self
    {
        $this->Body = $Body;

        return $this;
    }

    public function getProjectGroup(): ?string
    {
        return $this->ProjectGroup;
    }

    public function setProjectGroup(string $ProjectGroup): self
    {
        $this->ProjectGroup = $ProjectGroup;

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
}
