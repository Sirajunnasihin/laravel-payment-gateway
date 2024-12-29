<?php

namespace Akm\LaravelPaymentGateway\Connector;

use Saloon\Http\Auth\BasicAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Traits\Plugins\HasTimeout;

class SnapConnector extends Connector
{
    use AcceptsJson;
    use HasTimeout;

    public function __construct(private string $serverKey, private bool $isProduction = false)
    {
    }

    public function resolveBaseUrl(): string
    {
        if ($this->isProduction) {
            return 'https://app.midtrans.com/snap/v1';
        }

        return 'https://app.sandbox.midtrans.com/snap/v1';
    }

    public function defaultAuth(): ?BasicAuthenticator
    {
        return new BasicAuthenticator($this->serverKey, '');
    }
}
