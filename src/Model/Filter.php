<?php

namespace App\Model;

use DateTimeImmutable;

class Filter
{
    private $location;
    private $status;
    private $startDate;
    private $endDate;

    public function __construct(?int $location, ?DateTimeImmutable $startDate, ?DateTimeImmutable $endDate, ?string $status)
    {
        $this->location  = $location;
        $this->status    = $status;
        $this->startDate = $startDate;
        $this->endDate   = $endDate;
    }

    // This should be a value object
    public function location(): ?string
    {
        return $this->location;
    }


    // This should be a value object
    public function status(): ?string
    {
        return $this->status;
    }


    public function startDate(): ?DateTimeImmutable
    {
        return $this->startDate;
    }


    public function endDate(): ?DateTimeImmutable
    {
        return $this->endDate;
    }
}
