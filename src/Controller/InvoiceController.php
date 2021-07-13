<?php

namespace App\Controller;

use App\Model\Filter;
use App\Repository\InvoiceRepository;
use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * @Route("/invoice")
 */
class InvoiceController extends AbstractController
{
    private $invoiceRepository;

    /**
     * @param UserService $userService
     */
    public function __construct(InvoiceRepository $invoiceRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
    }

    /**
     * List invoices.
     * 
     * @Route("/list", name="list_invoices", methods="GET")
     */
    public function listAction(Request $request): JsonResponse
    {
        $params = $this->getParams($request);

        $status    = (isset($params['status'])) ? $params['status'] : null;
        $location  = (isset($params['location'])) ? $params['location'] : null;
        $startDate = (isset($params['startDate'])) ? new DateTimeImmutable($params['startDate']) : null;
        $endDate   = (isset($params['endDate'])) ? new DateTimeImmutable($params['endDate']) : null;

        $filter = new Filter(
            $location,
            $startDate,
            $endDate,
            $status
        );

        $invoices = $this->invoiceRepository->list($filter);

        return new JsonResponse(
            $invoices->toSerialisable(),
            Response::HTTP_OK,
            ['content_type' => 'application/json']
        );
    }


    /**
     * Sum of invoice values.
     * 
     * @Route("/sum/{locationId}", name="sum_of_invoices", methods="GET")
     */
    public function sumAction(Request $request, string $locationId): Response
    {
        // validate the location id

        $invoices = $this->invoiceRepository->sum($locationId);

        return $this->render('sum/index.html.twig', [
            'invoices' => $invoices->toSerialisable(),
        ]);
    }


    private function getParams(Request $request): array
    {
        $body = $request->getContent(false);

        if (strlen($body) === 0) {
            return [];
        }

        $decoded = json_decode($body, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new BadRequestHttpException('Invalid JSON in the Body' . json_last_error_msg());
        }

        return $decoded;
    }
}
