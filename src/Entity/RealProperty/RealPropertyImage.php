<?php

namespace App\Entity\RealProperty;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RealProperty\RealPropertyImageRepository")
 * @Vich\Uploadable
 */
class RealPropertyImage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="image", fileNameProperty="imageName", size="imageSize")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
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
     * Many RealProperty entities have one RealProperty
     * @ORM\ManyToOne(targetEntity="App\Entity\RealProperty\RealProperty", inversedBy="images")
     * @ORM\JoinColumn(name="real_property_id", referencedColumnName="id", nullable=false)
     * @var RealProperty
     */
    private $realProperty;

    /**
     * RealPropertyImage constructor
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
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return File
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */
    public function setImageFile(?File $image = null): void
    {
        $this->imageFile = $image;

        if (null !== $image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->dateOfChange = new \DateTimeImmutable();
        }
    }

    /**
     * @return string
     */
    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    /**
     * @param string $imageName
     */
    public function setImageName(?string $imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * @return int
     */
    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

    /**
     * @param int $imageSize
     */
    public function setImageSize(?int $imageSize)
    {
        $this->imageSize = $imageSize;
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
     * @return RealProperty|null
     */
    public function getRealProperty(): ?RealProperty
    {
        return $this->realProperty;
    }

    /**
     * @param RealProperty|null $realProperty
     */
    public function setRealProperty(?RealProperty $realProperty)
    {
        $this->realProperty = $realProperty;
    }
}
