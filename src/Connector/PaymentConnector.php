<?php

namespace Akm\LaravelPaymentGateway\Connector;

use Saloon\Http\Auth\BasicAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Traits\Plugins\HasTimeout;

class PaymentConnector extends Connector
{
    use AcceptsJson;
    use HasTimeout;

    public function __construct(private string $serverKey, private bool $isProduction = false) {}

    public function resolveBaseUrl(): string
    {
        if ($this->isProduction) {
            return 'https://api.midtrans.com/v2';
        }

        return 'https://api.sandbox.midtrans.com/v2';
    }

    public function defaultAuth(): BasicAuthenticator
    {
        return new BasicAuthenticator($this->serverKey, '');
    }
}
