<?php

namespace App\Model;

class InvoiceDataSet
{

    /** @var Invoice[] $items*/
    private $invoices;


    public function __construct(Invoice ...$invoices)
    {
        $this->invoices = $invoices;
    }


    /**
     * @return Invoice[]
     */
    public function toArray(): array
    {
        return $this->invoices;
    }


    public function count(): int
    {
        return count($this->invoices);
    }


    public function toSerialisable(): array
    {
        $invoices = [];

        foreach ($this->invoices as $invoice) {
            $invoices[] = [
                'location'   => $invoice->location(),
                'status'     => $invoice->status(),
                'totalValue' => $invoice->totalValue(),
                'date'       => $invoice->date()->format('Y-m-d H:i:s')
            ];
        }

        return $invoices;
    }
}
