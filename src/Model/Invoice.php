<?php

namespace App\Model;

use DateTimeImmutable;

class Invoice
{
    private $location;
    private $status;
    private $totalValue;
    private $date;

    public function __construct(
        string $location,
        string $status,
        float $totalValue,
        DateTimeImmutable $date
    ) {
        $this->location   = $location;
        $this->status     = $status;
        $this->totalValue = $totalValue;
        $this->date       = $date;
    }


    public function location(): string
    {
        return $this->location;
    }


    public function status(): string
    {
        return $this->status;
    }


    public function totalValue(): float
    {
        return $this->totalValue;
    }


    public function date(): DateTimeImmutable
    {
        return $this->date;
    }
}
