<?php

namespace Akm\LaravelPaymentGateway\Request;

use Akm\Midtrans\Connector\SnapConnector;
use Akm\Midtrans\Dto\SnapTokenDto;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

class CreateSnapTokenRequest extends Request
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    protected ?string $connector = SnapConnector::class;

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/transactions';
    }

    public function defaultData(): array
    {
        return [
            'credit_card' => [
                'secure' => true,
            ],
        ];
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        // $data = $response->json();

        return new SnapTokenDto($response->json());
    }
}
