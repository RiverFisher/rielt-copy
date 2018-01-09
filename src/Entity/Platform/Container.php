<?php

namespace App\Entity\Platform;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Platform\ContainerRepository")
 */
class Container
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=false)
     * @var string
     */
    private $text;

    /**
     * @var ContainerImage[]|ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="ContainerImage", cascade={"persist"})
     * @ORM\JoinTable(name="container_images",
     *      joinColumns={@ORM\JoinColumn(name="container_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="container_image_id", referencedColumnName="id", unique=true)}
     * )
     */
    public $containerImages;

    /**
     * Container constructor
     */
    public function __construct()
    {
        $this->containerImages = new ArrayCollection();
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
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(?string $text)
    {
        $this->text = $text;
    }

    /**
     * Get images
     *
     * @return ContainerImage[]|ArrayCollection
     */
    public function getContainerImages()
    {
        return $this->containerImages;
    }

    /**
     * @param ContainerImage|null $image
     */
//    public function addContainerImage(?ContainerImage $image)
//    {
//        if ($this->containerImages->contains($image)) {
//            return;
//        }
//
//        $this->containerImages[] = $image;
//
////        $image->setRealProperty($this);
//    }
//
//    /**
//     * @param ContainerImage|null $image
//     */
//    public function removeContainerImage(?ContainerImage $image)
//    {
//        $this->containerImages->removeElement($image);
//
////        $image->setRealProperty(null);
//    }
}
