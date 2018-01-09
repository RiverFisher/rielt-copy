<?php

namespace App\Entity\RealProperty;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RealProperty\RealPropertyTypeRepository")
 * @ORM\Table(name="real_property_type")
 */
class RealPropertyType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=128, nullable=false)
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @var \DateTime
     */
    private $dateOfCreation;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @var \DateTime
     */
    private $dateOfChange;

    /**
     * RealPropertyType constructor
     */
    public function __construct()
    {
        $currentDate = new \DateTime('NOW');
        $this->dateOfCreation = $currentDate;
        $this->dateOfChange = $currentDate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfCreation(): ?\DateTime
    {
        return $this->dateOfCreation;
    }

    /**
     * @param \DateTime $dateOfCreation
     */
    public function setDateOfCreation(?\DateTime $dateOfCreation)
    {
        $this->dateOfCreation = $dateOfCreation;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfChange(): ?\DateTime
    {
        return $this->dateOfChange;
    }

    /**
     * @param \DateTime $dateOfChange
     */
    public function setDateOfChange(?\DateTime $dateOfChange)
    {
        $this->dateOfChange = $dateOfChange;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
