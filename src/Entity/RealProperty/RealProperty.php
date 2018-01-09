<?php

namespace App\Entity\RealProperty;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RealProperty\RealPropertyRepository")
 * @ORM\Table(name="real_property")
 */
class RealProperty
{
    const SALE          = "SALE";

    const LEASE         = "LEASE";

    const NEW_BUILDING  = "NEW BUILDING";

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RealProperty\RealPropertyType")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=false)
     * @var RealPropertyType
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=512, nullable=true)
     * @var string
     */
    private $address;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @var string
     */
    private $originalAdText;

    /**
     * @ORM\Column(type="integer", options={"unsigned"=true}, nullable=true)
     * @var integer
     */
    private $area;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @var double
     */
    private $cost;

    /**
     * @ORM\Column(type="string", length=16, nullable=false)
     * @var string
     */
    private $purpose;

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
     * One RealProperty has many RealPropertyImage entities
     * @ORM\OneToMany(targetEntity="App\Entity\RealProperty\RealPropertyImage", mappedBy="realProperty", cascade={"all"})
     */
    private $images;

    /**
     * RealProperty constructor
     */
    public function __construct()
    {
        $currentDate = new \DateTime('NOW');
        $this->dateOfCreation = $currentDate;
        $this->dateOfChange = $currentDate;

        $this->images = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return RealPropertyType
     */
    public function getType(): ?RealPropertyType
    {
        return $this->type;
    }

    /**
     * @param RealPropertyType $type
     */
    public function setType(?RealPropertyType $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(?string $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getOriginalAdText(): ?string
    {
        return $this->originalAdText;
    }

    /**
     * @param string $originalAdText
     */
    public function setOriginalAdText(?string $originalAdText)
    {
        $this->originalAdText = $originalAdText;
    }

    /**
     * @return int
     */
    public function getArea(): ?int
    {
        return $this->area;
    }

    /**
     * @param int $area
     */
    public function setArea(?int $area)
    {
        $this->area = $area;
    }

    /**
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    public function setCost(?float $cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return string
     */
    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    /**
     * @param string $purpose
     */
    public function setPurpose(?string $purpose)
    {
        $this->purpose = $purpose;
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
     * @return Collection|RealPropertyImage[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param RealPropertyImage|null $image
     */
    public function addImage(?RealPropertyImage $image)
    {
        if ($this->images->contains($image)) {
            return;
        }

        $this->images[] = $image;

        $image->setRealProperty($this);
    }

    /**
     * @param RealPropertyImage|null $image
     */
    public function removeImage(?RealPropertyImage $image)
    {
        $this->images->removeElement($image);

        $image->setRealProperty(null);
    }
}
