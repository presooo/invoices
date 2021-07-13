<?php

namespace App\Repository;

use App\Model\Invoice;
use App\Model\InvoiceDataSet;
use App\Model\Filter;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;

class InvoiceRepository implements InvoicesRepositoryInterface
{
    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function list(Filter $filter): InvoiceDataSet
    {
        $conn  = $this->entityManager->getConnection();
        $where = '';

        if ($location = $filter->location()) {
            $where .= ' AND l.id = ' . $conn->quote($location);
        }

        if ($status = $filter->status()) {
            $where .=  ' AND ih.status = ' .  $conn->quote($status);
        }

        if ($startDate = $filter->startDate()) {
            $where .=  ' AND ih.date >= ' .  $conn->quote($startDate->format('Y-m-d H:i:s'));
        }

        if ($endDate = $filter->endDate()) {
            $where .=  ' AND ih.date <= ' .  $conn->quote($endDate->format('Y-m-d H:i:s'));
        }

        $sql = sprintf(
            '
            SELECT ih.id, l.name, ih.status, ih.date, SUM(il.value) as total_value
            FROM locations l
                INNER JOIN invoice_headers ih ON l.id = ih.location_id
                INNER JOIN invoice_lines il ON ih.id = il.invoice_header_id
            WHERE ih.date IS NOT NULL
            %s
            GROUP BY ih.id',
            $where
        );

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $rows = $stmt->fetchAll();

        return $this->invoicesFromQueryResult($rows);
    }


    public function sum(string $locationId): InvoiceDataSet
    {
        // locationId should be a value object 

        $conn  = $this->entityManager->getConnection();

        $sql = sprintf(
            '
            SELECT ih.id, l.name, ih.status, ih.date, SUM(il.value) as total_value
            FROM locations l
                INNER JOIN invoice_headers ih ON l.id = ih.location_id
                INNER JOIN invoice_lines il ON ih.id = il.invoice_header_id
            WHERE ih.date IS NOT NULL
            AND l.id = :location
            GROUP BY ih.id, ih.status'
        );

        $stmt = $conn->prepare($sql);

        $stmt->execute(['location' => $locationId]);

        $rows = $stmt->fetchAll();

        return $this->invoicesFromQueryResult($rows);
    }


    private function invoicesFromQueryResult(array $rows): InvoiceDataSet
    {
        $invoices = [];
        foreach ($rows as $row) {
            $invoices[] = new Invoice(
                $row['name'],
                $row['status'],
                $row['total_value'],
                new DateTimeImmutable($row['date'])
            );
        }

        return new InvoiceDataSet(...$invoices);
    }
}
