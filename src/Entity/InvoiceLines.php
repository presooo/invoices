<?php

namespace App\Entity;

use App\Repository\InvoiceLinesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InvoiceLinesRepository::class)
 */
class InvoiceLines
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
    private $description;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity=InvoiceHeaders::class, inversedBy="invoiceLines")
     * @ORM\JoinColumn(nullable=false)
     */
    private $invoice_header_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvoiceHeadersId(): ?int
    {
        return $this->invoice_headers_id;
    }

    public function setInvoiceHeadersId(int $invoice_headers_id): self
    {
        $this->invoice_headers_id = $invoice_headers_id;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getInvoiceHeaderId(): ?InvoiceHeaders
    {
        return $this->invoice_header_id;
    }

    public function setInvoiceHeaderId(?InvoiceHeaders $invoice_header_id): self
    {
        $this->invoice_header_id = $invoice_header_id;

        return $this;
    }
}
