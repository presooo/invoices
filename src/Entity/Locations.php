<?php

namespace App\Entity;

use App\Repository\LocationsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LocationsRepository::class)
 */
class Locations
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
     * @ORM\OneToMany(targetEntity=InvoiceHeaders::class, mappedBy="location_id", orphanRemoval=true)
     */
    private $invoiceHeaders;

    public function __construct()
    {
        $this->invoiceHeaders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|InvoiceHeaders[]
     */
    public function getInvoiceHeaders(): Collection
    {
        return $this->invoiceHeaders;
    }

    public function addInvoiceHeader(InvoiceHeaders $invoiceHeader): self
    {
        if (!$this->invoiceHeaders->contains($invoiceHeader)) {
            $this->invoiceHeaders[] = $invoiceHeader;
            $invoiceHeader->setLocationId($this);
        }

        return $this;
    }

    public function removeInvoiceHeader(InvoiceHeaders $invoiceHeader): self
    {
        if ($this->invoiceHeaders->removeElement($invoiceHeader)) {
            // set the owning side to null (unless already changed)
            if ($invoiceHeader->getLocationId() === $this) {
                $invoiceHeader->setLocationId(null);
            }
        }

        return $this;
    }
}
