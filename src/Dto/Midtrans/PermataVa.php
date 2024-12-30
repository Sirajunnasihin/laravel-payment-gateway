<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class PermataVa extends Data
{
    public string $va_number;

    public string $recipient_name;
}
