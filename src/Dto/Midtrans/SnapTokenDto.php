<?php

namespace Akm\LaravelPaymentGateway\Dto\Midtrans;

use Spatie\LaravelData\Data;

class SnapTokenDto extends Data
{
    public string $token;
    public string $redirect_url;
}
