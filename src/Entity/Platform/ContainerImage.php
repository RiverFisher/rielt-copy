<?php

namespace App\Entity\Platform;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Platform\ContainerImageRepository")
 */
class ContainerImage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    private $imageSize;

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
     * ContainerImage constructor
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
     * @return null|File
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param null|File $imageFile
     */
    public function setImageFile(?File $imageFile)
    {
        $this->imageFile = $imageFile;
    }

    /**
     * @return null|string
     */
    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    /**
     * @param null|string $imageName
     */
    public function setImageName(?string $imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * @return int|null
     */
    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

    /**
     * @param int|null $imageSize
     */
    public function setImageSize(?int $imageSize)
    {
        $this->imageSize = $imageSize;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateOfCreation(): ?\DateTime
    {
        return $this->dateOfCreation;
    }

    /**
     * @param \DateTime|null $dateOfCreation
     */
    public function setDateOfCreation(?\DateTime $dateOfCreation)
    {
        $this->dateOfCreation = $dateOfCreation;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateOfChange(): ?\DateTime
    {
        return $this->dateOfChange;
    }

    /**
     * @param \DateTime|null $dateOfChange
     */
    public function setDateOfChange(?\DateTime $dateOfChange)
    {
        $this->dateOfChange = $dateOfChange;
    }
}
