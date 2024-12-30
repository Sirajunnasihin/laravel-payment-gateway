<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class Gopay extends Data
{
    public bool $enable_callback = true;

    public ?string $callback_url = 'http://gopay.com';
}
