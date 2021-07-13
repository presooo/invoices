<?php

namespace App\Repository;

use App\Model\Filter;
use App\Model\InvoiceDataSet;

interface InvoicesRepositoryInterface
{
    public function list(Filter $filter): InvoiceDataSet;

    public function sum(string $locationId): InvoiceDataSet;
}
