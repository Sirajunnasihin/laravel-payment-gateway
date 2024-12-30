<?php

namespace Akm\LaravelPaymentGateway\Request;

use Akm\Midtrans\Connector\PaymentConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Akm\Midtrans\Dto\TransactionStatus;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

class GetPaymentStatusRequest extends Request
{
    use HasJsonBody;

    protected Method $method = Method::GET;
    protected ?string $connector = PaymentConnector::class;

    public function __construct(private string $orderIdOrTransactionId)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/{$this->orderIdOrTransactionId}/status" ;
    }

    public function createDtoFromResponse(Response $response): object
    {
        // $data = $response->json();
        
        return new TransactionStatus($response->json());
    }
}
